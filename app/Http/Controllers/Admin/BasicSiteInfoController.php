<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\URL;
use App\Http\Requests;
use App\User;
use App\Job;
use Roumen\Sitemap\Sitemap;

use App;

class BasicSiteInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    	return redirect('/job');
//        return view('site.welcome');
    }

    public function siteMap()
    {
	    // create new sitemap object
	    $siteMap = App::make("sitemap");

	    // add items to the sitemap (url, date, priority, freq)
	    $siteMap->add(URL::to('/'), '2016-03-06T09:33:00+00:00', '1.0', 'daily');
	    $siteMap->add(URL::to('recruitment_guidance'), '2016-03-06T09:33:00+00:00', '1.0', 'daily');
	    $siteMap->add(URL::to('about'), '2016-03-06T09:33:00+00:00', '1.0', 'daily');

	    $jobs = DB::table('jobs')->orderBy('created_at', 'desc')->get();

	    foreach ($jobs as $job)
	    {
		    $siteMap->add(URL::to('job', $job->id), $job->updated_at, '0.5', 'never');
	    }

	    $siteMap->store('xml', 'sitemap');
    }

    public function about()
    {
        return view('site.about');
    }

    public function recruitmentGuidance()
    {
//    	return view('site.recruitment_guidance');
	    return view('headhunter.headhunter');
    }
}
