<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class Jissyu3_1Controller extends Controller
{
    public function index(){
        $data = ['msg'=>'お名前を入力ください。',];
        return view('jissyu3_1.input',$data);
    }

    public function post(Request $request){
        $msg = $request->msg;
        $data = ['msg'=>'こんにちは,'.$msg.'さん！',];
        return view('jissyu3_1.output',$data);
    }
}
