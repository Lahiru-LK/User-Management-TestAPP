# User-Management-TestAPP
Laraval Project

<img width="1915" height="1019" alt="image" src="https://github.com/user-attachments/assets/923f5f11-0fbe-49be-8c7a-2a35856865b6" />
<img width="1911" height="1017" alt="image" src="https://github.com/user-attachments/assets/eda9aa3f-8153-4fb5-a722-9071b061d6c0" />
<img width="1908" height="880" alt="image" src="https://github.com/user-attachments/assets/0b0da9ce-76e6-4844-ad61-e94b64b7009c" />

Here's a clean and professional **README.md** you can use for GitHub:

---


# User-Management-TestAPP

A Laravel-based user management system built with **Filament Admin Panel**, **Sanctum** for API authentication, **TailwindCSS** for styling, and **Vite** for asset bundling.

---

## 🚀 Features
- User management with Filament Admin Panel
- API authentication using Laravel Sanctum
- Modern UI with TailwindCSS
- Vite for fast asset bundling
- MySQL database support
- Easy setup and deployment

---

## 📋 Requirements
- PHP >= 8.1
- Composer
- Node.js & npm
- MySQL (or compatible DB)
- Git

---

## 🛠 Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/Lahiru-LK/User-Management-TestAPP.git
   cd User-Management-TestAPP


2. **Install PHP dependencies**

   ```bash
   composer install
   ```

3. **Install Node.js dependencies**

   ```bash
   npm install
   ```

4. **Copy and configure environment file**

   ```bash
   cp .env.example .env
   ```

   Open `.env` and update your database credentials:

   ```
   DB_DATABASE=your_database
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

5. **Generate application key**

   ```bash
   php artisan key:generate
   ```

6. **Run migrations**

   ```bash
   php artisan migrate
   ```

   *(Optional)* Seed the database:

   ```bash
   php artisan db:seed
   ```

7. **Build frontend assets**

   ```bash
   npm run build
   ```

   For development:

   ```bash
   npm run dev
   ```

8. **Start the local server**

   ```bash
   php artisan serve
   ```

   Visit: [http://localhost:8000](http://localhost:8000)

---

## 📂 Folder Structure

```
app         - Application code (Models, Controllers, Providers)
database    - Migrations, Factories, Seeders
resources   - Views, CSS, JS
routes      - Route definitions
public      - Public assets
config      - Configuration files
```

---

## 🔑 Filament Admin Panel

* Access the admin panel at: `/admin`
* Default branding: **"USER MANAGEMENT"**
* Configuration file: `AdminPanelProvider.php`

---

## 🧪 Running Tests

```bash
php artisan test
```

---

## 📜 License
