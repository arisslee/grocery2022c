<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/contacts', [homeController::class,'contacts'])->name('contacts');

/* Category */
Route::get('/addCategory', function () {
    return view('addCategory');
});

Route::post('/addCategory/store',[App\Http\Controllers\CategoryController::class,'add'])
->name('addCategory');

Route::get('/viewCategory',[App\Http\Controllers\CategoryController::class,'view'])
->name('viewCategory');

/* Product */
Route::get('/addProduct', function () {
    return view('addProduct',['categoryID'=>App\Models\Category::all()]);
});

Route::get('/addProductView',[App\Http\Controllers\ProductController::class,'addProductView'])
->name('addProductView');

Route::post('/addProduct/store',[App\Http\Controllers\ProductController::class,'add'])
->name('addProduct');

Route::get('/viewProduct',[App\Http\Controllers\ProductController::class,'view'])
->name('viewProduct');

Route::get('/editProduct/{id}',[App\Http\Controllers\ProductController::class,'edit'])
->name('editProduct');

Route::post('updateProduct',[App\Http\Controllers\ProductController::class,'update'])
->name('updateProduct');

Route::get('deleteProduct/{id}',[App\Http\Controllers\ProductController::class,'delete'])
->name('deleteProduct');

Route::get('/productDetail/{id}',[App\Http\Controllers\ProductController::class,'productdetail'])
->name('product.detail');

// Route::get('/products',[App\Http\Controllers\ProductController::class,'viewProduct'])
// ->name('products');

Route::post('/products',[App\Http\Controllers\ProductController::class,'searchProduct'])
->name('search.products');

Route::post('addCart',[App\Http\Controllers\CartController::class,'add'])
->name('add.to.cart');

Route::get('/myCart',[App\Http\Controllers\CartController::class,'view'])
->name('myCart');

Route::get('/myOrder',[App\Http\Controllers\OrderController::class,'view'])
->name('myOrder');

Route::get('/pdfReport',[App\Http\Controllers\OrderController::class,'pdfReport'])
->name('pdfReport');

Route::get('/meat',[App\Http\Controllers\ProductController::class,'meat'])
->name('meat');

Route::get('/vegetable',[App\Http\Controllers\ProductController::class,'vegetable'])
->name('vegetable');

Route::get('/fruit',[App\Http\Controllers\ProductController::class,'fruit'])
->name('fruit');

Route::get('/productList',[App\Http\Controllers\ProductController::class,'list'])
->name('productList');

Route::post('/checkout',[App\Http\Controllers\PaymentController::class,'paymentPost'])
->name('payment.post');

Route::get('contact-us', [ContactController::class, 'index']);

Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');