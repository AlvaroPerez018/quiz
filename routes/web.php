<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('truck_drivers/listar',[TruckDriverController::class,'index'])->name('truck_driver.index');
Route::get('truck_drivers/create',[TruckDriverController::class,'create']);
Route::post('truck_drivers/store', [TruckDriverController::class,'store'])->name('truck_drivers.store');
Route::get('truck_driver/{truck_driver}',[TruckDriverController::class,'show'])->name('truck_driver.show');
Route::put('truck_driver/{truck_driver}',[TruckDriverController::class,'update'])->name('truck_driver.update');
Route::delete('truck_driver/{truck_driver}',[TruckDriverController::class,'destroy'])->name('truck_driver.destroy');
Route::get('truck_driver/{truck_driver}/editar',[TruckDriverController::class,'edit'])->name('truck_driver.edit');



