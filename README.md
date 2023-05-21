<p align="center"><a href="#" target="_blank"><img src="https://i.ytimg.com/vi/owCNmPV06iY/maxresdefault.jpg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href=""><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href=""><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href=""><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About AMS for HNDIT (Assignment Management System)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/8.x/installation#installation)

Clone the repository

    git clone https://github.com/pasindu-dil/hndit-ams.git

Switch to the repo folder

    cd hndit-ams

Install all the dependencies using composer

    composer install

Install NPM Dependencies

    npm install

Copy the example env file and make the required configuration changes in the .env file

    copy .env.example .env

Configure the database connection

Next, open the .env file located at the root of your Laravel project and update the DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD variables to match your MySQL database configuration. Here is an example configuration:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=1521
    DB_DATABASE=ams
    DB_USERNAME=root
    DB_PASSWORD=pass

Generate a new application key

    php artisan key:generate

after run command
    php artisan storage:link

**_Note_** : After install passport the Client secret and id of Password Grant Client is copy and paste in to MIX_CLIENT_SECRET and MIX_CLIENT_ID in .env.

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

**Make sure you set the correct database connection information before running the migrations**

**_Note_** : If you use old database, run `<b>`old-db-changes.sql`</b>` file in your database.
`<b>`Do not use  "php artisan migrate" command. `</b>`

**_Note_** : It's recommended to have a clean database before seeding. You can refresh your migrations at any point to clean the database by running the following command

    php artisan migrate:refresh

Run the database seeder and you're done

    php artisan db:seed

Run command

    php artisan passport:keys
    php artisan passport:install

**_Note_** : After add product logo and favicon in `public/images` directory as `product-logo.png`, `product-favicon.png` and update `.env` file `MIX_MYLINEX_LOGO` as `MIX_MYLINEX_LOGO="images/product-logo.png"`, `PRODUCT_FAVICON` as `PRODUCT_FAVICON="images/product-favicon.png"` and update `MIX_AUTO_LOGOUT_TIMER=900`, `MIX_SYSTEM_ALERT_REFRESH_TIMER=60000`, `APP_TYPE=ALL` and `MIX_APP_TYPE=ALL`

**_Note_** : Run these commands

    php artisan route:cache
    php artisan route:clear

    php artisan config:cache
    php artisan config:clear

## Learning AMS

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
