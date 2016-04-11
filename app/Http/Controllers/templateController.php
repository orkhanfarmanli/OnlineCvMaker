<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class templateController extends Controller
{
    function template(){
    	return view('template');
    }
}
