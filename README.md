
# Installasi Project Balinologi v.1

A brief description of what this project does and who it's for


## Kebutuhan
Pastikan komputer Anda memenuhi persyaratan sistem berikut sebelum menginstall Laravel:

- PHP versi 8.2 atau yang lebih baru
- Composer (manajer paket PHP)
- Xampp 
## Clone Repositori
- Buka terminal atau command prompt pada komputer Anda.
- Pilih direktori tempat Anda ingin menyimpan proyek Laravel Anda.
- Jalankan perintah berikut untuk mengkloning repositori Laravel dari GitHub:


```bash
  git clone https://github.com/IGedeMiarta/mapping-bali.git
```
- Tunggu hingga proses cloning selesai. Setelah selesai, Anda akan memiliki salinan repositori Laravel di direktori yang Anda pilih.


## Install & Update Dependensi

- Buka terminal atau command prompt dan masuk ke direktori proyek Laravel yang baru saja Anda klone.
- Jalankan perintah berikut untuk menginstal dependensi yang diperlukan oleh Laravel menggunakan Composer:

```bash
  composer install
```

- Tunggu hingga Composer mengunduh dan menginstal semua dependensi yang diperlukan oleh Laravel.
- Salin dan ubah file `.env.example` menjadi `.env`:
- Genarate `APP_KEY` dengan mengunakan terminal
```bash
php artisan key:generate
```
## Koneksi  Database
- Buka Xampp dan masuk ke `php_myadmin`. buat database baru dengan nama maps.
- Edit file `.env` dan konfigurasikan pengaturan database. Pastikan untuk mengisi `DB_DATABASE` dengan nama database yang baru dibuat, `DB_USERNAME` dengan username biasaya `root`, dan `DB_PASSWORD` dengan detail koneksi database yang sesuai.
- Jalankan Migrasi dan Seeder Database
```bash
  php artisan migrate --seed
```

## Menjalankan Aplikasi Laravel
- Jalankan perintah berikut untuk menjalankan server pengembangan Laravel:
```bash
php artisan serve
```
- Buka browser dan akses `http://localhost:8000` atau alamat URL yang ditampilkan pada output perintah di atas.
- Aplikasi Laravel sekarang harus berjalan di server pengembangan dan dapat diakses melalui browser.
