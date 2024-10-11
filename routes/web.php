<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ChatController;


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

/*
Admin Auth Route start

 */
Route::controller(AuthController::class)->middleware(['back-prevent-history','guest'])->group(function () {
    Route::get('/','index')->name('login');
    Route::post('login','doLogin')->name('check.creditials');
});

/* 
Admin Auth Route end
 */
/* 
 Admin Before Login Rote Start 
 */
Route::middleware(['back-prevent-history','auth'])->group(function () {


});

    Route::get('/ip',function (){
        dd(Request::ip(),$_SERVER);
    });

/* 
 Admin Before Login Rote end 
 */
