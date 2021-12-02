@extends('layouts.admin')
@section('content')
<div class="container" style="margin-top: 120px">
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" id="userTable">
                            <thead>
                                <tr>
                                 
                                    <td>Name</td>
                                    <td>email</td>
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
<form action="{{ route('users.destroy',['user'=>0]) }}" id="deleteUserForm" method="post">
    @csrf
    @method('delete')
    <input type="hidden" name="user_id" id="userId" value="0">
</form>
@endsection
@section('script')
<script src="{{ asset('js/pages/user.js') }}"></script>
@endsection