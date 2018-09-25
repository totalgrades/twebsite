<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DocumentationController extends Controller
{
    public function students()
    {
    	return view('admin.documentation.students');
    }
}
