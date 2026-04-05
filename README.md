# Lara23 - Aplicación E-commerce

Aplicación web de gestión de productos y categorías construida con Laravel 12. Incluye autenticación de usuarios, panel de control y base de datos relacional para administrar un catálogo de productos.

## Tecnologías

- **Backend:** PHP 8.2, Laravel 12, MySQL
- **Frontend:** Blade, Tailwind CSS, Vite, JavaScript
- **Testing:** Pest, Faker, Mockery
- **DevOps:** Docker, Laravel Sail

## Stack Completo

PHP 8.2+ | Laravel 12 | MySQL | Composer | Node.js | Vite | Tailwind CSS | Blade | Docker | Pest

## Estructura Base

- `app/Models/` - Modelos: User, Product, Category
- `app/Http/Controllers/` - Controladores
- `database/migrations/` - Esquema: users, categories, products
- `routes/web.php` - Rutas principales
- `resources/views/` - Plantillas Blade

## Funcionalidades

- Autenticación y registro de usuarios
- Gestión de perfil
- Dashboard privado
- Base de datos con modelos relacionados
- Sistema de categorías y productos

## Ejecutar

```bash
./vendor/bin/sail up -d
./vendor/bin/sail artisan migrate
./vendor/bin/sail npm run dev
```

Acceder: http://localhost
