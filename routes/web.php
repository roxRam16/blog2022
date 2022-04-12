<?php

use Illuminate\Support\Facades\Route;

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
    //return view('welcome');

    return "Bienvenido a la página princial";
});

Route::get('cursos', function(){

    return "Bienvenido a cursos";
});

Route::get('cursos/create', function(){
    return "En esta página podrás crear un curso";
});

/*Route::get('cursos/{curso}', function($curso){
    return 
});*/

Route::get('cursos/{curso}/{categoria?}', function($curso, $categoria = null){
    
        return ($categoria != null) ? "Bienvenido al curso : <b>$curso</b> de la categoria <b>$categoria</b>" : "Bienvenido al curso : $curso";
});

Route::get('curso/{id}', function ($id) {
    return "Este es el curso número: $id";
});