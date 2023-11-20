<?php

use App\Http\Controllers\Page\ProfilePage\Profile\DestroyController;
use App\Http\Controllers\Page\ProfilePage\Profile\IndexController;
use App\Http\Controllers\Page\ProfilePage\Profile\ShowController;
use App\Http\Controllers\Page\ProfilePage\Profile\UpdateController;
use App\Http\Controllers\Page\ProfilePage\Profile\UpdatePasswordController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/', [App\Http\Controllers\Page\indexPage\IndexController::class, 'index'])->name('/.index');

//Страница Информация
Route::get('information.mdr', [App\Http\Controllers\Page\InfoPage\InfoMainController::class, 'index'])->name('information.index');
Route::get('information/information-dlya-pokupateley.mdr', [App\Http\Controllers\Page\InfoPage\InfoDlyaPokupateleyController::class, 'index'])->name('pokupateli.index');
Route::get('information/kak-oformit-zakaz.mdr', [App\Http\Controllers\Page\InfoPage\KakOformitZakazController::class, 'index'])->name('zakaz.index');
Route::get('information/obmen-i-vozvrat.mdr', [App\Http\Controllers\Page\InfoPage\ObmenVozvratController::class, 'index'])->name('obmen.index');
Route::get('information/personalnye-dannye.mdr', [App\Http\Controllers\Page\InfoPage\PersonalnyeDannyeController::class, 'index'])->name('personality.index');
Route::get('information/publichnaya-offerta.mdr', [App\Http\Controllers\Page\InfoPage\PublichnayaOffertaController::class, 'index'])->name('offerta.index');
Route::get('information/cookies.mdr', [App\Http\Controllers\Page\InfoPage\CookiesController::class, 'index'])->name('cookies.index');

//Страница Сервис
Route::get('service.mdr', [App\Http\Controllers\Page\ServicePage\ServiceMainController::class, 'index'])->name('service.index');
Route::get('service/oplata.mdr', [App\Http\Controllers\Page\ServicePage\OplataController::class, 'index'])->name('oplata.index');
Route::get('service/dostavka.mdr', [App\Http\Controllers\Page\ServicePage\DeliveryController::class, 'index'])->name('delivery.index');
Route::get('service/samovyvoz.mdr', [App\Http\Controllers\Page\ServicePage\SamovyvozController::class, 'index'])->name('samovyvoz.index');
Route::get('service/sborka.mdr', [App\Http\Controllers\Page\ServicePage\SborkaController::class, 'index'])->name('sborka.index');

//Страница Личный кабинет
Route::group(['namespace' => 'App\Http\Controllers\Page\ProfilePage\Profile'], function(){
    Route::get('profile.mdr', 'IndexController@index')->name('profile.index');
    Route::get('profile/{familia}_{name}_{father}.mdr', 'ShowController@show')->name('profile.show');
    Route::put('profile/update.mdr', 'UpdateController@userUpdate')->name('profile.update');
    Route::put('profile/update-password.mdr', 'UpdatePasswordController@updatePassword')->name('profilePassword.update');
    Route::delete('profile/destroy/{user}.mdr', 'DestroyController@destroy')->name('profile.destroy');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
