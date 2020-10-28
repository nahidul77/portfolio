<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Intervention\Image\ImageManagerStatic as Image;

class ProfilePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = Profile::first();
        return view('back-end.pages.profile', ['profile'=>$profile]);
    }

    public function dataValidate($request)
    {
        $request->validate([
            'name'=>'required|string',
        ]);

        if($request->file('profile_img')){
            $request->validate([
                'profile_img'  => 'required|image|max:5000',
            ]);
        }
    }

    public function uploadImg($request){
        if($request->file('profile_img')){
            $img = $request->file('profile_img');
            $extension = $img->getClientOriginalExtension();
            Image::make($img)->resize(300, 300)->save('storage/img/profile_img.'.$extension);
            return 'storage/img/profile_img.'.$extension;
        }
    }

    public function save($profile, $request){

        $profile->name = $request->name;
        $profile->title = $request->title;
        $profile->description = $request->description;
        $profile->fb_link = $request->fb_link;
        $profile->tw_link = $request->tw_link;
        $profile->in_link = $request->in_link;
        $profile->git_link = $request->git_link;
        $profile->profile_img = $this->uploadImg($request);
        $profile->save();
    }

    public function store(Request $request)
    {
       $this->dataValidate($request);

        $profile = new Profile;
        
        $this->save($profile,$request);

        return redirect('/admin/profile')->with('success', 'Profile Information Stored Successfully');
    }

    
    public function update(Request $request)
    {
        
        $this->dataValidate($request);

        $profile = Profile::first();

        $this->save($profile,$request);

        return redirect('/admin/profile')->with('success', 'Profile Information Updated Successfully');
    }
}
