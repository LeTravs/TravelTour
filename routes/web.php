<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BookingController as AdminBookingController;
use App\Http\Controllers\Admin\TravelPackageController as AdminTravelPackageController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\BookingController;
use App\Http\Controllers\GuestLoginController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TravelPackageController as GuestTravelPackageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes(['register' => false]);

Route::group(['middleware' => ['is_admin', 'auth'], 'prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('bookings', AdminBookingController::class)->only(['index', 'destroy']);
    Route::resource('travel_packages', AdminTravelPackageController::class)->except('show');
    Route::resource('travel_packages.galleries', GalleryController::class)->except(['create', 'index', 'show']);
    Route::resource('categories', CategoryController::class)->except('show');
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');
});

Route::get('guests', [GuestController::class, 'index'])->name('admin.guests.index');

Route::get('/guest/register', [GuestLoginController::class, 'showRegistrationForm'])->name('guest.register');
Route::post('/guest/register', [GuestLoginController::class, 'register'])->name('guest.register');

Route::get('/guest/login', [GuestLoginController::class, 'showLoginForm'])->name('guest.login');
Route::post('/guest/login', [GuestLoginController::class, 'login'])->name('guest.login');

Route::get('/guest/homepage', [GuestController::class, 'index'])->name('guest.homepage');

Route::get('admin/login', function () {
    return view('guest.admin_login');
})->name('admin.login');
Route::get('guest/login', function () {
    return view('guest.guest_login');
})->name('guest.login');

Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::get('travel-packages', [GuestTravelPackageController::class, 'index'])->name('travel_package.index');
Route::get('travel-packages/{travel_package:slug}', [GuestTravelPackageController::class, 'show'])->name('travel_package.show');
Route::get('contact', function() {
    return view('contact');
})->name('contact');

Route::get('booking', [BookingController::class, 'create'])->name('booking.create');
Route::post('booking', [BookingController::class, 'store'])->name('booking.store');
