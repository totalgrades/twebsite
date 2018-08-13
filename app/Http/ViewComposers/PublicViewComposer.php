<?php
namespace App\Http\ViewComposers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Repositories\UserRepository;

use Carbon\Carbon;
use App\Job;


Class PublicViewComposer {
	

    public function compose(View $view)
    {
        
    	//get current date
        $today = Carbon::today();
        
        //count jobs less than or equal to a weeks old          
        $new_jobs = Job::count();


        //put variables in views
        $view->with('today', $today)->with('new_jobs', $new_jobs);
        
    }
}