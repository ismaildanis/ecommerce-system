import Image from "next/image"
import { Product } from "@/types/seller/product"
import { useParams, useRouter } from "next/navigation"

interface VariantSummary {
    id: number
    slug: string
    thumbnail: string | null
  }

const resolveThumbnail = (thumbnail: string | null | undefined): string | null => {
  const src = thumbnail?.trim()
  return src ? src : null
}
  
  interface ProductVariantsProps {
    product: Product
    variants: VariantSummary[]
  }
  
  export default function ProductVariants({ product, variants }: ProductVariantsProps) {
    const router = useRouter()
    const params = useParams()  
    const handleVariantClick = (slug: string) => {
        router.push(`/product/${slug}`)
    }
    return (
      <div className="product-variants">
        <h2 className="text-md text-black mb-3 font-semibold font-sans">
          {product.variants[0]?.color_name ?? "Renk seçenekleri"}
        </h2>
  
        <div className="grid grid-cols-3 sm:grid-cols-4 lg:grid-cols-6 gap-3">
          {variants.map((variant) => {
            const thumbnail = resolveThumbnail(variant.thumbnail)
            const matchingVariant = product.variants.find((v) => v.id === variant.id)

            return (
              <button
                key={variant.id}
                onClick={() => handleVariantClick(variant.slug)}
                className={`rounded-md p-1 flex items-center justify-center cursor-pointer transition border-2 border-gray-200
                  ${params.slug === variant.slug ? "border-blue-500 ring-2 ring-black" : "hover:border-gray-400"}`}
              >
                {thumbnail ? (
                  <Image
                    src={thumbnail}
                    alt={matchingVariant?.color_name ?? variant.slug}
                    width={64}
                    height={64}
                    unoptimized
                    className="object-contain w-16 h-16"
                  />
                ) : (
                  <div
                    className="flex h-16 w-16 items-center justify-center rounded bg-gray-100 text-[10px] font-medium text-gray-500"
                    style={
                      matchingVariant?.color_code
                        ? { backgroundColor: matchingVariant.color_code }
                        : undefined
                    }
                    title={matchingVariant?.color_name ?? variant.slug}
                  >
                    {matchingVariant?.color_name?.slice(0, 2).toUpperCase() ?? "—"}
                  </div>
                )}
              </button>
            )
          })}
        </div>
      </div>
    )
  }
  
