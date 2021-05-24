<?php
namespace App\Plugins\SendApi;

use Illuminate\Support\Facades\Route;

class boot {
    public function handle(){
        // 注册路由
        $this->route();

    }

    public function route(){
        Route::middleware("api")
        ->prefix("api/SendApi")
        ->group(plugin_path("SendApi/src/lib/route.php"));
    }
}