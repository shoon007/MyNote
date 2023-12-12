<?php

use App\Http\Controllers\NoteController;
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
//note list page
Route::get('/', [NoteController::class, 'listPage'])->name('note#listPage');
//create note
Route::get('createPage/note', [NoteController::class, 'createNotePage'])->name('note#createPage');
Route::post('create/note', [NoteController::class, 'createNote'])->name('note#create');
//delete note
Route::get('delete/note/{id}', [NoteController::class, 'deleteNote'])->name('note#delete');
//note details
Route::get('details/note/{id}', [NoteController::class, 'detailsNote'])->name('note#details');
//edit note
Route::get('edit/note/{id}', [NoteController::class, 'editNote'])->name('note#edit');
Route::post('update/note', [NoteController::class, 'updateNote'])->name('note#update');
