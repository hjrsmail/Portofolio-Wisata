<?php

use Illuminate\Support\Facades\Route;
use App\Models\Culinary;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\TourismController;


Route::get('/', function () {
    return view('index');
});

Route::get('/', [HomeController::class, 'index']); 


Route::get('/sambutan', function () {
    return view('infopublik.about');
});

Route::get('/sejarah', function () {
    return view('infopublik.sejarah');
});

Route::get('/visimisi', function () {
    return view('infopublik.visimisi');
});

Route::get('/struktur-organisasi', function () {
    return view('infopublik.struktur');
});


Route::get('/about', function () {
    return view('infopublik.about');
})->name('about');




// Route untuk daftar berita dengan pencarian
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{news:slug}', [NewsController::class, 'show'])->name('news.show');

// Route untuk daftar potensi wisata 
Route::get('/tourism', [TourismController::class, 'index'])->name('tourism.index');
Route::get('/tourism/{tourism:slug}', [TourismController::class, 'show'])->name('tourism.show');



Route::get('/galeri', [HomeController::class, 'showAll'])->name('galeri.showAll');


Route::get('/activities', [ActivityController::class, 'index'])->name('activities.index');
Route::get('/activities/{activities:slug}', [ActivityController::class, 'show'])->name('activities.show');
