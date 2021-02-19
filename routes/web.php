<?php
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentairesController;
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
/*Essai_variante_Fred*/

//Route::get('/', function () {

//  $posts= App\Models\Post::orderBy('id','asc')->take(10)->get();
//  return view('posts.index', compact('posts'));
//});


 // ROUTES POSTS----------------------------------------

Route::get('/', [PostsController::class, 'index'])
    ->name('posts.index');

Route::get('/{post}/{titre}.html',[PostsController::class, 'show'])
    ->where(['post'=> '[1-9][0-9]*','titre'=> '[a-z0-9][a-z0-9\-]*'])
    ->name('posts.show');

// ROUTES CONTACT ----------------------------------------

Route::get('/contact', function () {

    return view('contact.index');
});



// VIEW COMPOSER ----------------------------------------
View::composer('tags.index', function($view){
    $view->with('tags', App\Models\Tag::All());
});

View::composer('categories.index', function($view){
    $view->with('categories', App\Models\Category::All());
});
View::composer('commentaires.liste', function($view){
    $view->with('commentaires', App\Models\Commentaire::All());
});









/*#################################################################################################*/

/*View::composer('commentaires.index', function($view){
    $view->with('commentaires', App\Models\Commentaire::All());
});*/
// ROUTE VOYAGER----------------------------------------
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// ROUTE AJAX----------------------------------------
/* AJAX CHARGEMENT DES OLDER POSTS
PATTERN : /ajax/older-posts
CTRL: PostsController
ACTION: liste
*/
Route::get('/ajax/older-posts', '\App\Http\Controllers\PostsController@ajaxOlders')->name('posts.ajax.olders');

// ROUTES Ajax ----------------------------------------
/* AJAX CHARGEMENT DES commentaires
PATTERN : /ajax/insert
CTRL: PostsController
ACTION: insert
*/

Route::get('ajax/insert','\App\Http\Controllers\CommentairesController@ajaxInsert')->name('ajax.insert');








