<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactWebController;
use App\Http\Controllers\API\ContactController;

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



Route::get('/', [ContactWebController::class, 'index'])->name('contacts.index');
Route::get('/contacts/create', [ContactWebController::class, 'create'])->name('contacts.create');
Route::post('/contacts', [ContactWebController::class, 'store'])->name('contacts.store');
Route::delete('/contacts/{id}', [ContactWebController::class, 'destroy'])->name('contacts.destroy');
Route::get('/contacts/{id}/edit', [ContactWebController::class, 'edit'])->name('contacts.edit');
Route::put('/contacts/{id}', [ContactWebController::class, 'update'])->name('contacts.update');

