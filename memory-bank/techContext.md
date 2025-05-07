# Technical Context

## 1. Technologies Used

*   **Backend Framework:** Laravel `^8.54`
*   **Frontend Framework/Library:** Laravel Livewire (`livewire/livewire: ^2.5` via composer), Blade templates (`resources/views`), Basic JS (`resources/js/app.js`, `bootstrap.js`), Tailwind CSS (`tailwind.config.js`, `resources/css/app.css`).
*   **Database:** MySQL (`DB_CONNECTION=mysql` in `.env`)
*   **Authentication:** Laravel Fortify, Laravel Jetstream.
*   **API:** Potentially Laravel Sanctum for API tokens (`config/sanctum.php`, `database/migrations/*create_personal_access_tokens_table.php`).
*   **Web Server:** [Needs confirmation - Common: Nginx, Apache. If using Laragon, likely Apache or Nginx.]
*   **PHP Version:** `^7.3` or `^8.0`
*   **Node.js/NPM:** Used for frontend asset compilation (`package.json`, `webpack.mix.js`).

## 2. Development Setup

*   **Environment:** Local development likely managed via Laragon (based on CWD `c:/laragon/www/checkout-prod`).
*   **Dependency Management:**
    *   PHP: Composer (`composer.json`, `composer.lock`)
    *   JavaScript: NPM (`package.json`, `package-lock.json`)
*   **Build Process:** Laravel Mix (`webpack.mix.js`) for compiling frontend assets (`npm run dev`, `npm run prod`).
*   **Version Control:** Git (`.gitignore`, `.gitattributes` present).

## 3. Technical Constraints

*   [List any known technical limitations or constraints.]
    *   e.g., Specific PHP version requirement.
    *   e.g., Reliance on specific server modules.
    *   e.g., Browser compatibility targets.

## 4. Dependencies

*   **Key PHP Packages:** (From `composer.json`)
    *   `laravel/framework: ^8.54`
    *   `laravel/jetstream: ^2.4` (with Livewire stack)
    *   `laravel/sanctum: ^2.11` (API Authentication)
    *   `livewire/livewire: ^2.5` (Dynamic Interfaces)
    *   `barryvdh/laravel-dompdf: ^0.9.0` (PDF Generation)
    *   `maatwebsite/excel: ^3.1` (Excel Import/Export)
    *   `minishlink/web-push: ^9.0` (Web Push Notifications)
    *   `pusher/pusher-php-server: ^7.2` (Real-time Events/Broadcasting)
    *   `fruitcake/laravel-cors: ^2.0` (CORS)
    *   `guzzlehttp/guzzle: ^7.0.1` (HTTP Client)
    *   `phattarachai/thaidate: ^12.1` (Thai Date Formatting)
*   **Key JavaScript Packages:** (From `package.json`)
    *   `@tailwindcss/forms: ^0.3.1`
    *   `@tailwindcss/typography: ^0.4.0`
    *   `alpinejs: ^3.0.6` (Lightweight JS framework, often used with Livewire/Blade)
    *   `axios: ^0.21` (HTTP client)
    *   `laravel-mix: ^6.0.6` (Build tool wrapper)
    *   `lodash: ^4.17.19` (Utility library)
    *   `postcss: ^8.1.14` (CSS processing)
    *   `postcss-import: ^14.0.1` (PostCSS plugin)
    *   `tailwindcss: ^2.2.2` (CSS framework)
*   **External Services:** (From `.env`)
    *   **Mail:** SMTP (`MAIL_MAILER=smtp`, using smtp.gmail.com)
    *   **Real-time Events:** Pusher (`BROADCAST_DRIVER=log` currently, but Pusher credentials configured: `PUSHER_APP_KEY`, `PUSHER_APP_CLUSTER=ap1`)
    *   **Web Push:** VAPID keys configured (`VAPID_PUBLIC_KEY`, `VAPID_PRIVATE_KEY`)

## 5. Tool Usage Patterns

*   **IDE:** VS Code (inferred from environment details).
*   **Database Management:** [e.g., phpMyAdmin, TablePlus, DBeaver - often included with Laragon].
*   **Terminal:** Default Windows CMD (`cmd.exe`).
*   **Artisan:** Laravel's command-line tool (`php artisan ...`) used for migrations, seeding, caching, etc.
