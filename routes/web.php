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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::group(['middleware'=>'auth'], function () {

    Route::resources([
        'employees' => \App\Http\Controllers\EmployeeController::class,
        'sales' => \App\Http\Controllers\SaleController::class,

    ]);


   Route::get ('delete/sale/{id}',            [\App\Http\Controllers\SaleController::class, 'destroy'   ])->name('sales.delete');
   Route::get ('sales/order/{field}/{order}', [\App\Http\Controllers\SaleController::class, 'indexOrder'])->name('sales.indexOrder');
   Route::post('sales/order/{field}/{order}', [\App\Http\Controllers\SaleController::class, 'indexOrder'])->name('sales.indexOrder');
   Route::get('/lang/{lang}', [\App\Http\Controllers\LanguageController::class,'changeLanguage'])->name('changeLanguage');




});

require __DIR__.'/auth.php';


