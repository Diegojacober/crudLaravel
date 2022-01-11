<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TarefasController;
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
Route::get('/',[HomeController::class,'__invoke']);

Route::prefix('/tarefas')->group(function() {

    Route::get('/',[TarefasController::class,'index'])->name('tarefas.index');//listagem de tarefas

    Route::get('add',[TarefasController::class,'add'])->name('tarefas.add');//tela de adição de nova tarefa
    Route::post('add',[TarefasController::class,'addAction']);//ação de adição de nova tarefa

    Route::get('edit/{id}',[TarefasController::class,'edit'])->name('tarefas.edit');//tela de edição;
    Route::post('edit/{id}',[TarefasController::class,'editAction']);//ação de edição

    Route::get('delete/{id}',[TarefasController::class,'delete'])->name('tarefas.delete');//ação de deletar

    Route::get('marcar/{id}',[TarefasController::class,'done'])->name('tarefas.done'); //marcar resolvido ou não
});
