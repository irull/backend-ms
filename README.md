## Milestone backend menggunakan laravel 8 dan JWT

Laravel akan dijadikan sebagai restAPI yang nantinya akan dihubungkan dengan react js dibagian frontend nya.

Untuk plugin yang dipakai sbb:

-   JWT Token
-
-   -OnGoing

## Proses

-   Menghubungkan ke Mysql dengan `php artisan migrate`
-   MEnginstall JWT Token
-   Konfigurasi JWT Token
-   Membuat controller register (_Singgle Action Controller_) dimana sebuah _class controller_ hanya menjalankan satu _action_ saja. `php artisan make:controller Api/RegisterController -i` _(`-i`_ atau _invoke_ yg artinya _singgle action)_ dan terdapat di folder _Http, Controllers, Api, RegisterController.php_
-   Menambahkan `Route Api` `Register, Login, Logout, User`
-   Menambahkan Controller Login `LoginController.php`
-   Menambahkan Controller Logout `LogoutController.php`
-   Menambahkan Controller Register `RegisterController.php`
-   Membuat `Models` User
-   Menambahkan `function getJWTIdentifier()` pada `Models` User

## Testing API mwnggunakan Postman

-   `POST` `http://localhost:8000/api/register`
    -   Body : `KEY` `(name, email, password, password_confirmation)`, `VALUE` `(nana, nana@gmail.com, password123, password123)`.
-   `POST` `http://localhost:8000/api/login`
    -   Body : `KEY` `email, password`, `VALUE` `(nana@gmail.com, password123)`.
-   `GET` `http://localhost:8000/api/user`
-   Header: `KEY` : `Accept, Content-Type, Authorization`, `VALUE` : `Application/json, application/json, Bearer <spasi> {isi token}`.
    `POST` `http://localhost:8000/api/logout`
-   Header: `KEY` : `Accept, Content-Type, Authorization`, `VALUE` : `Application/json, application/json, Bearer <spasi> {isi token}`.
