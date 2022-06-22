## Installation

Clone the repo locally:
```
git clone https://github.com/scm-team/laravel-boilerplate.git
```

`cd` into cloned directory and build docker
```
docker-compose up -d --build
```

Install dependencies. run below command one by one.
```bash
docker-compose exec php bash
composer install
cp .env.example .env
php artisan key:generate
```

Install Node dependencies. run below command.
```bash
docker-compose exec node bash
npm install && npm run dev
```


## Development workflow

To start project run below command. If container is already running, no need to run.
```
docker-compose up -d --build
```
`--build` **_flag can be excluded if there is no changes in dockerfiles after first time build._**

To stop project run below command.
```
docker-compose down
```

Whenever you need to run `artisan`, `composer`, `npm`, the prefix `docker-compose exec php` is required.

For `artisan`
```bash
docker-compose exec php php artisan ...
```

For `composer`
```bash
docker-compose exec php composer ...
```

For `npm`
```bash
docker-compose exec node npm...
```

To verify container running status:
```
docker ps
```

## Configuration in `.env` file

Database
```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=sample
DB_USERNAME=sample_user
DB_PASSWORD=root
```
## Database Migration

Run database migrations:
```bash
docker-compose exec php php artisan migrate
```

Run database seeder:
```bash
docker-compose exec php php artisan db:seed
```

## Visti Below URL
```
http://localhost:8080
```
