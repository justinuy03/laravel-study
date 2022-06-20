<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

// contact index
Route::get('/',[ContactController::class, 'index'])->name('contacts.index');
Route::get('/contacts',[ContactController::class, 'index'])->name('contacts.index');

//contact create and store/save
Route::get('/contacts/create',[ContactController::class, 'create'])->name('contacts.create');
Route::post('/contacts',[ContactController::class, 'store'])->name('contacts.store');

// contact show
Route::get('/contacts/{id}',[ContactController::class, 'show'])->name('contacts.show');

// update contact
Route::get('/contacts/{id}/edit',[ContactController::class, 'edit'])->name('contacts.edit');
Route::put('/contacts/{id}',[ContactController::class, 'update'])->name('contacts.update');

// delete contact
Route::delete('/contacts/{id}',[ContactController::class, 'destroy'])->name('contacts.destroy');
