<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Client\Actions\ListClientAction;

Route::group(['prefix' => 'clients'], function () {
    Route::get('/', ListClientAction::class);
});
