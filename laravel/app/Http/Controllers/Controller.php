<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponder;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    use ApiResponder;

    public function home(){
        $mama = [
            'message' => "Welcome to Kurir Krama Bali"
        ];
        return $this-> responseOnSuccess(200,$mama);
    }
}
