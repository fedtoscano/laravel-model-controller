<?php
use App\Http\Controllers\Guest\PageController as PageController;
use App\Http\Controllers\Guest\MovieController as MovieController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/movies', [MovieController::class, 'index'])->name("guest.movies");
