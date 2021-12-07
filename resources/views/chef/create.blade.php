@extends('layouts.admin')
@section('content')

<div class="container" style="margin-top: 150px">
  
    <div class="row justify-content-center">
        <div class="col-8 ">
            <div class="card ">
              <div class="card-header">
                Add New Chef
              </div>
                <div class="card-body">
{{-- Form Start Here --}}
                    <form method="POST" action="{{ route('chefs.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label >Name</label>
                          <input type="text" class="form-control" name='name'  placeholder="Chef Name" required>
                        </div>
                        <div class="form-group">
                            <label >Speciality</label>
                            <input type="text" class="form-control" name='speciality'  placeholder="Your Speciality" required>
                          </div>
                        <div class="form-group ">
                            <label >Image</label>
                            <input type="file" class="form-control-file " name="image"  required>
                          </div>
                        <button type="submit" class="btn btn-primary">Add New Chef</button>

                      </form>
{{-- Form End Here --}}
                </div>
        
            </div>

        </div>

    </div>

</div>


@endsection