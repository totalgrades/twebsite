<?php

namespace App\Http\Controllers\Documentation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;
use App\Traits\CaptchaTrait;
use App\Comment;

class DocumentationController extends Controller
{
	use CaptchaTrait;

    public function allDocumentation(Category $category){

    	return view('documentation.alldocumentation', compact('category'));
    }

    public function showDocumentation(Post $post){

    	return view('documentation.showdocumentation', compact('post'));
    }

    public function addComment(Request $request, Post $post){

    	$request['captcha'] = $this->captchaCheck();

    	$this->validate($request, [
    		'name' => 'required',
    		'email' => 'required|email',
    	    'post_comment' => 'required',
    	    'g-recaptcha-response' => 'required',
        	'captcha' => 'required|min:1',
	    ],

	    [
	     'g-recaptcha-response.required' => 'Captcha is required',
	     'captcha.min' => 'Wrong captcha, please try again.'
	    ]);
	        
	    Comment::insert([
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'post_id'=>$post->id,
                    'post_comment'=>$request->post_comment,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]);
               
        return back();
	}
}