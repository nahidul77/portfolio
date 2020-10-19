<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\portfolio;
use Illuminate\Support\Facades\Storage;

class PortfolioPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $portfolio = Portfolio::all();
        return view('pages.portfolio.list', ['portfolio'=>$portfolio]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title'=>'required|string',
            'view_site'=>'required|string',
            'description'=>'required|string',
            'pa_img'=>'required|image',
            'pb_img'=>'required|image'
        ]);

        $portfolio = new Portfolio;
        $portfolio->title = strtoupper($request->title);
        $portfolio->view_site = $request->view_site;
        $portfolio->description = $request->description;
        
        if($request->file('pa_img')){
            $pa_img = $request->file('pa_img');
            Storage::putFile('public/img', $pa_img);
            $portfolio->pa_img = 'storage/img/'.$pa_img->hashName();
        }
        
        if($request->file('pb_img')){
            $pb_img = $request->file('pb_img');
            Storage::putFile('public/img', $pb_img);
        $portfolio->pb_img = 'storage/img/'.$pb_img->hashName();
        }
        

        if($request->file('pc_img')){
            $pc_img = $request->file('pc_img');
            Storage::putFile('public/img', $pc_img);
            $portfolio->pc_img = 'storage/img/'.$pc_img->hashName();
        }

        if($request->file('pd_img')){
            $pd_img = $request->file('pd_img');
            Storage::putFile('public/img', $pd_img);
            $portfolio->pd_img = 'storage/img/'.$pd_img->hashName();
        }

        
        if($request->file('pe_img')){
            $pe_img = $request->file('pe_img');
            Storage::putFile('public/img', $pe_img);
            $portfolio->pe_img = 'storage/img/'.$pe_img->hashName();
        }

        $portfolio->save();

        return redirect('admin/portfolio/create')->with('success', 'New Project Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portfolio = Portfolio::find($id);
        return view('pages.portfolio.edit', ['portfolio'=>$portfolio]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'title'=>'required|string',
            'view_site'=>'required|string',
            'description'=>'required|string'
        ]);

        $portfolio = Portfolio::find($id);
        $portfolio->title = strtoupper($request->title);
        $portfolio->view_site = $request->view_site;
        $portfolio->description = $request->description;

        if($request->file('pa_img')){
            $pa_img = $request->file('pa_img');
            Storage::putFile('public/img', $pa_img);
            $portfolio->pa_img = 'storage/img/'.$pa_img->hashName();
        }
        
        if($request->file('pb_img')){
            $pb_img = $request->file('pb_img');
            Storage::putFile('public/img', $pb_img);
            $portfolio->pb_img = 'storage/img/'.$pb_img->hashName();
        }

        if($request->file('pc_img')){
            $pc_img = $request->file('pc_img');
            Storage::putFile('public/img', $pc_img);
            $portfolio->pc_img = 'storage/img/'.$pc_img->hashName();
        }

        if($request->file('pd_img')){
            $pd_img = $request->file('pd_img');
            Storage::putFile('public/img', $pd_img);
            $portfolio->pd_img = 'storage/img/'.$pd_img->hashName();
        }

        
        if($request->file('pe_img')){
            $pe_img = $request->file('pe_img');
            Storage::putFile('public/img', $pe_img);
            $portfolio->pe_img = 'storage/img/'.$pe_img->hashName();
        }

        $portfolio->save();

        return redirect('admin/portfolio/list')->with('success', 'Portfolio Updated Successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);
        $portfolio->delete();

        return redirect('admin/portfolio/list')->with('success', 'Portfolio deleted Successfully');
    }
}
