@extends('layouts.admin')

@section('content')
    <div class="row justify-content-around">
      <div class="col-md-8">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-light shadow-primary border-radius-lg pt-4 pb-3 d-flex p-4">
              <h6 class="text-capitalize w-100"> Edit Category</h6>
            </div>
          </div>
          <div class="card-body px-2 pb-2">
             <form role="form" method="POST" action="{{ route('category.update', ['category' => $category->id]) }}" id="editcourseForm" enctype="multipart/form-data">
  
              @csrf
              @method('PUT')
              <div class="form-group mb-2">
                  {{Form::label('name', 'Category Name', ['class' => 'control-label'])}}
  
                  {{Form::text('name', $category->name, ['class' => 'form-control border ps-2', ])}}
              </div>

              <div class="d-flex justify-content-end mt-3">
                {{Form::submit('Update Category', ['class' => 'btn btn-sm btn-outline-success'])}}
              </div>
          </form>
            
          </div>
        </div>
      </div>
        
       
    </div>


@endsection
