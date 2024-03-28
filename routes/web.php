<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Front\ProfileController;
use App\Http\Controllers\Front\ShowProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


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

//Route::group(['middleware' => ['auth:web','has.permission']],function (){
//
//    });

Route::prefix('emails')->group(function (){

    Route::get('register', function () {
        $order=\App\Models\Industry::query()->find(17);
        return new App\Mail\IndustriesOrder($order);
    });

});

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/',[ShowProductController::class,'index'])->name('home');
    Route::get('blogs',[ShowProductController::class,'blog'])->name('blogs');
    Route::get('show-post/{id}',[ShowProductController::class,'showPost'])->name('show-post');
    Route::get('show-product/{id}',[ShowProductController::class,'show'])->name('show-product');
    Route::post('comments/{id}',[CommentController::class, 'store'])->middleware('auth:user');
    Route::post('register',[UserController::class,'store'])->name('register');

    Route::get('category-product/{category}',[ShowProductController::class,'allCategory'])->name('category.product');
    Route::get('all-products',[ShowProductController::class,'allProducts'])->name('all-products');
    Route::get('selection', [App\Http\Controllers\HomeController::class, 'index'])->name('selection');
    Route::view('blocked','frontend.blocked')->name('blocked');
    Route::view('about','frontend.about')->name('about');


    Route::resource('profile',ProfileController::class)->middleware('auth:user,industry');
    Route::get('show-orders/{id}',[OrdersController::class,'show'])->middleware('auth:user')->name('show-orders');
    //    Auth::routes();
    Route::get('login/{type}',[LoginController::class,'loginForm'])->name('loginView');
    Route::post('login',[LoginController::class,'login'])->name('login');
    Route::get('logout/{type}',[LoginController::class,'logout'])->name('logout');

    Route::post('product_order',[HomeController::class,'product_order'])->name('product_order')->middleware('auth:user');

    Route::get('redirect/{driver}', [LoginController::class,'redirectToProvider']);
    Route::get('{driver}/callback', [LoginController::class,'handleProviderCallback']);

    Route::get('cart',[CartController::class,'showCart'])->name('cart.show');
    Route::post('products/{product}',[CartController::class,'updateCart'])->name('cart.update');
    Route::get('addToCart/{product}',[CartController::class,'addToCart'])->name('add.cart');
    Route::post('product/{product}',[CartController::class,'removeCart'])->name('cart.remove');



    Route::prefix('cms/admin')->middleware(['auth:admin,industry','has.permission'])->group(function (){
        Route::view('/','cms.dashboard')->name('dashboard');
        Route::view('upload','cms.product.upload');
        Route::resource('categories', CategoryController::class);
        Route::resource('subcategories', SubcategoryController::class);
        Route::resource('products', ProductController::class);
        Route::resource('admins',AdminController::class);
        Route::resource('orders',OrdersController::class);
        Route::resource('roles',RoleController::class);
        Route::resource('permissions',PermissionController::class);
        Route::resource('posts',PostController::class);
        Route::resource('sections',SectionController::class);
        Route::resource('sponsors',SponsorController::class);
        Route::get('get_subcategories', [ProductController::class, 'loadSubCategories'])->name('get_subcategories');
        Route::get('get_industry', [ProductController::class, 'loadIndustries'])->name('get_industries');
        Route::get('get_roles', [AdminController::class, 'loadRoles'])->name('get_roles');
        Route::get('slider/index',[SliderController::class,'index'])->name('slider.index');
        Route::get('slider/create',[SliderController::class,'create'])->name('slider.create');
        Route::post('slider',[SliderController::class,'store'])->name('slider.store');
        Route::delete('slider/{id}',[SliderController::class,'destroy'])->name('slider.destroy');
        Route::resource('users',UserController::class);
//        Route::get('orders',[CartController::class,'userOrder'])->name('industries_orders.index');
        Route::get('mail',[MailController::class ,'create'])->name('mail.create');
        Route::post('mail',[MailController::class,'store'])->name('mail.store');
    });

    Route::prefix('dashboard')->group(function (){
        Route::post('/login',[AdminAuthController::class,'login'])->name('admin-login');
        Route::get('/login',[AdminAuthController::class,'showLoginView'])->name('admin.login_view');
    });

    Route::prefix('dashboard')->middleware('auth:admin,industry')->group(function (){
        Route::get('/logout',[AdminAuthController::class,'logout'])->name('admin.logout')->middleware('auth:admin');

    });
});





//Route::get('orders/{userid}/{orderid}',[CartController::class,'viewUserOrder'])->name('user.industries_orders');
//Route::post('charge',[CartController::class,'charge'])->name('cart.charge');
