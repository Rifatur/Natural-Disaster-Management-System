<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Employee; 
use App\Models\EmployeeImages; 
use App\Models\AssignMember; 
use App\Models\Task;
use Illuminate\Http\Request;



class projectController extends Controller
{
    public function project(){
        $project=Project::orderBy('id','DESC')->get();
            $totalcount = Project::where('status','=','1')->count();
            $totalproject =Project::where('id','>',"0")->count();
            $projecttd = Project::whereDate('startdate', now()->day)->get()->count();
        return view('admin.project.project',compact('project','totalcount','totalproject','projecttd'));
    }

    public function addproject(){
        return view('admin.project.form');
    }
    
    public function createproject(Request $request){

        $rescode= mt_rand(12300,76400);
        $publish=date("Y-m-d");
        $Newproject= new Project();

        $Newproject->projectTitle = $request->projectname;
        $Newproject->about = $request->about;
        $Newproject->startdate = $request->sd;
        $Newproject->enddate = $request->ed;
        $Newproject->piority = $request->piority;
        $Newproject->disastername = $request->selectdisaster;
        $Newproject->projectcode = $rescode;
        $Newproject->proccesstype = $request->proccesstype;
        $Newproject->status = $request->status;
        $Newproject->publish=$publish;
        $Newproject->save();

        $request->session()->flash('post_save','Post saved !');
        return redirect('/project');
    }
    public function projectDetails($id){

        $singleproject=Project::where('id',$id)->first();
        //Getting All Employees
        $employee=Employee::orderBy('id','DESC')->get();
        $empimg=EmployeeImages::orderBy('id', 'DESC')->get();
        $getmember=AssignMember::where('projectid',$id)->get();

        return view('admin.project.project-details',compact('singleproject','employee','getmember','empimg'));
    }

    public function assignEmployee(Request $r){
        $pid=$r->projectid;

        $assign = new AssignMember();
        $assign->employeeid=$r->employeeid;
        $assign->projectid=$pid;
        $assign->save();

        return redirect()->action(
            [projectController::class, 'projectDetails'], ['id' => $pid]
          );
    }

}
