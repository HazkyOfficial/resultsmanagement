<?php
use App\Http\Controllers\Navigation;
use App\Http\Controllers\ConDatabase;
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

// Route::get('/', function () {
//     return view('home');
// });

//Navigation Parts===========================================
Route::get('/',[Navigation::class, 'home']);
Route::get('/results',[Navigation::class, 'results']);
Route::get('/student',[Navigation::class, 'student']);
Route::get('/class',[Navigation::class, 'class']);
Route::get('/teacher',[Navigation::class, 'teacher']);
Route::get('/subject',[Navigation::class, 'subject']);
Route::get('/result',[Navigation::class, 'result']);
Route::get('/admin',[Navigation::class, 'admin']);
Route::get('/about',[Navigation::class, 'about']);
Route::get('/contact',[Navigation::class, 'contact']);
//===========================================================

//Data Connection============================================
Route::post('addclass',[ConDatabase::class,'addclass']);
Route::post('editclass',[ConDatabase::class,'editclass']);
Route::get('delete/{c}',[ConDatabase::class,'delete'])->name('delete');