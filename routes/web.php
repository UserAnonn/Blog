<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;//asigno la ruta al controlador
use App\Http\Controllers\CursoController;
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

Route::get('/',HomeController::class)->name('home');
//en el metodo get el 1° param es la ruta, luego su controlador y el metodo dentro del controlador
/*Route::get('cursos', [CursoController::class,'index'])->name('cursos.index');
//lo que esta en get es la url, en name es donde va dentro de un <a ref="">Titulo</a>

Route::get('cursos/create', [CursoController::class,'create'])->name('cursos.create');

Route::post('cursos',[CursoController::class,'store'])->name('cursos.store');/*ruta de quien va a manejar el formulario
y que esta como metodo store en CursoController.

Route::get('users/{idcurso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');
//creo el metodo edit en en controlador

Route::get('cursos/{curso}',[CursoController::class,'show'])->name('cursos.show');

Route::put('cursos/{idcurso}',[CursoController::class,'update'])->name('cursos.update');

Route::delete('cursos/{idcurso}', [CursoController::class,'destroy'])->name('cursos.destroy');*/
Route::resource('cursos',CursoController::class);
//paso la url que identifica a todos, cursos, y el controlador que administra la url, no los metodos
//si quiero modificar las rutas que crea el metodo resource, busco resourceVerbs en la pag de laravel

Route::view('nosotros','nosotros')->name('nosotros');