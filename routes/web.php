<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('array', function () {
    $data = ['PHP', 'Java', 'C', 'JavaScript', 'Dart'];

    for ($i = 0; $i < count($data); $i++) {
        echo "Bahasa pemrograman ke-" . ($i + 1) . ": " . $data[$i] . "<br>";
    }
    
});