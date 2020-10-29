<?php

namespace App\Http\Controllers;

use App\Skill;
use Illuminate\Http\Request;

class SkillPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $skills = Skill::all();
        return view('back-end.skill.list', ['skills'=>$skills]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back-end.skill.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function dataValidate($request){
        $request->validate([
            'title'=>'required|string',
            'skill_bar'=>'required|integer|between:1,100'
        ]);
    }

    public function save($skill, $request){
        $skill->title = strtoupper($request->title);
        $skill->skill_bar = $request->skill_bar;
        $skill->save();
    }
    public function store(Request $request)
    {
        $this->dataValidate($request);
        $skill = new Skill();
        $this->save($skill, $request);

        return redirect('admin/skill/list')->with('success', 'New Skill Added Successfully');

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
        $skill = Skill::find($id);
        return view('back-end.skill.edit', ['skill'=>$skill]);
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
        $skill = Skill::find($id);
        $this->save($skill, $request);

        return redirect('admin/skill/list')->with('success', 'Skill Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skill = Skill::find($id);
        $skill->delete();

        return redirect('admin/skill/list')->with('success', 'Skill Deleted Successfully');
    }
}
