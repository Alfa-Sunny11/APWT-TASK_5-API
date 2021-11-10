<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class ApiController extends Controller
{
    // function getdata(){
    //     return ["name"=>"sunny","id"=>"19-40251-1","address"=>"dhaka"];
    // }
    function list(){
        return Student::all();
    }
    function listparam($id=null){
        return Student::find($id);
    }
    function add(Request $req){
        return view('students.add');
    }
    public function AddSubmit(Request $request){
       
        $var = new Student();
        $var->name= $request->name;
        $var->s_id = $request->s_id;
        $var->email = $request->email;
        $var->phone=$request->phone;
        $var->dob = $request->dob;
        $var->save();


        //return "OK";

        return redirect('list');      
    }
}
