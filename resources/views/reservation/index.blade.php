@extends('layouts.admin')
@section('content')
{{-- Start this content --}}

@extends('layouts.admin')
@section('content')
<div class="container" style="margin-top: 120px">
    <div class="row justify-content-center">
        <div class="col-12"> 
          @if(session()->has('message'))
        
            <h6 class="alert alert-success">
            {{ session('message') }}
            </h6>
        
          @endif
    
        </div>
    
      </div>
    <div class="row">
        <div class="col-12">
             <a href="{{ route('foods.create') }}" class="btn btn-primary float-right">Add New Food</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" id="foodTable">
                            <thead>
                                <tr>
                                    <td>Id</td>
                                    <td>Name</td>
                                    <td>Email</td>
                                    <td>Phone</td>
                                    <td>No of Guest</td>
                                    <td>Time</td>
                                    <td>Date</td>
                                    <td>Message</td>
                                    <td>Action</td>
                                </tr>
                            </thead>

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>
</div>
{{--  Delete User Form --}}
<form action="{{ route('foods.destroy',['food'=>0]) }}" id="deleteFoodForm" method="post">
    @csrf
    @method('delete')
    <input type="hidden" name="food_id" id="foodId" value="0">
</form>


{{-- End this content --}}
@endsection

@section('script')
<script src="{{ asset('js/app.js') }}"></script>
@endsection