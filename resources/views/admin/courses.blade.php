@extends('layouts.admin')

@section('content')
    <div class="row justify-content-around">
      <div class="col-md-8">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-light shadow-primary border-radius-lg pt-4 pb-3 d-flex p-4">
              <h6 class="text-capitalize w-100">Courses</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            @if (count($courses) > 0)
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Course Image</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Course Video</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Course Title</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Description</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Prices</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">course Material</th>
                      <th class="text-primary text-center text-uppercase text-xxs font-weight-bolder opacity-7">Option</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($courses as $course)
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="{{ asset('assets/' .$course->image_path) }}"  alt="{{$course->image_path}}" class=" avatar-sm me-3">
                            </div>
                           
                          </div>
                        </td>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              @if ($course->course_video == 'course_video/')
                                <p class="text-danger"> No Video selected</p>
                              @else
                            
                              <video controls width="100%" height="auto">
                                  @foreach (['mp4', 'webm', 'ogg','mkv'] as $format)
                                      <source src="{{ asset($course->course_video) }}" type="video/{{ $format }}">
                                  @endforeach
                                  Your browser does not support the video tag.
                              </video>
                              @endif
                            </div>
                           
                          </div>
                        </td>
                        <td>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$course->title}}</h6>
                          </div>
                        </td> 
                        <td>
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs font-weight-bold mb-0">
                              {{ substr($course->description, 0, 20) }}  
                            </p>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs font-weight-bold mb-0">₦{{ number_format($course->new_price) }}</p>
                            <small style="text-decoration: line-through;" class="text-xs font-weight-bold mb-0">₦{{ number_format($course->sale_price) }}</small>
                            <small class="text-xs font-weight-bold mb-0">{{$course->discount}}%</small>

                          </div>
                        </td>
                        <td>
                          <div class="d-flex flex-column justify-content-center">
                            @if ($course->material_path == 'course_materials/')
                            <p class="text-danger"> No Material selected</p>
                            @else
                            <a href="{{ route('courses.download', $course->material_path) }}" class="btn btn-success">Download Material</a>
                            @endif
                          </div>
                        </td>
                        <td class="align-middle text-center">
                          <a href="{{ route('courses.edit', $course->id) }}" class="text-secondary font-weight-bold text-xs editDriverBtn" >
                            <i class="material-icons opacity-10 text-info">edit</i>
                          </a>
                          <a href="{{ route('courses.delete', $course->id) }}" class="text-secondary font-weight-bold text-xs deleteDriverBtn" onclick="return confirm('Are you sure you want to delete this course?')">
                              <i class="material-icons opacity-10 text-danger">delete</i>
                          </a>
                        
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table> 
              </div>
            @else
              <div class="text-center">No Courses found!</div>
            @endif
            
          </div>
        </div>
      </div>
        
        <div class="col-md-4">
            <div class="card">
                
                <div class="card-body">
                  <h4 class="dispay-4 text-primary">Create New Courses</h4>
                  
                  {!! Form::open(['action' => 'App\Http\Controllers\CoursesController@store', 'method' => 'POST', 'id' => 'newDriverForm', 'role' => 'form', 'enctype' => 'multipart/form-data']) !!}
                    <div class="form-group mb-2">
                        {{Form::label('title', 'Course Title', ['class' => 'control-label'])}}
                        {{Form::text('title', old('title'), ['class' => 'form-control border ps-2', 'placeholder' => 'Title', 'required' => 'required'])}}
                    </div>

                    <div class="form-group mb-2">
                        {{Form::label('description', 'Course Description', ['class' => 'control-label'])}}
                        {{Form::textarea('description', '', ['class' => 'form-control border ps-2', 'placeholder' => 'Enter course description', 'required' => 'required'])}}

                    </div>

                    <div class="form-group mb-2">
                        {{Form::label('title', 'New Price', ['class' => 'control-label'])}}
                        {{Form::text('new_price', old('new_price'), ['class' => 'form-control border ps-2', 'placeholder' => 'New price', 'required' => 'required'])}}
                    </div>

                    <div class="form-group mb-2">
                        {{Form::label('title', 'Sale Price', ['class' => 'control-label'])}}
                        {{Form::text('sale_price', old('sale_price'), ['class' => 'form-control border ps-2', 'placeholder' => 'Sale price', 'required' => 'required'])}}
                    </div>

                    <div class="form-group mb-2">
                      <label class="control-label">Course Category</label>
                      <select name="category"  class="form-control border ps-2" required>
                        <option value="" selected="selected">- Select -</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->name }}"> {{ $category->name }}  </option>
                        @endforeach
                      </select>
                    </div>

                    <div class="form-group ">
                        <label class="control-label">Course Image</label>
                        <input type="file" name="image" class="form-control border ps-2" required>
                    </div>
                    <small class="text-danger mb-2">You can only upload jpg, jpeg, pdf, or png </small>

                    <div class="form-group ">
                        <label class="control-label">Upload Course Material</label>
                        <input type="file" name="course_material" class="form-control border ps-2" >
                    </div>
                    <small class="text-danger mb-2">You can upload PDFs, documents, or presentaions</small>

                    <div class="form-group">
                      <label for="video" class="control-label">Select Video:</label>
                      <input type="file" name="course_video" id="course_video" accept=".mp4, .avi, .mpeg, .mov" class="form-control border ps-2" >
                    </div>
                    <small class="text-danger mb-2">You can upload Video</small>

                       
                    <div class="d-flex justify-content-end mt-3">
                      {{Form::submit('Add Course', ['class' => 'btn btn-sm btn-outline-success'])}}
                    </div>
                  {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

<!-- Edit Driver Modal-->
<div class="modal fade" id="editDriverModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title text-primary">Edit Driver</h4>
              <a class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <i class="material-icons opacity-10 text-info" style="font-size: 2.0em">&times</i>
              </a>
          </div>
          <div class="modal-body" id="editDriverModalBody">
          
          </div>
          <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-sm btn-primary" onclick="$('#editDriverForm').submit()"> Save</button>
                    </div>
                </div>
          </div>
      </div>
  </div>
</div>
<!-- Delete Driver Modal-->
<div class="modal fade" id="deleteDriverModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title text-secondary">Confirm delete driver!</h4>
              <a class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <i class="material-icons opacity-10 text-info" style="font-size: 2.0em">&times</i>
              </a>
          </div>
          <div class="modal-body" id="deleteDriverModalBody">
            
          </div>
          <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-sm btn-danger" onclick="$('#deleteDriverForm').submit()"> Yes</button>
                    </div>
                </div>
          </div>
      </div>
  </div>
</div>
@endsection
