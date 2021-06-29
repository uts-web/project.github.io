<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\kategori;
use App\komentar;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $kategori = kategori::paginate(2);
        $kategoritab1 = kategori::where('id', '<' , 6)->get();
        $kategoritab2 = kategori::where('id', '>' , 5)->get();
        $kategoripc = kategori::where('id', '>' , 5)->get();
        // $kategoris= json_decode(json_encode(kategorisAll));
        return view('home')->with(compact('kategoritab1','kategoritab2', 'kategori','kategoripc'));
            Cache::remember('kategoris', 10, function(){
    
                Gate::define('user-display', function($user){
                    return $user->roles == "User";
                   });
                   
    
        });        
    }
}
