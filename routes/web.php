<?php

use Illuminate\Support\Facades\Route;
use App\Models\Application\FoodType;
use App\Http\Controllers\Api\DonationController;
use App\Http\Controllers\Api\FoodTypeController;

/*
|--------------------------------------------------------------------------
| Home
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('login');
});

/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| Food Types
|--------------------------------------------------------------------------
*/

Route::get('/food-types', function () {
    return view('foodType');
})->name('food-types.index');

Route::get('/food-types/create', function () {
    return view('foodTypeCreate');
})->name('food-types.create');

Route::post('/food-types/store', [FoodTypeController::class, 'store'])
    ->name('food-types.store');

/*
|--------------------------------------------------------------------------
| Donations
|--------------------------------------------------------------------------
*/
Route::get('/membership-types', function () {
    return view('membershipType');
})->name('membership-types.index');

Route::get('/membership-types/create', function () {
    return view('membershipTypeCreate');
})->name('membership-types.create');
Route::get('/Donations', function () {

    $foodTypes = FoodType::where('status', 1)->get();

    return view('donation', compact('foodTypes'));
})->name('donations');

Route::post('/donation/store', [DonationController::class, 'store'])
    ->name('donation.store');

require __DIR__ . '/auth.php';
