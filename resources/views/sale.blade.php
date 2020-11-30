@extends('layouts.theme')
<!-- Banner start -->


@section('navbar')



<div class="" >
    <img width="1500" height="70" src="https://readscoops.com/wp-content/uploads/2020/07/Slim-GIF-with-code.gif" alt="" srcset="">
    </div>
    
<header class="main-header">
    <div class="container_">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand logos p-3" href="/">
            <img src="{{asset('assets/img/efieonline.png')}}" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav header-ml">
                    <li class="nav-item  active">
                        <a class="nav-link d" href="#" id="" >
                            HOME
                        </a>
                        
                    </li>
                </ul>
            
                   
            <form class="col-md-8 domain-search" action="{{route('home.search')}}" method="POST"> 
                             @csrf
                        <div class="input-group"> 
                            <input type="search" class="form-control" name="term">
                             <span class="input-group-addon">
                                 <input type="submit" value="Search" class="btn btn-primary">
                                </span> 
                                </div>
                            </form>    
                                      
                
                <ul class="navbar-nav ml-auto">
                    
@guest
@if (Route::has('login'))
    <li class="nav-item ">
        <a class="sign-in nav-link" href="{{ route('login') }}"><i class="fa fa-sx fa-user-circle"></i>{{ __('Login') }}</a>
    </li>
@endif

@else
<li class="nav-item dropdown">
    <a id="navbarDropdown" class="sign-in dropdown-toggle nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }}
    </a>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <a class="dropdown-item" href="">
           dashboard
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</li>
@endguest
                
                   
                </ul>
                <ul class="navbar-nav"> <li class="nav-item">
                <a href="{{route('agent.index')}}" class="nav-link link-btn"><i class="fa fa-plus-square fa-sx">
                        </i> Create Listing</a>
                </li></ul>
            </div>
        </nav>
    </div>
</header>

@endsection

@section('content')



<!-- Featured properties start -->
<div class="featured-properties content-area">
    <div class="container_ m-3">
        <!-- Main title -->
        <div class="main-title mt2">
            <h1>sale Properties</h1>
            <div class="list-inline-listing">
               
            </div>
        </div>
        <div class="row filter-portfolio">
            <div class="cars">

         {{-- property rent --}}
                @foreach ($sales as $propertysale)

                <div class="col-lg-3 col-md-6 col-sm-12 filtr-item mb-5" data-category="{{$propertysale->id}}">
                    <div class="property-box">

                        <div class="property-thumbnail">
                            <a href="{{ route('sale.show',$propertysale->id) }}" class="property-img">
                                <div class="listing-badges">
                                    <span class="featured">{{$propertysale->property_label}}</span>
                                </div>
                                <div class="price-ratings-box">
                                    <p class="price">
                                        {{$propertysale->currency}}  {{$propertysale->sale_price}} 
                                    </p>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                                <div class="listing-time opening">{{$propertysale->property_type}}</div>
                                <img class="d-block property_img " src="{{$propertysale->getFirstMediaUrl('main_photo','large')}}" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <strong class="title_">
                                <a href="{{ route('sale.show',$propertysale->id) }}">{{$propertysale->title}}</a>
                            </strong>
                            <div class="location">
                                <a href="{{ route('sale.show',$propertysale->id) }}">
                                    <i class="fa fa-map-marker"></i>{{$propertysale->location->address}}  {{$propertysale->location->city}}  {{$propertysale->location->region}}  {{$propertysale->location->country}}
                                </a>
                            </div>
                            <ul class="facilities-list clearfix">
                               
                                
                                   
                                <li>
                                    <i class="flaticon-square"></i> {{$propertysale->detail->nature_of_building}}
                                </li>
                                <li>
                                    <i class="flaticon-square"></i> {{$propertysale->detail->Area}}  sq ft
                                </li>
                                <li>
                                    <i class="flaticon-furniture"></i> {{$propertysale->detail->bedrooms}} Beds
                                </li>
                                <li>
                                    <i class="flaticon-holidays"></i> {{$propertysale->detail->bathrooms}} Baths
                                </li>
                                
                              
                               
                              
                            </ul>
                        </div>
                       
                    </div>
                </div>
                @endforeach
                {{-- propety --}}
        </div>
    </div>

@endsection