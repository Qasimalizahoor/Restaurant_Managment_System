@extends('layouts.admin')
@section('content')

<div class="container" style="margin-top: 150px">
  
    <div class="row justify-content-center">
        <div class="col-8 ">
            <div class="card ">
              <div class="card-header">
                Edit Chef
              </div>
                <div class="card-body">
{{-- Form Start Here --}}
                    <form method="POST" action="{{ route('chefs.update',$chefs) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                          <label >Name</label>
                          <input type="text" class="form-control" name='name'  value="{{ $chefs->name }}" required>
                        </div>
                        <div class="form-group">
                            <label >Speciality</label>
                            <input type="text" class="form-control" name='speciality'  value="{{ $chefs->speciality }}" required>
                          </div>
                        <div class="form-group ">
                            <label >Image</label>
                            <input type="file" class="form-control-file " name="image"  >
                            <img class="mt-2" src="{{ asset('Images/'.$chefs->image)  }}" alt="" width="200px" height="200px">
                          </div>
                        <button type="submit" class="btn btn-primary">Update Chef</button>

                      </form>
{{-- Form End Here --}}
                </div>
        
            </div>

        </div>

    </div>

</div>

@endsection