@extends('layouts.user-dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
        <p><a class="btn btn-primary" href="{{route('rent.create')}}">add property for rent</a></p>
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3> <strong>Property for rent</strong></h3>
                   
                </div>
            </div>
            <table class="table table-bordered data-table">
                <thead>
                    <tr>
                        <th width="50">No</th>
                        <th>title</th>
                        <th>description</th>
                        <th width="100px">Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection