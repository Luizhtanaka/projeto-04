<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(Request $request)
    {   
        $codigo_parceiro = request()->query('resource');

        return view('site.home',['resource' => $codigo_parceiro]);
    }
}
