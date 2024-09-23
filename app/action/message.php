<?php

namespace App\action;

class message
{
    public static function success($data,$message){
        return response()->json(['data'=>$data,'message'=>$message]);

    }
    public static function error($message,$status){
        return response()->json(['message'=>$message,$status=>$status]);
    }

}
