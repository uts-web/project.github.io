<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori;
use App\User;
use App\komentar;
use Illuminate\Support\Facades\Gate;
use PDF;
class manageController extends Controller
{
    public function __invoke($id){
        $kategoris = kategori::find($id);
        $kategoris = json_decode(json_encode($kategoris));
        return view('kategoris', ['id'=>$id])->with(compact('kategoris'));
        
        $value = Cache::rememberForever("kategoris:id:$id", function() use ($id){
            return \app\kategori::all();
        });
    }
    public function kat()
    {   
        $kategoris = kategori::All();
        return view ('manage', ['kategoris'=>$kategori]);
    }

    public function index()
    {
     $kategoris = kategori::All();
     $komentars = komentar::All();
     $users = User::all();
    return view('manage')->with(compact('kategoris', 'users','komentars'));
    }

    public function add()
    {
    return view('addkategori');
    }
    
    public function create(Request $request)
    {
        if ($request->file('image')){
            $image_name = $request->file('image')->store('images','public');
        }
        kategori::create([
            'title' => $request->title,
            'genre' => $request->genre,
            'content' => $request->content,
            'featured_image' => $image_name,
            'featured_trailer' => $request->trailer,
            'Bukti_pembayaran' => $request->bukti,
        ]);
        return redirect('/manage');
    }
    public function edit($id)
    {
    $kategoris=kategori::find($id);
    return view('editkategori',['kategoris'=>$kategoris]);
    }
    public function update($id, Request $request)
    {
        $kategoris = kategori::find($id);
        $kategoris->title = $request->title;
        $kategoris->genre = $request->genre;
        if($kategoris->featured_image && file_exists(storage_path('app/public/' . $kategoris->featured_image)))
        {
        \Storage::delete('public/'.$kategoris->featured_image);
        }
        $image_name = $request->file('image')->store('images', 'public');
        $kategoris->featured_image = $image_name;
        $kategoris->save();
        return redirect('/manage');       
    }
    public function delete($id)
    {
        $kategoris = kategori::find($id);
        $kategoris->delete();
        return redirect('/manage');

    }
    
    public function cetak_pdf(){
        $kategoris = kategori::all();
        // echo "<pre>"; print_r($kategoris); die;
        $pdf = PDF::loadview('kategoris_pdf',['kategoris'=>$kategoris]);
        return $pdf->stream();
    }   
    public function __construct()
    {
     $this->middleware('auth');
    }

}
