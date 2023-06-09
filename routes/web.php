<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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


Route::get('/students', [StudentController::class, 'index']);  
Route::get('/students/create', [StudentController::class, 'create']);  
Route::post('/students/store', [StudentController::class, 'store']);
Route::get('/students/{id}', [StudentController::class, 'show']);
Route::get('/students/edit/{id}', [StudentController::class, 'edit']);
Route::patch('/students/update/{id}',[StudentController::class, 'update']);
Route::delete('/students/delete{id}', [StudentController::class, 'destroy']); 