<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Hero;
use App\Models\Message;
use App\Models\Project;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function downloadCV(){
        $headers = array(
              'Content-Type: application/pdf',
            );
        $file = public_path('uploads/cv/'. Auth::user()->cv);
        return response()->download($file, "zhiwar.pdf",$headers);
    }
    public function home(){
        $user = User::first();
        $courses = Course::select('course_name','description','youtube_link','github_url','image')->latest()->get();
        $skills = Skill::select('name','image')->get();
        $heros = Hero::select('background_image','title','subtitle','cta_text','cta_link')->get();
        $projects = Project::select('title','description','project_url','image')->get();
        return view('home',compact('user','courses','heros','skills','projects'));
    }
    public function chat(){
        $user = User::first();
        $chats = Message::select('message','id','created_at')->latest()->limit(25)->get();
        return view('chat',compact('chats','user'));
    }
   public function sendMessage(Request $request){
    $validated = $request->validate([
        'message' => 'required|max:8000|string'
    ]);

    Message::create([
        'message' => $validated['message'],
    ]);

    // Redirect back with success message
    return redirect()->back()->with('success', 'Message sent successfully');
}

}