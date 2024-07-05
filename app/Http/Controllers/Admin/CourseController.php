<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\CoursesDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function index(CoursesDataTable $dataTable)
    {
       return  $dataTable->render('admin.courses.index');
    }

    public function create()
    {
        return view('admin.courses.form');
    }

    public function store(CourseRequest $request)
    {
        $validated = $request->validated();
       $image =  $request->file('image')->hashName();
        $request->file('image')->move(public_path('uploads/courses/'),$image);
        $validated['image'] = $image;
        $course = Course::create($validated);
        return redirect()->back()->with('success','Course created successfully');
    }

    public function edit(string $id)
    {
        $data = Course::findOrFail($id);
        return view('admin.courses.form', compact('data'));
    }

    public function update(CourseRequest $request, string $id)
    {
        $data = Course::findOrFail($id);
        $image = $data->image;
        $validated = $request->validated();
        if($request->hasFile('image')){
            if(file_exists(public_path('uploads/courses/'.$image))){
                unlink(public_path('uploads/courses/'.$image));
            }
            $image = $request->file('image')->hashName();
         $request->file('image')->move('uploads/courses/',$image);
        }
            $validated['image'] = $image;
            $data->update($validated);
            return redirect()->route('admin.courses.index')->with('success','Course updated successfully');
    }

    public function destroy(string $id)
    {
        $course = Course::findOrFail($id);
           if(file_exists(public_path('uploads/courses/'.$course->image))){
                unlink(public_path('uploads/courses/'.$course->image));
            }
            $course->delete();
            return redirect()->back()->with('success','Course deleted successfully');
    }
}