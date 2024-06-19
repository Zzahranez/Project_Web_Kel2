<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\ReservationController;




// Rute lainnya
Route::get('/', function () {
    return view('dashboard');
});


Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact', function (Request $request) {
    return view('dashboard');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/reservasi', function () {
    return view('reservasi');
});
Route::get('/kebijakan', function () {
    return view('kebijakan');
});
Route::get('/kategori', function () {
    return view('kategori');
});
Route::get('/admin', function () {
    return view('admin');
});




//nampilan formlogin
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login.post');

Route::middleware(['auth'])->group(function () {
    Route::get('/admindash', [AdminController::class, 'index'])->name('admindash');
});


Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');



Route::prefix('admindash')->name('admin.')->group(function () {
    Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');
    Route::get('/reservations/{id}/edit', [ReservationController::class, 'edit'])->name('reservations.edit');
    Route::post('/reservations/{id}/update', [ReservationController::class, 'update'])->name('reservations.update');
    Route::delete('/reservations/{id}', [ReservationController::class, 'destroy'])->name('reservations.destroy');
});





