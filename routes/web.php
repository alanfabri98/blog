<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
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

Route::get('/', HomeController::class);

Route::get('cursos', [CursoController::class, 'index']);
Route::get('cursos/create', [CursoController::class, 'create']);
Route::get('cursos/{curso}', [CursoController::class, 'show']);


/*
//la variable curso es necesario enviar datos
Route::get('cursos/{curso}', function($curso){
	return "Bienvenido al curso: $curso";
}

//la incognita quiere decir que la variable sera opcional, no es necesario poner datos en esa variable categoria
Route::get('cursos/{curso}/{categoria?}', function($curso, $categoria = null) {
	if($categoria){
		return "Bienvenido al curso $curso, de la categoria $categoria";
	}else{
		return "Bienvenido al curso: $curso";
	}
}
*/