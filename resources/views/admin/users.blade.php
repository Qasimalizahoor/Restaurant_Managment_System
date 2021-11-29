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
@endsection
@section('script')
<script src="{{ asset('js/pages/user.js') }}"></script>
@endsection