@extends('layouts.admin')
@section('content')

<div class="container" style="margin-top: 150px">
  
    <div class="row justify-content-center">
        <div class="col-8 ">
            <div class="card ">
              <div class="card-header">
                Add New Food
              </div>
                <div class="card-body">
{{-- Form Start Here --}}
                    <form method="POST" action="{{ route('foods.index') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label >Title</label>
                          <input type="text" class="form-control" name='title'  placeholder="Title of Food" required>
                        </div>
                        <div class="form-group">
                            <label >Description</label>
                            <input type="text" class="form-control" name='description'  placeholder="Title of Food" required>
                          </div>
                        <div class="form-group">
                          <label >Price</label>
                          <input type="text" class="form-control" name="price"  placeholder="Price of Food" required>
                        </div>
                        <div class="form-group ">
                            <label >Image</label>
                            <input type="file" class="form-control-file " name="image"  required>
                          </div>
                        <button type="submit" class="btn btn-primary">Add New Food</button>

                      </form>
{{-- Form End Here --}}
                </div>
        
            </div>

        </div>

    </div>

</div>


@endsection