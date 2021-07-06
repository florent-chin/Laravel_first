<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodoController::class,'index']);
Route::prefix('/todo')->group(function(){
  Route::post('/create',[TodoController::class,'create']);
  Route::post('/update',[TodoController::class,'update']);
  Route::post('/delete',[TodoController::class,'delete']);
});
