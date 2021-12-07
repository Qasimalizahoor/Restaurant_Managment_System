@extends('layouts.admin')
@section('content')
{{-- Start this content --}}

<div class="container" style="margin-top: 120px">
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
                        <table class="table table-bordered table-hover" id="reservationTable">
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
                                </tr>
                            </thead>

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>
</div>

{{-- End this content --}}
@endsection

@section('script')
<script src="{{ asset('js/pages/reservation.js') }}"></script>
@endsection