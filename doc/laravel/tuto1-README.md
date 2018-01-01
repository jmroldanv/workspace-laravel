# commands sequence
# https://appdividend.com/2017/08/20/laravel-5-5-tutorial-example/

$ php artisan migrate						- Crea dos tablas: 'users' y 'passwords_resets'

$ php artisan make:model Product -m				- Crea los archivos: Product.php (model) y create_products_table (migration)
 
# Creamos el schema (campos) de la tabla products en: database/migrations/create_products_table

$ php artisan migrate 						- Crea la tabla 'products' en mysql

# Vista create (http://localhost:8000/products/create): 
  # Creamos una vista html5 con el formulario de producto en: resources/views/products/create.blade.php

$ php artisan make:controller ProductController --resource	- Crea el controller con todos los métodos crud (create, store, show, update, ...)

# Creamos la ruta al controlador anterior en: routes/web.php

$ php artisan route:list					- Muestra todas las rutas configuradas

# En ProductController.create() llamamos a la vista

# Invocamos la ruta para comprobar que se carga el formulario correctamente: http://localhost:8000/products/create

# En la vista, etiqueta <form> agregamos la action: POST /products que enviará los datos del formulario al método ProductController.store

# En el modelo 'Product.php' agregamos los campos que se va a llenar de datos (name y price)

# En ProductController.store validamos los datos devolviendo un success/error a la vista del formulario (create.blade.php)

# En la vista 'create.blade.php' agregamos código para que se visualice el resultado de las validaciones ( success/error ) encima del formulario

# Vista index (http://localhost:8000/products):
  # Creamos una vista, index.blade.php, que mostrará un listado con todos los productos para poder editar/borrar un producto concreto. 
  # En ProductController.index cargamos todos los productos en una variable 'products' y llamamos a la vista index.blade.php pasándole el array 'products'.

# Vista edit (http://localhost:8000/products/1/edit):
  # Creamos una vista, edit.blade.php que mostrará un formulario con los datos de producto.
  # En ProductController.edit cargamos el producto ( $id = 1 ) y llamamos a la vista 'edit.blade.php' pasándole el 'product'.
  # El formulario se envía a ProductController.update:
    # Validará los datos de producto.
    # Nos redireccionará a la vista de listado de productos ( GET products -  ProductController.index - index.blade.php )

# En la vista listado de productos, además de editar, también podemos borrar el producto ( DELETE http://localhost:8000/products/1):
  # En la vista index se simula una petición DELETE mediante un formulario: 
    # action:   ProductController.destroy
    # method:   POST
    # agreamos al formulario el input siguiente:  <input type="hidden" name="_method" value="DELETE">

  # En ProductController.destroy:
    # Localizamos el $id de producto, lo borramos de la bbdd.
    # Nos redireccionará a la vista de listado de productos.




