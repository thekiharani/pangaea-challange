<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Subscriptions
Route::get('subscriptions', [\App\Http\Controllers\SubscriptionController::class, 'index'])
    ->name('subscriptions.index');
Route::post('subscribe/{topic}', [\App\Http\Controllers\SubscriptionController::class, 'store'])
    ->name('subscriptions.store');


// Topics
Route::get('topics', [\App\Http\Controllers\TopicController::class, 'index'])
    ->name('topics.index');
Route::post('topics', [\App\Http\Controllers\TopicController::class, 'store'])
    ->name('topics.store');

// Simulation endpoints
Route::post('students', [\App\Http\Controllers\SimulationController::class, 'students'])
    ->name('students.simulate');
Route::post('teachers', [\App\Http\Controllers\SimulationController::class, 'teachers'])
    ->name('teachers.simulate');
Route::post('catering', [\App\Http\Controllers\SimulationController::class, 'catering'])
    ->name('catering.simulate');
