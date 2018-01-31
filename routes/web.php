<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application.
|Vai executar o que estiver em resources/views/welcome.blade.php ou
|a pagina que se definir.
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//requisicao get
// o usuario digita / na barra do navegador
// depois devolvemos uma pagina
Route::get('/', function() {
  // view -> é uma pagina
  // a pagina deve ser criada na pasta resources/views
  $nome = "Baiana System";
  return view('ola', ['vaiparaoutrapag' => $nome]);
// //compact('nome') -> ['nome' => $nome]
  // ou compact('nome') se fizer
  // é um debug no laravel dd(compact('nome'));
});

Route::get('/cursos', 'CursosController@index');
//@nome da funcao que vamos criar index no caso.
