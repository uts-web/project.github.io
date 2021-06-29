<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return 'Selamat Datang';
    }
    public function about(){
        return 're - Creators';
    }
    public function articles(){
        return 'halaman artikel dengan id '.id;
    }
}
