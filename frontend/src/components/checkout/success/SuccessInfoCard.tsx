"use client"
import type { Address, BillingData, PaymentData, ShippingData } from "@/types/checkout"

interface SuccessInfoCardProps {
  shipping?: ShippingData | null
  billing?: BillingData | null
  payment?: PaymentData | null
}

const labelStyles = "text-[10px] sm:text-xs font-medium uppercase tracking-[0.2em] text-muted-foreground"
const valueStyles = "text-sm sm:text-base font-semibold break-words"

function AddressPreview({ address }: { address?: Address }) {
  if (!address) return <p className="text-sm text-muted-foreground">-</p>
  return (
    <div className="space-y-0.5">
      <p className="text-sm font-semibold">{address.first_name} {address.last_name}</p>
      <p className="text-xs text-muted-foreground break-words">{address.address_line_1}</p>
      {address.address_line_2 && <p className="text-xs text-muted-foreground">{address.address_line_2}</p>}
      <p className="text-xs text-muted-foreground">{address.city} / {address.district}</p>
      <p className="text-xs text-muted-foreground">{address.phone}</p>
    </div>
  )
}

export function SuccessInfoCard({ shipping, billing, payment }: SuccessInfoCardProps) {
  return (
    <div className="space-y-4 rounded-2xl border border-color bg-card p-4 sm:p-6 shadow-sm">
      <div>
        <p className={labelStyles}>Teslimat</p>
        <p className={valueStyles}>{shipping?.delivery_method == "standard" ? "Standart Kargo" : "Belirtilmedi"}</p>
        {shipping?.notes && <p className="mt-1 text-xs text-muted-foreground break-words">Not: {shipping.notes}</p>}
      </div>

      <div className="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6 rounded-xl border border-dashed border-color bg-background px-3 sm:px-4 py-3">
        <div>
          <p className={labelStyles}>Teslimat Adresi</p>
          <AddressPreview address={shipping?.shipping_address} />
        </div>
        <div>
          <p className={labelStyles}>Fatura Adresi</p>
          <AddressPreview address={billing?.billing_address} />
        </div>
      </div>

      <div>
        <p className={labelStyles}>Ödeme</p>
        <p className={valueStyles}>{payment?.provider == "iyzico" ? "İyzico" : "-"} · {payment?.method == "new_card" ? "Yeni Kart" : "Varolan Kart"}</p>
        <p className="mt-1 text-xs text-muted-foreground">Durum: {payment?.status == "success" ? "Ödendi" : "Ödenmedi"}</p>
      </div>
    </div>
  )
}
