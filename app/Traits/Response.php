<?php

namespace App\Traits;

Trait Response
{
    protected function ajaxError($msg = '', array $data = [])
    {
        return response()->json([
            'status' => 10001,
            'msg'    => $msg,
            'data'   => $data,
        ]);
    }
    
    protected function ajaxSuccess($msg = '', array $data = [])
    {
        return response()->json([
            'status' => 10000,
            'msg'    => $msg,
            'data'   => $data,
        ]);
    }
    
    //abort(404, "ページが見つかりません");
    //resources/views/errors/404.blade.php
    //<h2>{{ $exception->getMessage() }}</h2>
    protected function error($code, $message = '')
    {
       return abort($code, $message);
    }
}
