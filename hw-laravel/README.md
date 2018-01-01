# hw-laravel

### blade
  # views/layouts/app.blade.php
  # views/child.blade.php

### Locales (multi idioma)
 ## routes
  # 'test-lang/{locale?}'
  # 'localization/{lang?}'

### Sharing data between all views
  # app/Providers/AppServiceProvider
  # views/child.blade.php     route: /child
  # views/saludo.blade.php    route: /saludo

### Testing (https://appdividend.com/2017/09/11/laravel-5-5-testing-example/)
 ## Creamos un nuevo modelo y su migration
    $ php artisan make:model Stock -m

 ## Agregamos un par de campos al modelo: app/Stock.php
 ## y a la migration: 2017_12-30-150201_create_stocks_table.php
 ## Ejecutamos la migration (creamos la tabla 'stocks')
    $ php artisan migrate

 ## Creamos una clase de Test (tests/Feature/StockTest.php) y agregamos
 ## un par de líneas para validarlas en el Test.
    $ php artisan make:test StockTest

 ## Ejecutamos el Test:
    $ vendor/bin/phpunit

### Middleware ( app/Http/Middleware/MyMiddlewareSample )
    $ php artisan make:middleware MyMiddlewareSample
    
 ## Lo registramos en App\Http\Kernel.php



