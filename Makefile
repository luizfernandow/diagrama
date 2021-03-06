# Makefile for Docker

help:
	@echo ""
	@echo "usage: make COMMAND"
	@echo ""
	@echo "Commands:"
	@echo "  build        Build images"
	@echo "  start        Create and start containers"
	@echo "  stop         Stop all services"
	@echo "  logs         Follow log output"
	@echo "  php          Open php container"
	@echo "  php-artisan  Open php container with user to run artisan"
	@echo "  test         Run tests"

build:
	@cd docker_diagrama && docker-compose build

start:
	@cd docker_diagrama && docker-compose up -d

stop:
	@cd docker_diagrama && docker-compose down -v

logs:
	@cd docker_diagrama && docker-compose logs -f

php:
	@cd docker_diagrama && docker exec -it $(shell cd docker_diagrama && docker-compose ps -q php) bash

php-artisan:
	@cd docker_diagrama && docker exec -u $(shell id -u):$(shell id -g) -it $(shell cd docker_diagrama && docker-compose ps -q php) bash

test:
	@cd docker_diagrama && docker exec -u $(id -u):$(id -u) $(shell cd docker_diagrama && docker-compose ps -q php) sh -c "cd /var/www/application && php vendor/bin/codecept run"