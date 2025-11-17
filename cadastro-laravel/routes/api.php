<?php

use Illuminate\Support\Facades\Route;

Route::get('/teste', function () {
    return ['status' => 'API funcionando!'];
});
