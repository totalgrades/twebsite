<?php

namespace App\Http\Controllers\Admin\Documentation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentsController extends Controller
{
    public function students()
    {
    	return view('admin.documentation.students');
    }
}
