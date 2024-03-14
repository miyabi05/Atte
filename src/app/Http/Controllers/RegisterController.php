<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\RegisterController;
use App\Models\Register;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
        public function register(){
            return view('register');
    }
    public function store(RegisterRequest $request){
        $register = $request->only(['name', 'email','password','password_confirmation']);
        Register::create($register);
        return view('register');
    }
}
