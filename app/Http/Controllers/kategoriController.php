<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori;
use App\topup;
use App\payment;
use App\User;
use App\komentar;
use Auth;
use Illuminate\Support\Facades\Gate;

class kategoriController extends Controller
{
    public function __invoke($id){
        $kategoris = kategori::find($id);
        $komentars = komentar::All(); 
        $kategoris = json_decode(json_encode($kategoris));
        $topups = topup::all();
        $payments = payment::all();
        $users = User::with('payments','diamonds')->where(['id' => Auth::user()->id])->first();
        $users = json_decode(json_encode($users), true);
        // echo Auth::user()->id; die;
        // echo "<pre>"; print_r($users); die;
        
        // $komentars = json_decode(json_encode($komentars));
        //return view('kategori',['kategori'=>$kategoris],['id'=>$id],['topups'=>$topups]);
        return view('kategori')->with(compact('kategoris','id','topups','payments','komentars', 'users'));
        
        $value = Cache::rememberForever("kategoris:id:$id", function() use ($id){
            return \app\kategori::all();
        });
    }
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function updateid(Request $request)
    {
        $users  = User::where(['email'=>Auth::user()->email]); 
        $users->update(['id_game'=>$request->id_game, 'diamond'=>$request->diamond, 'payment'=>$request->payment]);
        return redirect()->back(); 
    }


}
