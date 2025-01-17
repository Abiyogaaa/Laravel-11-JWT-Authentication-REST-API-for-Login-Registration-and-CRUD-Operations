Deskripsi
🚀 Laravel 11 JWT REST API menyediakan implementasi lengkap untuk autentikasi berbasis token menggunakan JWT (JSON Web Token). Proyek ini mencakup fitur:

Login dan Registrasi Pengguna dengan validasi.
CRUD Operations untuk mengelola data dengan aman.
Middleware JWT untuk melindungi endpoint API.
Struktur yang modular dan siap digunakan untuk proyek skala kecil hingga besar.
Fitur Utama
Autentikasi JWT:
Login dan registrasi pengguna.
Token validasi, pembaruan, dan invalidasi.
CRUD Operations:
Contoh CRUD untuk entitas (misalnya, artikel, produk, atau pengguna).
Keamanan API:
Endpoint dilindungi dengan middleware JWT.
Respons JSON Terstruktur:
Standar respons untuk kesuksesan dan kegagalan API.
Teknologi yang Digunakan
Laravel 11: Framework PHP modern dan tangguh.
JWT (tymon/jwt-auth): Untuk autentikasi berbasis token.
MySQL / PostgreSQL: Basis data untuk menyimpan data pengguna dan lainnya.
Postman: Untuk pengujian endpoint API.
Cara Menggunakan
Clone repository ini:

git clone https://github.com/username/repo-name.git
Instal dependensi:

composer install
Salin .env.example ke .env dan sesuaikan konfigurasi database Anda.
Jalankan migrasi untuk membuat tabel:

php artisan migrate
Generate key JWT:

php artisan jwt:secret
Jalankan server lokal:

php artisan serve
Endpoint API
POST /api/register: Registrasi pengguna baru.
POST /api/login: Login pengguna untuk mendapatkan token.
POST /api/logout: Logout pengguna dan invalidasi token.
GET /api/resource: Contoh endpoint CRUD (dilindungi JWT).
Kontribusi
Kontribusi terbuka! Jika Anda menemukan masalah atau memiliki ide fitur baru, silakan buat issue atau kirim pull request.
