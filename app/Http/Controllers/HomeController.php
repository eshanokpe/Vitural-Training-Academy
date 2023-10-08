<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $courses = Course::orderBy('created_at', 'desc')->get();
         
        return view('landing')->with('courses', $courses);
    }

    public function courses(){
        $courses = Course::inRandomOrder()->latest()->simplePaginate(10);
        return view('courses')->with('courses', $courses);
    }
   
    public function courseDetails($id){
       // $courses = Course::where('id', $id)->first();
       $course = Course::find($id);

       // return view('coursedetails', compact('courses'))->with('title', $courses->title);
        // Check if the course was found
        //dd($courses);
        if ($course) {
            // Course found, you can use $course to access its details
            return view('course.details', ['course' => $course]);
           // return view('course.details', )->with('course', $course);
        } else {
            // Course not found, handle the error (e.g., show a 404 page)
            abort(404);
        }
    }

}
