## Milestone backend mwnggunakan laravel 8 dan JWT

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

-   `POSTS` http://localhost:8000/api/register
    -   | Body : `key` `(name, email, password, password_confirmation)`, `vale` `(nana, nana@gmail.com, password123, password123)`.
