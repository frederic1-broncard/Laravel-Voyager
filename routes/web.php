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

    $posts= App\Models\Post::all();//ne pas oublier de mettre le namespace sous peine d'embêtement
    return view('posts.index', compact('posts'));
});







Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
/* Action*/

