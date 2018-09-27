<?php

namespace App\Http\Controllers\Documentation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class StudentsController extends Controller
{
    public function studentsDocumentation(){

    	return view('documentation.students.alldocumentation');
    }

    public function showDocumentation(Post $post){

    	return view('documentation.students.showdocumentation', compact('post'));
    }
}
