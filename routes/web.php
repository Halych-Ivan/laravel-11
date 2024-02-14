<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\Agromaster\IndexController::class, 'index'])->name('home');
Route::get('/contact', [\App\Http\Controllers\Agromaster\IndexController::class, 'contact'])->name('contact');

Route::prefix('/admission')->name('admission')->controller(\App\Http\Controllers\Agromaster\AdmissionController::class)->group(function () {
    Route::get('/', 'admission')->name('');
    Route::get('/confirmation', 'confirmation')->name('.confirmation');
});

Route::prefix('/education')->name('education.')->controller(\App\Http\Controllers\Agromaster\EducationController::class)->group(function () {
    Route::get('/schedule', 'schedule')->name('schedule');
    Route::get('/session', 'session')->name('session');
    Route::get('/lists', 'lists')->name('lists');
    Route::get('/details', 'details')->name('details');
    Route::get('/reference', 'reference')->name('reference');
});

Route::prefix('/science')->name('science.')->controller(\App\Http\Controllers\Agromaster\ScienceController::class)->group(function () {
    Route::get('/conference', 'conference')->name('conference');
    Route::get('/vsdemm', 'vsdemm')->name('vsdemm');
});



Route::get('/admin', [\App\Http\Controllers\Admin\IndexController::class, 'index'])->name('admin');




Route::get('/laravel', function () {
    return view('welcome');
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
