<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ClientStatusController;
use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use App\Models\Subscription;
use App\Models\Client;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\QueryController;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

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

Route::get('/lang/{locale}', function ($locale) {
    Cookie::queue('lang', $locale);
    return redirect()->back();
})->name('lang');

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/about-us', [FrontendController::class, 'aboutUs'])->name('aboutUs');
Route::get('/contact-us', [FrontendController::class, 'contactUs'])->name('contactUs');
Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('country/{country:name}', [FrontendController::class, 'country'])->name('showCountry');
Route::post('country/query', [FrontendController::class, 'postQuery'])->name('postQuery');
Route::post('subscription', [FrontendController::class, 'subscription'])->name('subscription');
Route::post('contactForm', [FrontendController::class, 'contactForm'])->name('contactForm');
Route::get('clientStatus', [FrontendController::class, 'clientStatus'])->name('clientStatus');
Route::post('clientStatusCheck', [FrontendController::class, 'clientStatusCheck'])->name('clientStatusCheck');

Route::post('ckeditor/image_upload', [CKEditorController::class, 'upload'])->name('CKEditorUpload');


Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => array('auth', 'moderator')
], function () {
    Route::get('/', function () {
        View::share(['clients' => Client::all()]);
        return view('admin.index');
    })->name('home');
    Route::resource('/country', CountryController::class);
    Route::resource('/client', ClientController::class);
    Route::resource('/client-status', ClientStatusController::class);
    Route::get('/query', [QueryController::class, 'index'])->name('query');
    Route::get('/query/{query}', [QueryController::class, 'show'])->name('query.show');
    Route::get('/contactRequest', [ContactFormController::class, 'index'])->name('contactRequest');
    Route::get('/contactRequest/{contactRequest}', [ContactFormController::class, 'show'])->name('contactRequest.show');
    Route::get('/subscription', function () {
        View::share(['emails' => Subscription::paginate()]);
        return view('admin.subscription');
    })->name('subscription');

    Route::get('/export', [ExportController::class, 'export'])->name('export');

});

Auth::routes();
