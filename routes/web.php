<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasteController;

Route::view('/', 'welcome');

Route::view('/archive', 'archive');

Route::view('/welcome', 'welcome');

Route::post('/welcome', [PasteController::class, 'addPaste']);

Route::get('/archive', [PasteController::class, 'showPastes']);

Route::get('/paste/{id}', [PasteController::class, 'showData']);
