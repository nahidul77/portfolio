<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServicePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $services = Service::all();
        return view('back-end.services.list', ['services'=>$services]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back-end.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function dataValidate($request){
        $request->validate([
            'icon' => 'required|string',
            'title'=> 'required|string',
            'description' => 'required|string'
        ]);
    }

    public function save($service, $request){
        $service->icon = $request->icon;
        $service->title = $request->title;
        $service->description = $request->description;
        $service->save();
    }
    public function store(Request $request)
    {
        $this->dataValidate($request);
        $service = new Service;
        $this->save($service, $request);
        return redirect('admin/service/list')->with('success', 'New Service Added Successfully');
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
        $service = Service::find($id);
        return view('back-end.services.edit', ['service'=>$service]);
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
        $service = Service::find($id);
        $this->save($service, $request);
        return redirect('admin/service/list')->with('success', 'Service Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect('admin/service/list')->with('success', 'Service Updated Successfully');
    }
}
