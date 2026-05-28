## Slim framework Skeleton Application

![Packagist Dependency Version](https://img.shields.io/packagist/dependency-v/sushilk/slim-skeleton/php?style=for-the-badge)
![GitHub Release](https://img.shields.io/github/v/release/codebysushil/slim-skeleton?style=for-the-badge)
![Packagist Downloads](https://img.shields.io/packagist/dt/sushilk/slim-skeleton?style=for-the-badge&logo=composer)
![GitHub License](https://img.shields.io/github/license/codebysushil/slim-skeleton?style=for-the-badge)
[![Coverage Status](https://coveralls.io/repos/github/codebysushil/slim-skeleton/badge.svg?branch=master)](https://coveralls.io/github/codebysushil/slim-skeleton?branch=main)

Use this skeleton application to quickly setup and start working on a new Slim Framework 4 application. This application uses the latest Slim 4 with Slim PSR-7 implementation and PHP-DI container implementation. It also uses the Monolog logger.

This skeleton application was built for Composer. This makes setting up a new Slim Framework application quick and easy.

---

### Install the Application

Run this command from the directory in which you want to install your new Slim Framework application. You will require PHP 8.3 or newer.

```bash
composer create-project sushilk/slim-skeleton [my-app-name]
```

Replace `[my-app-name]` with the desired directory name for your new application. You'll want to:

* Point your virtual host document root to your new application's `public/` directory.
* Ensure `logs/` is web writable.

To run the application in development, you can run these commands 

```bash
cd [my-app-name]
composer start
```

Or you can use `docker-compose` to run the app with `docker`, so you can run these commands:
```bash
cd [my-app-name]
docker-compose up -d
```
After that, open `http://localhost:5000` in your browser.

Run this command in the application directory to run the test suite

```bash
composer test
```

That's it! Now go build something cool.
