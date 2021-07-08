<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodoController::class,'index']);
Route::prefix('/todo')->group(function(){
  Route::POST('/create',[TodoController::class,'create']);
  Route::POST('/update',[TodoController::class,'update']);
  Route::GET('/delete',[TodoController::class,'delete']);
});
