<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    public function index(){

        return view('contact');
        Gate::define('user-display', function($user){
            return $user->roles == "User";
           });
           
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
