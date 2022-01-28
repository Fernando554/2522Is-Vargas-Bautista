<?php

use Illuminate\Support\Facades\Route;
use App\Models\Universidad;
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
    $uni = new Universidad();
    $uni->nombre = "Fernando Vargas Bautista";
    $uni->edad = "19";
    $uni->pais = "Mexico";
    return view('blog.index',['uni' => $uni]);
})->name('inicio');

Route::get('/generic', function () {
    $uni = new Universidad();
    $uni->nombre = "Fernando Vargas Bautista";
    $uni->edad = "19";
    $uni->pais = "Mexico";
    return view('blog.generic',['uni' => $uni]);
})->name('generic');

Route::get('/elements', function () {
    $uni = new Universidad();
    $uni->nombre = "Fernando Vargas Bautista";
    $uni->edad = "19";
    $uni->pais = "Mexico";
    return view('blog.elements',['uni' => $uni]);
})->name('elements');

Route::get('/prueba', function () {
    return view('blog.prueba');
})->name('prueba');
