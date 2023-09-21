<?php

use App\Http\Controllers\Admin\MailController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HompeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ShowController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//! Pages______________________________________________________________________________________________________________________________________________

Route::get('/', [HompeController::class, 'index'])->name('home.index');
Route::get('/shop',[ShopController::class, 'index'])->name('shop.index');
Route::get('/show',[ShowController::class, 'index'])->name('show.index');
Route::get('/contact',[ContactController::class, 'index'])->name('contact.index');
Route::get('/panier',[PanierController::class, 'index'])->name('panier.index');


//^ mail___________________________________________________________________________________________________________________________________________________
Route::post("/backend/store/mailboxes",[MailController::class,"store"])->name("maili.store");




// !mail
Route::post("/sendmail" , [HompeController::class , 'suscribemail'])->name("sendemail");
//~~ product__________________________________________________________
Route::get("/products/show/{product}", [ProductController::class, "show"])->name("product.show");


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
