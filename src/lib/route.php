<?php

use App\Plugins\SendApi\src\Http\Controllers\GroupController;
use App\Plugins\SendApi\src\Http\Controllers\PrivateController;
use Illuminate\Support\Facades\Route;

Route::post('{token}/private/{qq}/{text}', [PrivateController::class,'handle']);
Route::post('{token}/group/{group}/{text}', [GroupController::class,'handle']);
