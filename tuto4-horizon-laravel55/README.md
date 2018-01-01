Laravel Horizon from Scratch
https://www.youtube.com/watch?v=Z5w0z6Ar3tQ

# descargamos predis
$ composer require predis/predis

# configuramos "redis" en .env
QUEUE_DRIVER=redis

# encolando mails
$ php artisan make:mail UserRegistered