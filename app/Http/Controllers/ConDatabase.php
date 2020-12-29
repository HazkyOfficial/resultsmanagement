<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\classses;

class ConDatabase extends Controller
{
    //Database Connections

    public function addclass(Request $req)
    {
        $req->validate([
            'CName'=>'required',

        ],[
            'CName.required'=>'Class is must'
        
        ]);
        
      
        
        $cls = new classses;
       
        $cls->class_name = $req->CName;
        $cls->class_year = $req->CYear;
        $cls->class_teacher = $req->CTName;
        $cls->class_type = $req->CType;

        $cls->save();

        return redirect()->back()->with('msg',"class is saved");
    }

    public function getclass(){
        $cs = DB::table('classs')->get();

        return view('viewclass',compact('cs'));
    }

    public function editclass(Request $req)
    {
       DB::table('classses')->where('id',$req->eid)->update([
           'class_name'=>$req->ename,
           'class_year'=>$req->eyear,
           'class_teacher'=>$req->eteacher,
           'class_type' => $req->etype
    
       ]);

        
        
    }

    public function delete($i){
        DB::table('classses')->where('id',$i)->delete();

        return redirect()->back()->with('msg',"class is Deleted");

    }

}
