<?php

use App\Http\Controllers\FormController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/jadwal',[JadwalController::class,'slot']);
Route::post('/inputJadwal',[JadwalController::class,'inputJadwal']);
Route::post('/slotPertanggal',[JadwalController::class,'slotPertanggal']);
Route::post('/updateSlot',[JadwalController::class,'updateSlot']);

Route::post('/registerAkun',[UserController::class,'registerAkun']);
Route::get('/user',[UserController::class,'getUser']);
Route::post('/updateUser',[UserController::class,'updateUser']);

Route::get('/form',[FormController::class,'getForm']);
Route::post('/getIsiTabel',[FormController::class,'getIsiTabel']);
Route::post('/formInput',[FormController::class,'inputForm']);
Route::post('/getByid',[FormController::class,'getByid']);
Route::post('/cekSlot',[FormController::class,'cekSlot']);
Route::post('/cekSlotRutin',[FormController::class,'cekSlotRutin']);
Route::post('/mulaiPinjam',[FormController::class,'mulaiPinjam']);
Route::post('/hapusForm',[FormController::class,'hapusForm']);
Route::post('/rekap',[FormController::class,'rekap']);

Route::post('/cetak',[FormController::class,'cetak']);
Route::post('/kirimEmail',[FormController::class,'kirimEmail']);

Route::post('/cekLapangan',[FormController::class,'cekLapangan']);
Route::get('/counter',[FormController::class,'counter']);

Route::post('/downloadSurat', [FormController::class, 'downloadSurat']);
Route::post('/downloadTor', [FormController::class, 'downloadTor']);



