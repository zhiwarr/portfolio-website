<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\HerosDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\HeroRequest;
use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{

    public function index(HerosDataTable $dataTable)
    {
        return $dataTable->render('admin.hero.index');
    }
public function create()
    {
        return view('admin.hero.form');
    }
    public function store(HeroRequest $request)
    {
        $validated  = $request->validated();
            $image = $request->file('background_image')->hashName();

            $request->file('background_image')->move('uploads/heros',$image);
           $validated['background_image'] = $image;
        Hero::create($validated);
        return to_route('admin.hero.index')->with('success','Hero created successfully');
    }
    public function edit(string $id)
    {
        $data = Hero::findOrFail($id);
        return view('admin.hero.form',compact('data'));
    }
    public function update(HeroRequest $request, string $id)
    {
           $data = Hero::findOrFail($id);
        $image = $data->background_image;
        $validated = $request->validated();
        if($request->hasFile('background_image')){
            if(file_exists(public_path('uploads/heros/'.$image))){
                unlink(public_path('uploads/heros/'.$image));
            }
            $image = $request->file('background_image')->hashName();
         $request->file('background_image')->move('uploads/heros/',$image);
        }
            $validated['background_image'] = $image;
            $data->update($validated);
            return redirect()->route('admin.hero.index')->with('success','Project updated successfully');
    }
    public function destroy(string $id)
    {
        $hero = Hero::findOrFail($id);
         if(file_exists(public_path("uploads/heros/".$hero->image))){
                unlink(public_path("uploads/heros/".$hero->image));
            }
            $hero->delete();
        return to_route('admin.hero.index')->with(['message'=> 'Successfully deleted a Hero']);
    }
}
