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

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        'mahasiswaList' => [
            [
                'name' => 'Aries Dharma Patria',
                'email' => 'aries.patria@binus.ac.id'
            ],
            [
                'name' => 'Janson Tan',
                'email' => 'jensen.tan@binus.ac.id'
            ],
            [
                'name' => 'Joshua Sirusstara',
                'email' => 'joshua.sirusstara@binus.ac.id'
            ],[
                'name' => 'Antony',
                'email' => 'antony004@binus.ac.id'
            ],[
                'name' => 'Clement Win Tanudjaja',
                'email' => 'clement.tanudjaja@binus.ac.id'
            ],
        ]

    , 'image' => 'logo.png']);
});

Route::get('/blog', function () {
    return view('blog');
});
