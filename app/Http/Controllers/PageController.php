<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return 'Selamat Datang';
    }
    public function about(){
        return 'NIM : 201910370311226 <br> 
               Nama : Aldhy Sidqi P.';
    }
    public function articles(){
        return 'halaman artikel dengan id '.id;
    }
}
