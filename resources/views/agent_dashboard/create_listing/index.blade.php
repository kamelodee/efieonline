@extends('../layouts.user-dashboard')

@section('content')
<div class="container">
<div class="row">
    <div class="col-6"><a href="{{rout('sale.create')}}" class="btn-primary btn"> List property for Sale</a></div>
<div class="col-6"><a href="{{route('rent.create')}}" class="btn-primary btn">List Property for rent</a></div>
</div>

</div>
@endsection