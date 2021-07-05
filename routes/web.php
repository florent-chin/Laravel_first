<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodoController::class,'index']);
Route::prefix('/todo')->group(function(){
  Route::get('/create',[TodoController::class,'create']);
  Route::get('/update',[TodoController::class,'update']);
  Route::get('/delete',[TodoController::class,'delete']);
});
