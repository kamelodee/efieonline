@extends('layouts.theme')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    {{-- @endif --}}

                    @foreach ($rents as $propertyrent)
                   <div>{{$propertyrent->title}}</div>
                   <div>{{$propertyrent->description}}</div>
                   <div>{{$propertyrent->property_type}}</div>
                   <div>{{$propertyrent->property_status}}</div>
                   <div>{{$propertyrent->property_label}}</div>
                   <div>{{$propertyrent->monthly_rate}}</div>
                   <div>{{$propertyrent->yearly_rate}}</div>
                   <div>{{$propertyrent->rent_duration}}</div>
                   <div>{{$propertyrent->currency}}</div>
                   <div>{{$propertyrent->location->city}}</div>

                   
                <div>
                    
                </div>
                   <div>
                       @foreach ($propertyrent->detail as $d)
                   <div>{{$d->nature_of_building}}</div>
                   <div>{{$d->bedrooms}}</div>
                   <div>{{$d->bathrooms}}</div>
                   <div>{{$d->water}}</div>
                   <div>{{$d->electricity}}</div>
                   <div>{{$d->security}}</div>
                   <div>{{$d->toilet}}</div>
                       @endforeach
                   </div>
                   <div>
                   <div>
                       @foreach ($propertyrent->feature as $feature)
                   <div>{{$feature->features}}</div>
                       @endforeach
                   </div>
                   <div>
                      
                   
                </div>
                  
                   <div>{{$propertyrent->getFirstMediaUrl('main_photo','large')}}</div>
                    <img src="{{$propertyrent->getFirstMediaUrl('main_photo','large')}}" alt="" srcset="">
                    @endforeach
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
