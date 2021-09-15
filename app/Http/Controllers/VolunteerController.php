<?php

namespace App\Http\Controllers;
use App\Models\Division; 
use App\Models\City; 
use App\Models\Upazila; 
use App\Models\Union; 
use App\Models\Village; 
use App\Models\Volunteer; 
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    //
    public function index(){
        return view('admin.volunteer.index');
    }

    public function create(){
        $divition= Division::orderBy('id','DESC')->get();
        $City= City::orderBy('id','DESC')->get();
        $upazila= Upazila::orderBy('id','DESC')->get();
        $union= Union::orderBy('id','DESC')->get();
        $Village= Village::orderBy('id','DESC')->get();

        return view('admin.volunteer.form',compact('divition','City','upazila','union','Village'));
    }

    public function Add(Request $request){
        $volunteerid= mt_rand(123002,964002);
        $employeeType= 6;
        $country='Bnagladesh';
        $volunteer = new Volunteer();

        $volunteer->firstname=$request->firstname;
        $volunteer->lastname=$request->lastname;
        $volunteer->email=$request->email;
        $volunteer->phonenumber=$request->phonenumber;
        $volunteer->fathername=$request->fathername;
        $volunteer->mothername=$request->mothername;
        $volunteer->homenumber=$request->famaliynumber;
        $volunteer->meritalstatus=$request->meritalstatus;
        $volunteer->gender=$request->gender;
        $volunteer->dob=$request->dob;
        $volunteer->nidNumber=$request->nidNumber;
        $volunteer->nationality=$request->nationality;
        $volunteer->country=$country;

        $volunteer->divisionid=$request->divisionid;
        $volunteer->districtid=$request->districtid;
        $volunteer->Thanaid=$request->Thanaid;
        $volunteer->unionId=$request->unionId;
        $volunteer->villageid=$request->villageid;

        $volunteer->Paddress=$request->Paddress;
        $volunteer->currentaddress=$request->currentaddress;

        $volunteer->volunteerid=$volunteerid;
        $volunteer->employeeType=$employeeType;
        $volunteer->joingdate=$request->joingdate;
        $volunteer->status=$request->status;

        $volunteer->save();
        return redirect('/volunteer');
    }



}
