@extends('layouts.admin')

@section('content')
    <div class="row justify-content-around">
      <div class="col-md-8">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-light shadow-primary border-radius-lg pt-4 pb-3 d-flex p-4">
              <h6 class="text-capitalize w-100"> Edit Courses</h6>
            </div>
          </div>
          <div class="card-body px-2 pb-2">
             <form role="form" method="POST" action="{{ route('courses.update', ['course' => $course->id]) }}" id="editcourseForm" enctype="multipart/form-data">
  
              @csrf
              @method('PUT')
              <div class="form-group mb-2">
                  {{Form::label('title', 'Course Title', ['class' => 'control-label'])}}
  
                  {{Form::text('title', $course->title, ['class' => 'form-control border ps-2', ])}}
              </div>

              <div class="form-group mb-2">
                  {{Form::label('description', 'Course Description', ['class' => 'control-label'])}}
                  {{Form::textarea('description', $course->description, ['class' => 'form-control border ps-2', 'placeholder' => 'Enter course description',])}}

              </div>

              <div class="form-group mb-2">
                  {{Form::label('title', 'New Price', ['class' => 'control-label'])}}
                  {{Form::text('new_price',  $course->new_price, ['class' => 'form-control border ps-2', 'placeholder' => 'New price',])}}
              </div>

              <div class="form-group mb-2">
                  {{Form::label('title', 'Sale Price', ['class' => 'control-label'])}}
                  {{Form::text('sale_price', $course->sale_price, ['class' => 'form-control border ps-2', 'placeholder' => 'Sale price',])}}
              </div>

              <div class="form-group mb-2">
                <label class="control-label">Course Category</label>
                <select name="category"  class="form-control border ps-2" required>
                  @foreach ($categories as $category)
                      <option value="{{ $category->name }}" {{ $category->name == $course->category ? 'selected' : '' }}>
                          {{ $category->name }}
                      </option>
                  @endforeach
                </select>
              </div>

              <div class="form-group ">
                  <label class="control-label">Course Image</label><br>
                  <img style="width: 80px" src="{{ asset('assets/' .$course->image_path) }}" alt="{{ $course->title }}" class="img-fluid">

                  <input type="file" name="image" class="form-control border ps-2" >
              </div>
              <small class="text-danger mb-2">You can only upload jpg, jpeg, pdf, or png </small>

              <div class="form-group ">
                  <label class="control-label">Upload Course Material</label><br>
                  @if ($course->material_path == 'course_materials/')
                  <p class="text-danger"> No Material selected</p>
                  @else
                  <a href="{{ route('courses.download', $course->material_path) }}" class="btn btn-success">Download Material</a>
                 
                  @endif
                  <input type="file" name="course_material" class="form-control border ps-2" >
              </div>
              <small class="text-danger mb-2">You can upload PDFs, documents, or presentaions</small>

              <div class="form-group">
                <label for="video" class="control-label">Select Video:</label>
                @if ($course->course_video == 'course_video/')
                  <p class="text-danger"> No Video selected</p>
                @else
                <video controls width="40%" height="auto">
                    @foreach (['mp4', 'webm', 'ogg','mkv'] as $format)
                        <source src="{{ asset($course->course_video) }}" type="video/{{ $format }}">
                    @endforeach
                    Your browser does not support the video tag.
                </video>
                @endif
                <input type="file" name="course_video" id="course_video" accept=".mp4, .avi, .mpeg, .mov" class="form-control border ps-2" >
              </div>
              <small class="text-danger mb-2">You can upload Video</small>

                
              <div class="d-flex justify-content-end mt-3">
                {{Form::submit('Update Course', ['class' => 'btn btn-sm btn-outline-success'])}}
              </div>
          </form>
            
          </div>
        </div>
      </div>
        
       
    </div>


@endsection
