# commands sequence
# https://appdividend.com/2017/12/21/laravel-queues-tutorial-example-scratch/

# configuramos .env:
  DB_DATABASE=emails-queue 
  MAIL - datos de configuración de mailtrap (simula un SMTP server)
  QUEUE_DRIVER=database

$ php artisan make:controller EmailController
  # agregamos el método: sendMail()
  # Mail::to('mail@appdividend.com')->send(new SendMailable());   - Enviará un email al destino ( to ) cuyo contenido será el return de SendMailable.build(), es decir, la vista html 'welcome'.

# agregamos la ruta ( routes/web.php ):  Route::get('email', 'EmailController@sendEmail');

$ php artisan make:mail SendMailable
  # build() - El contenido del email a enviar va a ser la vista html 'welcome':

    return $this->view('welcome');

# http://localhost:8000/email
  Se envía un email que podemos comprobar en 'mailtrap': https://mailtrap.io/inboxes   (Demo inbox: https://mailtrap.io/inboxes/307561/messages)

### Para enviar los correos mediante Queue Jobs: ( ¡¡¡ No está funcionando !!!. El Queue Worker actualiza el campo "attempts" de la tabla de bbdd de jobs pero sobrepasa el máximo número permitido generando exceptions. No envía el email.).

### Enviar email usando Queue Jobs (usaremos database en lugar de redis, beanstalk, amazon sqs, ...):

# Creamos la tabla de jobs en mysql (porque usamos 'database')
$ php artisan queue:table
$ php artisan migrate

# Creamos la clase Job: 
$ php artisan make:job SendEmailJob

# Ejecutamos el queue worker (encargado de recoger el job de la bbdd y ejecutarlo)
$ php artisan queue:work

# lanzamos la url que envía el email: http://localhost:8000/email 
 # Se crea un job en la tabla de bbdd de mysql  
 # El worker lo recoge y lo ejecuta

### ( ¡¡¡ No está funcionando !!!. El Queue Worker actualiza el campo "attempts" de la tabla de bbdd de jobs pero sobrepasa el máximo número permitido generando exceptions. No envía el email.).


¡¡¡ Solucionado !!! ( Mediante el uso de 'logs' me doy cuenta de que 'App\Jobs\SendEmailJob.handle()' no envía el email ).
# problema: 
  # No estamos importando las clases necesarias: 
    use Illuminate\Support\Facades\Mail;
    use App\Mail\SendMailable;
 
