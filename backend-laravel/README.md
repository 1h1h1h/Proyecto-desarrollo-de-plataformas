## Al clonar
    composer install

## Iniciar el servicio

    php artisan serve

## Crear proyecto y acceder 
    composer create-project laravel/laravel backend-laravel
    cd backend-laravel

## crear modelos, controlador y migracion (en caso de ser necesaria la migracion)
    php artisan make:model Cliente -mcr
    php artisan make:model Inventario -mcr
    php artisan make:model Venta -mcr

## Para correr migraciones
    php artisan migrate

## Endponit base
http://127.0.0.1:8000/api/

