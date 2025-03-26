## Al clonar
1. composer install

## Iniciar el servicio
1. php artisan serve

## Crear proyecto y acceder 
1. composer create-project laravel/laravel backend-laravel
2. cd backend-laravel

## crear modelos, controlador y migracion (en caso de ser necesaria la migracion)
1. php artisan make:model Cliente -mcr
2. php artisan make:model Inventario -mcr
3. php artisan make:model Venta -mcr

## Para correr migraciones
1. php artisan migrate

## Endponit base
http://127.0.0.1:8000/api/

