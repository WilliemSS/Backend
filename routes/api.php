<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MatkulController;
use App\Http\Controllers\Api\MahasiswaController;
use App\Http\Controllers\Api\DosenController;
use App\Http\Controllers\Api\DaftarPengajarController;


//Route API for Mata Kuliah table
Route::post('/matkul', [MatkulController::class,'store']);
Route::get('/matkul',[MatkulController::class,'index']);
Route::get('/matkul/{Id_matkul}',[MatkulController::class,'show']);
Route::put('/matkul/{Id_matkul}',[MatkulController::class,'update']);
Route::delete('/matkul/{Id_matkul}',[MatkulController::class,'destroy']);

//Route API for Mahasiswa table
Route::post('/mahasiswa', [MahasiswaController::class,'store']);
Route::get('/mahasiswa',[MahasiswaController::class,'index']);
Route::get('/mahasiswa/{Id_mahasiswa}',[MahasiswaController::class,'show']);
Route::put('/mahasiswa/{Id_mahasiswa}',[MahasiswaController::class,'update']);
Route::delete('/mahasiswa/{Id_mahasiswa}',[MahasiswaController::class,'destroy']);



//Route API for dosen table
Route::post('/dosen', [DosenController::class,'store']);
Route::get('/dosen',[DosenController::class,'index']);
Route::get('/dosen/{Id_dosen}',[DosenController::class,'show']);
Route::put('/dosen/{Id_dosen}',[DosenController::class,'update']);
Route::delete('/dosen/{Id_dosen}',[DosenController::class,'destroy']);

//Route API for Daftar Pengajar table
Route::post('/daftar-pengajar', [DaftarPengajarController::class, 'store']);
Route::get('/daftar-pengajar',[DaftarPengajarController::class,'index']);
Route::get('/daftar-pengajar/{Id_pengajar}',[DaftarPengajarController::class,'show']);
Route::put('/daftar-pengajar/{Id_pengajar}',[DaftarPengajarController::class,'update']);
Route::delete('/daftar-pengajar/{Id_pengajar}',[DaftarPengajarController::class,'destroy']);



   