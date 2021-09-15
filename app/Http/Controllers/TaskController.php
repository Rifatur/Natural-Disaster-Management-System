<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Employee; 
use App\Models\EmployeeImages; 
use App\Models\AssignMember; 
use App\Models\Project;
use App\Models\Task;
use App\Models\Comment;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    
    public function index(){


        $taskpcs=Task::where('status','=','1')->orderBy('id','DESC')->get();
        $taskpcs2=Task::where('status','=','2')->orderBy('id','DESC')->get();
        $taskpcs3=Task::where('status','=','3')->orderBy('id','DESC')->get();
        //Getting All Employees
        $employee=Employee::orderBy('id','DESC')->get();
        //Getting All project
        $project=Project::orderBy('id','DESC')->get();

        $Comment=Comment::orderBy('id','DESC')->get();

        return view('admin.task.index',compact('project','taskpcs','employee','Comment','taskpcs2','taskpcs3'));

    }


    public function createTask(Request $req){
        $addtask= new Task();
        $addtask->taskTitle=$req->tasktitle;
        $addtask->description=$req->description;
        $addtask->createBy=$req->createBy;
        $addtask->projectId=$req->projectId;
        $addtask->status=$req->status;
        $addtask->save();  
        return redirect('/task');
 
    }

    public function comment(Request $cmnt){
        $createcmt = new Comment();
        $createcmt->comment = $cmnt->comment;
        $createcmt->empid = $cmnt->empid;
        $createcmt->taskid = $cmnt->taskid;
        $createcmt->save();  
        return redirect('/task');
    }


}
