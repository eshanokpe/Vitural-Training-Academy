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
            @if (count($categories) > 0)
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0 px-2">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Course Name</th>
                      <th class="text-primary text-center text-uppercase text-xxs font-weight-bolder opacity-7">Option</th>
                    </tr>
                  </thead>
                  <tbody class="">
                    @foreach ($categories as $category)
                      <tr>
                        <td>
                          <div class=" px-2 py-1 d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$category->name}}</h6>
                          </div>
                        </td> 
                        <td class="align-middle text-center">
                          <a href="{{ route('category.edit', $category->id) }}" class="text-secondary font-weight-bold text-xs editDriverBtn" >
                            <i class="material-icons opacity-10 text-info">edit</i>
                          </a>
                          <a href="{{ route('category.delete', $category->id) }}" class="text-secondary font-weight-bold text-xs deleteDriverBtn" onclick="return confirm('Are you sure you want to delete this course?')">
                              <i class="material-icons opacity-10 text-danger">delete</i>
                          </a>
                        
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            @else
              <div class="text-center">No Categories found!</div>
            @endif
            
          </div>
        </div>
      </div>
        
        <div class="col-md-4">
            <div class="card">
                
                <div class="card-body">
                  <h4 class="dispay-4 text-primary">Create New Category</h4>
                  
                  {!! Form::open(['action' => 'App\Http\Controllers\Admin\CategoriesController@store', 'method' => 'POST', 'id' => 'newDriverForm', 'role' => 'form', 'enctype' => 'multipart/form-data']) !!}
                    <div class="form-group mb-2">
                        {{Form::label('name', 'Category name', ['class' => 'control-label'])}}
                        {{Form::text('name', old('title'), ['class' => 'form-control border ps-2', 'placeholder' => 'Name', 'required' => 'required'])}}
                    </div>


                       
                    <div class="d-flex justify-content-end mt-3">
                      {{Form::submit('Add Category', ['class' => 'btn btn-sm btn-outline-success'])}}
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
