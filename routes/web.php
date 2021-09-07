<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestoruntCntlr;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/','RestoruntCntlr@index'); --> this is the old method for laravel 7


Route::get('/list',[RestoruntCntlr::class,'list']);
Route::view('/add', 'add');
Route::post('/add', [RestoruntCntlr::class,'add']);
Route::get('/delete/{id}', [RestoruntCntlr::class,'delete']);
Route::get('/edit/{id}', [RestoruntCntlr::class,'edit']);
Route::post('/update',[RestoruntCntlr::class,'update']);

//use this for laravel 8 *HERE {user} is to takr input from url AND? is for default input  ==> NOTE THIS
Route::get('/{user?}',[RestoruntCntlr::class,'index']);
