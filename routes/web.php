<?php


use lib\Route; 
use app\Controllers\HomeController;

Route::get('/', [HomeController::class,'index']);

Route::get('/contact',function(){
  return 'hola desde la pagina de contacto';
});

Route::get('/about', function(){
  return 'hola desde la pagina de Acerca de ';
});

/* de los : es una varible */
Route::get('/cursos/:slug', function($slug){
 return 'hola desde pagina de cursos'.$slug;
});

Route::dispatch();