<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Illuminate\Support\Facades\Gate;
use PDF;
class userController extends Controller
{
    public function __invoke($id){
        $user = user::find($id);
        $user = json_decode(json_encode($user));
        return view('user', ['id'=>$id])->with(compact('user'));

        $value = Cache::rememberForever("user:id:$id", function() use ($id){
            return \app\users::all();
        });
    }
    public function index()
    {
     $user = user::all();
    return view('manage',['user' => $user]);
    }

    public function add()
    {
    return view('adduser');
    }
    
    public function create(Request $request)
    {
        
        if ($request->file('image')){
            $image_name = $request->file('image')->store('images','public');
        }
        user::create([
            'id' => $request->id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'roles' =>$request->roles
        ]);
    return redirect('/manage');
    }

    public function edit($id)
    {
    $user=user::find($id);
    return view('edituser',['user'=>$user]);
    }

    public function update($id, Request $request)
    {
        $user = user::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->roles=$request->roles;
        $user->save();
        return redirect('/manage');
    }

    public function delete($id)
    {
        $user = user::find($id);
        $user->delete();
        return redirect('/manage');

    }
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function cetak_pdf(){
        $user = user::all();
        $pdf = PDF::loadview('user_pdf',['user'=>$user]);
        return $pdf->stream();
    }
}