<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\komentar;
use Illuminate\Support\Facades\Gate;
use PDF;
class komentarController extends Controller
{
    public function komen(){
        $komentarAll = komentar::All();
        return view('manage', ['komentarAll'=>$komentar]);

        $value = Cache::rememberForever("komentar:id:$id", function() use ($id){
            return \app\komentar::all();
        });
    }
    public function index()
    {
     $komentar = komentar::all();
    return view('manage',['komentar' => $komentar]);
    }

    public function add()
    {
    return view('addkomentar');
    }
    
    public function create(Request $request)
    {
        if ($request->file('image')){
            $image_name = $request->file('image')->store('images','public');
        }
        komentar::create([
            'name' => $request->name,
            'content' => $request->content,
            'featured_image' => $image_name,
        ]);
    return redirect('/manage');
    }

    public function edit($id)
    {
    $komentar=komentar::find($id);
    return view('editkomentar',['komentar'=>$komentar]);
    }

    public function update($id, Request $request)
    {
        $komentar = komentar::find($id);
        $komentar->name = $request->name;
        $komentar->content = $request->content;
        if($komentar->featured_image && file_exists(storage_path('app/public/' . $komentar->featured_image)))
        {
        \Storage::delete('public/'.$komentar->featured_image);
        }
        $image_name = $request->file('img')->store('img s', 'public');
        $komentar->featured_image = $image_name;
        $komentar->save();
        return redirect('/manage'); 
    }

    public function delete($id)
    {
        $komentar = komentar::find($id);
        $komentar->delete();
        return redirect('/manage');

    }
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function cetak_pdf(){
        $komentar = komentar::all();
        $pdf = PDF::loadview('komentar_pdf',['komentar'=>$komentar]);
        return $pdf->stream();
    }
}