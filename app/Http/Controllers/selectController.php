<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class selectController extends Controller
{
    function select(){
    	return view('select');
    }
}
