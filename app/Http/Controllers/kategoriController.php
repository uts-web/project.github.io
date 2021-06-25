<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori;
use App\topup;
use App\payment;
use App\User;
use Auth;
use Illuminate\Support\Facades\Gate;

class kategoriController extends Controller
{
    public function kate()
    {
        $kategoriAll = kategori::All();
        return view('manage', ['kategoriAll' => $kategori]);

        $value = Cache::rememberForever("kategori:id:$id", function () use ($id) {
            return \app\kategori::all();
        });
    }
    public function index()
    {
        $kategori = kategori::all();
        return view('manage', ['kategori' => $kategori]);
    }

    public function add()
    {
        return view('addkategori');
    }

    public function create(Request $request)
    {
        if ($request->file('image')) {
            $image_name = $request->file('image')->store('images', 'public');
        }
        kategori::create([
            'title' => $request->title,
            'genre' => $request->genre,
            'featured_image' => $image_name,
            'feature_trailer' => $trailer_name,
        ]);
        return redirect('/manage');
    }

    public function edit($id)
    {
        $kategori = kategori::find($id);
        return view('editkategori', ['kategori' => $kategori]);
    }

    public function update($id, Request $request)
    {
        $kategori = kategori::find($id);
        $kategori->title = $request->title;
        $kategori->genre = $request->genre;
        if ($kategori->featured_image && file_exists(storage_path('app/public/' . $kategori->featured_image))) {
            \Storage::delete('public/' . $kategori->featured_image);
        }
        $image_name = $request->file('img')->store('img s', 'public');
        $kategori->featured_image = $image_name;
        $kategori->trailer_video = $trailer_name;
        $kategori->save();
        return redirect('/manage');
    }

    public function delete($id)
    {
        $kategori = kategori::find($id);
        $kategori->delete();
        return redirect('/manage');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function cetak_pdf()
    {
        $kategori = kategori::all();
        $pdf = PDF::loadview('kategori_pdf', ['kategori' => $kategori]);
        return $pdf->stream();
    }
}
