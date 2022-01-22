<?php

use App\Http\Controllers\CarsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PostController;

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

/* Return String */
// Route::get('/users', function () {
//   return "welcome user";
// });

/* Return Array */
// Route::get('/users', function () {
//     return ['a', 'b', 'c'];
// });

/* Return Response JSON */
// Route::get('/users', function () {
//     return response()->json([
//         'name' => 'rizal',
//         'course' => 'PHP'
//     ]);
// });

/* Return to Route (/) */
// Route::get('/users', function () {
//     return redirect('/');
// });

/* Return View Home */
// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/products', [ProductsController::class, 'index']);
// Route::get('/products/about', [ProductsController::class, 'about']);

/*pattern by id*/
// Route::get('/products/{id}', [ProductsController::class, 'show'])->where('id', '[0-9]+') ;

/*pattern by string*/
// Route::get('/products/{name}/{id}', [ProductsController::class, 'show'])->where([
//     'name' => '[a-z]+',
//     'id' => '[0-9]+'
// ]) ;
/*get by string*/
// Route::get('/products/{name}', [ProductsController::class, 'show']) ;
Route::get('/', [PagesController::class, 'index'])->name('index');

Route::get('/products', [ProductsController::class, 'index'])->name('products');

Route::get('/about', [PagesController::class, 'about']);

Route::get('/post', [PostController::class, 'index']);

Route::resource('/cars', CarsController::class);