<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ForumPostController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\DocumentController;

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

Route::get('/etudiant', [EtudiantController::class, 'index'])->name('etudiant.index')->middleware('auth');;
Route::get('/etudiant/{etudiant}', [EtudiantController::class, 'show'])->name('etudiant.show')->middleware('auth');;
Route::get('/etudiant-create', [EtudiantController::class, 'create'])->name('etudiant.create')->middleware('auth');;
Route::post('/etudiant-create', [EtudiantController::class, 'store']);
Route::get('/etudiant-edit/{etudiant}', [EtudiantController::class, 'edit'])->name('etudiant.edit');
Route::put('/etudiant-edit/{etudiant}', [EtudiantController::class, 'update']);
Route::delete('/etudiant-delete/{etudiant}', [EtudiantController::class, 'destroy'])->name('etudiant.delete');

// FORUM
Route::get('/forum', [ForumPostController::class, 'index'])->name('forum.index')->middleware('auth');
Route::get('/forum/{forumPost}', [ForumPostController::class, 'show'])->name('forum.show');
Route::get('/forum-create', [ForumPostController::class, 'create'])->name('forum.create')->middleware('auth');
Route::post('/forum-create', [ForumPostController::class, 'store']);
Route::get('/forum-edit/{forumPost}', [ForumPostController::class, 'edit'])->name('forum.edit');
Route::put('/forum-edit/{forumPost}', [ForumPostController::class, 'update']);
Route::delete('/forum-delete/{forumPost}', [ForumPostController::class, 'destroy'])->name('forum.delete');

// DOCUMENTS
Route::get('/document', [DocumentController::class, 'index'])->name('document.index')->middleware('auth');
Route::get('/document-create', [DocumentController::class, 'create'])->name('document.create')->middleware('auth');
Route::post('/document-create', [DocumentController::class, 'store']);
Route::get('/document-edit/{document}', [DocumentController::class, 'edit'])->name('document.edit');
Route::put('/document-edit/{document}', [DocumentController::class, 'update']);
Route::delete('/document-delete/{document}', [DocumentController::class, 'destroy'])->name('document.delete');


// AUTH
Route::get('/login', [CustomAuthController::class, 'index'])->name('login');
Route::post('/login', [CustomAuthController::class, 'authentification']);
Route::get('/logout', [CustomAuthController::class, 'logout'])->name('logout');





Route::get('/lang/{locale}', [LocalizationController::class, 'index'])->name('lang');
