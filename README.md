# KeepBook DummyWebSite
## Pengantar
Sebuah situs fiktif peminjaman buku secara online.
Dibuat dan dijalankan untuk pembelajaran menggunakan [Laravel 8][1]

## Instalasi Singkat
Berikut adalah beberapa langkah singkat yang bisa dilakukan untuk menjalankan web ini di localhost Anda.
1. Persiapkan tools berikut sebelum melakukan instalasi
    - [PHP][2] >= 7.3
    - [Composer][5]
2. Clone repository ini dengan command berikut di GIT console:
            
        git clone git@github.com:Terima/webkeepbook.git webkeepbook

2. Buatlah database local dengan nama `keepbook`
3. Buat file `.env` dari file `.env.example` dan sesuaikan dengan pengaturan database Anda
4. Instal dependencies yang diperlukan PHP dengan menggunakan [Composer][5]. Jalankan command berikut:

        composer install
        
5. Buat app key baru dengan command:

        php artisan key:generate
        
6. Persiapkan database yang akan digunakan dengan command:

        php artisan migrate

7. Jalankan web menggunakan web server atau dengan command:

        php artisan serve

[1]: https://laravel.com "Laravel"
[2]: https://www.php.net "PHP"
[3]: https://getbootstrap.com "Bootstrap"
[4]: https://designrevision.com/docs/shards/ "Shard"
[5]: https://getcomposer.org "Composer"
