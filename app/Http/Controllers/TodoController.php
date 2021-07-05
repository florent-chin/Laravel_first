<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function index(){
        return view('First.index');
    }
    
    public function create(){
        return view('First.index');
    }

    public function update(){
        return view('First.index');
    }

    public function delete(){
        return view('First.index');
    }

    public function post(Request $request){
        $validate_rule=[
            'content'=>'required_digits_between:1,200'
        ];
    }

    public function db(Request $request){
        $items=DB::select('select * from List');
        return view('index',['items'=>$items]);
    }
}
