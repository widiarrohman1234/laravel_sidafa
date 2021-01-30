<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\ClientProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AbsenmwsController;
use App\Http\Controllers\JanuariController;
use App\Http\Controllers\FebruariController;
use App\Http\Controllers\MaretController;
use App\Http\Controllers\AprilController;
use App\Http\Controllers\MeiController;
use App\Http\Controllers\JuniController;
use App\Http\Controllers\JuliController;
use App\Http\Controllers\AgustusController;
use App\Http\Controllers\SeptemberController;
use App\Http\Controllers\OktoberController;
use App\Http\Controllers\NovemberController;
use App\Http\Controllers\DesemberController;
use App\Http\Controllers\LaporanKomiteController;
use App\Http\Controllers\AdministrasiSantriBaruPondokController;
use App\Http\Controllers\AdministrasiSantriBaruFormalController;




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
    return view('login');
});

    //login Admin
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);

	//registration admin
Route::get('registration', [AuthController::class, 'showRegistration']);
Route::post('registration', [AuthController::class, 'storeRegistration']);

Route::prefix('admin')->middleware('auth')->group(function(){
			Route::get('dashboard', [UserController::class, 'dashboard']);
			Route::resource('user', UserController::class)->middleware('auth');
			Route::resource('santri', SantriController::class)->middleware('auth');
			Route::get('/laporanDataKomite', [LaporanKomiteController::class, 'index']);
			
				//januari
			Route::resource('januari', JanuariController::class)->middleware('auth');
			Route::resource('january', JanuariController::class)->middleware('auth');
			Route::get('januari/kwitansiThermo/{januari}', [JanuariController::class, 'kwitansiThermo']);
			Route::get('januari/kwitansiTinta/{januari}', [JanuariController::class, 'kwitansiTinta']);

				//februari
			Route::resource('februari', FebruariController::class)->middleware('auth');
			Route::resource('february', FebruariController::class)->middleware('auth');
			Route::get('februari/kwitansiThermo/{februari}', [FebruariController::class, 'kwitansiThermo']);
			Route::get('februari/kwitansiTinta/{februari}', [FebruariController::class, 'kwitansiTinta']);

				//maret
			Route::resource('maret', MaretController::class)->middleware('auth');
			Route::resource('march', MaretController::class)->middleware('auth');
			Route::get('maret/kwitansiThermo/{maret}', [MaretController::class, 'kwitansiThermo']);
			Route::get('maret/kwitansiTinta/{maret}', [MaretController::class, 'kwitansiTinta']);
			
				//april
			Route::resource('april', AprilController::class)->middleware('auth');
			Route::get('april/kwitansiThermo/{april}', [AprilController::class, 'kwitansiThermo']);
			Route::get('april/kwitansiTinta/{april}', [AprilController::class, 'kwitansiTinta']);

				//mei
			Route::resource('mei', MeiController::class)->middleware('auth');
			Route::resource('may', MeiController::class)->middleware('auth');
			Route::get('mei/kwitansiThermo/{mei}', [MeiController::class, 'kwitansiThermo']);
			Route::get('mei/kwitansiTinta/{mei}', [MeiController::class, 'kwitansiTinta']);
			
				//juni
			Route::resource('juni', JuniController::class)->middleware('auth');
			Route::resource('june', JuniController::class)->middleware('auth');
			Route::get('juni/kwitansiThermo/{juni}', [JuniController::class, 'kwitansiThermo']);
			Route::get('juni/kwitansiTinta/{juni}', [JuniController::class, 'kwitansiTinta']);

				//juli
			Route::resource('juli', JuliController::class)->middleware('auth');
			Route::resource('july', JuliController::class)->middleware('auth');
			Route::get('juli/kwitansiThermo/{juli}', [JuliController::class, 'kwitansiThermo']);
			Route::get('juli/kwitansiTinta/{juli}', [JuliController::class, 'kwitansiTinta']);

				//agustus
			//Route::resource('agustus', AgustusController::class)->middleware('auth');
			Route::get('agustus', [AgustusController::class, 'index']);
			Route::get('agustus/create', [AgustusController::class, 'create']);
			Route::post('agustus', [AgustusController::class, 'store']);
			Route::get('agustus/{agustus}', [AgustusController::class, 'show']);
			Route::get('agustus/{agustus}/edit', [AgustusController::class, 'edit']);
			Route::put('agustus/{agustus}', [AgustusController::class, 'update']);
			Route::delete('agustus/{agustus}', [AgustusController::class, 'destroy']);
			Route::get('agustus/kwitansiThermo/{agustus}', [AgustusController::class, 'kwitansiThermo']);
			Route::get('agustus/kwitansiTinta/{agustus}', [AgustusController::class, 'kwitansiTinta']);
			
				//september
			Route::resource('september', SeptemberController::class)->middleware('auth');
			Route::get('september/kwitansiThermo/{september}', [SeptemberController::class, 'kwitansiThermo']);
			Route::get('september/kwitansiTinta/{september}', [SeptemberController::class, 'kwitansiTinta']);

				//oktober
			Route::resource('oktober', OktoberController::class)->middleware('auth');
			Route::resource('october', OktoberController::class)->middleware('auth');
			Route::get('oktober/kwitansiThermo/{oktober}', [OktoberController::class, 'kwitansiThermo']);
			Route::get('oktober/kwitansiTinta/{oktober}', [OktoberController::class, 'kwitansiTinta']);

				//november
			Route::resource('november', NovemberController::class)->middleware('auth');
			Route::get('november/kwitansiThermo/{november}', [NovemberController::class, 'kwitansiThermo']);
			Route::get('november/kwitansiTinta/{november}', [NovemberController::class, 'kwitansiTinta']);

				//desember
			Route::resource('desember', DesemberController::class)->middleware('auth');
			Route::resource('december', DesemberController::class)->middleware('auth');
			Route::get('desember/kwitansiThermo/{desember}', [DesemberController::class, 'kwitansiThermo']);
			Route::get('desember/kwitansiTinta/{desember}', [DesemberController::class, 'kwitansiTinta']);

				//absen
			// Route::resource('mws', AbsenmwsController::class)->middleware('auth');
			Route::get('mws', [AbsenmwsController::class, 'index']);
			Route::get('mws/create', [AbsenmwsController::class, 'create']);
			Route::post('mws', [AbsenmwsController::class, 'store']);
			Route::get('mws/{mws}', [AbsenmwsController::class, 'show']);
			Route::get('mws/{mws}/edit', [AbsenmwsController::class, 'edit']);
			Route::put('mws/{mws}', [AbsenmwsController::class, 'update']);
			Route::delete('mws/{mws}', [AbsenmwsController::class, 'destroy']);

				//administrasi santri baru pondok
			Route::resource('administrasisantribarupondok', AdministrasiSantriBaruPondokController::class)->middleware('auth');
			Route::get('administrasisantribarupondok/kwitansiThermo/{id}', [AdministrasiSantriBaruPondokController::class, 'kwitansiThermo']);
			Route::get('administrasisantribarupondok/kwitansiTinta/{id}', [AdministrasiSantriBaruPondokController::class, 'kwitansiTinta']);

				//administrasi formal
			Route::resource('administrasisantribaruformal', AdministrasiSantriBaruFormalController::class)->middleware('auth');
			Route::get('administrasisantribaruformal/kwitansiThermo/{id}', [AdministrasiSantriBaruFormalController::class, 'kwitansiThermo']);
			Route::get('administrasisantribaruformal/kwitansiTinta/{id}', [AdministrasiSantriBaruFormalController::class, 'kwitansiTinta']);

});
