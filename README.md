<p align="center"><a href="javascript:void(0);" target="_blank"><img src="https://i.ibb.co/vwWXbPq/fd6cbedb32c046e3b3e505080182ba67.png" width="100"></a></p>

<p align="center">
<img src="https://img.shields.io/github/issues/aziyan99/simple-support-ticket-system">
<img src="https://img.shields.io/github/stars/aziyan99/simple-support-ticket-system">
</p>

## Simple Support Ticket System

## Installation
copy `.env-example` file and update the database credentials section according to yours.

First install the depedencies using composer
```
    composer install
```
next, generate the key
```
    php artisan key:generate
```
next, running the migration and seeder
```
    php artisan migrate:fresh --seed
```

Default login credentials:
```
admin: admin@example.com
password: password
``

## Depedencies
1. Laravel 8.X
2. Trix Editor

## License
The Project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
