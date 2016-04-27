<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\EducationModel;
use App\WorkModel;
class workController extends Controller
{
    function insertWork(Request $request){
        WorkModel::create($request->all());
        $userEducations = EducationModel::all();
        $userWorks = WorkModel::all();
        return view('template', compact('userEducations', 'userWorks'));
    }
}
