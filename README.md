# Pixel Positions

## About the Project
**Pixel Positions** is a Laravel-based platform designed as a job hub, allowing users to register, authenticate, and manage job listings.  
This project was developed for **learning purposes**, exploring essential Laravel concepts and the structure of a complete application.

## Features
- Authentication system (login, registration, and protected routes)
- Job listings creation and management
- Full MVC architecture
- Use of migrations, seeders, and factories
- Organized business logic through controllers

## Technologies Used
- **PHP 8+**
- **Laravel Framework**
- **Composer**
- **MySQL or PostgreSQL**
- **Node.js + NPM/Vite**

## Laravel Concepts Applied
- Controllers
- Models
- Migrations
- Seeders
- Factories
- Authentication middleware
- Laravel validation

## How to Run the Project

### 1. Clone the repository
```bash
git clone https://github.com/YOUR-USER/pixel-positions.git
cd pixel-positions
```

### 2. Install PHP dependencies
```bash
composer install
```

### 3. Configure the .env file
Copy the example environment file:
```bash
cp .env.example .env
```

Then configure your database and generate the key:
```bash
php artisan key:generate
```

### 4. Install frontend dependencies
```bash
npm install
```

### 5. Run migrations and seeders
```bash
php artisan migrate --seed
```

### 6. Start the server
```bash
php artisan serve
```

### (Optional) Run Vite
```bash
npm run dev
```

## Educational Purpose
This project was built to practice and strengthen fundamental Laravel skills, exploring its full ecosystem — including authentication, controller structure, database migrations, seeders, factories, and application organization.

