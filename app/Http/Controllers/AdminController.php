<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee; 

class AdminController extends Controller
{
    public function index(Request $request){
        $employee=Employee::orderBy('id','DESC')->get();       
        return view('admin.index',compact('employee'));
    }
    public function login(){
        return view('admin.login');
    }

    public function auth(Request $request){
           
        $email=$request->post('email');
        $password=$request->post('password');

        $result=Employee::where(['email'=>$email,'eployeeid'=>$password])->get();

        if(isset($result['0']->id)){
            $request->session()->put('ADMIN_LOGIN',true);
            $request->session()->put('ADMIN_ID',$result['0']->id);
            return redirect('/dashboard');
        }
        else{
            return redirect('/login');//38970
        }

    }
}
