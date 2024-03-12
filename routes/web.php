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

    $users = [
        [
            'first-name' => 'Alice',
            'last-name' => 'Rossi',
        ],
        [
            'first-name' => 'Elena',
            'last-name' => 'Bianchi',
        ],
        [
            'first-name' => 'Chiara',
            'last-name' => 'Ferrari',
        ]
    ];

    return view('home', compact('users'));
});
