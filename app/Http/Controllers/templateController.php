<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\EducationModel;
use App\WorkModel;
use App\PersonalDataModel;
use App\PersonalContactModel;
class templateController extends Controller
{
    function template(){
        $userEducations = EducationModel::all();
        $userWorks = WorkModel::all();
        $userPersonalDatas = PersonalDataModel::all();
        $userPersonalContacts = PersonalContactModel::all();
    	return view('template', compact('userEducations', 'userWorks', 'userPersonalDatas', 'userPersonalContacts'));

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
    function updatePdata($id){
          $pDataRow = PersonalDataModel::Find($id);
          
          return $pDataRow;
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
        $userPersonalDatas = PersonalDataModel::all();
        $userPersonalContacts = PersonalContactModel::all();
        return view('template', compact('userEducations', 'userWorks', 'userPersonalDatas', 'userPersonalContacts'));
    }
    function updateAddWork(Request $request, $id){
        DB::table('works')
            ->where('work_id', $id)
            ->update(array('work_date' => $request->work_date, 'work_company' => $request->work_company, 'work_profession' => $request->work_profession, 'work_info' => $request->work_info));
        $userEducations = EducationModel::all();
        $userWorks = WorkModel::all();
        $userPersonalDatas = PersonalDataModel::all();
        $userPersonalContacts = PersonalContactModel::all();
        return view('template', compact('userEducations', 'userWorks', 'userPersonalDatas', 'userPersonalContacts'));
    }
    function updateAddPdata(Request $request, $id){
        DB::table('personal_data')
            ->where('personal_data_id', $id)
            ->update(array('personal_data_fname' => $request->personal_data_fname, 'personal_data_bdate' => $request->personal_data_bdate, 'personal_data_info' => $request->personal_data_info, 'personal_data_profession' => $request->personal_data_profession));
        $userEducations = EducationModel::all();
        $userWorks = WorkModel::all();
        $userPersonalDatas = PersonalDataModel::all();
        $userPersonalContacts = PersonalContactModel::all();
        return view('template', compact('userEducations', 'userWorks', 'userPersonalDatas', 'userPersonalContacts'));
    }
}
