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
    $comicsArr = config('comics');
    $nav = config('nav');
    return view('home', ['comicsArr' => $comicsArr], ['nav' => $nav]);
})->name('home');

Route::get('/products/{id}', function ($id) {
    $nav = config('nav');
    $comic = null;
    foreach (config('comics') as $value) {
        if ($value['id'] == $id) {
            $comic = $value;
            break;
        }
    }

    if ($comic) {
        return view('product', [
            'comic'     => $comic,
        ], ['nav' => $nav]);
    } else {
        abort(404);
    }
})->name('product');
