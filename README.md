<p align="center">
  <h1 align="center">EduCare</h1>
  <p align="center"><strong>Belajar Lebih Mudah, Berkembang Lebih Cepat</strong></p>
  <p align="center">Platform Pembelajaran Digital untuk Siswa, Guru, dan Admin</p>
</p>

---

## Tentang EduCare

EduCare adalah platform pembelajaran digital (Learning Management System) yang dirancang untuk membantu siswa belajar secara terstruktur dan interaktif. Platform ini menyediakan materi pembelajaran, kuis interaktif, modul kursus, pelacakan progres, dan sertifikat pencapaian.

## Fitur Utama

### Tiga Peran Pengguna

| Peran | Deskripsi |
|-------|-----------|
| **Admin** | Mengelola pengguna, kategori, materi, kuis, dan sertifikat |
| **Guru** | Membuat/mengedit materi dan kuis, melihat statistik siswa, export CSV |
| **Siswa** | Mengakses materi, mengerjakan kuis, melacak progres, mendapat sertifikat |

### Fitur Lainnya

- **Materi Pembelajaran** - Konten berbasis teks dengan video YouTube (opsional)
- **Kuis Interaktif** - Soal pilihan ganda dengan auto-grading dan nilai lulus/tidak lulus
- **Modul Kursus** - Struktur kursus terorganisir (Kursus > Modul > Bab > Pelajaran)
- **Pelacakan Progres** - Monitoring progres belajar siswa per materi
- **Sertifikat** - Sertifikat digital yang dapat diverifikasi secara publik
- **Sistem Notifikasi** - Notifikasi per pengguna dengan status read/unread
- **Pesan** - Komunikasi antara guru dan siswa
- **Statistik** - Dashboard statistik untuk setiap peran
- **Kalender** - Jadwal aktivitas belajar
- **Dark Mode** - Mode gelap yang dapat diaktifkan
- **Multi Bahasa** - Dukungan Bahasa Indonesia dan English (i18n)

## Teknologi yang Digunakan

| Layer | Teknologi | Versi |
|-------|-----------|-------|
| Backend | PHP | ^8.2 |
| Framework | Laravel | ^12.0 |
| Templating | Blade | - |
| CSS | Tailwind CSS | ^4.0 |
| Build Tool | Vite | ^7.0 |
| Database | SQLite | (default) |
| HTTP Client | Axios | ^1.11 |

## Persyaratan

- PHP ^8.2
- Composer
- Node.js & NPM
- SQLite (atau database lain yang didukung Laravel)

## Instalasi

### 1. Clone Repository

```bash
git clone https://github.com/username/EduCare.git
cd EduCare
```

### 2. Install Dependencies PHP

```bash
composer install
```

### 3. Install Dependencies JavaScript

```bash
npm install
```

### 4. Setup Environment

```bash
cp .env.example .env
php artisan key:generate
```

### 5. Setup Database

```bash
touch database/database.sqlite
php artisan migrate
php artisan db:seed
```

### 6. Build Frontend

```bash
npm run build
```

### 7. Jalankan Server

```bash
php artisan serve
```

Akses aplikasi di: `http://localhost:8000`

## Data Seed

Database seeder akan membuat:

- **8 pengguna**: 1 Admin, 2 Guru, 5 Siswa (password: `password`)
- **2 kategori**: Pendidikan Umum, Pendidikan IT
- **13 materi**: 5 umum + 8 IT
- **6 kuis** dengan 5 soal masing-masing (30 soal total)
- **4 record progres** dan **2 hasil kuis** untuk siswa pertama
- **2 sertifikat** untuk siswa pertama

## Struktur Project

```
EduCare/
├── app/
│   ├── Http/
│   │   ├── Controllers/          # 28 Controllers
│   │   └── Middleware/           # Authenticate, CheckRole
│   ├── Models/                   # 10 Eloquent Models
│   └── Providers/
├── config/                       # Konfigurasi Laravel
├── database/
│   ├── database.sqlite           # Database SQLite
│   ├── migrations/               # 14 migrations
│   └── seeders/                  # DatabaseSeeder
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
│       ├── layouts/              # Layout templates
│       ├── components/           # Reusable components
│       ├── home/                 # Landing page
│       ├── auth/                 # Login, Register
│       ├── dashboard/            # Student dashboard
│       ├── materials/            # Materi pembelajaran
│       ├── modules/              # Kursus & modul
│       ├── quiz/                 # Kuis
│       ├── certificates/         # Sertifikat
│       ├── teacher/              # Panel guru
│       └── admin/                # Panel admin
├── routes/
│   └── web.php                   # Route definitions
└── public/
```

## Akun Demo

| Role | Email | Password |
|------|-------|----------|
| Admin | admin@educare.com | password |
| Guru | guru1@educare.com | password |
| Siswa | siswa1@educare.com | password |

> **Note**: Email akun default mengikuti format dari `DatabaseSeeder`. Jalankan `php artisan db:seed` untuk membuat data demo.

## License

MIT License - Copyright (c) 2026 EduCare
