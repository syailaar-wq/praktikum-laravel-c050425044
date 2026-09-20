<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatakuliahController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/matakuliah/create', [MatakuliahController::class, 'create']);
Route::post('/matakuliah/store', [MatakuliahController::class, 'store']);