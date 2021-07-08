<?php

namespace App\Http\Controllers;

use Faker\Provider\ar_JO\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Task;

class TodoController extends Controller
{
    public function index(){
        $data=Task::all();
        return view('First.index',['tasks'=>$data]);
    }
    
    public function create(Request $request){
        $newTask=$request->input("newTask");

        $task=new Task();
        $task->name= $newTask;
        $task->save();

        $data=Task::all();
        return view('First.index',['tasks'=>$data]);
    }

    public function update(Request $request)
    {

        $newTask=$request->newTask;
        $taskId = $request->taskId;
        
        
        $task = Task::where("id", $taskId);
        $task->name = $newTask;
        
        

        $data = Task::all();
        return view('First.index', ['tasks' => $data]);
    }
    public function delete(Request $request)
    {
        $taskId = $request->input("taskId");
        $task = Task::where("id", $taskId);
        $task->delete();
        
        $task = Task::all();
        return view('First.index',['tasks'=>$task]);
    }


    public function post(Request $request){
        $validate_rule=[
            'name'=>'required_digits_between:1,20'
        ];

    }
}
