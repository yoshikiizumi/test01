<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Kouka1_2Request;

class Kouka1_2Controller extends Controller
{
    public function index(){
        return view('kouka1_2.input');
    }

    public function post(Request $request){
        $data = $request->all();

        return view('kouka1_2.output',['data'=>$data]);
    }
}
