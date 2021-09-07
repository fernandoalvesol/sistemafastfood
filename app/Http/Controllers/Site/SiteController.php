<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index(){

        $title = "Your Food | Seu Restaurante Online";

        return view('Site.Home.index', compact('title'));

    }
    
    public function cli01(){
        
        
        $title = "Cliente 01";
        
        return view('Site.Cliente01.index', compact('title'));
    }
}
