<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller0051;
use App\Http\Controllers\UsersExport;

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
Route::get('home0051', [Controller0051::class, 'home']);
Route::get('export0051', [Controller0051::class, 'export']);