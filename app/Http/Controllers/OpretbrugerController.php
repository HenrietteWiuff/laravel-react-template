<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\NewUser;


class OpretbrugerController extends Controller
{
    function opretbruger() {
        return view('auth/opretbruger');
    }
    
    function create(Request $request){
     $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:new_users',
            'password' => 'required|min:5|max:15'
        ]);
        NewUser::create($request->all());

        return redirect('home');
    }

    function post(Request $request){
        $validated = $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:new_users',
                'password' => 'required|min:5|max:15'
            ]);
            NewUser::create($request->all());
    
        }
}
