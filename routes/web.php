<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BestController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeatuerController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LetterController;
use App\Http\Controllers\MoatazController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\TestController;
use App\Models\Contact;
use App\View\Components\CartItem;
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
//Route::get('front/cart' , [FrontController::class , 'cart'])->name('cart');
// Front Routes 
Route::post('cart' , [CartItemController::class , 'addToCart'])->name('addto');
Route::prefix('front')->name('front.')->group(function(){
    Route::view('/register' , 'front.auth.register')->middleware('guest')->name('register');
    Route::view('/login' , 'front.auth.login')->middleware('guest')->name('login');
    Route::middleware('auth')->controller(FrontController::class)->group(function(){

        //Route::view('/index' , 'front.index')->name('index');
        Route::get('/index' , 'index')->name('index');
        //=============================
        Route::post('/contacts' , 'contacts')->name('message');
        //===============================

        Route::get('/cart' , 'cart')->name('cart');
        //==========================================
        Route::post('subscriber' , 'subscriber')->name('subscriber');
        Route::view('/shop' , 'front.shop')->name('shop');
        Route::view('/shopdea' , 'front.shopdeatailes')->name('shopdea');
       // Route::view('/cart' , 'front.cart')->name('cart');
        Route::view('/checkout' , 'front.checkout')->name('checkout');
        Route::view('/test' , 'front.testmonials')->name('test');
        Route::view('/contact' , 'front.contact')->name('contact');
    });
  
    //return view('/index' , 'index');
});

// Admin Routes 

Route::prefix('admin')->name('admin.')->group(function(){
   // Route::view('/' , 'admin.index');
    Route::get('/' , AdminController::class)->name('index');
    //=====================
    //Featuers Routes
    Route::controller(FeatuerController::class)->group(function(){
        Route::resource('featuers' , FeatuerController::class);
    });
    //============================================
    
    //Products Routes========
    Route::controller(ProductController::class)->group(function(){
        Route::resource('products' , ProductController::class);
    });
    //=================================
    //Best Products ======================
    Route::controller(BestController::class)->group(function(){
        Route::resource('best' , BestController::class);
    });

    //=====================================
    //Moataz Routes =======================
    Route::controller(MoatazController::class)->group(function(){
        Route::resource('moataz' , MoatazController::class);
    });

    //=====================================
    //Letters Routes ======================

    Route::controller(LetterController::class)->group(function(){
        Route::resource('letter' , LetterController::class);
    });

    //=====================================

    //Contact Routes=======================
    Route::controller(ContactController::class)->group(function(){
        Route::resource( 'contact',ContactController::class);
    });
    //=====================================
    //Subscriber Routes ===================
    Route::controller(SubscriberController::class)->group(function(){
        Route::resource('subscriber' , SubscriberController::class)->only(['index' , 'show' , 'destroy']);
    });
    //=====================================
    Route::view('/login' , 'admin.auth.login')->name('login');
    require __DIR__.'/adminauth.php';

});

Route::controller(FeatuerController::class)->group(function(){
    Route::resource('featuers' , FeatuerController::class);
});


Route::controller(TestController::class)->group(function(){
    Route::resource('test' , TestController::class);
});

//=============================================
Route::get('/', function () {
    return view('welcome');
});


require __DIR__.'/auth.php';
