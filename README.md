<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

## Requirements

This package uses Laravel Framework 8.80.0. For more detailed requirements list, please address the [Laravel Documentation](https://laravel.com/docs/8.x/installation).


### Installation
Once you're sure you've met the requirements, proceed to the installation:

1. Clone the repo using:
    ```
    git clone %repository%
    ``` 

2. Move to project directory:
    ```
    cd %folder%
    ``` 

3. Run composer install:
    ```
    composer install
    ``` 
4. Install assets dependencies:
    ```
    npm install
    ``` 
5. Compile assets:
    ```
    npm run dev
    ``` 
   
### Configuration
1. Copy environment file:
    ```
    cp .env.example .env
    ``` 
   
2. Generate app key:
   ```
    php artisan key:generate
   ```
    
3. Setup app configuration:
    ```
    APP_NAME=Laravel
    APP_ENV=local
    APP_KEY=$YOUR_GENERATED_APP_KEY$
    APP_DEBUG=true
    APP_URL=http://localhost.test
    ``` 
   
4. Setup database configuration:
    ```
    DB_CONNECTION=mysql
    DB_HOST=$YOUR_DB_HOST$
    DB_PORT=$YOUR_DB_PORT$
    DB_DATABASE=$YOUR_DB_NAME$
    DB_USERNAME=$YOUR_DB_USER$
    DB_PASSWORD=$YOUR_DB_PASS$
   ``` 


### Usage

1. Run the migrations:
   ```
   php artisan migrate
   ```
   
   This command will create tables and seed the candidates table.
   
2. Run the crawl command: 
   ```
   php artisan crawl:vacancies
   ```
   
3. Visit the vacancies page:
    ```
    http://localhost.test/vacancies
    ```

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
