<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\EducationModel;
use App\WorkModel;
class templateController extends Controller
{
    function template(){
        $userEducations = EducationModel::all();
        $userWorks = WorkModel::all();
    	return view('template', compact('userEducations', 'userWorks'));

    }
    function test(){
    	return view('test');
    }
    function insertEducation(Request $request){
    	EducationModel::create($request->all());
    	return redirect('template');
    }


}
