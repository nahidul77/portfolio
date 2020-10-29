<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Site;
use App\Profile;
use App\Portfolio;
use App\Service;
use App\Skill;
use App\Contact;

class PagesController extends Controller
{
    public function index(){
        $site = Site::first();
        $profile = Profile::first();
        $services = Service::all();
        $portfolios = Portfolio::all();
        $skills = Skill::all();
        $contact = Contact::first();

        return view('front-end.index', [
                        'site'=>$site, 
                        'profile'=>$profile, 
                        'services'=>$services, 
                        'portfolios'=>$portfolios,
                        'skills'=>$skills,
                        'contact'=>$contact,
            ]);
    }


}
