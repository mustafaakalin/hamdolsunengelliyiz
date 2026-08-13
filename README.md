<p align="center"><img src="https://hamdolsunengelliyiz.org/logo.svg" width="200" alt="Hamdolsun Engelliyiz"></p>

# Hamdolsun Engelliyiz

Engelli bireylerin başarı hikâyelerini paylaşan açık kaynak web uygulaması. Laravel 13 + Filament 5 ile geliştirilmiştir.

## Özellikler

-   Başarı hikâyeleri: ortopedik, omurilik, görme, işitme ve spastik bireyler için ayrı bölümler
-   `benioku/{slug}` sayfası ile aynı kişinin tüm kayıtlarını tek sayfada listeleme
-   Filament 5 yönetim paneli (RBAC: `admin` ve `user` rolleri, spatie/laravel-permission)
-   İçerik politikaları: içerik sahibi kendi kayıtlarını yönetebilir, admin hepsini
-   Laravel 13 (bootstrap/app.php) + PHP 8.3/8.4, MySQL 8.4, Mailpit
-   Podman/Docker Compose ile tek komutta ayağa kalkma

## Gereksinimler

-   Docker Compose veya Podman (podman-compose) 1.6+

## Kurulum (Podman)

```bash
cp .env.example .env
podman compose build
podman compose up -d
podman compose exec app php artisan migrate --seed --force
```

-   Uygulama: <http://localhost:8080>
-   Yönetim paneli: <http://localhost:8080/admin>
-   Mailpit: <http://localhost:8025>

Seed sonrası kullanıcılar:

| E-posta | Şifre | Rol |
| --- | --- | --- |
| `admin@example.com` | `password` | admin |
| `user@example.com` | `password` | user |

## Testler

```bash
podman compose exec app php artisan test
```

Testler SQLite in-memory veritabanı ile çalışır (harici veritabanı gerekmez).

## Kullanılan Paketler

-   [filament/filament](https://filamentphp.com/docs) — yönetim paneli
-   [spatie/laravel-permission](https://spatie.be/docs/laravel-permission/) — roller ve izinler
-   [laravel/livewire](https://livewire.laravel.com) — canlı bileşenler

## Lisans

MIT — [LICENSE](LICENSE) dosyasına bakınız.
