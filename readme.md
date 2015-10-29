## Sample Project

This is an example project, but fully functioning if you'd like to use personally 
It includes Lumen & MarkDB with small bit of code for functionality. 

## Install
```shell
git clone git@github.com:rockstarcode/MarkDB-Lumen.git myblog
git clone git@github.com:rockstarcode/MarkDB-CMS-Sample-Blog.git myblog-content

cd myblog
composer install

cp .env.example .env

php artisan serve
  
# Make sure you edit .env to point MARKDB_PATH to your myblog-content path
MARKDB_PATH=/data/myblog-content
  
```

## Tutorial
This tutorial should help you get started
[RockstarCode - Easy Blog creation with Lumen & MarkDB](http://www.rockstarcode.com/posts/tutorials/laravel/markdb)