<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use App\Models\Category;

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
        $courses = Course::inRandomOrder()
                        ->latest()
                        ->take(10)
                        ->get();
        $course = Course::find($id);
        $title =  $course->titile;
        $categories = Category::all();

        // dd($courses);
        if ($course) {
            return view('course.details', compact('course','title','courses', 'categories'));
        } else {
            abort(404);
        }
    }

}
