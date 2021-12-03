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
