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
        return view('pages.main');
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


        if($request->file('resume')){
            $file = $request->file('resume');
            $file->storeAs('public/pdf', 'resume.'.$file->getClientOriginalExtension());
            $main->resume = 'storage/pdf/resume.'.$file->getClientOriginalExtension();
        }

        $main->save();

        return redirect('/admin/main')->with('success', ' Information Update Successfully');

    }

    
}
