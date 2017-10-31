# CakePHP Application Skeleton

[![Build Status](https://img.shields.io/travis/cakephp/app/master.svg?style=flat-square)](https://travis-ci.org/cakephp/app)
[![License](https://img.shields.io/packagist/l/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)

A skeleton for creating applications with [CakePHP](https://cakephp.org) 3.x.

The framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Installation

Run command in your terminal

```bash
git clone https://github.com/jeffersonbehling/cake-shopping-cart.git
```

In case you want to use a custom app dir name (e.g. `/myapp/`):

## Requirements
- MySQL
- PHP 5.6 (Recommended 7.0)

## Configurations

Read and edit `config/app.php` and setup the `'Datasources'`
```bash
'Datasources' => [
        'default' => [
            'className' => 'Cake\Database\Connection',
            'driver' => 'Cake\Database\Driver\Mysql',
            'persistent' => false,
            'host' => 'YOUR_HOST',
            'username' => 'YOUR_USERNAME',
            'password' => 'YOUR_PASSWORD',
            'database' => 'cakephp_shopping_cart',
            'encoding' => 'utf8',
            'timezone' => 'UTC',
            'flags' => [],
            'cacheMetadata' => true,
            'log' => false,
            'quoteIdentifiers' => false,
            'url' => env('DATABASE_URL', null),
        ],
```

## SQL
In `MySql` terminal run commands

Creating database
```bash
CREATE DATABASE cakephp_shopping_cart;
USE cakephp_shopping_cart;
```

Creating table
```bash
CREATE TABLE products (
    id INT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(250) NOT NULL,
    price FLOAT NOT NULL,
    image VARCHAR(250) NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
```

Inserts in Products table
```bash
INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES (NULL, 'Samsung Galaxy S4', '600', '/img/s4.jpg');
INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES (NULL, 'Samsung Galaxy Note 3', '500', '/img/note3.jpg');
INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES (NULL, 'Samsung Comment 3', '400', '/img/comment.jpg');
```

## Project in version 2.x

View in [StarTutorial - Part 1](https://www.startutorial.com/articles/view/build-a-shopping-cart-with-cakephp-and-jquery-part-1) and [StarTutorial - Part 2](https://www.startutorial.com/articles/view/build-a-shopping-cart-with-cakephp-and-jquery-part-2)

## Images from project

`/products/index`

[Image 1](https://github.com/jeffersonbehling/cake-shopping-cart/blob/master/webroot/img/prints/index.png)
![alt text](https://github.com/jeffersonbehling/cake-shopping-cart/blob/master/webroot/img/prints/index.png)

`/products/view`

[Image 2](https://github.com/jeffersonbehling/cake-shopping-cart/blob/master/webroot/img/prints/view.png)
![alt text](https://github.com/jeffersonbehling/cake-shopping-cart/blob/master/webroot/img/prints/view.png)

`/cart/view`

[Image 3](https://github.com/jeffersonbehling/cake-shopping-cart/blob/master/webroot/img/prints/cart.png)
![alt text](https://github.com/jeffersonbehling/cake-shopping-cart/blob/master/webroot/img/prints/cart.png)
