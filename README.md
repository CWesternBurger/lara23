# Lara23 - Aplicación E-commerce

Aplicación web de gestión de productos y categorías construida con Laravel 12. Incluye autenticación de usuarios, panel de control y base de datos relacional para administrar un catálogo de productos.

## Tecnologías

- **Backend:** PHP 8.2, Laravel 12, MySQL
- **Frontend:** Blade, Tailwind CSS, Vite, JavaScript
- **Testing:** Pest, Faker, Mockery
- **DevOps:** Docker, Docker Compose, Railway

## Stack Completo

PHP 8.2+ | Laravel 12 | MySQL | Composer | Node.js | Vite | Tailwind CSS | Blade | Docker | Railway | Pest

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

## Ejecutar con Docker (modo desarrollo tipo Sail)

```bash
docker compose up -d --build
docker compose exec app composer install
docker compose exec app php artisan migrate
```

Acceder: http://localhost:8080

En este modo el contenedor `app` monta el codigo del proyecto y usa dependencias de desarrollo (`require-dev`), por lo que factories con Faker funcionan como en Sail.

## Despliegue en Railway

- Railway detecta el `Dockerfile` automáticamente.
- Se usa el mismo `Dockerfile` para local y Railway.
- Variables mínimas recomendadas:

```env
APP_ENV=production
APP_DEBUG=false
APP_KEY=base64:tu_app_key
APP_URL=https://tu-dominio.railway.app
DB_CONNECTION=mysql
DB_HOST=tu-host-mysql
DB_PORT=3306
DB_DATABASE=tu_db
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_password
RUN_MIGRATIONS=true
```

- Despues del primer despliegue, cambia `RUN_MIGRATIONS` a `false`.
