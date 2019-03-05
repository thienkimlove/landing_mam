## install

* Install with composer `composer create-project --prefer-dist laravel/laravel landing_hoaxuan`

`cd landing_hoaxuan`

* Mysql 

```textmate
CREATE DATABASE landing_hoaxuan CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE USER 'root2'@'localhost' IDENTIFIED WITH mysql_native_password BY 'tieungao';

GRANT ALL PRIVILEGES ON *.* TO 'root2'@'localhost' WITH GRANT OPTION;

FLUSH PRIVILEGES;
```
Install backpack `composer require backpack/crud`

```textmate
php artisan backpack:base:install
php artisan backpack:crud:install
```

* If We using Elfinder when install then `chmod -R 777 public/uploads`.

* Remove auth `rm -rf app/Http/Controllers/Auth`

* Run `php artisan key:generate`

* Create Admin user

`php artisan backpack:base:user`

## Install Permission

`https://github.com/Laravel-Backpack/PermissionManager`

## Start

* Run `php artisan serve` to start server on 8000


## Create Components

### Backpack CRUD

```textmate
# STEP 1. create migration
php artisan make:migration:schema create_tags_table --model=0 --schema="name:string:unique"
php artisan migrate

# STEP 2. create a model, a request and a controller for the admin panel
php artisan backpack:crud tag #use singular, not plural

# STEP 3. add a route to routes/backpack/custom.php (under the admin prefix and auth middleware): 
php artisan backpack:base:add-custom-route "CRUD::resource('tag', 'TagCrudController');"

# STEP 4. add a sidebar item
php artisan backpack:base:add-sidebar-content "<li><a href='{{ backpack_url('tag') }}'><i class='fa fa-tag'></i> <span>Tags</span></a></li>"
```


