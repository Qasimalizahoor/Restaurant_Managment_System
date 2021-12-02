@extends('layouts.admin')
@section('content')

<div class="container" style="margin-top: 150px">
  
    <div class="row justify-content-center">
        <div class="col-8 ">
            <div class="card ">
              <div class="card-header">
                Edit Food
              </div>
                <div class="card-body">
{{-- Form Start Here --}}
                    <form method="POST" action="{{ route('foods.update',$food->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                            
                        
                        <div class="form-group">
                          <label >Title</label>
                          <input type="text" class="form-control" name='title' value="{{ $food->title }}" required>
                        </div>
                        <div class="form-group">
                            <label >Description</label>
                            <input type="text" class="form-control" name='description'  value="{{ $food->description }}" required>
                          </div>
                        <div class="form-group">
                          <label >Price</label>
                          <input type="text" class="form-control" name="price"  value="{{ $food->price }}" required>
                        </div>
                        <div class="form-group ">
                            <label >Image</label>
                            <input type="file" class="form-control-file " name="image" >
                            <img src="{{ asset('Images/'.$food->image) }}" alt="{{ $food->image }}" width="200px" height="200px" class="mt-3">
                          </div>
                    
                        <button type="submit" class="btn btn-primary">Update Food</button>

                      </form>
{{-- Form End Here --}}
                </div>
        
            </div>

        </div>

    </div>

</div>

@endsection