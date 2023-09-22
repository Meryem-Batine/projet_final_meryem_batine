<?php

use App\Http\Controllers\admin\InfosController;
use App\Http\Controllers\Admin\MailController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HompeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ShowController;
use Faker\Container\ContainerBuilder;
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
Route::get('/show',[ShowController::class, 'index'])->name('show.index');
Route::get('/contact',[ContactController::class, 'index'])->name('contact.index');
Route::get('/panier',[PanierController::class, 'index'])->name('panier.index');


//^ mail___________________________________________________________________________________________________________________________________________________

Route::get("/backend/store/mailboxes",[MailController::class,"store"])->name("maili.store");
Route::post("/sendmail" , [HompeController::class , 'suscribemail'])->name("sendemail");
Route::get('/backend/mailbox',[MailController::class , 'index'])->middleware('role:admin')->name("mailBox.index");

// &Contact_____________________________________________________________________________________________________________________________________________
// ?BACK______________________________________________________________________________________________________________________________________________

// Route::put('/back/info/{info}',[InfoController::class , 'update'])->middleware('role:admin')->name("info.update");
Route::get('/back/info',[InfosController::class , 'index'])->name("info.index");
Route::put('/back/info/{info}',[InfosController::class , 'update'])->name("info.update");
Route::put('/backe/boxemail/check/{email}',[MailController::class , 'checkmail'])->middleware('role:admin')->name("mailbox.checkmail");

//^ROLE___________________________________________________________________________________________________________
Route::get('/back/roles',[UsersController::class , 'index'])->middleware('role:admin')->name("users.index");
Route::post('/back/roles/assignr/{user}', [UsersController::class, "assignrole"])->middleware('role:admin')->name("users.assignrole");
Route::delete("/user/{user}/roles/{role}", [UsersController::class, "removerole"])->middleware('role:admin')->name('user.role.remove');


//* shop______________________________________________________________________________________________________________________________

Route::get('/shop',[ShopController::class, 'index'])->name('shop.index');
Route::get('shop/category/{categoryId}', 'ShopController@showCategory')->name('shop.category');
Route::get('/shop/filter', [ShopController::class, 'showCategory'])->name('shop.filter');
Route::get('/shop/sort', [ShopController::class , "sort"])->name('shop.sort');
//!!!!!!!!!!!!!!!!!!!!!!!!!!! product___________________________________________________________________________________________________________________________________________________________
Route::get("/product/index", [ShopController::class, "index"])->name("product.index");

Route::get("/product/show/{product}",[ProductController::class,"show"])->name("product.show");
Route::post("/product/store", [ProductController::class, "store"])->name("product.store");
Route::put("/product/update/{product}", [ProductController::class, "update"])->name("product.update");
Route::delete("/product/delete/{product}", [ProductController::class, "destroy"])->name("product.destroy");

//******** Middleware****************/
route::middleware('auth','role:admin')->group(

    function(){
        Route::get("/product/backend",[ProductController::class,"admin"])->name("product_back.index");

    }
);

// **********************
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
