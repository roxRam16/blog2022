<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ContactanosController;

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

/*Route::get('/', function () {
    //return view('welcome');

    return "Bienvenido a la página princial";
});

Route::get('cursos', function(){

    return "Bienvenido a cursos";
});

Route::get('cursos/create', function(){
    return "En esta página podrás crear un curso";
});*/

/*Route::get('cursos/{curso}', function($curso){
    return 
});*/

/*Route::get('cursos/{curso}/{categoria?}', function($curso, $categoria = null){
    
        return ($categoria != null) ? "Bienvenido al curso : <b>$curso</b> de la categoria <b>$categoria</b>" : "Bienvenido al curso : $curso";
});

Route::get('curso/{id}', function ($id) {
    return "Este es el curso número: $id";
});*/
//LARAVEL 8
Route::get('/', HomeController::class)->name('home.index');

//LARAVEL 8
//Route::get('cursos', [CursoController::class, 'index']);

//LARAVEL 9 - Agrupando las mismas rutas de un mismo controllador
#FORMA 2
/*Route::controller(CursoController::class)->group(function(){
    Route::get('cursos', 'index')->name('cursos.index');
    Route::get('cursos/create', 'create')->name('cursos.create');
    Route::get('cursos/{curso}', 'show')->name('cursos.show');
    Route::post('cursos', 'store')->name('cursos.store');
    Route::get('cursos/{curso}/edit', 'edit')->name('cursos.edit');
    Route::put('cursos/{curso}', 'update')->name('cursos.update');
    Route::delete('cursos/{curso}', 'destroy')->name('cursos.delete');
});*/

#FORMA 3
Route::resource('cursos', CursoController::class);

#FORMA PARA CUANDO SOLO QUEREMOS MOSTRAR VISTAS, ES DECIR HACER PÁGINAS WEB
Route::view('nosotros', 'nosotros')->name('nosotros');

Route::get('enviarEmail', function(){
    $correo = new ContactanosMailable;
    Mail::to('rrrosario16@gmail.com')->send($correo);
    return view('landPage');
})->name('enviarEmail');

/*Route::controller(ContactanosController::class)->group(function(){
    Route::get('contactanos', 'index')->name('contactanos.index');
    Route::post('contactanos', 'store')->name('contactanos.store');
});*/

//Route::resource('contactanos', ContactanosController::class);

Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');
Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');

