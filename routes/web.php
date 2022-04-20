<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Contact;
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

Route::get('/',[PagesController::class,'home']);
Route::get('home',[PagesController::class,'home']);
Route::get('about',[PagesController::class,'about']);
Route::get('posts',[PagesController::class,'posts']);
Route::get('admin',[PagesController::class,'admin']);
Route::get('articles',[PagesController::class,'articles']);
//Route::get('contact',[PagesController::class,'contact']);


Route::get('admin/users/index', [Admin\UserController::class,'index']);
Route::get('admin/users/create', [Admin\UserController::class,'create']);
Route::post('admin/users/create', [Admin\UserController::class,'store']);
Route::get('admin/users/{user}/articles',[Admin\UserController::class,'show']);
Route::get('admin/users/{user}/sendmail',[Admin\UserController::class,'sendmail']);
Route::post('admin/users/{user}/sendmail',[Admin\UserController::class,'sendmail']);
Route::delete('admin/users/{user}',[Admin\UserController::class,'destroy']);


Route::get('admin/articles/index', [Admin\ArticleController::class,'index']);
Route::delete('admin/articles/{article}',[Admin\ArticleController::class,'destroy']);






Route::get('emailuser/{user}',[UserController::class,'mailForm']);
Route::post('admin/sendmail',[UserController::class,'mailuser']);

Route::get('contact',[ContactController::class,'create']);
Route::post('contact/{contact}',[ContactController::class,'store']);

Route::get('admin/articles/create',[ArticleController::class,'create']);
Route::post('admin/articles/create',[ArticleController::class,'store']);

Route::delete('admin/posts/{post}',[PostController::class,'destroy']);



Route::resource('posts', 'PostController');

