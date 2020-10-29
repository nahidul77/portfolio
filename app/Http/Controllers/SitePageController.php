<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Site;
use Intervention\Image\ImageManagerStatic as Image;
class SitePageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $site = Site::first();
        return view('back-end.pages.site', ['site'=>$site]);
    }

    public function dataValidate($request)
    {
        $request->validate([
            'title'=>'required|string',
        ]);

        if($request->file('resume')){
            $request->validate([
                'resume'   => 'required|mimes:doc,pdf,docx,zip|max:2048',
            ]);
        }
        if($request->file('fav_img')){
            $request->validate([
                'fav_img'  => 'required|image|max:5000',
            ]);
        }
    }

    public function uploadResume($request){

        if($request->file('resume')){
            $file = $request->file('resume');
            $file->storeAs('public/pdf', 'resume.'.$file->getClientOriginalExtension());
            return 'storage/pdf/resume.'.$file->getClientOriginalExtension();
        }
    }

    public function uploadImg($request){
        if($request->file('fav_img')){
            $img = $request->file('fav_img');
            $extension = $img->getClientOriginalExtension();
            Image::make($img)->resize(16, 16)->save('storage/img/fav_img.'.$extension);
            return 'storage/img/fav_img.'.$extension;
        }
    }

    public function save($site, $request){

        $site->title = $request->title;
        $site->sub_title = $request->sub_title;
        $site->service_head = $request->service_head;
        $site->portfolio_head = $request->portfolio_head;
        $site->about_head = $request->about_head;
        $site->resume = $this->uploadResume($request);
        $site->fav_img = $this->uploadImg($request);
        $site->save();
    }

    public function store(Request $request)
    {
       $this->dataValidate($request);

        $site = new Site;
        
        $this->save($site,$request);

        return redirect('/admin/site')->with('success', 'Site Information Stored Successfully');
    }

    
    public function update(Request $request)
    {
        
        $this->dataValidate($request);

        $site = Site::first();

        $this->save($site,$request);

        return redirect('/admin/site')->with('success', 'Site Information Updated Successfully');
    }

}
