<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlluserController;
use App\Http\Controllers\HomeController;

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
    return view('ulogin');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::view('/ulogin', 'ulogin');

Route::view('/uregister', 'uregister')->name('uregister');
Route::post('/uregister', [HomeController::class, 'addData']);

Route::get('/alluser', [HomeController::class, 'show'])->name('alluser');

Route::get('/delete/{id}', [HomeController::class, 'delete']);

Route::get('edit/{id}', [HomeController::class, 'showData']);
Route::post('/update', [HomeController::class, 'update']);

Route::get('fetch/{id}', [HomeController::class, 'fetch']);
Route::get('/info/{id}', [HomeController::class, 'info']);

// Route::get('/getUsers/{id}/', function() {
//     $file = public_path()."/pdf/info.pdf";

//     $headers = array(
//         'Content-Type: application/pdf',
//     );

//     return Response::download($file, "info.pdf", $headers);
// });

Route::post('/showUser', [HomeController::class, 'showUser'])->name('showUser');

Route::get('/export', [HomeController::class, 'exportData'])->name('/export');