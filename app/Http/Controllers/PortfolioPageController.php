<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
use Intervention\Image\ImageManagerStatic as Image;


class PortfolioPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $portfolios = Portfolio::all();
        return view('back-end.portfolio.list', ['portfolios'=>$portfolios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back-end.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function dataValidate($request){
        $request->validate([
            'title' => 'required|string',
            'images.*' => 'required|image|max:5000',
        ]);
    }

    public function uploadImg($request){
        
        if($request->file('images')) {
            $images = $request->file('images');
            $img_len = count($images);
            for($i=0; $i<$img_len; $i++){
                $img = $images[$i];
                $img_name = date('mdYHis').uniqid().'.'.$img->getClientOriginalExtension();
                Image::make($img)->resize(800, 800)->save('storage/img/'.$img_name);
                $img_path[]= 'storage/img/'.$img_name;
            }
            return $img_path;
        }
    }
    public function save($portfolio, $request){
        $img_path = $this->uploadImg($request);
        $portfolio->title = strtoupper($request->title);
        $portfolio->site_link = $request->site_link;
        $portfolio->description = $request->description;
        $portfolio->img_a = $img_path[0];
        if(isset($img_path[1])){
            $portfolio->img_b = $img_path[1]; 
        }
        if(isset($img_path[2])){
            $portfolio->img_c = $img_path[2]; 
        }
        if(isset($img_path[3])){
            $portfolio->img_d = $img_path[3]; 
        }
        if(isset($img_path[4])){
            $portfolio->img_e = $img_path[4];
        }
        $portfolio->save();

    }
    public function store(Request $request)
    {
        $this->dataValidate($request);
        $portfolio = new Portfolio();
        $this->save($portfolio, $request);

        return redirect('admin/portfolio/list')->with('success', 'New Portfolio Added Successfully');
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
        return view('back-end.portfolio.edit', ['portfolio'=>$portfolio]); 
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
        $this->dataValidate($request);
        $portfolio = new Portfolio();
        $this->save($portfolio, $request);

        return redirect('admin/portfolio/list')->with('success', 'New Portfolio Updated Successfully');
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

        return redirect('admin/portfolio/list')->with('success', 'Portfolio Deleted Successfully');

    }
}
