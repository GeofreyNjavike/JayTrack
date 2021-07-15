<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequirementController;
use App\Models\User;
use Illuminate\Support\Facades\DB;

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
    $requirements = DB::table('users')
    ->join('requirements', 'users.id', '=', 'requirements.user_id')
    ->get();
    $user = User::all();

    return view('welcome',compact('user','requirements'));
});

Route::post('send/requirements',[RequirementController::class,'sendRequirement'])->name('save-data');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
