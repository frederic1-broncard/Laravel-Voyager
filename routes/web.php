<?php
use App\Http\Controllers\PostsController;
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
 // ROUTES POSTS----------------------------------------


Route::get('/', [PostsController::class, 'index'])
    ->name('posts.index');
Route::get('/{post}/{titre}.html',[PostsController::class, 'show'])
    ->where(['post'=> '[1-9][0-9]*','titre'=> '[a-z0-9][a-z0-9\-]*'])
    ->name('posts.show');
//Route::get('/', function () {

  //  $posts= App\Models\Post::orderBy('id','asc')->take(10)->get();
  //  return view('posts.index', compact('posts'));
//});

// ROUTES CONTACT ----------------------------------------

Route::get('/contact', function () {

    return view('contact.index');
});

// ROUTE VOYAGER----------------------------------------
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
/* Action*/

