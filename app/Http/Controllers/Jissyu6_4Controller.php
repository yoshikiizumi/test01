<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;

class Jissyu6_4Controller extends Controller
{
    public function index(Request $request)
    {
        $items = Subject::all();
        return view('jissyu6_4.index', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('jissyu6_4.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Subject::$rules);
        $subject = new subject;
        $form = $request->all();
        unset($form['_token']);
        $subject->fill($form)->save();
        return redirect('/jissyu15');
    }
}