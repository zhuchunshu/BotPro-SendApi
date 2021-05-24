<?php
namespace App\Plugins\SendApi\src\Http\Controllers;

class GroupController {

    public function handle($token,$group,$text){
        if($token!=env("PLUGIN_SENDAPI_TOKEN")){
            return Json_Api(401,"无权使用此接口",'error');
        }
        sendMsg([
            "group_id" => $group,
            "message" => base64_decode($text)
        ],"send_group_msg");
        return Json_Api(200,"成功!",'success');
    }

}