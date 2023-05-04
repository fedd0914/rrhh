<?php

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

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

$routes = ['licencia'];

foreach ($routes as $route) {
    Route::view($route, 'livewire.backend.' . $route . '.list-' . $route)->name('admin.' . $route . '.index');
    Route::view($route . '/create', 'livewire.backend.' . $route . '.new-' . $route)->name('admin.' . $route . '.create');
    Route::view($route . '/edit/{id}', 'livewire.backend.' . $route . '.edit-' . $route)->name('admin.' . $route . '.edit');
}


Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::view('forms', 'forms')->name('forms');
    Route::view('cards', 'cards')->name('cards');
    Route::view('charts', 'charts')->name('charts');
    Route::view('buttons', 'buttons')->name('buttons');
    Route::view('modals', 'modals')->name('modals');
    Route::view('tables', 'tables')->name('tables');
    Route::view('calendar', 'calendar')->name('calendar');
});
