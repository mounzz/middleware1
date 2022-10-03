<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('accueil');
});

Route::get('/backoffice', [BackController::class, "index"]);
Route::get('/articles', [ArticleController::class, "create"]);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::post("/backoffice", [ArticleController::class, "store"]);
Route::get("/backofficeEdit/{id}", [ArticleController::class, "edit"]);
Route::delete("/articles/{id}/delete", [ArticleController::class, "destroy"]);
Route::put("/backofficeEdit/{id}/update", [ArticleController::class, "update"]);


Route::get('/contactpage',[ContactController::class,'index'])->middleware(['auth']);
Route::post('/sendMsg',[ContactController::class,'store'])->middleware(['auth']);
