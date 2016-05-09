<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use Redirect;
use Auth;
use App\EducationModel;
use App\WorkModel;
use App\PersonalDataModel;
use App\PersonalContactModel;
use App\LanguagesModel;
use App\SkillsModel;
use App\AwardsModel;
class templateController extends Controller
{
    function cvCreate($id){
      $userid= Auth::user()->id;
      $username= Auth::user()->name;
      DB::table('cv')->insert(['cv_name' => $username, 'user_id' => $userid]);
      $userNewCv = DB::table('cv')->where('user_id', $userid)->orderBy('created_at', 'desc')->first();
      $userNewCvId = $userNewCv->cv_id;

      // Default template fields

      DB::table('personal_data')->insert(['personal_data_fname' => $username, 'personal_data_bdate' => "11/03/1996", 'personal_data_info' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", 'personal_data_profession' => "WEB DEVELOPER", 'cv_id' => $userNewCvId]);


      DB::table('personal_contact')->insert(['personal_contact_name' => "Email", 'personal_contact_data' => "example@asancv.com" , 'cv_id' => $userNewCvId]);
      DB::table('personal_contact')->insert(['personal_contact_name' => "Phone", 'personal_contact_data' => "050 000 00 00" , 'cv_id' => $userNewCvId]);

      DB::table('languages')->insert(['language_name' => 'English', 'language_level' => 'Advanced', 'cv_id' => $userNewCvId]);
      DB::table('languages')->insert(['language_name' => 'Russian', 'language_level' => 'Native', 'cv_id' => $userNewCvId]);
      DB::table('skills')->insert(['skill_name' => 'Photoshop', 'skill_level' => 'Excellent', 'cv_id' => $userNewCvId]);
      DB::table('skills')->insert(['skill_name' => 'PHP', 'skill_level' => 'Good', 'cv_id' => $userNewCvId]);
      DB::table('awards')->insert(['award_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in  cupidatat non', 'cv_id' => $userNewCvId]);

     DB::table('works')->insert(['work_date' => '2013 - 2016', 'cv_id' => $userNewCvId, 'work_company' => 'Google', 'work_profession' => 'WEB DEVELOPER', 'work_info' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupid']);

      DB::table('educations')->insert(['education_date' => '2008-2012', 'cv_id' => $userNewCvId, 'education_name' => 'University of Oxford', 'education_degree' => 'Computer Science', 'education_info' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupid']);
      // Default template fields end

      return redirect("cv/$userNewCvId");
    }
    function template($id){
        $cvCheck = DB::table('cv')->where('cv_id', $id)->first();
        if($cvCheck->user_id==Auth::user()->id){
            $userEducations = EducationModel::where('cv_id', $id)->get();
            $userWorks = WorkModel::where('cv_id', '=', $id)->get();
            $userPersonalDatas = PersonalDataModel::where('cv_id', $id)->get();
            $userPersonalContacts = PersonalContactModel::where('cv_id', $id)->get();
            $languages = LanguagesModel::where('cv_id', $id)->get();
            $skills = SkillsModel::where('cv_id', $id)->get();
            $awards = AwardsModel::where('cv_id', $id)->get();
            $cvId = $id;
        	  return view('template', compact('cvId','awards','skills','languages', 'userEducations', 'userWorks', 'userPersonalDatas', 'userPersonalContacts'));
        }else{
          return redirect("/");
        }

    }
    function test(){
    	return view('test');
    }
    function insertWork(Request $request, $id){
      DB::table('works')->insert(['work_date' => $request->work_date, 'cv_id' => $id, 'work_company' => $request->work_company, 'work_profession' => $request->work_profession, 'work_info' => $request->work_info]);
        $userid= Auth::user()->id;
      return redirect("cv/$id");
    }
    function updateWork($id){
          $workRow = WorkModel::Find($id);
          
          return $workRow;
    }
    function updatePdata($id){
          $pDataRow = PersonalDataModel::Find($id);
          
          return $pDataRow;
    }
    function deleteWork($id){
           DB::table('works')->where('work_id', '=', $id)->delete();
           return ; 
    }
    function updateAddWork(Request $request, $id, $id2){
        DB::table('works')
            ->where('work_id', $id)
            ->update(array('work_date' => $request->work_date, 'work_company' => $request->work_company, 'work_profession' => $request->work_profession, 'work_info' => $request->work_info));
              $userid= Auth::user()->id;
        return redirect("cv/$id2");
    }
    function updateAddPdata(Request $request, $id, $id2){
        DB::table('personal_data')
            ->where('personal_data_id', $id)
            ->update(array('personal_data_fname' => $request->personal_data_fname, 'personal_data_bdate' => $request->personal_data_bdate, 'personal_data_info' => $request->personal_data_info, 'personal_data_profession' => $request->personal_data_profession));
      $userid= Auth::user()->id;
      return redirect("cv/$id2");
    }

    function insertNumber(Request $request, $id){
        DB::table('personal_contact')->insert(['personal_contact_name' => $request->personal_contact_name, 'personal_contact_data' => $request->personal_contact_data , 'cv_id' => $id]);
        $userid= Auth::user()->id;
      return redirect("cv/$id");
    }
    function deletePhone($id){
           DB::table('personal_contact')->where('personal_contact_id', '=', $id)->delete();
           return ; 
    }
    function updatePhone($id){
          $phoneRow = PersonalContactModel::Find($id);
          
          return $phoneRow;
    }
    function updateAddPhone(Request $request, $id, $id2){
        DB::table('personal_contact')
            ->where('personal_contact_id', $id)
            ->update(array('personal_contact_name' => $request->personal_contact_name, 'personal_contact_data' => $request->personal_contact_data));
        $userid= Auth::user()->id;
      return redirect("cv/$id2");
    }
    function deleteLanguage($id){
           DB::table('languages')->where('language_id', '=', $id)->delete();
           return ; 
    }
    function insertLanguage(Request $request, $id){
        DB::table('languages')->insert(['language_name' => $request->language_name, 'language_level' => $request->language_level, 'cv_id' => $id]);
       $userid= Auth::user()->id;
      return redirect("cv/$id");
    }
    function updateAddLanguage(Request $request, $id, $id2){
        DB::table('languages')
            ->where('language_id', $id)
            ->update(array('language_name' => $request->language_name,'language_level' => $request->language_level));
        $userid= Auth::user()->id;
      return redirect("cv/$id2");   
    }
    function updateLanguage($id){
          $languageRow = LanguagesModel::Find($id);
          
          return $languageRow;
    }

     function deleteSkills($id){
           DB::table('skills')->where('skill_id', '=', $id)->delete();
           return ; 
    }
    function insertSkills(Request $request, $id){
        DB::table('skills')->insert(['skill_name' => $request->skill_name, 'skill_level' => $request->skill_level, 'cv_id' => $id]);
        $userid= Auth::user()->id;
      return redirect("cv/$id");
    }
    function updateAddSkills(Request $request, $id, $id2){
        DB::table('skills')
            ->where('skill_id', $id)
            ->update(array('skill_name' => $request->skill_name,'skill_level' => $request->skill_level));
        $userid= Auth::user()->id;
      return redirect("cv/$id2"); 
    }
    function updateSkills($id){
          $skillsRow = SkillsModel::Find($id);
          
          return $skillsRow;
    }

         function deleteAwards($id){
           DB::table('awards')->where('award_id', '=', $id)->delete();
           return ; 
    }
    function insertAwards(Request $request, $id){
        DB::table('awards')->insert(['award_text' => $request->award_text, 'cv_id' => $id]);
        $userid= Auth::user()->id;
      return redirect("cv/$id");
    }
    function updateAddAwards(Request $request, $id, $id2){
        DB::table('awards')
            ->where('award_id', $id)
            ->update(array('award_text' => $request->award_text));
        $userid= Auth::user()->id;
      return redirect("cv/$id2");    
    }
    function updateAwards($id){
          $awardsRow = AwardsModel::Find($id);
          
          return $awardsRow;
    }

    function deleteEdu($id){
           DB::table('educations')->where('education_id', '=', $id)->delete();
           return ; 
    }
    function insertEducation(Request $request, $id){
        DB::table('educations')->insert(['education_date' => $request->education_date, 'cv_id' => $id, 'education_name' => $request->education_name, 'education_degree' => $request->education_degree, 'education_info' => $request->education_info]);
        $userid= Auth::user()->id;
      return redirect("cv/$id");
    }
    function updateAddEdu(Request $request, $id, $id2){
        DB::table('educations')
            ->where('education_id', $id)
            ->update(array('education_date' => $request->education_date, 'education_name' => $request->education_name, 'education_degree' => $request->education_degree, 'education_info' => $request->education_info));
              $userid= Auth::user()->id;
      return redirect("cv/$id2");   
    }
    function updateEdu($id){
          $eduRow = EducationModel::Find($id);
          
          return $eduRow;
    }





     //////



    function userArea($id){
      if($id==Auth::user()->id){
      $userCvs = DB::table('cv')->where('user_id', $id)->get();
        return view('userarea', compact('id', 'userCvs'));
      }else{
        return redirect("/");  
      }
    }
}
