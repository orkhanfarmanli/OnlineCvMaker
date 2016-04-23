<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\WorkModel;
class workController extends Controller
{
    function insertWork(Request $request){
        WorkModel::create($request->all());
        return view('template');
    }
}
