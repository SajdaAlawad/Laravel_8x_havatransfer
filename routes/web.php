<?php

use App\Http\Controllers\admin\MessageController;
use App\Http\Controllers\AirportController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RezervationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home2', function () {
    return view('welcome');
});
Route::redirect('/anasayfa', '/home')->name('anasayfa');

//Route::redirect('/anasayfa', '/home');


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/home', [HomeController::class, 'index'])->name('homepage');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/location', [HomeController::class, 'location'])->name('location');
Route::get('/rezervation', [HomeController::class, 'rezervation'])->name('rezervation');

Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/getproduct', [HomeController::class, 'getproduct'])->name('getproduct');
Route::get('/product/{id}/{slug}', [HomeController::class, 'product'])->name('product');
Route::get('/categoryproducts/{id}/{slug}', [HomeController::class, 'categoryproducts'])->name('categoryproducts');
Route::get('/addtocart/{id}', [HomeController::class, 'addtocart'])->name('addtocart');


Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');
// admin
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');

    Route::get('category', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add', [App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('category/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
    Route::get('category/edit/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/delete/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('category/show', [App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');


    Route::prefix('product')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\ProductController::class, 'index'])->name('admin_products');
        Route::get('create', [\App\Http\Controllers\Admin\ProductController::class, 'create'])->name('admin_product_add');
        Route::post('store', [\App\Http\Controllers\Admin\ProductController::class, 'store'])->name('admin_product_store');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'edit'])->name('admin_product_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'update'])->name('admin_product_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'destroy'])->name('admin_product_delete');
        Route::get('show', [\App\Http\Controllers\Admin\ProductController::class, 'show'])->name('admin_product_show');

    });


    Route::prefix('messages')->group(function () {
        Route::get('/', [MessageController::class, 'index'])->name('admin_message');
        Route::get('edit/{id}', [MessageController::class, 'edit'])->name('admin_message_edit');
        Route::post('update/{id}', [MessageController::class, 'update'])->name('admin_message_update');
        Route::get('delete/{id}', [MessageController::class, 'destroy'])->name('admin_message_delete');
        Route::get('show', [MessageController::class, 'show'])->name('admin_message_show');

    });

    #product image galllery
    Route::prefix('image')->group(function () {
        Route::get('create/{product_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
        Route::post('store/{product_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
        Route::get('delete/{id}/{product_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
        Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');

    });

    #review
    Route::prefix('review')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\ReviewController::class, 'index'])->name('admin_review');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'update'])->name('admin_review_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'destroy'])->name('admin_review_delete');
        Route::get('show/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'show'])->name('admin_review_show');

    });
    #setting
    Route::get('setting', [App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
    Route::post('setting/update', [App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');
#city
//    Route::resource('/city', CityController::class);
    Route::get('/city', [CityController::class,'index'])->name('admin_city');
    Route::get('/city/add', [CityController::class,'create'])->name('admin_city_create');
    Route::post('/city/store', [CityController::class,'store'])->name('admin_city_store');
    Route::get('/city/{city}/edit', [CityController::class,'edit'])->name('admin_city_edit');
    Route::post('/city/{city}/update', [CityController::class,'update'])->name('city.update');
    Route::get('/city/{city}/delete',[CityController::class,'delete'])->name('delete.city');
#airport
   // Route::resource('/airport', AirportController::class);
    Route::get('/airport', [AirportController::class,'index'])->name('admin_airport');
    Route::get('/airport/add', [AirportController::class,'create'])->name('admin_airport_create');
    Route::post('/airport/store', [AirportController::class,'store'])->name('admin_airport_store');
    Route::get('/airport/{airport}/edit', [AirportController::class,'edit'])->name('admin_airport_edit');
    Route::post('/airport/{airport}/update', [AirportController::class,'update'])->name('airport.update');
    Route::get('/airport/{airport}/delete',[AirportController::class,'delete'])->name('delete.airport');
#Fags
    Route::prefix('faq')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\FaqController::class, 'index'])->name('admin_faq');
        Route::get('create', [\App\Http\Controllers\Admin\FaqController::class, 'create'])->name('admin_faq_add');
        Route::post('store', [\App\Http\Controllers\Admin\FaqController::class, 'store'])->name('admin_faq_store');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'edit'])->name('admin_faq_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'update'])->name('admin_faq_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'destroy'])->name('admin_faq_delete');
        Route::get('show', [\App\Http\Controllers\Admin\FaqController::class, 'show'])->name('admin_faq_show');

    });
});

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('myprofile');
    Route::get('/myreviews', [UserController::class, 'myreviews'])->name('myreviews');
    Route::get('/destroymyreviews/{id}', [ReviewController::class, 'destroymyreviews'])->name('user_review_delete');

});


Route::middleware('auth')->prefix('user')->namespace('user')->group(function () {
    Route::get('/profile', [UserController::class, 'index'])->name('userprofile');

    #location
    Route::prefix('location')->group(function () {
        Route::get('/', [LocationController::class, 'index'])->name('user_location');
        Route::post('/store', [LocationController::class, 'store'])->name('user_location_store');
        Route::put('update/{id}', [LocationController::class, 'update'])->name('user_location_update');
        Route::get('delete/{id}', [LocationController::class, 'destroy'])->name('user_location_delete');
    });
    #rezervation
    Route::prefix('rezervation')->group(function () {
        Route::get('/', [RezervationController::class, 'index'])->name('user_rezervations');
        Route::get('create', [RezervationController::class, 'create'])->name('user_rezervation_add');
        Route::post('/store', [RezervationController::class, 'store'])->name('user_rezervation_store');
        Route::get('edit/{id}', [RezervationController::class, 'edit'])->name('user_rezervation_edit');
        Route::post('update/{id}', [RezervationController::class, 'update'])->name('user_rezervation_update');
        Route::get('delete/{id}', [RezervationController::class, 'destroy'])->name('user_rezervation_delete');
        Route::get('show', [RezervationController::class, 'show'])->name('user_rezervation_show');

    });

});

Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect()->intended('/');
//    return view('dashboard');
})->name('dashboard');

Route::get('select-vehcile/{id}', [LocationController::class, 'takeVehcile'])->name('selected_vechile');
