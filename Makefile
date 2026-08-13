.PHONY: up down build shell logs migrate seed fresh test php artisan composer npm

APP_CONTAINER = $(shell podman compose ps -q app 2>/dev/null || echo app)

up:
	podman compose up -d

down:
	podman compose down

build:
	podman compose build

restart:
	podman compose restart

shell:
	podman compose exec app bash

logs:
	podman compose logs -f app

php:
	podman compose exec app php $(filter-out $@,$(MAKECMDGOALS))

composer:
	podman compose exec app composer $(filter-out $@,$(MAKECMDGOALS))

npm:
	podman compose exec app npm $(filter-out $@,$(MAKECMDGOALS))

artisan:
	podman compose exec app php artisan $(filter-out $@,$(MAKECMDGOALS))

migrate:
	podman compose exec app php artisan migrate

seed:
	podman compose exec app php artisan db:seed

fresh:
	podman compose exec app php artisan migrate:fresh --seed

test:
	podman compose exec app php artisan test

%:
	@true
