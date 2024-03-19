<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        return view('index');
}
public function store(Request $request){
    $user = $request->only(['email','password']);
    User::create($user);
    return view('stamp');
}

}
