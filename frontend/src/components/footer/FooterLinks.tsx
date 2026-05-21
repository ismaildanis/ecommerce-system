import Link from "next/link";

export default function FooterLinks() {
  return (
    <div className="text-center sm:text-left">
      <h3 className="font-semibold mb-3 text-lg text-black">Keşfet</h3>
      <ul className="space-y-2">
        <li>
          <Link href="/" className="hover:text-gray-400 block">
            Ana Sayfa
          </Link>
        </li>
        <li>
          <Link href="/about" className="hover:text-gray-400 block">
            Hakkımızda
          </Link>
        </li>
        <li>
          <Link href="/products" className="hover:text-gray-400 block">
            Ürünler
          </Link>
        </li>
        <li>
          <Link href="/contact" className="hover:text-gray-400 block">
            İletişim
          </Link>
        </li>
      </ul>
    </div>
  );
}
