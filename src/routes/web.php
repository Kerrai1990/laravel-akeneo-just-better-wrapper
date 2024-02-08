<?php

use Illuminate\Support\Facades\Route;
use JustBetter\AkeneoClient\Client\Akeneo;

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

Route::get('/', function () {

    $akeneo = new Akeneo(
        env("AKENEO_URL"),
        env("AKENEO_CLIENT_ID"),
        env("AKENEO_SECRET"),
        env("AKENEO_USERNAME"),
        env("AKENEO_PASSWORD")
    );
    $product = $akeneo->getProductApi()->get('hat');

    var_dump($product);
    die;

    return view('welcome');
});
