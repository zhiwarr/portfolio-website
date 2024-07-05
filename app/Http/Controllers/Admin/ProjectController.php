<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ProjectsDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index(ProjectsDataTable $dataTable)
    {
        return $dataTable->render('admin.projects.index');
    }

    public function create()
    {
        return view('admin.projects.form');
    }

    public function store(ProjectRequest $request)
    {
              $validated = $request->validated();
       $image =  $request->file('image')->hashName();
        $request->file('image')->move(public_path('uploads/projects/'),$image);
        $validated['image'] = $image;
        Project::create($validated);
        return redirect()->back()->with('success','Project created successfully');
    }

    public function edit(string $id)
    {
     $data = Project::findOrFail($id);
        return view('admin.courses.form', compact('data'));
    }

    public function update(ProjectRequest $request, string $id)
    {
      $data = Project::findOrFail($id);
        $image = $data->image;
        $validated = $request->validated();
        if($request->hasFile('image')){
            if(file_exists(public_path('uploads/projects/'.$image))){
                unlink(public_path('uploads/projects/'.$image));
            }
            $image = $request->file('image')->hashName();
         $request->file('image')->move('uploads/projects/',$image);
        }
            $validated['image'] = $image;
            $data->update($validated);
            return redirect()->route('admin.projects.index')->with('success','Project updated successfully');
    }

    public function destroy(string $id)
    {
         $project = Project::findOrFail($id);
           if(file_exists(public_path('uploads/projects/'.$project->image))){
                unlink(public_path('uploads/projects/'.$project->image));
            }
            $project->delete();
            return redirect()->back()->with('success','Project deleted successfully');
    }
}