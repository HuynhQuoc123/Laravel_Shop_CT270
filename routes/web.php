<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProducerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\UserController;





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





require __DIR__.'/auth.php';

//Guest______________________-

Route::get('/checkLogin', [
    HomeController::class,
    'checkLogin'
]);

Route::get('/', [
    HomeController::class,
    'index'
])->name('home');

Route::get('/product', [
    HomeController::class,
    'showListProductUserNormal'
]);

Route::get('/product/detail/{id}', [
    HomeController::class,
    'showProductDetail'
]);



Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'IsAdmin']], function(){
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //Banner___________________________________________
    Route::get('/banner', [
        BannerController::class,
        'showListBanner'
    ]);

    Route::get('/banner/edit/{id}', [
        BannerController::class,
        'showEditBanner'
    ]);

    Route::post('/banner/edit', [
        BannerController::class,
        'editBanner'
    ])->name('editBanner');

    //User
    Route::get('/users', [
        UserController::class,
        'showListUser'
    ]);
    //Producer____________
    Route::get('/producer', [
        ProducerController::class,
        'showListProducer'
    ]);

    Route::get('/producer/add', [
        ProducerController::class,
        'showAddProducer'
    ]);

    Route::get('/producer/delete/{id}', [
        ProducerController::class,
        'deleteProducer'
    ]);

    Route::post('/addProducer', [
        ProducerController::class,
        'addProducer'
    ])->name('addProducer');

    Route::get('/producer/edit/{id}', [
        ProducerController::class,
        'showEditProducer'
    ]);

    
    Route::post('/producer/edit', [
        ProducerController::class,
        'editProducer'
    ])->name('editProducer');

    //Category_____________________________________
    Route::get('/category', [
        CategoryController::class,
        'showListCategory'
    ]);

    Route::get('/category/add', [
        CategoryController::class,
        'showAddCategory'
    ]);

    Route::post('/addCategory', [
        CategoryController::class,
        'addCategory'
    ])->name('addCategory');

    Route::get('/category/delete/{id}', [
        CategoryController::class,
        'deleteCategory'
    ]);

    Route::get('/category/edit/{id}', [
        CategoryController::class,
        'showEditCategory'
    ]);

    Route::post('/category/edit', [
        CategoryController::class,
        'editCategory'
    ])->name('editCategory');

    //Product_______________________________________
    Route::get('/product', [
        ProductController::class,
        'showListProduct'
    ]);
    Route::get('/product/add', [
        ProductController::class,
        'showAddProduct'
    ]);
    Route::post('addProduct', [
        ProductController::class,
        'addProduct'
    ])->name('addProduct');

    Route::get('/product/delete/{id}', [
        ProductController::class,
        'deleteProduct'
    ]);

    Route::get('/product/edit/{id}', [
        ProductController::class,
        'showEditProduct'
    ]);
    Route::post('/product/edit', [
        ProductController::class,
        'editProduct'
    ])->name('editProduct');
        //Images
    Route::get('/product/addImage/{id}', [
        ProductController::class,
        'showAddGalleryImage'
    ]);

    Route::post('/product/addGallery', [
        ProductController::class,
        'addGalleryImage'
    ])->name('addGalleryImage');

    Route::get('/image/delete/{id}', [
        ProductController::class,
        'deleteImage'
    ]);
});


Route::get('/test1', function(){
    $aa = App\Models\Product::find(1)->producer->toArray();
    dd($aa);

});
Route::get('/test2', function(){
    $aa = App\Models\Producer::find(1)->producer_product->toArray();
    dd($aa);

});