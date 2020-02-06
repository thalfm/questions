## Dependências

- Docker
- Docker Compose
## Iniciar projeto

Execute o comando abaixo para iniciar os serviços

```console
docker-compose up
```

Execute
```console
docker exec -it questions-backend bash
php artisan module:migrate
php artisan module:seed
chmod 777 -R storage/
```
