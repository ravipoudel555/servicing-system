# Installing Dependencies

-   `composer install`
-   `npm install`

# Some Artisan Commands

## Creating Modules

-   `php artisan make:controller Api/[ControllerName] --api`
-   `php artisan make:factory [ControllerName]Factory`
-   `php artisan make:model [ModelName]`
-   `php artisan make:seeder [SeederName]`
-   `php artisan make:model [ModelName] -m`
-   `php artisan make:model [ModelName] -mc`

## Database

-   `php artisan migrate`
-   `php artisan migrate:refresh`
-   `php artisan migrate:reset`
-   `php artisan migrate:rollback`
-   `php artisan migrate:status`
-   `php artisan migrate:install`
-   `php artisan migrate:refresh --seed`

## Seeding

-   `php artisan db:seed`
-   `php artisan db:seed --class=[SeederName]`

### Missing api.php file?

The [api.php] route file is no longer present by default

Ref: https://laravel.com/docs/11.x/releases#opt-in-routing

Create the [api.php] file:

-   `php artisan install:api`

## Clear Config, Cache & Refresh Autoload in Laravel

-   `php artisan config:clear`
-   `php artisan cache:clear`
-   `composer dump-autoload`

## Generating Key

This command creates a secure random key and puts it in your [.env]
APP_KEY is a 32-character base64-encoded string used by Laravel for:

-   Encryption (e.g., encrypted cookies, user data)
-   Hashing
-   Session security

-   `php artisan key:generate`

## Running the Docker

-   `docker-compose -f docker-compose.local.yaml up --build -d`

## Opening Bash/Shell in Docker

-   `docker-compose -f docker-compose.local.yaml exec app bash`
