# docker-php-symfony-demo

My PHP app

## Requirements

```shell
$ docker --version
Docker version 20.10.10, build b485636
$ docker-compose --version
Docker Compose version v2.1.1
```

## 101

```shell
$ ln -s ./.devcontainer/docker-compose.override.yml .
$ docker-compose build
$ docker-compose up --detach
$ docker-compose exec app bash -ce "
    composer install
    chown -R $(id -u):$(id -g) .
    composer run-script unit-tests
    composer run-script http-api-tests
  "
$ docker-compose exec app bash
```

Go to [http://127.0.0.1:38080](http://127.0.0.1:38080)

```shell
$ docker-compose down --remove-orphans
```
