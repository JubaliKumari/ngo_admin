<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CreaterUserController;
use App\Http\Controllers\Api\FoodTypeController;
use App\Http\Controllers\Api\DonationController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\MembershipTypeController;
use App\Http\Controllers\Api\MembershipController;

Route::post('/user-login', [AuthController::class, 'login']);
Route::post('/create-user', [CreaterUserController::class, 'store']);


Route::post('/food-types', [FoodTypeController::class, 'store']);
Route::put('/food-types/{id}', [FoodTypeController::class, 'update']);
Route::delete('/food-types/{id}', [FoodTypeController::class, 'destroy']);

// Public routes
Route::get('/food-types', [FoodTypeController::class, 'index']);
Route::get('/food-types/{id}', [FoodTypeController::class, 'show']);

Route::get('/membership-types', [MembershipTypeController::class, 'index']);
Route::get('/membership-types/{id}', [MembershipTypeController::class, 'show']);

// Protected routes
Route::middleware(['auth:create_user_api'])->group(function () {

    Route::get('/get-user/{id}', [CreaterUserController::class, 'show']);
    Route::put('/update-user/{id}', [CreaterUserController::class, 'update']);
    Route::delete('/delete-user/{id}', [CreaterUserController::class, 'destroy']);

    // Donations
    Route::post('/donate', [DonationController::class, 'store']);
    Route::get('/donations', [DonationController::class, 'index']);

    // Other resources

    Route::post('/membership-types', [MembershipTypeController::class, 'store']);
    Route::put('/membership-types/{id}', [MembershipTypeController::class, 'update']);
    Route::delete('/membership-types/{id}', [MembershipTypeController::class, 'destroy']);

    Route::post('/memberships', [MembershipController::class, 'store']);
    Route::get('/memberships{id}', [MembershipController::class, 'index']);
    Route::get('/memberships/{id}', [MembershipController::class, 'show']);
});
