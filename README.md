As-Sa'ad Dashboard

1. Clone Repository

2. Install Dependency

Install semua dependency PHP dan JS:

composer install
npm install

3. Copy .env dan Generate Key

cp .env.example .env
php artisan key:generate

4. Setup Database

Buka file .env dan ubah bagian database sesuai dengan lokalmu:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=as_saad
DB_USERNAME=root
DB_PASSWORD=

php artisan migrate
