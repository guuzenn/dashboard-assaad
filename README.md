As-Sa'ad Dashboard

1. Clone Repository

2. Install Dependency

composer install
npm install

3. Copy .env dan Generate Key

cp .env.example .env
php artisan key:generate

4. Setup Database

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama database
DB_USERNAME=root
DB_PASSWORD=

php artisan migrate

5. Build frontend
npm run dev // buat develop
npm run build // buat prod

6. Jalanin project
php artisan serve
