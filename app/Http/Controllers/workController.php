<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\EducationModel;
use App\WorkModel;
use App\PersonalDataModel;
use App\PersonalContactModel;
use App\LanguagesModel;
use App\SkillsModel;
use App\AwardsModel;
class workController extends Controller
{
    function insertWork(Request $request){
        WorkModel::create($request->all());
        $userEducations = EducationModel::all();
        $userWorks = WorkModel::all();
        $userPersonalDatas = PersonalDataModel::all();
        $userPersonalContacts = PersonalContactModel::all();
        $languages = LanguagesModel::all();
        $skills = SkillsModel::all();
        $awards = AwardsModel::all();
    	return view('template', compact('awards','skills','languages', 'userEducations', 'userWorks', 'userPersonalDatas', 'userPersonalContacts'));
    }
}
