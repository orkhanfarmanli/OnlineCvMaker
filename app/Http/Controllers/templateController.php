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
    function updateEdu($id){
          $eduRow = EducationModel::Find($id);
          
          return $eduRow;
    }
    function updateWork($id){
          $workRow = WorkModel::Find($id);
          
          return $workRow;
    }
    function deleteEdu($id){
           DB::table('educations')->where('education_id', '=', $id)->delete();
           return ; 
    }
    function deleteWork($id){
           DB::table('works')->where('work_id', '=', $id)->delete();
           return ; 
    }
    function updateAddEdu(Request $request, $id){
        DB::table('educations')
            ->where('education_id', $id)
            ->update(array('education_date' => $request->education_date, 'education_name' => $request->education_name, 'education_degree' => $request->education_degree, 'education_info' => $request->education_info));
        $userEducations = EducationModel::all();
        $userWorks = WorkModel::all();
        return view('template', compact('userEducations', 'userWorks'));
    }
    function updateAddWork(Request $request, $id){
        DB::table('works')
            ->where('work_id', $id)
            ->update(array('work_date' => $request->work_date, 'work_company' => $request->work_company, 'work_profession' => $request->work_profession, 'work_info' => $request->work_info));
        $userEducations = EducationModel::all();
        $userWorks = WorkModel::all();
        return view('template', compact('userEducations', 'userWorks'));
    }
}
