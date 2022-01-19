<?php

use App\Http\Controllers\admin\MessageController;
use App\Http\Controllers\admin\RezervationlistController;
use App\Http\Controllers\AirportController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\admin\LocationController as AdminLocationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RezervationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
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
//Route::get('/rezervation', [HomeController::class, 'rezervation'])->name('rezervation');

Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/getproduct', [HomeController::class, 'getproduct'])->name('getproduct');
Route::get('/product/{id}/{slug}', [HomeController::class, 'product'])->name('product');
Route::get('/categoryproducts/{id}/{slug}', [HomeController::class, 'categoryproducts'])->name('categoryproducts');
Route::get('/addtocart/{id}', [HomeController::class, 'addtocart'])->name('addtocart');


Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');
//admin
Route::middleware('auth')->prefix('admin')->group(function () {
        // admin role
    Route::middleware('admin')->group(function(){
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');
    #category
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
    #location
      //  Route::resource('/location', AdminLocationController::class);
        Route::get('/location', [AdminLocationController::class,'index'])->name('admin_location');
        Route::get('/location/add', [AdminLocationController::class,'create'])->name('admin_location_create');
        Route::post('/location/store', [AdminLocationController::class,'store'])->name('admin_location_store');
        Route::get('/location/{location}/edit', [AdminLocationController::class,'edit'])->name('admin_location_edit');
        Route::post('/location/{location}/update', [AdminLocationController::class,'update'])->name('location.update');
        Route::get('/location/{location}/delete',[AdminLocationController::class,'delete'])->name('delete.location');

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

    #rezervation
    Route::prefix('rezervationlist')->group(function () {
        Route::get('/', [RezervationlistController::class,'index'])->name('admin_rezervationlist');
        Route::get('list/{status}', [RezervationlistController::class, 'list'])->name('admin_rezervationlist_list');
        Route::get('create', [RezervationlistController::class, 'create'])->name('admin_rezervationlist_add');
        Route::post('/store', [RezervationlistController::class, 'store'])->name('admin_rezervationlist_store');
        Route::get('edit/{id}', [RezervationlistController::class, 'edit'])->name('admin_rezervationlist_edit');
        Route::post('update/{id}', [RezervationlistController::class, 'update'])->name('admin_rezervationlist_update');
        Route::get('delete/{id}', [RezervationlistController::class, 'destroy'])->name('admin_rezervationlist_delete');
        Route::get('show/{id}', [RezervationlistController::class, 'show'])->name('admin_rezervation_show');
     });
  #admin.users
        Route::prefix('user')->group(function () {
            Route::get('/', [AdminUserController::class,'index'])->name('admin_users');
            Route::get('list/{status}', [AdminUserController::class, 'list'])->name('admin_user_list');
            Route::post('create', [AdminUserController::class, 'create'])->name('admin_user_add');
            Route::post('/store', [AdminUserController::class, 'store'])->name('admin_user_store');
            Route::get('edit/{id}', [AdminUserController::class, 'edit'])->name('admin_user_edit');
            Route::post('update/{id}', [AdminUserController::class, 'update'])->name('admin_user_update');
            Route::get('delete/{id}', [AdminUserController::class, 'destroy'])->name('admin_user_delete');
            Route::get('show/{id}', [AdminUserController::class, 'show'])->name('admin_user_show');
            Route::get('userrole/{id}', [AdminUserController::class, 'user_roles'])->name('admin_user_roles');
            Route::post('userrolestore/{id}', [AdminUserController::class, 'user_role_store'])->name('admin_user_role_add');
            Route::get('userroledelete/{userid}/{roleid}', [AdminUserController::class, 'user_role_delete'])->name('admin_user_role_delete');
        });
    }); #admin
}); #auth

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
        Route::get('/c2a/', [RezervationController::class, 'fromto'])->name('fromto');
        Route::get('create', [RezervationController::class, 'create'])->name('user_rezervation_add');
        Route::get('/c2a/{id}', [RezervationController::class, 'fromto_car'])->name('fromto_c');
        Route::get('create/{id}', [RezervationController::class, 'create_car'])->name('user_rezervation_add_c');
        Route::post('/store', [RezervationController::class, 'store'])->name('user_rezervation_store');
        Route::get('edit/{id}', [RezervationController::class, 'edit'])->name('user_rezervation_edit');
        Route::post('update/{id}', [RezervationController::class, 'update'])->name('user_rezervation_update');
        Route::get('delete/{id}', [RezervationController::class, 'destroy'])->name('user_rezervation_delete');
        Route::get('show', [RezervationController::class, 'show'])->name('user_rezervationlist_show');

    });

});

Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect()->intended('/');
//    return view('dashboard');
})->name('dashboard');

Route::get('select-vehcile/{id}/C2A', [RezervationController::class, 'C2A'])->name('C2A');
Route::get('select-vehcile/{id}/A2C', [RezervationController::class, 'A2C'])->name('A2C');
