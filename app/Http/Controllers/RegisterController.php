<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class RegisterController extends Controller
{
    public function index()
    {
        return view ('register.index', [
            'title' => 'Register'
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required | max:255' ,            
            'username' =>['required', 'min:3', 'max:255', 'unique:user'],
            'email' =>'required |email|unique:users' ,
            'name' =>'required|min:5 | max:255' 


        ] ); 

        dd('registrasi berhasil');
    }
}
