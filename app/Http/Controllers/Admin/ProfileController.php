<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Arr;

class ProfileController extends Controller
{

    public function index()
    {
        $data = User::first();
        return view('admin.profile.index',compact('data'));
    }

    public function edit(string $id)
    {
        $data = User::findOrFail($id);
        return view('admin.profile.form',compact('data'));
    }

 public function update(UserRequest $request, $id)
{
    $data = User::findOrFail($id);
    // Validate the incoming request
    $validated = $request->validated();
    $imageName = $data->image;
    if ($request->hasFile('image')) {

        $image = $request->file('image');

        $imageName = $image->hashName();
        $image->move("uploads/user-image/", $imageName);
        // Update the image path in $validated array
    }
        $validated['image'] = $imageName;
    if($request->hasFile('cv')){
        $cv = $request->file('cv');
        $cvName = $data->name .'.'. $cv->getClientOriginalExtension();
        $cv->move("uploads/cv/", $cvName);
        // Update the cv path in $validated array
        $validated['cv'] = $cvName;
    }
    if($request->password)$data->update($validated);
    else $data->update(Arr::except($validated,['password']));
    // Update the data in the database

    // Redirect back with success message
    return redirect()->route('admin.profile.index')->with('success', 'Profile Updated Successfully');
}

}