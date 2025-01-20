<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\CardsController;


// Route::get('/cards/create', [CardController::class, 'create'])->name('cards.create');
// Route::get('/cards/{id}/edit', [CardController::class, 'edit'])->name('cards.edit');

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

Route::get('/', 'CardsController@index');


Route::get('/', function () {
    $cards = DB::table('cards')->get();
    return view('index', compact('cards'));
});

Route::get('card', function () {
    return view('cards.create');
});

Route::get('/cards', [CardsController::class, 'index'])->name('cards.index');
Route::post('/cards', [CardsController::class, 'store'])->name('cards.store');

