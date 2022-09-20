<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $credetials = $request->validate([
            'username'    =>  'required',
            'password'    =>  'required'
        ]);

        if(Auth::attempt(User::where('username',$request['username']) == '')){

        }
        
    }
}
