<?php

use App\Http\Controllers\AdminRouteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PublicRouteController;
use App\Http\Controllers\UserRouteController;

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



Route::get('/',[PublicRouteController::class,'welcome_get']);
Route::post('/comment-post',[PublicRouteController::class,'comment_post'])->name('comment_post');

// Linklendirme
Route::get('/indir',[PublicRouteController::class,'dowland_get'])->name('dowland_get');
Route::get('/hakkimizda',[PublicRouteController::class,'about_get'])->name('about_get');
Route::get('/sss',[PublicRouteController::class,'sos_get'])->name('sos_get');
Route::get('/iletisim',[PublicRouteController::class,'contact_get'])->name('contact_get');
Route::get('/ornek-video',[PublicRouteController::class,'demo_video_get'])->name('demo_video_get');
Route::get('/basinda-biz',[PublicRouteController::class,'my_get'])->name('my_get');


Route::get('/lgs-puan-hesaplama',[PublicRouteController::class,'lgspoint']);
Route::get('/dgs-puan-hesaplama',[PublicRouteController::class,'dgspoint']);
Route::get('/ayt-puan-hesaplama',[PublicRouteController::class,'tytpoint']);
Route::get('/tyt-puan-hesaplama',[PublicRouteController::class,'aytpoint']);


Route::get('/kvkk',[PublicRouteController::class,'kvkk_get'])->name('kvkk_get');
Route::get('/cerez-politikasi',[PublicRouteController::class,'cookie_get'])->name('cookie_get');
Route::get('/egitmen-aydinlatma-metni',[PublicRouteController::class,'teacher_text_get'])->name('teacher_text_get');
Route::get('/bd-akademi-ilgili-kisi-basvuru',[PublicRouteController::class,'bd_get'])->name('bd_get');


// Paketler
Route::get('/paketler',[PublicRouteController::class,'publicpacket_get'])->name('publicpacket_get');
Route::get('/paket/{list}',[PublicRouteController::class,'publicpacketlist_get'])->name('publicpacketlist_get');
Route::get('/paket-al/{slug}/{id}',[PublicRouteController::class,'packetbuy_get'])->name('packetbuy_get');

Route::post('/invocie-post',[PublicRouteController::class,'invocie_post'])->name('invocie_post');
Route::post('/iyzico-post/{menu_slug}/{order}',[PublicRouteController::class,'iyzico_post'])->name('iyzico_post');

Route::post('/threedsecurity-post/{user_id}/{order}/{price}',[PublicRouteController::class,'threedsecurity'])->name('threedsecurity');



Auth::routes(['verify' => true]);
// Öğrenci kayıt | Giriş sistemi
Route::get('/kayit-ol',[PublicRouteController::class,'signup_get'])->name('signup_get');
Route::get('/giris-yap',[PublicRouteController::class,'signin_get'])->name('signin_get');
Route::post('/sign-up-post',[PublicRouteController::class,'signup_post'])->name('signup_post');
Route::post('/sign-in-post',[PublicRouteController::class,'signin_post'])->name('signin_post');


// Öğretmen giriş sistemi
Route::get('bdakademi-giris',[LoginController::class,'Adminloginview']);
Route::post('admin-login-post',[LoginController::class,'Adminloginpost'])->name('adminloginpost');


Route::get('video-izle/{id}',[AdminRouteController::class,'videowatch'])->name('videowatch');

// Öğretmen raoute yönetimi
Route::group(['middleware' => ['bdadmin'], 'prefix' => '/admin'], function () {
    Route::get('/', [AdminRouteController::class,'admindash']);
    Route::get('/paketlerim', [AdminRouteController::class,'packetlist']);
    Route::get('/paket/kategori/{id}', [AdminRouteController::class,'packettitle'])->name('packettitle');

    Route::post('/packet-title-save/{id}',[AdminRouteController::class, 'packettitlesave'])->name('packettitlesave');
    Route::get('/video-ekle/{id}', [AdminRouteController::class,'videosend'])->name('videosend');
    Route::post('/video-send-post/{id}',[AdminRouteController::class,'videosendpost'])->name('videosendpost');

    Route::get('/test-olustur/{id}', [AdminRouteController::class,'test_get'])->name('test_get');
    Route::post('/test-save/{id}', [AdminRouteController::class,'test_post'])->name('test_post');
});

Route::group(['middleware' => ['useradmin'], 'prefix' => '/ogrenci'], function () {
    Route::get('/', [UserRouteController::class,'dash_get']);

    Route::get('/video-izle/{id}', [UserRouteController::class,'video_get']);
});





