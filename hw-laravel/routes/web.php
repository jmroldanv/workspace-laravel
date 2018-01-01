<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/child', function () {
    return view('child');
});

Route::get('saludo', function(){
    //return view('saludo');

    $datos=new App\Datos();
    $datos->numero = 33;
    $datos->cadena = 'el numero 33';

	$pasteles = ['coco', 'crema', 'choco', 'fresa', 'almendra'];

	//return view('saludo')->with('pastel', 'Tarta al whisky');

    return view('saludo')->with('pasteles', $pasteles)
    					 ->with('pastel', 'Tarta al whisky')
    					 ->with('datos', $datos);
});

//No funciona el locale
Route::get('test-lang/{locale?}', function ($locale) {
    App::setLocale($locale);

    return view('test-lang');
});

//Si funciona el locale
Route::get('localization/{lang?}','LanguageLocalizationController@index');

// Custom Middleware
Route::get('/middleware', function () {
    
    return 'ok';

})->middleware('App\Http\Middleware\MyMiddlewareSample');

