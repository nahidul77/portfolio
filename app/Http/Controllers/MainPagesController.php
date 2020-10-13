<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Main;

class MainPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $main = Main::first();
        return view('pages.main', ['main'=>$main]);
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validateData = $request->validate([
            'title'=>'required|string',
            'sub_title'=>'required|string'
        ]);

        $main = Main::first();
        $main->title = $request->title;
        $main->sub_title = $request->sub_title;

        if($request->file('bg_img')){
            $image = $request->file('bg_img');
            $image->storeAs('public/img', 'bg_img.'.$image->getClientOriginalExtension());
            $main->bg_img = 'storage/img/bg_img.'.$image->getClientOriginalExtension();
        }

        if($request->file('resume')){
            $file = $request->file('resume');
            $file->storeAs('public/pdf', 'resume_nahidul_islam.'.$file->getClientOriginalExtension());
            $main->resume = 'storage/pdf/resume_nahidul_islam.'.$file->getClientOriginalExtension();
        }

        $main->save();

        return redirect('/admin/main')->with('success', ' Information Update Successfully');

    }

    
}
