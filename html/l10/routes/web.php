<?php

use App\Models\Funcionario;
use App\Http\Controllers\FuncionarioController; 
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/funcionario', [FuncionarioController::class, "index"] )->name('funcionario.index');
Route::get('/funcionario/create', [FuncionarioController::class, "create"] )->name('funcionario.create');
Route::post('/funcionario/store', [FuncionarioController::class, "store"] )->name('funcionario.store');
Route::delete('/funcionario/delete/{id}', [FuncionarioController::class,"delete"] )->name('funcionario.delete');
Route::put('/funcionario/edit/{id}', [FuncionarioController::class,"edit"] )->name('funcionario.edit');
Route::put('/funcionario/update/{id}', [FuncionarioController::class,"update"] )->name('funcionario.update');
