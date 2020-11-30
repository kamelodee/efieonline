@extends('layouts.user-dashboard')

@section('content')
<div class="container">
    <div class="jumbotron contatiner">
    <h1 class="display-4"> hello {{Auth::user()->name}}</h1>
        <p class="lead"></p>
        <hr class="my-4">
        <p>List properties here</p>
    <a class="btn btn-primary btn-lg" 
    href="{{route('rent.create')}}" role="button">List Property for rent</a>  <a class="btn btn-primary btn-lg" href="{{route('sale.create')}}" role="button">List property for sale</a>
      </div>

</div>

@endsection