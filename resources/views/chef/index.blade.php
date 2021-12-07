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
             <a href="{{ route('chefs.create') }}" class="btn btn-primary float-right">Add New Chef</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" id="chefTable">
                            <thead>
                                <tr>
                                    <td>Id</td>
                                    <td>Name</td>
                                    <td>Speciality</td>
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
<form action="{{ route('chefs.destroy',['chef'=>0]) }}" id="deleteChefForm" method="post">
    @csrf
    @method('delete')
    <input type="hidden" name="chef_id" id="chefId" value="0">
</form>
@endsection
@section('script')
<script src="{{ asset('js/pages/chef.js') }}"></script>
@endsection

