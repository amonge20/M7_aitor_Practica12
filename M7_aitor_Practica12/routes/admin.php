<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ControladorAdmin;

Route::group(['middleware'=>['adb']],function(){
    Route::get('/',[ControladorAdmin::class,'inici']) -> name('inici');
    Route::get('/client',[ControladorAdmin::class,'clientes'])-> name('cliente');
    Route::get('/comptabilitat',[ControladorAdmin::class,'contabilidad'])-> name('contabilidad');
    Route::get('/facturacio',[ControladorAdmin::class,'facturacion'])-> name('facturacion');
});