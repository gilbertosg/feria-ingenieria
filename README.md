# Proyectos Feria de Ingeniería

![Feria Ingenieria Tec](https://raw.githubusercontent.com/gilbertosg/feria-ingenieria/master/public/img/feriaTec.png)


## Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

## Server Requirements

The Laravel framework has a few system requirements:

- PHP >= 5.6.4
- PHP Extensions: mcrypt, openssl, mbstring, tokenizer, xml, curl, mysql
- Composer

## Installing Laravel

Install Composer:

Laravel utilizes [Composer](http://getcomposer.org/download) to manage its dependencies. Download it and move
 `composer.phar` to `usr/local/bin`, so it can be used globally on your system.
```
sudo mv composer.phar /usr/local/bin/composer 
```

Install Project:

After cloning the project, Laravel will not have the `vendor/` folder, neither the `.env` file, 
so you need to install all composer dependencies and cp the example of `.env` file.
```
$ cp .env.example .env
$ composer install
```

## Running Project Locally
 
To run it:
```
$ php artisan serve
```