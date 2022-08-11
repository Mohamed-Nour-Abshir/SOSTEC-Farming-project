<?php

use App\Http\Livewire\AboutComonent;
use App\Http\Livewire\ContactComonent;
use App\Http\Livewire\HomeComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',HomeComponent::class);
Route::get('/about',AboutComonent::class);
Route::get('/contact',ContactComonent::class);

