<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CoursesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Check if user trying to access page is admin
        if (auth()->user()->type != 1) {
            return redirect('/dashboard')->with('error', 'Unauthorized Page');
        }
        
        $courses = Course::orderBy('created_at', 'desc')->get();
               
        return view('admin.courses')->with('courses', $courses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Check if user trying to access page is admin
        if (auth()->user()->type != 1) {
            return redirect('/dashboard')->with('error', 'Unauthorized Page');
        }

        // Validate the form data
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'new_price' => 'required|int',
            'sale_price' => 'required|int',
            'course_video' => 'required|mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime,video/x-matroska|max:704800', // Adjust the validation rules as needed
            'category' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png,pdf|max:2048', // Adjust the file types and size as needed
            'course_material' => 'nullable|mimes:pdf,doc,docx,ppt,pptx|max:20480', // Adjust the file types and size as needed
        ]);

        // Handle file uploads
        $imagePath = null;
        $materialPath = null;
        

        if($request->hasFile('course_video')){
            // Store the uploaded video in the "public" disk
            
            $file = $request->file('course_video');
            $videoPath =  time() . '.' .$file->getClientOriginalExtension();
            $file->move(public_path('assets/course_video'.  $videoPath ));
        }

        if ($request->hasFile('image')) {
            $uploadedImage = $request->file('image');

            // Generate a unique name for the image using a timestamp and original extension
            $imagePath = time() . '.' . $uploadedImage->getClientOriginalExtension();

            // Use Intervention Image to resize and save the image to the public directory
            $image = Image::make($uploadedImage->getRealPath());
            $image->resize(300, 200); // You can customize the size as per your requirements
            $image->save(public_path('assets/course_images/' . $imagePath)); // Save the image to the public/images directory
    
        }

        if ($request->hasFile('course_material')) {
            $document = $request->file('course_material');
            $materialPath = time() . '.' . $document->getClientOriginalExtension();
    
            // Move the uploaded document to the public/assets/documents directory
           // $documentPath = public_path('assets/course_materials/' . $materialPath);
            $document->move(public_path('assets/course_materials'), $materialPath);
    
        }
        
        // Create a new course record in the database
        $course = new Course;
        $course->title = $request->input('title');
        $course->description = $request->input('description');
        $course->new_price = $request->input('new_price');
        $course->sale_price = $request->input('sale_price');
        $course->category = $request->input('category');
        $course->image_path = 'course_images/'.$imagePath;
        $course->material_path = 'course_materials/' .$materialPath;
        $course->course_video = 'course_video/'. $videoPath;
        $course->discount = (($request->new_price - $request->sale_price) / $request->price) * 100;
            

        $course->save();
        
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Course added successfully!');
    }

    public function downloadMaterial($id){
        //Retrieve the course y ID
        $course = Course::find($id);
       // dd($course->material_path);
        //Ensure the course and material_path exist
        if($course && $course->material_path){
            $path = public_path('assets/'. $course->material_path);
            //dd( $path);
            if(file_exists($path)){
                return response()->download($path);
            }
        }
        return redirect()->back()->with('error', 'File not found');
    }

    /**
     * Display the driver to be deleted.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showToRemove($id)
    {
        $driver = Course::find($id);
        $driver->title = $driver->first_name.' '.$driver->last_name;
        
        return view('admin.modify.delete_driver')->with('driver', $driver);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $driver = Driver::find($id);
        
        return view('admin.modify.edit_driver')->with('driver', $driver);
    }

    /**
     * Update the driver in dbase.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return $request; //! Test case
        
        // Check if user trying to access page is admin
        if (auth()->user()->type != 1) {
            return redirect('/dashboard')->with('error', 'Unauthorized Page');
        }
        
        // Validate request details
        $data = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'dob' => 'required|string|date|before:'.Carbon::today(),
            'address' => 'required|string|max:255',
            'phone_number' => 'required',
            'state' => 'required|string|max:255',
            'lga' => 'required|string|max:255',
            'experience' => 'required',
        ]);
        
        // Add new driver to dbase
        $driver = Driver::find($id);
        $driver->first_name = $data['first_name'];
        $driver->last_name = $data['last_name'];
        $driver->dob = $data['dob'];
        $driver->address = $data['address'];
        $driver->phone_number = $data['phone_number'];
        $driver->state = $data['state'];
        $driver->lga = $data['lga'];
        $driver->experience = $data['experience'];
        $driver->update();
        
        return redirect('/courses')->with('success', 'Driver details updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // return $id; //! Test case
        
        // Check if user trying to access page is admin
        if (auth()->user()->type != 1) {
            return redirect('/dashboard')->with('error', 'Unauthorized Page');
        }

        $course = Course::find($id);
        $course->delete();
        
        return redirect('/drivers')->with('success', 'Driver Removed!');
    }
}
