<?php

use App\Http\Controllers\AccountTypeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/accounts', [AccountTypeController::class, 'index']);
// Route::put('/accounts/add', [AccountTypeController::class, 'store']);
// Route::resource(['accounts'=> AccountTypeController::class]);
Route::resource('accounts',\App\Http\Controllers\AccountTypeController::class);
// Route::resources(['systemtables' => SystemTableController::class
