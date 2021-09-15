<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Employee; 
use App\Models\Project;
use App\Models\EmployeeImages; 
use App\Models\AssignMember; 
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index(){
        //Getting All Employees
        $employee=Employee::orderBy('id','DESC')->get();
        //Total Emolyee
        $totalEmp =Employee::where('id','>',"0")->count();
        //getting Today add Employee
        $date = date("d");
        $todayadd= DB::table('employees')
                ->whereDay('created_at', $date)
                ->get()->count();
        $mdate = date("m");
        //Current Month Employee
        $month= DB::table('employees')
                ->whereMonth('created_at', $mdate)
                ->get()->count();
        
        return view('admin.employee.index',compact('employee','totalEmp','todayadd','month'));
    }

    //Employee Add Form
    public function employeeform(){
        return view('admin.employee.employeeform');
    }

    //Employee details page 
    public function getemployeeById($id){
        $singleemployee=Employee::where('id',$id)->first();
        //Getting Empolyee images 
        $img=EmployeeImages::where('employeeid',$id)->orderBy('id', 'DESC')->limit(1)->get();

        $getproject=AssignMember::where('employeeid',$id)->get();
        $project=Project::orderBy('id','DESC')->get();
        return view('admin.employee.employeedetails',compact('singleemployee','img','getproject','project'));
    }
    
    //Geting Report From Employee Table..
    public function GetReport(){
        $emp= Employee::select(DB::raw("COUNT(*) as count"))
        ->whereYear('created_at',date('Y'))
        ->groupBy(DB::raw("Month(created_at)"))
        ->pluck('count');

        $months= Employee::select(DB::raw("Month(created_at) as month"))
        ->whereYear('created_at',date('Y'))
        ->groupBy(DB::raw("Month(created_at)"))
        ->pluck('month');

        $datas=array(0,0,0,0,0,0,0,0,0,0,0,0);

        foreach($months as $index=> $month)
            {
                $datas[$month]=$emp[$index];
            }
        return view('admin.employee.report',compact('datas'));
    }

    
    public function storeEmployee(Request $request){

        $Employeecode= mt_rand(12300,76400);
        $publish=date("Y-m-d");
        $employee = new Employee();
        
        $employee->firstname=$request->firstname;
        $employee->lastname=$request->lastname;
        $employee->email=$request->email;
        $employee->phonenumber=$request->phonenumber;
        $employee->fathername=$request->fathername;
        $employee->mothername=$request->mothername;
        $employee->homenumber=$request->homephone;
        $employee->meritalstatus=$request->meritalstatus;
        $employee->gender=$request->gender;
        $employee->dob=$request->dob;
        $employee->nidNumber=$request->nid;
        $employee->nationality=$request->nationality;
        $employee->languageknown=$request->language;
        $employee->postal=$request->postal;
        $employee->country=$request->country;
        $employee->state=$request->state;
        $employee->city=$request->city;
        $employee->Paddress=$request->street_address;
        $employee->currentaddress=$request->c_address;

        $employee->eployeeid=$Employeecode;
        $employee->employeeType=$request->employeetype;
        $employee->joingdate=$request->joingdate;
        $employee->status=$request->status;
        $employee->publish=$publish;
        $employee->save();

        return redirect('/employee');
    }
    
    public function EmployeeImg(Request $request){
        $idnum=$request->id;
        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('employeimage'),$imageName);

        $empimg= new EmployeeImages();
        $empimg->profileImage= $imageName;
        $empimg->employeeid=$idnum;
        $empimg->save();

        return redirect()->action(
            [EmployeeController::class, 'getemployeeById'], ['id' => $idnum ]
          );
    }

    public function EditEmployee(Request $request){
        $idnum=$request->id;
        
        $edit=Employee::find($request->id);
        $edit->fathername=$request->fathername;
        $edit->mothername=$request->mothername;
        $edit->homenumber=$request->homephone;
        $edit->meritalstatus=$request->meritalstatus;
        $edit->gender=$request->gender;
        $edit->dob=$request->dob;
        $edit->nidNumber=$request->nid;
        $edit->nationality=$request->nationality;
        $edit->languageknown=$request->language;

        $edit->save();

        return redirect()->action(
            [EmployeeController::class, 'getemployeeById'], ['id' => $idnum ]
          );
    }
    public function EditEmployee2(Request $request){
        $idnum=$request->id;
        
        $edit2=Employee::find($request->id);
        $edit2->firstname=$request->firstname;
        $edit2->lastname=$request->lastname;
        $edit2->email=$request->email;
        $edit2->phonenumber=$request->phonenumber;
        $edit2->gender=$request->gender;
        $edit2->employeeType=$request->employeetype;
        $edit2->save();

        return redirect()->action(
            [EmployeeController::class, 'getemployeeById'], ['id' => $idnum ]
          );
    }

}
