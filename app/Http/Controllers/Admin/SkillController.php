<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\SkillsDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\SkillRequest;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{

    public function index(SkillsDataTable $dataTable)
    {
        return $dataTable->render('admin.skills.index');
    }

    public function create()
    {
        return view('admin.skills.form');
    }

    public function store(SkillRequest $request)
    {
        $validated = $request->validated();
       $image =  $request->file('image')->hashName();
        $request->file('image')->move(public_path('uploads/skills/'),$image);
        $validated['image'] = $image;
        $skill = Skill::create($validated);
        return redirect()->back()->with('success','Skill created successfully');
    }

    public function edit(string $id)
    {
        $data = Skill::findOrFail($id);
        return view('admin.skills.form',compact('data'));
    }

    public function update(SkillRequest $request, string $id)
    {
        $data = Skill::findOrFail($id);
        $image = $data->image;
        $validated = $request->validated();
        if($request->hasFile('image')){
            if(file_exists(public_path('uploads/skills/'.$image))){
           unlink(public_path('uploads/skills/'.$image));
            }
            $image = $request->file('image')->hashName();
         $request->file('image')->move('uploads/skills/',$image);
        }
            $validated['image'] = $image;
            $data->update($validated);
        return redirect()->route('admin.skills.index')->with(['success'=>'skill updated successfully']);
    }

    public function destroy(string $id)
    {
        $skill = Skill::findOrFail($id);
          if(file_exists(public_path('uploads/skills/'.$skill->image))){
                unlink(public_path('uploads/skills/'.$skill->image));
            }
            $skill->delete();
            return redirect()->back()->with(['success'=>'skill deleted successfully']);
    }
}