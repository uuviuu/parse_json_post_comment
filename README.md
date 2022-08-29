<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About project

Проект является реализацией парсера для ресурсов:
Список записей блога: https://jsonplaceholder.typicode.com/posts
Комментарии к записям: https://jsonplaceholder.typicode.com/comments

После установки проекта парсинг доступен по консольной команде php artisan command:parse

Сайт доступен по адресу http://localhost:8888/
Заголовки кликабельны и ведут на страницу с детальной информацией о посте и комментариям к нему

Для упрощения развертывания проекта предусмотрен Docker

Установка предполагает, что у вас уже установлен и настроен Docker, и присутсвует среда разработки Linux, проект разрабатывался на версии Ubuntu-22.04

## Installation

Подготовьте рабочее простанство для развертывания проекта:

- в папку с проектами установите репозиторий командой git clone https://github.com/uuviuu/parse_json_post_comment.git

Для установки введите команды:

- cd parse_json_post_comment - войти в папку с проектом

- docker-compose up -d - установить зависимости из файла docker-compose.yml

- sudo chmod 777 -R ./ - передача прав пользователя проекту (попросит пароль пользователя)

- docker exec -it task_laravel_app bash - войти в контейнер

- composer update - установка библиотек PHP

- composer dump-autoload - включение классов, которые используются в проекте

- php artisan key:generate - создание секретного ключа

- php artisan migrate - провести миграции

- php artisan command:parse - использование парсера

Контакты: 
 - [почта](mailto:my.test.laravel.message@gmail.com) 
 - [telegram](https://t.me/uuviuu)
