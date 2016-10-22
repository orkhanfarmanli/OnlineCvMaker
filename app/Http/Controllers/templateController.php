<?php

namespace App\Http\Controllers;

use App\AwardsModel;
use App\EducationModel;
use App\LanguagesModel;
use App\PersonalContactModel;
use App\PersonalDataModel;
use App\SkillsModel;
use App\WorkModel;
use Auth;
use DB;
use Illuminate\Http\Request;
use Redirect;
use Session;

class templateController extends Controller
{
     public function updateImage($id)
     {
          $imageRow = PersonalDataModel::Find($id);

          return $imageRow;
     }
     public function insertImage(Request $request, $id, $id2)
     {
          // getting all of the post data
          $file = $request->file('image');
          if ($request->file('image')->isValid()) {
               $destinationPath = 'uploads'; // upload path
               $extension = $request->file('image')->getClientOriginalExtension();
               if ($extension == "img" || $extension == "jpg" || $extension == "jpeg" || $extension == "png") {
                    $fileName = rand(11111, 99999) . '.' . $extension; // renameing image
                    $request->file('image')->move($destinationPath, $fileName); // uploading file to given path
                    // sending back with message

                    $fullUrl = '/' . $destinationPath . '/' . $fileName;
                    DB::table('personal_data')
                         ->where('personal_data_id', $id)
                         ->update(array('image_url' => $fullUrl));
                    return redirect("cv/$id2");

                    Session::flash('success', 'Upload successfully');
                    return Redirect::to("/cv/$id2");
               } else {
                    return Redirect::to("/cv/$id2");
               }

          } else {
               // sending back with error message.
               Session::flash('error', 'uploaded file is not valid');
               return Redirect::to("/cv/$id2");
          }
     }

     public function template($id)
     {
          $cvCheck = DB::table('cv')->where('cv_id', $id)->first();
          if ($cvCheck->user_id == Auth::user()->id) {
               $userEducations = EducationModel::where('cv_id', $id)->get();
               $userWorks = WorkModel::where('cv_id', '=', $id)->get();
               $userPersonalDatas = PersonalDataModel::where('cv_id', $id)->get();
               $userPersonalContacts = PersonalContactModel::where('cv_id', $id)->get();
               $languages = LanguagesModel::where('cv_id', $id)->get();
               $skills = SkillsModel::where('cv_id', $id)->get();
               $awards = AwardsModel::where('cv_id', $id)->get();
               $cvId = $id;
               $templateCheck = DB::table('cv')->where('cv_id', $id)->first();
               $templateId = $templateCheck->template_id;
               return view("template$templateId", compact('cvId', 'awards', 'skills', 'languages', 'userEducations', 'userWorks', 'userPersonalDatas', 'userPersonalContacts'));
          } else {
               return redirect("/");
          }

     }
     public function test()
     {
          return view('test');
     }
     public function insertWork(Request $request, $id)
     {
          DB::table('works')->insert(['work_date' => $request->work_date, 'cv_id' => $id, 'work_company' => $request->work_company, 'work_profession' => $request->work_profession, 'work_info' => $request->work_info]);
          $userid = Auth::user()->id;
          return redirect("cv/$id");
     }
     public function updateWork($id)
     {
          $workRow = WorkModel::Find($id);

          return $workRow;
     }
     public function updatePdata($id)
     {
          $pDataRow = PersonalDataModel::Find($id);

          return $pDataRow;
     }
     public function deleteWork($id)
     {
          DB::table('works')->where('work_id', '=', $id)->delete();
          return;
     }
     public function updateAddWork(Request $request, $id, $id2)
     {

          DB::table('works')
               ->where('work_id', $id)
               ->update(array('work_date' => $request->work_date, 'work_company' => $request->work_company, 'work_profession' => $request->work_profession, 'work_info' => $request->work_info));
          $userid = Auth::user()->id;
          return redirect("cv/$id2");
     }
     public function updateAddPdata(Request $request, $id, $id2)
     {
          $cvCheck = DB::table('personal_data')->where('personal_data_id', $id)->first();
          $dataCheckCv = $cvCheck->cv_id;
          $userCheck = DB::table('cv')->where('cv_id', $dataCheckCv)->first();
          if ($userCheck->user_id == Auth::user()->id) {

               DB::table('personal_data')
                    ->where('personal_data_id', $id)
                    ->update(array('personal_data_fname' => $request->personal_data_fname, 'personal_data_bdate' => $request->personal_data_bdate, 'personal_data_info' => $request->personal_data_info, 'personal_data_profession' => $request->personal_data_profession));
               $userid = Auth::user()->id;
               return redirect("cv/$id2");
          } else {
               return redirect("/");
          }

     }

     public function insertNumber(Request $request, $id)
     {
          DB::table('personal_contact')->insert(['personal_contact_name' => $request->personal_contact_name, 'personal_contact_data' => $request->personal_contact_data, 'cv_id' => $id]);
          $userid = Auth::user()->id;
          return redirect("cv/$id");
     }
     public function deletePhone($id)
     {
          DB::table('personal_contact')->where('personal_contact_id', '=', $id)->delete();
          return;
     }
     public function updatePhone($id)
     {
          $phoneRow = PersonalContactModel::Find($id);

          return $phoneRow;
     }
     public function updateAddPhone(Request $request, $id, $id2)
     {
          DB::table('personal_contact')
               ->where('personal_contact_id', $id)
               ->update(array('personal_contact_name' => $request->personal_contact_name, 'personal_contact_data' => $request->personal_contact_data));
          $userid = Auth::user()->id;
          return redirect("cv/$id2");
     }
     public function deleteLanguage($id)
     {
          DB::table('languages')->where('language_id', '=', $id)->delete();
          return;
     }
     public function insertLanguage(Request $request, $id)
     {
          DB::table('languages')->insert(['language_name' => $request->language_name, 'language_level' => $request->language_level, 'cv_id' => $id]);
          $userid = Auth::user()->id;
          return redirect("cv/$id");
     }
     public function updateAddLanguage(Request $request, $id, $id2)
     {
          DB::table('languages')
               ->where('language_id', $id)
               ->update(array('language_name' => $request->language_name, 'language_level' => $request->language_level));
          $userid = Auth::user()->id;
          return redirect("cv/$id2");
     }
     public function updateLanguage($id)
     {
          $languageRow = LanguagesModel::Find($id);

          return $languageRow;
     }

     public function deleteSkills($id)
     {
          DB::table('skills')->where('skill_id', '=', $id)->delete();
          return;
     }
     public function insertSkills(Request $request, $id)
     {
          DB::table('skills')->insert(['skill_name' => $request->skill_name, 'skill_level' => $request->skill_level, 'cv_id' => $id]);
          $userid = Auth::user()->id;
          return redirect("cv/$id");
     }
     public function updateAddSkills(Request $request, $id, $id2)
     {
          DB::table('skills')
               ->where('skill_id', $id)
               ->update(array('skill_name' => $request->skill_name, 'skill_level' => $request->skill_level));
          $userid = Auth::user()->id;
          return redirect("cv/$id2");
     }
     public function updateSkills($id)
     {
          $skillsRow = SkillsModel::Find($id);

          return $skillsRow;
     }

     public function deleteAwards($id)
     {
          DB::table('awards')->where('award_id', '=', $id)->delete();
          return;
     }
     public function insertAwards(Request $request, $id)
     {
          DB::table('awards')->insert(['award_text' => $request->award_text, 'cv_id' => $id]);
          $userid = Auth::user()->id;
          return redirect("cv/$id");
     }
     public function updateAddAwards(Request $request, $id, $id2)
     {
          DB::table('awards')
               ->where('award_id', $id)
               ->update(array('award_text' => $request->award_text));
          $userid = Auth::user()->id;
          return redirect("cv/$id2");
     }
     public function updateAwards($id)
     {
          $awardsRow = AwardsModel::Find($id);

          return $awardsRow;
     }

     public function deleteEdu($id)
     {
          DB::table('educations')->where('education_id', '=', $id)->delete();
          return;
     }
     public function insertEducation(Request $request, $id)
     {
          DB::table('educations')->insert(['education_date' => $request->education_date, 'cv_id' => $id, 'education_name' => $request->education_name, 'education_degree' => $request->education_degree, 'education_info' => $request->education_info]);
          $userid = Auth::user()->id;
          return redirect("cv/$id");
     }
     public function updateAddEdu(Request $request, $id, $id2)
     {
          DB::table('educations')
               ->where('education_id', $id)
               ->update(array('education_date' => $request->education_date, 'education_name' => $request->education_name, 'education_degree' => $request->education_degree, 'education_info' => $request->education_info));
          $userid = Auth::user()->id;
          return redirect("cv/$id2");
     }
     public function updateEdu($id)
     {
          $eduRow = EducationModel::Find($id);

          return $eduRow;
     }

     //////

     public function userArea($id)
     {
          if ($id == Auth::user()->id) {
               $userCvs = DB::table('cv')->where('user_id', $id)->get();
               return view('userarea', compact('id', 'userCvs'));
          } else {
               return redirect("/");
          }
     }
}
