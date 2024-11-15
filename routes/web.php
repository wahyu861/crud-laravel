<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\TodolistController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'tampil'])->name('mahasiswa.tampil');
Route::get('/mahasiswa/tambah', [MahasiswaController::class, 'tambah'])->name('mahasiswa.tambah');
Route::post('/mahasiswa/submit', [MahasiswaController::class, 'submit'])->name('mahasiswa.submit');
Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::post('/mahasiswa/update/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::get('/mahasiswa/delete/{id}', [MahasiswaController::class, 'delete'])->name('mahasiswa.delete');

Route::get('/todolist', [TodolistController::class, 'tampil'])->name('todolist.tampil');
Route::post('/todolist/tambah', [TodoListController::class, 'tambah'])->name('todolist.tambah');
Route::delete('/todolist/delete/{id}', [TodoListController::class, 'delete'])->name('todolist.delete');