<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\StampController;
use App\Models\Stamp;

class StampController extends Controller
{
    public function stamp(){

        return view('stamp');
    }
    public function store(Request $request){
        $stamp = $request->only(['start','end','break','break_end','register_id']);
        Stamp::create($stamp);
        return view('stamp');
}
}