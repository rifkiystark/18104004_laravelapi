# LaravelRESTAPI

Ananda Rifkiy Hasan - 18104004

## Instalasi

1.  Clone repository ini
2.  Buka cmd/terminal pada folder yang telah di clone lalu jalankan perntah berikut

         composer install

3.  Lalu migrate database dengan menjalankan perintah

         php artisan migrate

4.  Gunakanlah seeder untuk data dummy awalan, jalankan perintah berikut

    php artisan db:seed --class=MahasiswaSeeder

5.  Terakhir jalankan server dengen menggunaan perintah

         php artisan serve

## Cara Penggunaan

- Daftar endpoint api

| Method | Endpoint     | Parameter                     |
| ------ | ------------ | ----------------------------- |
| get    | /person      | none                          |
| post   | /person      | body(nik, nama, alamat, umur) |
| put    | /person/{id} | body(nik, nama, alamat, umur) |
| delete | /person      | none                          |

**_Get Person_**
Buka postman, lalu masukkan url untuk get person yaitu `http://127.0.0.1:8000/api/person` ubah method menjadi get lalu klik **Send**.

**_Insert Person_**
Buka postman, lalu masukkan url untuk insert person yaitu `http://127.0.0.1:8000/api/person` ubah method menjadi post lalu untuk body pilih `x-www-form-urlencode`. Untuk body value sendiri diisi dengan nik, nama, alamat, dan umur. Setelah itu klik **Send**.

**_Update Person_**
Buka postman, lalu masukkan url untuk update person yaitu `http://127.0.0.1:8000/api/person/{id}` ubah method menjadi put lalu untuk body pilih `x-www-form-urlencode`. Untuk body value sendiri diisi dengan nik, nama, alamat, dan umur. Isikan parameter id pada url dengan id person yang akan diubah. Setelah itu klik **Send**.

**_Delete Person_**
Buka postman, lalu masukkan url untuk update person yaitu `http://127.0.0.1:8000/api/person/{id}` ubah method menjadi delete . Isikan parameter id pada url dengan id person yang akan dihapus. Setelah itu klik **Send**.
