<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Overview

This Laravel backend serves as the API layer for the project, providing endpoints to manage CRUD operations and relationships for the selected domain.

## Requirements

- PHP >= 7.4

- Composer

- MySQL or any supported database

- Node.js and npm (for dependencies like Laravel Mix)

## Setup Instructions

### Clone the repository:

    git clone <repository-url>
    cd <repository-folder>/backend

### Install dependencies:

    composer install

### Set up environment variables:

#### Copy the .env.example file to .env:

    cp .env.example .env

#### Update database credentials in the .env file:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_user
    DB_PASSWORD=your_database_password

### Generate the application key:

    php artisan key:generate

### Run migrations and seed the database:

    php artisan migrate --seed

### Start the development server:

    php artisan serve

The server will be available at http://127.0.0.1:8000.

## APIs Implemented

### Products API:

- Create, Read, Update, and Delete products.

- Routes defined in routes/api.php.

- Example endpoints:
  - `GET /api/products` - Fetch all products.
  - `POST /api/products` - Create a new product.
  - `PUT /api/products/{id}` - Update a product.
  - `DELETE /api/products/{id}` - Delete a product.

### Relationships:

- One-to-Many relationship implemented (e.g., Products and Categories).

- Example:
  - `GET /api/categories/{id}/products` - Fetch products under a specific category.
