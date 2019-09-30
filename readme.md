

## Readme

#####Ubuntu 19.04  64-бит
#####docker version 19.03.1, build 74b1e89
#####docker-compose version 1.24.1, build 4667896b



###1) Скопировать код ниже и вставить в терминал ( предварительно подготовив репозиторий) Дождитесь конца всех операций.
```
git clone https://github.com/O1Jack1O/superheroesWebApp.git
cd superheroesWebApp/laradock/
docker-compose up -d nginx mysql
docker-compose exec workspace bash
composer install
php artisan storage:link
exit
```

###2) Зайди в брайзер по ссылке http://localhost

###3) Не забываем отключить сервисы ДОКЕРА по завершению работы!!!

```
docker-compose down
```


