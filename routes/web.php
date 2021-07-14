<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\WishListComponent;

use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\Admin\AdminDashboard;
use App\Http\Livewire\User\UserDashboard;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\HeaderSearchComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminEditProductComponent;
use App\Http\Livewire\Admin\AdminHomeSlider;
use App\Http\Livewire\Admin\AdminAddHomeSlider;
use App\Http\Livewire\Admin\AdminEditHomeSlider;
use App\Http\Livewire\Admin\AdminCouponsComponent;
use App\Http\Livewire\Admin\AdminAddCouponsComponent;
use App\Http\Livewire\Admin\AdminEditCouponsComponent;






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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',HomeComponent::class)->name('index');
Route::get('/cart',CartComponent::class)->name('product.cart');
Route::get('/shop',ShopComponent::class)->name('shop');
Route::get('/checkout',CheckoutComponent::class);
Route::get('/product/{slug}',DetailsComponent::class)->name('product.details');
Route::get('/product-category/{category_id}',CategoryComponent::class)->name('product.category');
Route::get('/search',SearchComponent::class)->name('product.search');
Route::get('/wishlist',WishListComponent::class)->name('product.wishlist');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


Route::middleware(['auth:sanctum','verified'])->group(function(){
        Route::get('/user/Dashboard',UserDashboard::class)->name('user.dashboard');
});

Route::middleware(['auth:sanctum','verified','authadmin'])->group(function(){
    Route::get('/admin/Dashboard',AdminDashboard::class)->name('admin.dashboard');
    Route::get('/admin/categories',AdminCategoryComponent::class)->name('admin.categories');
    Route::get('/admin/category/add',AdminAddCategoryComponent::class)->name('admin.addcategory');
    Route::get('/admin/category/edit/{category_slug}',AdminEditCategoryComponent::class)->name('admin.editcategory');
    Route::get('/admin/products',AdminProductComponent::class)->name('admin.products');
    Route::get('/admin/product/add',AdminAddProductComponent::class)->name('admin.addproduct');
    Route::get('/admin/product/edit/{product_slug}',AdminEditProductComponent::class)->name('admin.editproduct');
    Route::get('/admin/sliders',AdminHomeSlider::class)->name('admin.sliders');
    Route::get('/admin/slider/add',AdminAddHomeSlider::class)->name('admin.addslider');
    Route::get('/admin/slider/edit/{slider_id}',AdminEditHomeSlider::class)->name('admin.editslider');
    Route::get('/admin/coupons',AdminCouponsComponent::class)->name('admin.coupons');
    Route::get('/admin/coupons/add',AdminAddCouponsComponent::class)->name('admin.addcoupons');
    Route::get('/admin/coupons/edit/{coupon_id}',AdminEditCouponsComponent::class)->name('admin.editcoupons');


});
