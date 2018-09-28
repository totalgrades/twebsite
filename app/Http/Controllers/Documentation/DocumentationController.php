<?php

namespace App\Http\Controllers\Documentation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;

class DocumentationController extends Controller
{
    public function allDocumentation(Category $category){

    	return view('documentation.alldocumentation', compact('category'));
    }

    public function showDocumentation(Post $post){

    	return view('documentation.showdocumentation', compact('post'));
    }
}
