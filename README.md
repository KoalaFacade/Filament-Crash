## Filament plugin to enforce your client to pay your project

<p align="center">
    <a href="https://packagist.org/packages/koalafacade/filament-crash"><img src="https://img.shields.io/packagist/v/KoalaFacade/filament-crash?color=F28D1A&style=for-the-badge" alt="Test Passing"/></a>
    <a href="https://laravel.com"><img src="https://img.shields.io/badge/Laravel-^9.x-red?style=for-the-badge&logo=Laravel" alt="Laravel" /></a>
    <a href="https://php.net"><img src="https://img.shields.io/badge/PHP-^8.0-7A86B8?style=for-the-badge&logo=php" alt="PHP Badge"/></a>
</p>

## Usage

Install the package first
```bash
composer require koalafacade/filament-crash
```

after the package installed it the package automatically serving the javascript 
to make blank your filament page base on due date your input.

## Set due date & deadline
you can put those in your .env

```dotenv
DUE_DATE="2023-01-17"
DEADLINE_DAYS=10
```
those env will set the due date to 2023-01-17 and make the filament page will fully 
blank when 2023-01-27 (10 days after due date)