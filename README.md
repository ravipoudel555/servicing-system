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
