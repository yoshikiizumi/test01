<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\jissyu5_4Request;
use Validator;

class Jissyu5_3Controller extends Controller
{
    public function index(Request $request)
    {
        $items = DB::table('people')->get();
        return view('jissyu5_3.index', ['items' => $items]);
    }
    public function show(Request $request)
    {
        $id = $request->id;
        $item = DB::table('people')->where('id',$id)->first();
        return view('jissyu5_3.show', ['item' => $item]);
    }
    public function add(Request $request)
    {
        return view('jissyu5_3.add');
    }
    public function create(jissyu5_4Request $request)
    {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::table('people')->insert($param);
        return redirect('/jissyu12');
    }
    public function edit(Request $request)
    {
        $id = $request->id;
        $item = DB::table('people')->where('id',$id)->first();
        return view('jissyu5_3.edit', ['item' => $item]);
    }
    public function update(Request $request)
    {
        
        $rules = [
            'name'=>'required|max:20',
            'mail'=>'required|email',
            'age' =>'required|integer|max:120',
        ];

        $message = [
            'name.required' => '名前は必ず入力して下さい。',
            'name.max' => '名前は20文字以内で入力して下さい。',
            'mail.required' => 'メールアドレスは必ず入力して下さい。',
            'mail.email' => 'メールアドレスの形式で入力して下さい。',
            'age.required' => '年齢は必ず入力して下さい。',
            'age.max' => '正しい年齢を入力して下さい。',
            'age.integer' => '整数で入力して下さい。',
        ];

        $validator = Validator::make($request->all(),$rules,$message);
        if($validator->fails()){
            return redirect('/jissyu12/edit?id={{$item->id}}')
            ->withErrors($validator)
            ->withInput();
        }

        $param = [
				'name' => $request->name,
				'mail' => $request->mail,
				'age' => $request->age,
        ];
        DB::table('people')
        ->where('id',$request->id)
        ->update($param);
        return redirect('/jissyu12');
    }
    public function del(Request $request)
    {
        $id = $request->id;
        $item = DB::table('people')->where('id',$id)->first();
        return view('jissyu5_3.del', ['item' => $item]);
    }
    public function remove(Request $request)
    {
        DB::table('people')
        ->where('id',$request->id)->delete();
        return redirect('/jissyu12');
    }
}

