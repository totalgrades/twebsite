<?php

namespace App\Http\Controllers\Documentation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentsController extends Controller
{
    public function studentsDocumentation(){

    	return view('documentation.students.showdocumentation');
    }
}
