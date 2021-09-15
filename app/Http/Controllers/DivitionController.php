<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Division; 
use App\Models\City; 
use App\Models\Upazila; 
use App\Models\Union; 
use App\Models\Village; 
class DivitionController extends Controller
{
    //
    public function index(){

        $divition= Division::orderBy('id','DESC')->get();
        $City= City::orderBy('id','DESC')->get();
        $upazila= Upazila::orderBy('id','DESC')->get();
        $union= Union::orderBy('id','DESC')->get();
        $Village= Village::orderBy('id','DESC')->get();
        
        return view('admin.divitions.index',compact('divition','City','upazila','union','Village'));
    }

    public function addDivition(Request $r){
        $Divition = new Division();
        $Divition->name=$r->divitionname;
        $Divition->status=$r->status;
        $Divition->save();
        return redirect('/explore');
    }
    public function addcity(Request $request){
        $city = new City();
        $city->name=$request->cityname;
        $city->status=$request->status;
        $city->divitionId=$request->name;
        $city->save();
        return redirect('/explore');
    }
    public function addUpazila(Request $request){
        $upazila = new Upazila();
        $upazila->name=$request->upzilaname;
        $upazila->status=$request->status;
        $upazila->cityId=$request->name;
        $upazila->save();
        return redirect('/explore');
    }
    public function addUnion(Request $request){
        $union = new Union();
        $union->name=$request->unionname;
        $union->status=$request->status;
        $union->upazilaId=$request->unioncode;
        $union->save();
        return redirect('/explore');
    }
    public function addvillage(Request $request){
        $Village = new Village();
        $Village->name=$request->villagename;
        $Village->status=$request->status;
        $Village->unionId=$request->villagecode;
        $Village->save();
        return redirect('/explore');
    }

}
