<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ContactController;
use App\Models\Multipic;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
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

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');



Route::get('/', function () {
    $brands = DB::table('brands')->get();
    $abouts = DB::table('home_abouts')->first();
    $images = Multipic::all();
    return view('home', compact('brands','abouts','images'));
});


Route::get('/test',function (){
    try {
        dd(DB::connection());
    } catch (\Exception $e) {
        die("Could not connect to the database.  Please check your configuration. error:" . $e );
    }
    //return DB::connection('mysql');
});

/*Route::get('contact',function (){
    return view('contact');
});*/

Route::get('contact',[ContactController::class,'index'])->name('con');

Route::get('about',function (){
    return "This is About Page";
})->middleware('age');

Route::get('home',function (){
    return "This is Home Page";
});

// Category Controller
Route::get('/category/all', [CategoryController::class, 'AllCat'])->name('all.category');
Route::post('/category/add', [CategoryController::class, 'AddCat'])->name('store.category');

Route::get('/category/edit/{id}', [CategoryController::class, 'Edit']);
Route::post('/category/update/{id}', [CategoryController::class, 'Update']);
Route::get('/softdelete/category/{id}', [CategoryController::class, 'SoftDelete']);

Route::get('/category/restore/{id}', [CategoryController::class, 'Restore']);
Route::get('/pdelete/category/{id}', [CategoryController::class, 'Pdelete']);

/// For Brand Route
Route::get('/brand/all', [BrandController::class, 'AllBrand'])->name('all.brand');
Route::post('/brand/add', [BrandController::class, 'StoreBrand'])->name('store.brand');
Route::get('/brand/edit/{id}', [BrandController::class, 'Edit']);
Route::post('/brand/update/{id}', [BrandController::class, 'Update']);
Route::get('/brand/delete/{id}', [BrandController::class, 'Delete']);

// Multi Image Route
Route::get('/multi/image', [BrandController::class, 'Multpic'])->name('multi.image');
Route::post('/multi/add', [BrandController::class, 'StoreImg'])->name('store.image');

// Admin ALL Route
Route::get('/home/slider', [\App\Http\Controllers\HomeController::class, 'HomeSlider'])->name('home.slider');
Route::get('/add/slider', [\App\Http\Controllers\HomeController::class, 'AddSlider'])->name('add.slider');
Route::post('/store/slider', [\App\Http\Controllers\HomeController::class, 'StoreSlider'])->name('store.slider');

// Home About All Route
Route::get('/home/About', [\App\Http\Controllers\AboutController::class, 'HomeAbout'])->name('home.about');
Route::get('/add/About', [\App\Http\Controllers\AboutController::class, 'AddAbout'])->name('add.about');
Route::post('/store/About', [\App\Http\Controllers\AboutController::class, 'StoreAbout'])->name('store.about');
Route::get('/about/edit/{id}', [\App\Http\Controllers\AboutController::class, 'EditAbout']);
Route::post('/update/homeabout/{id}', [\App\Http\Controllers\AboutController::class, 'UpdateAbout']);
Route::get('/about/delete/{id}', [\App\Http\Controllers\AboutController::class, 'DeleteAbout']);

//Portfolio Page Route
Route::get('/portfolio', [\App\Http\Controllers\AboutController::class, 'Portfolio'])->name('portfolio');

// Amdin Contact Page Route
Route::get('/admin/contact', [\App\Http\Controllers\ContactController::class, 'AdminContact'])->name('admin.contact');
Route::get('/admin/add/contact', [\App\Http\Controllers\ContactController::class, 'AdminAddContact'])->name('add.contact');
Route::post('/admin/store/contact', [\App\Http\Controllers\ContactController::class, 'AdminStoreContact'])->name('store.contact');
Route::get('/admin/message', [\App\Http\Controllers\ContactController::class, 'AdminMessage'])->name('admin.message');

/// Home Contact Page Route
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'Contact'])->name('contact');
Route::post('/contact/form', [\App\Http\Controllers\ContactController::class, 'ContactForm'])->name('contact.form');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    //$users = App\Models\User::all(); ,compact('users'))
    return view('admin.index');
})->name('dashboard');
Route::get('/user/logout', [\App\Http\Controllers\BrandController::class, 'Logout'])->name('user.logout');

/// Chanage Password and user Profile Route
Route::get('/user/password', [\App\Http\Controllers\ChangePass::class, 'CPassword'])->name('change.password');
Route::post('/password/update', [\App\Http\Controllers\ChangePass::class, 'UpdatePassword'])->name('password.update');

// User Profile
Route::get('/user/profile', [\App\Http\Controllers\ChangePass::class, 'PUpdate'])->name('profile.update');
Route::post('/user/profile/update', [\App\Http\Controllers\ChangePass::class, 'UpdateProfile'])->name('update.user.profile');
