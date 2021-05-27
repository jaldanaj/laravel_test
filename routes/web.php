<?php
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CitiesController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

Route::get('/run-command', function () {
    Artisan::call('migrate');
    Artisan::call('db:seed');
    return redirect('/login')->withStatus('Migrate and seeds loaded successfully');
})->name('run-command');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    // clientes
    Route::resource('clientes', ClientController::class);

    // cities
    Route::resource('cities', CitiesController::class);

    // users
    Route::resource('users', UserController::class);
});


require __DIR__.'/auth.php';
