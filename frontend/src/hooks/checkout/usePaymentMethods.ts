import { useMutation, useQueryClient } from "@tanstack/react-query"

import { checkoutApi } from "@/lib/api/checkoutApi"
import { bagKeys } from "@/hooks/useBagQuery"
import { OrderKeys } from "@/hooks/useOrderQuery"
import type {
  CreatePaymentIntentRequest,
  CreatePaymentIntentResponse,
} from "@/types/checkout"

type PaymentIntentApiError = {
  errors?: Record<string, string[]>
}

export const createPaymentIntentKeys = {
  all: ["create-payment-intent"] as const,
  get: (sessionId: string) => [...createPaymentIntentKeys.all, "get", sessionId] as const,
}

const emptyBag = {
  products: [],
  totals: {
    total_cents: 0,
    cargo_cents: 0,
    discount_cents: 0,
    final_cents: 0,
  },
  applied_campaign: null,
  campaigns: [],
}

export const useCreatePaymentIntent = (userId?: number) => {
  const queryClient = useQueryClient()

  return useMutation<
    CreatePaymentIntentResponse,
    PaymentIntentApiError,
    CreatePaymentIntentRequest
  >({
    mutationFn: async (data) => {
      const response = await checkoutApi.createPaymentIntent(data)
      return response.data
    },
    onSuccess: (data) => {
      queryClient.setQueryData(createPaymentIntentKeys.get(data.session_id), data)

      queryClient.setQueryData(bagKeys.index(userId), emptyBag)
      queryClient.removeQueries({ queryKey: bagKeys.detail as any })

      queryClient.invalidateQueries({ queryKey: bagKeys.all })
      queryClient.invalidateQueries({ queryKey: OrderKeys.all })
    },
  })
}