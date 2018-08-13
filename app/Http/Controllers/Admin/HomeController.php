<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\JobApplication;
use App\ContactUs;
use App\User;
use App\Job;

class HomeController extends Controller
{
    public function index()
    {
    	$jobs = Job::get();

        $job_applications = JobApplication::get();

        $contactus = ContactUs::get();

        $users = User::get();

        //$admin_users = User::where('is_admin', '=', 1)->get();

        return view('admin.home', compact('jobs', 'contactus', 'users', 'admin_users', 'job_applications'));
    }
   
}
