docker-up:
	docker-compose up -d

docker-down:
	docker-compose down --remove-orphans

docker-down-clear:
	docker-compose down -v --remove-orphans

docker-pull:
	docker-compose pull

docker-build:
	docker-compose build --pull

api-composer-install:
	docker-compose run --rm api-php-cli composer install

api-composer-update:
	docker-compose run --rm api-php-cli composer update

api-migrations:
	docker-compose run --rm api-php-cli composer app migrations:migrate -- --no-interaction

api-fixtures:
	docker-compose run --rm api-php-cli composer app fixtures:load
