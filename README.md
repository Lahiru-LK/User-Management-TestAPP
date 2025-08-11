# User-Management-TestAPP
Laraval Project

<img width="1915" height="1019" alt="image" src="https://github.com/user-attachments/assets/923f5f11-0fbe-49be-8c7a-2a35856865b6" />
<img width="1911" height="1017" alt="image" src="https://github.com/user-attachments/assets/eda9aa3f-8153-4fb5-a722-9071b061d6c0" />
<img width="1908" height="880" alt="image" src="https://github.com/user-attachments/assets/0b0da9ce-76e6-4844-ad61-e94b64b7009c" />


User-Management-TestAPP
Overview
User-Management-TestAPP is a Laravel-based user management system using Filament Admin Panel, Sanctum for API authentication, TailwindCSS for styling, and Vite for asset bundling.

Requirements
PHP >= 8.1
Composer
Node.js & npm
MySQL (or compatible DB)
Git
Installation
1. Clone the repository

git clone https://github.com/Lahiru-LK/User-Management-TestAPP.gitcd User-Management-TestAPP
2. Install PHP dependencies

composer install
3. Install Node.js dependencies

npm install
4. Copy and configure environment file

cp .env.example .env
Open .env and set your database credentials (DB_DATABASE, DB_USERNAME, DB_PASSWORD).
5. Generate application key

php artisan key:generate
6. Run migrations

php artisan migrate
Optional: Seed the database

php artisan db:seed
7. Build frontend assets

npm run build
For development, use: npm run dev
8. Start the local server

php artisan serve
Visit: http://localhost:8000
Filament Admin Panel
Access the admin panel at /admin
Default branding: "USER MANAGEMENT"
Filament configuration is in AdminPanelProvider.php
Running Tests

php artisan test
Folder Structure
app - Application code (Models, Controllers, Providers)
database - Migrations, Factories, Seeders
resources - Views, CSS, JS
routes - Route definitions
public - Public assets
config - Configuration files
License
