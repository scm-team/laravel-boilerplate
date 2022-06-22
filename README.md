## Installation
**_If you want to install using docker,_** [DOCKER](#docker-installation)

Clone the repo locally:
```
git clone https://github.com/scm-team/laravel-boilerplate.git
```

`cd` into cloned directory and install dependencies. run below command one by one.
```bash
composer install
npm install && npm run dev
cp .env.example .env
php artisan key:generate
```

### Configuration in `.env` file

Database **eg.**
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sample
DB_USERNAME=root
DB_PASSWORD=
```
## Database Migration

Run database migrations:
```
php artisan migrate
```

Run database seeder:
```
php artisan db:seed
```

## Server Run

Run the dev server:
```
php artisan serve
```

Visit below url:
```
http://localhost:8000
```

## Running Tests

Setup configuration for unit test:
```
cp .env.testing.example .env.testing
```

Create database for unit test and configure in `.env.testing` file. **eg.**
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sample_phpunit
DB_USERNAME=root
DB_PASSWORD=
```

Run tests:
```
php artisan test
```

## Docker Installation

### First time build

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
npm install && npm run dev
cp .env.example .env
php artisan key:generate
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
docker-compose exec php npm ...
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
