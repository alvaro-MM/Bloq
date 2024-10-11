<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*Archivo de rutas aqui se indica como llegar a las diferentes vistas que dentro de cada una habra una forma de navegar entre ellas*/

Route::view('/', 'welcome')->name('home');

Route::view('/contacto', 'contact')->name('contact');

Route::get('/post', [PostController::class, 'index'])->name('post.index');

Route::view('/nosotros', 'about')->name('about');

Route::get('post/create', [PostController::class,'create'])->name('post.create');

Route::get('post/{post}', [PostController::class,'show'])->name('post.show');

Route::get('post/{post}/edit', [PostController::class,'edit'])->name('post.edit');

Route::post('post/store', [PostController::class,'store'])->name('post.store');








Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
