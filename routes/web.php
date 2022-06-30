<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\CreateMessageController;
use Illuminate\Support\Facades\Route;

use App\Mail\SecureMessageVeriCodeMail;


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

Route::get('/', [CreateMessageController::class, 'index'])->name('home.index');
Route::post('/', [CreateMessageController::class, 'store'])->name('home.store');

Route::get('/login/{id?}', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

Route::get('/note', [NoteController::class, 'index'])->name('note.index');

Route::get('/encryption-link', function () {
    return view('encryption-link');
})->name('encryption-link.index');

Route::get('/test', function () {
   return view('test');
});


Route::get('/mail', function () {

    $data = [
        'code' => 'qdasdasd8123kasd',
    ];

    return new SecureMessageVeriCodeMail($data);
});
