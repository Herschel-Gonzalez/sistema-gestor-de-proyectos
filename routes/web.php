<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ActividadController;

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

Route::controller(UserController::class)->group(function(){
    Route::get('users','users')->name('users');
    Route::get('create','create')->name('create');
    Route::post('store','store')->name('store');
    Route::get('/users/{user_id}', 'edit')->name('edit');
    Route::post('users/update','update')->name('update');
    Route::get('/users/delete/{user_id}', 'delete')->name('delete');
    Route::post('/users/filtro','filtro')->name('filtro');
    //Route::get('/users/{user_id}', 'edit')->name('edit');
    
});

//Route::POST('/users/filtro',[UserController::class,'filtro']);

Route::controller(ProjectController::class)->group(function(){
    Route::get('projects','projects')->name('projects');
    Route::get('create-project','create')->name('create-project');
    Route::post('registrar-proyecto','store')->name('registrar-proyecto');
    Route::get('edit_project{project_id}','edit')->name('edit_project');
    Route::post('update-project','update')->name('update-project');
    Route::post('/projects/filtro-proyecto','filtroProyecto')->name('filtroProyecto');
    //Route::get('/users/{user_id}', 'edit')->name('edit');
    
});

Route::controller(ActividadController::class)->group(function(){
    Route::get('/projectos{idproyecto}','actividades_proyecto')->name('actividades_proyecto'); 
    Route::get('projects/nueva-actividad{project_id}','nueva_actividad')->name('nueva_actividad'); 
    Route::post('asignar-actividad','store')->name('asignar-actividad');
    Route::get('projects/editar-actividad{actividad_id}','editar_actividad')->name('editar_actividad'); 
    Route::post('update-actividad','update')->name('update-actividad');
    Route::get('projects/eliminar{actividad_id}', 'delete')->name('eliminar_actividad');
    Route::get('/actividades-usuario','actividades_usuario')->name('actividades_usuario'); 
    Route::get('/editar_actividad_usuario{idactividad}','editar_actividad_usuario')->name('editar_actividad_usuario');
    //Route::get('/users/{user_id}', 'edit')->name('edit');
    
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
