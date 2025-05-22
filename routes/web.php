<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GastronomyController;

// Ruta principal
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rutas del blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');

// Rutas de gestión de viajes (protegidas por autenticación)
Route::middleware(['auth'])->group(function () {
    Route::get('/trips', [TripController::class, 'index'])->name('trips.index');
    Route::get('/trips/create', [TripController::class, 'create'])->name('trips.create');
    Route::post('/trips', [TripController::class, 'store'])->name('trips.store');
    Route::get('/trips/{id}', [TripController::class, 'show'])->name('trips.show');
    Route::get('/trips/{id}/edit', [TripController::class, 'edit'])->name('trips.edit');
    Route::put('/trips/{id}', [TripController::class, 'update'])->name('trips.update');
    Route::delete('/trips/{id}', [TripController::class, 'destroy'])->name('trips.destroy');
});

// Rutas de autenticación manuales
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/gastronomy', [GastronomyController::class, 'index'])->name('gastronomy.index');
Route::get('/gastronomy/{id}', [GastronomyController::class, 'show'])->name('gastronomy.show');

// Rutas de la agencia de viajes
Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/search-results', function () {
    // Obtener parámetros de la búsqueda
    $destination = request()->get('destination');
    $date = request()->get('date');
    
    return view('search-results', [
        'destination' => $destination,
        'date' => $date
    ]);
})->name('search-results');

// Rutas del panel de administración (solo para admins)
Route::middleware(['auth', 'is_admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [\App\Http\Controllers\AdminController::class, 'index'])->name('index');
    Route::get('/user/{id}/edit', [\App\Http\Controllers\AdminController::class, 'edit'])->name('user.edit');
    Route::put('/user/{id}', [\App\Http\Controllers\AdminController::class, 'update'])->name('user.update');
    Route::delete('/user/{id}', [\App\Http\Controllers\AdminController::class, 'destroy'])->name('user.destroy');
});
