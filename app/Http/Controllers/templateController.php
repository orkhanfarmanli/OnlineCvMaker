<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\EducationModel;
use App\WorkModel;
use App\PersonalDataModel;
use App\PersonalContactModel;
use App\LanguagesModel;
use App\SkillsModel;
use App\AwardsModel;
class templateController extends Controller
{
    function template(){
        $userEducations = EducationModel::all();
        $userWorks = WorkModel::all();
        $userPersonalDatas = PersonalDataModel::all();
        $userPersonalContacts = PersonalContactModel::all();
        $languages = LanguagesModel::all();
        $skills = SkillsModel::all();
        $awards = AwardsModel::all();
    	return view('template', compact('awards','skills','languages', 'userEducations', 'userWorks', 'userPersonalDatas', 'userPersonalContacts'));

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
    function updatePhone($id){
          $phoneRow = PersonalContactModel::Find($id);
          
          return $phoneRow;
    }
    function deleteEdu($id){
           DB::table('educations')->where('education_id', '=', $id)->delete();
           return ; 
    }
    function deleteWork($id){
           DB::table('works')->where('work_id', '=', $id)->delete();
           return ; 
    }
    function updateAddPhone(Request $request, $id){
        DB::table('personal_contact')
            ->where('personal_contact_id', $id)
            ->update(array('personal_contact_number' => $request->personal_contact_number));
        $userEducations = EducationModel::all();
        $userWorks = WorkModel::all();
        $userPersonalDatas = PersonalDataModel::all();
        $userPersonalContacts = PersonalContactModel::all();
        $languages = LanguagesModel::all();
        $skills = SkillsModel::all();
        $awards = AwardsModel::all();
        return view('template', compact('awards','skills','languages', 'userEducations', 'userWorks', 'userPersonalDatas', 'userPersonalContacts'));
    }
    function updateAddEdu(Request $request, $id){
        DB::table('educations')
            ->where('education_id', $id)
            ->update(array('education_date' => $request->education_date, 'education_name' => $request->education_name, 'education_degree' => $request->education_degree, 'education_info' => $request->education_info));
        $userEducations = EducationModel::all();
        $userWorks = WorkModel::all();
        $userPersonalDatas = PersonalDataModel::all();
        $userPersonalContacts = PersonalContactModel::all();
        $languages = LanguagesModel::all();
        $skills = SkillsModel::all();
     $awards = AwardsModel::all();
        return view('template', compact('awards','skills','languages', 'userEducations', 'userWorks', 'userPersonalDatas', 'userPersonalContacts'));
    }
    function updateAddWork(Request $request, $id){
        DB::table('works')
            ->where('work_id', $id)
            ->update(array('work_date' => $request->work_date, 'work_company' => $request->work_company, 'work_profession' => $request->work_profession, 'work_info' => $request->work_info));
        $userEducations = EducationModel::all();
        $userWorks = WorkModel::all();
        $userPersonalDatas = PersonalDataModel::all();
        $userPersonalContacts = PersonalContactModel::all();
        $languages = LanguagesModel::all();
        $skills = SkillsModel::all();
        $awards = AwardsModel::all();
        return view('template', compact('awards','skills','languages', 'userEducations', 'userWorks', 'userPersonalDatas', 'userPersonalContacts'));
    }
    function updateAddPdata(Request $request, $id){
        DB::table('personal_data')
            ->where('personal_data_id', $id)
            ->update(array('personal_data_fname' => $request->personal_data_fname, 'personal_data_bdate' => $request->personal_data_bdate, 'personal_data_info' => $request->personal_data_info, 'personal_data_profession' => $request->personal_data_profession));
        $userEducations = EducationModel::all();
        $userWorks = WorkModel::all();
        $userPersonalDatas = PersonalDataModel::all();
        $userPersonalContacts = PersonalContactModel::all();
        $languages = LanguagesModel::all();
        $skills = SkillsModel::all();
       $awards = AwardsModel::all();
        return view('template', compact('awards','skills','languages', 'userEducations', 'userWorks', 'userPersonalDatas', 'userPersonalContacts'));
    }

    function insertNumber(Request $request){
        DB::table('personal_contact')->insert(['personal_contact_number' => $request->personal_contact_number, 'cv_id' => 1]);
        $userEducations = EducationModel::all();
        $userWorks = WorkModel::all();
        $userPersonalDatas = PersonalDataModel::all();
        $userPersonalContacts = PersonalContactModel::all();
        $languages = LanguagesModel::all();
        $skills = SkillsModel::all();
       $awards = AwardsModel::all();
        return view('template', compact('awards','skills','languages', 'userEducations', 'userWorks', 'userPersonalDatas', 'userPersonalContacts'));
    }
    function deletePhone($id){
           DB::table('personal_contact')->where('personal_contact_id', '=', $id)->update(['personal_contact_number' => ""]);
           return ; 
    }
    function deleteEmail($id){
           DB::table('personal_contact')->where('personal_contact_id', '=', $id)->update(['personal_contact_email' => ""]);
           return ; 
    }
    function insertEmail(Request $request){
        DB::table('personal_contact')->insert(['personal_contact_email' => $request->personal_contact_email, 'cv_id' => 1]);
        $userEducations = EducationModel::all();
        $userWorks = WorkModel::all();
        $userPersonalDatas = PersonalDataModel::all();
        $userPersonalContacts = PersonalContactModel::all();
        $languages = LanguagesModel::all();
        $skills = SkillsModel::all();
      $awards = AwardsModel::all();
        return view('template', compact('awards','skills','languages', 'userEducations', 'userWorks', 'userPersonalDatas', 'userPersonalContacts'));
    }
    function updateAddEmail(Request $request, $id){
        DB::table('personal_contact')
            ->where('personal_contact_id', $id)
            ->update(array('personal_contact_email' => $request->personal_contact_email));
        $userEducations = EducationModel::all();
        $userWorks = WorkModel::all();
        $userPersonalDatas = PersonalDataModel::all();
        $userPersonalContacts = PersonalContactModel::all();
        $languages = LanguagesModel::all();
        $skills = SkillsModel::all();
        $awards = AwardsModel::all();
        return view('template', compact('awards','skills','languages', 'userEducations', 'userWorks', 'userPersonalDatas', 'userPersonalContacts'));
}
    function updateEmail($id){
          $emailRow = PersonalContactModel::Find($id);
          
          return $emailRow;
    }

    function deleteSocial($id){
           DB::table('personal_contact')->where('personal_contact_id', '=', $id)->update(['personal_contact_social' => ""]);
           return ; 
    }
    function insertSocial(Request $request){
        DB::table('personal_contact')->insert(['personal_contact_social' => $request->personal_contact_social, 'cv_id' => 1]);
        $userEducations = EducationModel::all();
        $userWorks = WorkModel::all();
        $userPersonalDatas = PersonalDataModel::all();
        $userPersonalContacts = PersonalContactModel::all();
        $languages = LanguagesModel::all();
        $skills = SkillsModel::all();
        $awards = AwardsModel::all();
        return view('template', compact('awards','skills','languages', 'userEducations', 'userWorks', 'userPersonalDatas', 'userPersonalContacts'));
    }
    function updateAddSocial(Request $request, $id){
        DB::table('personal_contact')
            ->where('personal_contact_id', $id)
            ->update(array('personal_contact_social' => $request->personal_contact_social));
        $userEducations = EducationModel::all();
        $userWorks = WorkModel::all();
        $userPersonalDatas = PersonalDataModel::all();
        $userPersonalContacts = PersonalContactModel::all();     
       $languages = LanguagesModel::all();
        $skills = SkillsModel::all();
      $awards = AwardsModel::all();
        return view('template', compact('awards','skills','languages', 'userEducations', 'userWorks', 'userPersonalDatas', 'userPersonalContacts'));
    }
    function updateSocial($id){
          $socialRow = PersonalContactModel::Find($id);
          
          return $socialRow;
    }

     function deleteAdress($id){
           DB::table('personal_contact')->where('personal_contact_id', '=', $id)->update(['personal_contact_adress' => ""]);
           return ; 
    }
    function insertAdress(Request $request){
        DB::table('personal_contact')->insert(['personal_contact_adress' => $request->personal_contact_adress, 'cv_id' => 1]);
        $userEducations = EducationModel::all();
        $userWorks = WorkModel::all();
        $userPersonalDatas = PersonalDataModel::all();
        $userPersonalContacts = PersonalContactModel::all();
        $languages = LanguagesModel::all();
        $skills = SkillsModel::all();
      $awards = AwardsModel::all();
        return view('template', compact('awards','skills','languages', 'userEducations', 'userWorks', 'userPersonalDatas', 'userPersonalContacts'));
    }
    function updateAddAdress(Request $request, $id){
        DB::table('personal_contact')
            ->where('personal_contact_id', $id)
            ->update(array('personal_contact_adress' => $request->personal_contact_adress));
        $userEducations = EducationModel::all();
        $userWorks = WorkModel::all();
        $userPersonalDatas = PersonalDataModel::all();
        $userPersonalContacts = PersonalContactModel::all();
        $languages = LanguagesModel::all();
        $skills = SkillsModel::all();
       $awards = AwardsModel::all();
        return view('template', compact('awards','skills','languages', 'userEducations', 'userWorks', 'userPersonalDatas', 'userPersonalContacts'));      
    }
    function updateAdress($id){
          $adressRow = PersonalContactModel::Find($id);
          
          return $adressRow;
    }

    function deleteLanguage($id){
           DB::table('languages')->where('language_id', '=', $id)->delete();
           return ; 
    }
    function insertLanguage(Request $request){
        DB::table('languages')->insert(['language_name' => $request->language_name, 'language_level' => $request->language_level, 'cv_id' => 1]);
        $userEducations = EducationModel::all();
        $userWorks = WorkModel::all();
        $userPersonalDatas = PersonalDataModel::all();
        $userPersonalContacts = PersonalContactModel::all();
        $languages = LanguagesModel::all();
        $skills = SkillsModel::all();
       $awards = AwardsModel::all();
        return view('template', compact('awards','skills','languages', 'userEducations', 'userWorks', 'userPersonalDatas', 'userPersonalContacts'));
    }
    function updateAddLanguage(Request $request, $id){
        DB::table('languages')
            ->where('language_id', $id)
            ->update(array('language_name' => $request->language_name,'language_level' => $request->language_level));
        $userEducations = EducationModel::all();
        $userWorks = WorkModel::all();
        $userPersonalDatas = PersonalDataModel::all();
        $userPersonalContacts = PersonalContactModel::all();
        $languages = LanguagesModel::all();
        $skills = SkillsModel::all();
    $awards = AwardsModel::all();
        return view('template', compact('awards','skills','languages', 'userEducations', 'userWorks', 'userPersonalDatas', 'userPersonalContacts'));       
    }
    function updateLanguage($id){
          $languageRow = LanguagesModel::Find($id);
          
          return $languageRow;
    }

     function deleteSkills($id){
           DB::table('skills')->where('skill_id', '=', $id)->delete();
           return ; 
    }
    function insertSkills(Request $request){
        DB::table('skills')->insert(['skill_name' => $request->skill_name, 'skill_level' => $request->skill_level, 'cv_id' => 1]);
        $userEducations = EducationModel::all();
        $userWorks = WorkModel::all();
        $userPersonalDatas = PersonalDataModel::all();
        $userPersonalContacts = PersonalContactModel::all();
        $languages = LanguagesModel::all();
        $skills = SkillsModel::all();
       $awards = AwardsModel::all();
        return view('template', compact('awards','skills','languages', 'userEducations', 'userWorks', 'userPersonalDatas', 'userPersonalContacts'));
    }
    function updateAddSkills(Request $request, $id){
        DB::table('skills')
            ->where('skill_id', $id)
            ->update(array('skill_name' => $request->skill_name,'skill_level' => $request->skill_level));
        $userEducations = EducationModel::all();
        $userWorks = WorkModel::all();
        $userPersonalDatas = PersonalDataModel::all();
        $userPersonalContacts = PersonalContactModel::all();
        $languages = LanguagesModel::all();
        $skills = SkillsModel::all();
     $awards = AwardsModel::all();
        return view('template', compact('awards','skills','languages', 'userEducations', 'userWorks', 'userPersonalDatas', 'userPersonalContacts'));     
    }
    function updateSkills($id){
          $skillsRow = SkillsModel::Find($id);
          
          return $skillsRow;
    }

         function deleteAwards($id){
           DB::table('awards')->where('award_id', '=', $id)->delete();
           return ; 
    }
    function insertAwards(Request $request){
        DB::table('awards')->insert(['award_text' => $request->award_text, 'cv_id' => 1]);
        $userEducations = EducationModel::all();
        $userWorks = WorkModel::all();
        $userPersonalDatas = PersonalDataModel::all();
        $userPersonalContacts = PersonalContactModel::all();
        $languages = LanguagesModel::all();
        $skills = SkillsModel::all();
        $awards = AwardsModel::all();
        return view('template', compact('awards','skills','languages', 'userEducations', 'userWorks', 'userPersonalDatas', 'userPersonalContacts'));
    }
    function updateAddAwards(Request $request, $id){
        DB::table('awards')
            ->where('award_id', $id)
            ->update(array('award_text' => $request->award_text));
        $userEducations = EducationModel::all();
        $userWorks = WorkModel::all();
        $userPersonalDatas = PersonalDataModel::all();
        $userPersonalContacts = PersonalContactModel::all();
        $languages = LanguagesModel::all();
        $skills = SkillsModel::all();
       $awards = AwardsModel::all();
        return view('template', compact('awards','skills','languages', 'userEducations', 'userWorks', 'userPersonalDatas', 'userPersonalContacts'));      
    }
    function updateAwards($id){
          $awardsRow = AwardsModel::Find($id);
          
          return $awardsRow;
    }
}
