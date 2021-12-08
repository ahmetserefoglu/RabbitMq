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
    $services = DB::table('services')->get();
    $images = Multipic::all();
    //print_r($brands);
    //\App\Jobs\PingJob::dispatch($brands->toJson());
    return view('home', compact('brands','abouts','images','services'));
})->name('anasayfa');


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

Route::get('e-fatura',function (){
    $brands = DB::table('brands')->get();
    $abouts = DB::table('home_abouts')->first();
    $services = DB::table('services')->get();
    $efatura = DB::table('efatura')->first();
    $images = Multipic::all();
    //print_r($brands);
    //\App\Jobs\PingJob::dispatch($brands->toJson());
    return view('efatura', compact('brands','abouts','images','services','efatura'));
})->name('efatura');


Route::get('e-arsiv',function (){
    $brands = DB::table('brands')->get();
    $abouts = DB::table('home_abouts')->first();
    $services = DB::table('services')->get();
    $efatura = DB::table('efatura')->where('span','=','arsiv')->first();
    $images = Multipic::all();
    //print_r($brands);
    //\App\Jobs\PingJob::dispatch($brands->toJson());
    return view('efatura', compact('brands','abouts','images','services','efatura'));
})->name('earsiv');

Route::get('kimlere-zorunlu',function (){
    $brands = DB::table('brands')->get();
    $abouts = DB::table('home_abouts')->first();
    $services = DB::table('services')->get();
    $efatura = DB::table('efatura')->where('span','=','efatura')->first();
    $efaturalar = DB::table('efatura')->where('span','=','efatura')->get();
    $earsiv= DB::table('efatura')->where('span','=','earsiv')->first();
    $earsivler= DB::table('efatura')->where('span','=','earsiv')->get();
    $images = Multipic::all();
    //print_r($brands);
    //\App\Jobs\PingJob::dispatch($brands->toJson());
    return view('zorunlu', compact('brands','abouts','images','services','efatura','efaturalar','earsivler','earsiv'));
})->name('zorunlu');

Route::get('neden-ecza-faturaya-gecmeliyim',function (){
    $brands = DB::table('brands')->get();
    $abouts = DB::table('home_abouts')->first();
    $services = DB::table('services')->get();
    $efatura = DB::table('efatura')->where('span','=','efatura')->first();
    $efaturalar = DB::table('efatura')->where('span','=','efatura')->get();
    $earsiv= DB::table('efatura')->where('span','=','earsiv')->first();
    $earsivler= DB::table('efatura')->where('span','=','earsiv')->get();
    $nedenler= DB::table('faq')->where('span','=','neden')->get();
    $images = Multipic::all();
    //print_r($brands);
    //\App\Jobs\PingJob::dispatch($brands->toJson());
    return view('neden', compact('brands','abouts','images','services','efatura','efaturalar','earsivler','earsiv','nedenler'));
})->name('neden');

Route::get('sss',function (){
    $brands = DB::table('brands')->get();
    $abouts = DB::table('home_abouts')->first();
    $services = DB::table('services')->get();
    $efatura = DB::table('efatura')->where('span','=','efatura')->first();
    $efaturalar = DB::table('efatura')->where('span','=','efatura')->get();
    $earsiv= DB::table('efatura')->where('span','=','earsiv')->first();
    $earsivler= DB::table('efatura')->where('span','=','earsiv')->get();
    $nedenler= DB::table('faq')->where('span','=','neden')->get();
    $sorular= DB::table('faq')->where('span','=','faq')->get();
    $images = Multipic::all();
    //print_r($brands);
    //\App\Jobs\PingJob::dispatch($brands->toJson());
    return view('faq', compact('brands','abouts','images','services','efatura','efaturalar','earsivler','earsiv','nedenler','sorular'));
})->name('faq');

Route::get('e-defter',function (){
    $brands = DB::table('brands')->get();
    $abouts = DB::table('home_abouts')->first();
    $services = DB::table('services')->get();
    $efatura = DB::table('efatura')->where('span','=','efatura')->first();
    $efaturalar = DB::table('efatura')->where('span','=','efatura')->get();
    $earsiv= DB::table('efatura')->where('span','=','earsiv')->first();
    $earsivler= DB::table('efatura')->where('span','=','earsiv')->get();
    $edefter= DB::table('edefter')->where('condition','=','nedir')->first();
    $edefterler= DB::table('edefter')->where('condition','=','faq')->get();
    $endefterler= DB::table('edefter')->where('condition','=','neden')->get();
    $sorular= DB::table('faq')->where('span','=','faq')->get();
    $images = Multipic::all();
    //print_r($brands);
    //\App\Jobs\PingJob::dispatch($brands->toJson());
    return view('edefter', compact('brands','edefter','abouts','images','services','efatura','efaturalar','earsivler','earsiv','endefterler','edefterler','sorular'));
})->name('edefter');

Route::get('fiyatlandirma',function (){
    $brands = DB::table('brands')->get();
    $abouts = DB::table('home_abouts')->first();
    $services = DB::table('services')->get();
    $efatura = DB::table('efatura')->where('span','=','efatura')->first();
    $efaturalar = DB::table('efatura')->where('span','=','efatura')->get();
    $earsiv= DB::table('efatura')->where('span','=','earsiv')->first();
    $earsivler= DB::table('efatura')->where('span','=','earsiv')->get();
    $fiyatlar= DB::table('fiyatlar')->get();
    $images = Multipic::all();
    //print_r($brands);
    //\App\Jobs\PingJob::dispatch($brands->toJson());
    return view('fiyatlar', compact('brands','abouts','images','services','efatura','efaturalar','earsivler','earsiv','fiyatlar'));
})->name('fiyatlandirma');


Route::get('musteri-yorumlarimiz',function (){
    $brands = DB::table('brands')->get();
    $abouts = DB::table('home_abouts')->first();
    $services = DB::table('services')->get();
    $efatura = DB::table('efatura')->where('span','=','efatura')->first();
    $efaturalar = DB::table('efatura')->where('span','=','efatura')->get();
    $earsiv= DB::table('efatura')->where('span','=','earsiv')->first();
    $earsivler= DB::table('efatura')->where('span','=','earsiv')->get();
    $fiyatlar= DB::table('fiyatlar')->get();
    $musteriler= DB::table('musteri_yorumlar')->get();
    $images = Multipic::all();
    //print_r($brands);
    //\App\Jobs\PingJob::dispatch($brands->toJson());
    return view('musteri', compact('brands','abouts','images','services','efatura','efaturalar','earsivler','earsiv','fiyatlar','musteriler'));
})->name('musteri');



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
Route::get('/iletisim', [\App\Http\Controllers\ContactController::class, 'Contact'])->name('iletisim');
Route::post('/contact/form', [\App\Http\Controllers\ContactController::class, 'ContactForm'])->name('contact.form');

Route::middleware(['auth:sanctum'])->get('/dashboard', function () {
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
