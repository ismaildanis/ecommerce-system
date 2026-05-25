# myOrders - Modern E-Ticaret Platformu

## Genel Bakış
myOrders, modern yazılım mühendisliği pratiklerini gösteren, frontend ve backend'i birbirinden tamamen ayrılmış (decoupled) full-stack bir e-ticaret uygulamasıdır. Backend tarafında Laravel 12, frontend tarafında ise Next.js 15 kullanılarak inşa edilen bu proje, basit CRUD işlemlerinden ziyade ölçeklenebilir bir mimariye odaklanır. Domain ayrımı için Service-Repository kalıbını uygular, yüksek performanslı ürün filtreleme için Elasticsearch kullanır ve asenkron arka plan işlemleri için RabbitMQ'dan faydalanır.

## Temel Özellikler

**Domain Özellikleri:**
- **Ürün ve Kampanya Yönetimi:** Gelişmiş ürün varyantları, kategoriler ve dinamik kampanya/indirim sistemi.
- **Sepet ve Checkout (Ödeme Adımı):** Stok doğrulaması ile güvenilir sepet yönetimi ve güvenli ödeme (checkout) oturum akışı.
- **Ödeme Entegrasyonu:** Soyutlanmış (abstracted) ödeme sağlayıcı mimarisi, halihazırda Iyzico ile entegre.
- **Stok Takibi:** Stok hareket logları ve custom exception'lar (`InsufficientStockException`) kullanılarak güvenli envanter yönetimi.
- **Kullanıcı Rolleri:** Satıcılar (Sellers) ve Müşteriler (Customers) için ayrıştırılmış iş mantığı.

**Teknik Özellikler:**
- **Katmanlı Mimari (Layered Architecture):** Controller, Service ve Repository'lerin kullanımıyla sorumlulukların net bir şekilde ayrıştırılması (separation of concerns).
- **Asenkron İşleme:** Bildirim gönderimi ve sipariş oluşturma süreçlerine adanmış RabbitMQ queue worker'ları.
- **Gelişmiş Arama:** Hızlı ve ölçeklenebilir ürün sorguları ve filtreleme işlemleri için Elasticsearch entegrasyonu.
- **Docker Ortamı:** Nginx, PHP-FPM, Workspace, ayrı queue worker'lar, Redis ve Elasticsearch'ü barındıran sağlam bir konteyner yapısı.
- **CI/CD:** GitHub Actions üzerinden yapılandırılmış otomatik test ve entegrasyon pipeline'ı.

## Teknoloji Yığını

| Katman | Teknoloji |
| --- | --- |
| **Backend** | Laravel 12.0 (PHP 8.2) |
| **Frontend** | Next.js 15, React 19, Tailwind CSS 4, Zustand, React Query |
| **Veritabanı** | PostgreSQL 17 |
| **Arama Motoru** | Elasticsearch 8.11 |
| **Message Broker** | RabbitMQ |
| **Önbellek (Cache)** | Redis |
| **Ödeme Sağlayıcı** | Iyzico |
| **API Dökümantasyonu**| Scribe |
| **DevOps** | Docker, Docker Compose, GitHub Actions |

## Mimari

Backend kod tabanı, sürdürülebilirlik ve test edilebilirlik gözetilerek yapılandırılmıştır:
- **Service Katmanı:** İş mantığı domain spesifik servislere (`ProductService`, `CheckoutSessionService`, `MainService`, vb.) taşınmış olup, Controller'lar olabildiğince ince tutulmuştur.
- **Repository Kalıbı:** Veritabanı işlemleri Eloquent Repository'leri (`CategoryRepository`, `OrderRepository`) aracılığıyla soyutlanarak, veri kaynaklarının kolayca değiştirilebilmesi ve mock'lanabilmesi sağlanmıştır.
- **Queue Workers:** Elasticsearch indeksleme (`IndexProductToElasticsearch`), e-posta bildirimleri (`SendOrderNotification`) ve siparişin sonuçlandırılması gibi ağır operasyonlar RabbitMQ'ya iletilir ve izole Docker worker konteynerleri (`queue-notifications`, `queue-orders`) tarafından işlenir.
- **Ödeme Sağlayıcı Soyutlaması:** Ödeme işlemleri, ana uygulamanın iş mantığını değiştirmeden gateway'ler arasında geçiş yapabilmesine olanak tanıyan sözleşme tabanlı (contract-based) bir mimari üzerinden yürütülür.

## Temel İş Akışları

- **Authentication (Kimlik Doğrulama) Akışı:** Güvenli, token tabanlı API kimlik doğrulaması için Laravel Sanctum üzerinden yönetilir.
- **Arama ve Filtreleme Akışı:** PostgreSQL üzerinde ağır `LIKE` sorguları çalıştırmak yerine, `ElasticSearchProductService` üzerinden ürün filtrelemeleri, facet (gruplama) hesaplamaları yapılır ve sayfalama yapılmış arama sonuçları doğrudan Elasticsearch'ten döndürülür.
- **Checkout Akışı:** `CheckoutSessionService` kullanan çok adımlı bir süreçtir. Oturumu kilitler, stoğu doğrular, envanteri rezerve eder ve ödeme sürecini işletir.
- **Ödeme Akışı:** Iyzico ile entegredir. Sepeti doğrular, gateway'e gerekli payload'u gönderir ve `PaymentMethodRecorder` ile `OrderPlacementJob` aracılığıyla dönen callback isteğini asenkron olarak işler.

## Veritabanı ve Veri Tutarlılığı Notları
- **Stok Güvenliği:** Gerçek zamanlı stok doğrulaması, kapasiteden fazla satış yapılmasını (overselling) engeller. Eğer ödeme adımında stok seviyesi düşerse, bir `InsufficientStockException` fırlatılarak transaction temiz bir şekilde durdurulur.
- **Veri Bütünlüğü:** PostgreSQL ilişkisel bütünlüğü (relational integrity) zorunlu kılınmıştır ve envanter değişikliklerinin denetim kaydını (audit trail) tutmak amacıyla stok eylemleri bir `StockMovement` modeli üzerinden kaydedilir.

## API Dökümantasyonu
API dökümantasyonu **Scribe** kullanılarak oluşturulmaktadır. Proje çalıştırıldıktan sonra, güncel endpoint listesini, beklenen request payload'larını ve response standartlarını oluşturabilir ve görüntüleyebilirsiniz.

## Docker Kurulumu ve Çevre Değişkenleri (Environment Variables)

Proje, gerekli tüm servisleri ayağa kaldıran kapsamlı bir `docker-compose.yaml` dosyası içerir.

Çalıştırmadan önce çevre değişkenlerini yapılandırmanız gerekmektedir:
1. Backend dizinindeki örnek dosyayı kopyalayın:
   ```bash
   cp backend/.env.example backend/.env
   ```
2. Gerekli DB, Redis, RabbitMQ ve Elasticsearch kimlik bilgilerinin `.env` dosyasında doğru şekilde ayarlandığından emin olun.

## Projeyi Lokal Olarak Çalıştırma

1. **Repository'yi klonlayın:**
   ```bash
   git clone <repository-url>
   cd myOrders
   ```

2. **Docker Konteynerlerini Başlatın:**
   ```bash
   docker-compose up -d
   ```

3. **Backend Bağımlılıklarını Yükleyin & Veritabanını Kurun:**
   ```bash
   docker-compose exec workspace composer install
   docker-compose exec workspace php artisan key:generate
   docker-compose exec workspace php artisan migrate --seed
   ```

4. **Frontend Bağımlılıklarını Yükleyin:**
   ```bash
   docker-compose exec nextjs-app npm install
   docker-compose exec nextjs-app npm run dev
   ```
   *Frontend `http://localhost:3000` adresinde, API ise `http://localhost:8000` adresinde erişilebilir olacaktır.*

## Testler

Proje, Checkout Akışı (`CheckoutSessionFeatureTest`, `CheckoutConfirmOrderTest`) gibi kritik domain yollarını özellikle hedef alan Feature testleri içerir.

Testleri çalıştırmak için:
```bash
docker-compose exec workspace php artisan test
```

## Bilinen Kısıtlamalar ve Planlanan Geliştirmeler
- **Test Kapsamı:** Şu anda feature testleri temel olarak checkout akışına odaklanmaktadır. Arama, kampanya ve satıcı (seller) modüllerini kapsayacak şekilde test suite'inin genişletilmesi gerekmektedir.
- **API Rate Limiting:** Dışa açık endpoint'lerde brute-force veya kötüye kullanımı engellemek için özelleştirilmiş rate limiter'lar eksiktir.
- **Idempotency:** Ağ sorunlarından kaynaklanan tekrar (retry) durumlarında aynı siparişin birden fazla kez oluşturulmasını (duplicate orders) kesin olarak engellemek için ödeme webhook'ları ve callback'lerinin daha sıkı idempotency anahtarlarına ihtiyacı vardır.
- **Gözlemlenebilirlik (Observability):** Merkezi loglama ve hata takip araçları (Sentry veya Telescope gibi) henüz projeye entegre edilmemiştir.

## Öne Çıkan Teknik Başarılar
- **Katmanlı Mimari:** Service ve Repository kalıplarını uygulayarak iş mantığını Controller'ların dışına taşır.
- **Asenkron İşleme:** Bloklayıcı olmayan (non-blocking) operasyonları (e-postalar, siparişin kaydedilmesi) işlemek için RabbitMQ kullanır.
- **Arama Optimizasyonu:** Daha iyi performans için ürün sorgularını PostgreSQL'den Elasticsearch'e yükler (offloads).
- **Domain İçi Hata Yönetimi:** Controller'ları kalabalıklaştırmadan iş kuralları (business logic) ihlallerini temiz bir şekilde ele almak için custom exception'lar (ör. `InsufficientStockException`) kullanılır.
- **Kod Olarak Altyapı (IaC):** PHP-FPM, Workspace, Nginx, Next.js ve arka plan queue worker'larını kapsayan tam yapılandırılmış Docker Compose kurulumu barındırır.
