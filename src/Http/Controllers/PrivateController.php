<?php
namespace App\Plugins\SendApi\src\Http\Controllers;

class PrivateController{

    public function handle($token,$qq,$text){
        if($token!=env("PLUGIN_SENDAPI_TOKEN")){
            return Json_Api(401,"无权使用此接口",'error');
        }
        sendMsg([
            "user_id" => $qq,
            "message" => base64_decode($text)
        ],"send_private_msg");
        return Json_Api(200,"成功!",'success');
    }

}