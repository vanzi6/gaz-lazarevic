<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function main () {
        return view('contents.main', [
            'controllerName' => __FUNCTION__,
        ]);
    }

    public function contacts () {
        return view('contents.contacts', [
            'controllerName' => __FUNCTION__,
        ]);
    }

    public function products () {
        return view('contents.products', [
            'controllerName' => __FUNCTION__,
        ]);
    }
}
