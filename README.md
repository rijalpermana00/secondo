# Secondo App

Install Guide

## Requirement
PHP Version     : v7.1 <br>
Laravel Version : v5.8

## Install

###  First create .env file

cp -a .env.example .env (linux)<br>
copy -a .env.example .env (windows)

###  Second Generate key

php artisan key:generate<br>
php artisan config:clear<br>
php artisan config:cache

###  Third Config your database

open .env file, then edit
*  DB_DATABASE,
*  DB_USERNAME,
*  DB_PASSWORD

php artisan migrate
