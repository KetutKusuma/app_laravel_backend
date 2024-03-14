<?php

namespace App\Traits;

trait ApiResponder{
    private $data;
    private $code;
    protected function responseOnSuccess($code = 200, $data){
        return response()->json([
            'code' => $this->code = $code,
            'message' =>"Success !",
            'data' => $this->data = $data,
            'error' => array(),
            ], $this->code = $code);
	}
	protected function responseOnError($code = 404, $data){
        return response()->json([
            'code' => $this->code = $code,
            'message' =>"Failed !",
            'data' => array(),
            'error' => $this->data = $data,
            ], $this->code = $code);
	}
    // neutral One
    protected function responseReturn($code = 404, $message =null, $data = null, $error = null){
        return response()->json([
            'code' => $this->code = $code,
            'message' => $message,
            'data' => $data,
            'error' => $error,
            ], $this->code = $code);
    }
}
