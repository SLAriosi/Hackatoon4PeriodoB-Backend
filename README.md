# Setting Up a Laravel Development Environment with Docker and Docker Compose
## Instructions -
https://medium.com/@murilolivorato/setting-up-a-laravel-development-environment-with-docker-and-docker-compose-a-step-by-step-5e37670ae640

## Run those commands
- docker-compose up -d --build
- docker-compose run --rm artisan migrate

## Comandos para criar models juntamente migrations dentro do composer
- docker-compose run --rm artisan make:model Ambiente --migration
