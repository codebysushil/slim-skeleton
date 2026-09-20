## Slim framework Skeleton Application

![Packagist Dependency Version](https://img.shields.io/packagist/dependency-v/sushilk/slim-skeleton/php?style=for-the-badge)
![GitHub Release](https://img.shields.io/github/v/release/codebysushil/slim-skeleton?style=for-the-badge)
![Packagist Downloads](https://img.shields.io/packagist/dt/sushilk/slim-skeleton?style=for-the-badge&logo=composer)
![GitHub License](https://img.shields.io/github/license/codebysushil/slim-skeleton?style=for-the-badge)
[![Tests](https://github.com/codebysushil/slim-skeleton/actions/workflows/tests.yml/badge.svg)](https://github.com/codebysushil/slim-skeleton/actions/workflows/tests.yml)
![Coverage](https://codecov.io/gh/codebysushil/slim-skeleton/branch/main/graph/badge.svg)

Use this skeleton application to quickly setup and start working on a new Slim Framework 4 application. This application uses the latest **Slim 4** & **slim Twig** templates engine with **Slim PSR-7** implementation and **PHP-DI container** implementation. It also uses the **Monolog logger**. **MySQL** default database.

This skeleton application was built for Composer. This makes setting up a new Slim Framework application quick and easy.

---

### Install the Application

Run this command from the directory in which you want to install your new Slim Framework application. You will require PHP 8.3 or newer.

```bash
composer create-project sushilk/slim-skeleton my-slim-app
```

Replace `[my-slim-app]` with the desired directory name for your new application. You'll want to:

* Point your virtual host document root to your new application's `public/` directory.
* Ensure `logs/` is web writable.

To run the application in development, you can run these commands.

* `.env.example` Replace to `.env`.

```bash
cp .env.example .env
```


### Start Server

```bash
cd my-slim-app

composer run serve
```
After that, open `http://localhost:5000` in your browser.

Run this command in the application directory to run the test suite

---

### Tests suite

```bash
composer test
```

That's it! Now go build something cool.

---

## .env.example

```env

DB_DRIVER=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_NAME=slim
DB_CHARSET=utf8mb4
DB_USERNAME=root
DB_PASSWORD=

```

