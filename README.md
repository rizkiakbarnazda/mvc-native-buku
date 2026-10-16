# MVC PHP Native - Data Buku (Katalog Perpustakaan)

Aplikasi CRUD sederhana berbasis PHP Native untuk mempelajari pola arsitektur Model-View-Controller (MVC) dan manajemen *version control* menggunakan Git.

## Kebutuhan Sistem
- PHP 8.0 atau versi lebih baru
- MySQL / MariaDB
- Web server lokal Laragon
- Git

## Instalasi dan Konfigurasi (Laragon)
1. Simpan atau salin folder proyek `mvc-native` di dalam direktori `C:\laragon\www\`.
2. Buat database baru di MySQL dengan nama `perpus`, lalu impor skema serta data awal melalui phpMyAdmin atau HeidiSQL bawaan Laragon.
3. Sesuaikan konfigurasi koneksi basis data pada file `config/database.php` dengan *username* (`root`) dan *password* lokal Laragon (`12345`).
4. Buka *browser* dan akses aplikasi melalui *entry point*: `http://localhost/mvc-native/public/index.php`.

## Struktur MVC
- `app/models/` : Menangani akses dan operasi *query* data buku.
- `app/controllers/` : Mengatur alur logika permintaan, validasi, dan *flash message*.
- `app/views/` : Menyajikan antarmuka pengguna berbasis HTML dengan proteksi XSS.
- `config/` : Berisi konfigurasi koneksi basis data menggunakan PDO.
- `public/` : Berperan sebagai *entry point* sekaligus *router* aplikasi.

## Fitur Utama
- Menampilkan data katalog buku (*Read*)
- Menambahkan data buku baru (*Create* dengan validasi input)
- Mengubah data buku (*Update*)
- Menghapus data buku (*Delete*)

## Histori Git
Gunakan perintah `git log --oneline --graph --decorate` di terminal untuk melihat tahapan perkembangan *commit* secara sistematis dan terstruktur.