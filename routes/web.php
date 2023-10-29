<?php


use lib\Route; 

Route::get('/',function(){
  return 
  [
  'titulo' => 'Inicio',
  'contenido' => 'hola desde el inicio'
  ];
});

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