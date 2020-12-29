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
        $cnt = count(DB::table('classses')->get());
        
        $cls = new classses;
        $cls->class_id = "CLS".($cnt+1);
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

}
