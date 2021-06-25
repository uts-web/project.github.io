<?php

namespace App\Http\Controllers;

use App\topup;
use Illuminate\Http\Request;

class topupsController extends Controller
{
    public function top(){
        $topupAll = topup::All();
        return view('manage', ['topupAll'=>$topup]);

        $value = Cache::rememberForever("topup:id:$id", function() use ($id){
            return \app\topup::all();
        });
    }
    public function index()
    {
     $topup = topup::all();
    return view('manage',['topup' => $topup]);
    }

    public function add()
    {
    return view('addtopup');
    }
    
    public function create(Request $request)
    {
        topup::create([
            'id' => $request->id,
            'jumlah_diamond' => $request->jumlah,
            'harga' => $request->harga,
        ]);
    return redirect('/manage');
    }

    public function edit($id)
    {
    $komentar=komentar::find($id);
    return view('edittopup',['topup'=>$topup]);
    }

    public function update($id, Request $request)
    {
        $topup = topup::find($id);
        $topup->jumlah_diamond = $request->jumlah;
        $topup->harga = $request->harga;
        $topup->save();
        return redirect('/manage'); 
    }

    public function delete($id)
    {
        $topup = topup::find($id);
        $topup->delete();
        return redirect('/manage');

    }
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function cetak_pdf(){
        $topup = topup::all();
        $pdf = PDF::loadview('topup_pdf',['topup'=>$topup]);
        return $pdf->stream();
    }
}
