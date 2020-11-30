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


<div class="card p-3">
    <div class="row ">
        <div class="col-8 row-no-padding ">      
<div class="banner" id="banner">
    <div id="bannerCarousole" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item banner-max-height active">
                <img class="d-block w-100" height="400" src="assets/img/banner/banner-1.jpg" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container">
                        <div class="text-center">
                            <div class="text-sections">
                                <h3 class="text-uppercase">Find Your Dream House</h3>
                                <p>
                                    This is real estate website template based on Bootstrap 4 framework.
                                </p>
                            </div>
                            <div class="btn-sections">
                                <a href="#" class="btn btn-lg btn-theme">Get Started Now</a>
                                <a href="#" class="btn btn-lg btn-white-lg-outline">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item banner-max-height">
                <img class="d-block w-100" height="400" src="assets/img/banner/banner-2.jpg" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container">
                        <div class="text-center">
                           <div class="text-sections">
                                <h3 class="text-uppercase">Best Place to find home</h3>
                                <p>
                                    This is real estate website template based on Bootstrap 4 framework.
                                </p>
                            </div>
                            <div class="btn-sections">
                                <a href="#" class="btn btn-lg btn-theme">Get Started Now</a>
                                <a href="#" class="btn btn-lg btn-white-lg-outline">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item banner-max-height">
                <img class="d-block w-100" height="400" src="assets/img/banner/banner-3.jpg" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container">
                        <div class="text-center">
                            <div class="btn-sections">
                                <h3 class="text-uppercase">Sweet Home For Small Family</h3>
                                <p>
                                    This is real estate website template based on Bootstrap 4 framework.
                                </p>
                            </div>
                            <div class="btn-sections">
                                <a href="#" class="btn btn-lg btn-theme">Get Started Now</a>
                                <a href="#" class="btn btn-lg btn-white-lg-outline">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#bannerCarousole" role="button" data-slide="prev">
            <span class="slider-mover-left" aria-hidden="true">
                <i class="fa fa-angle-left"></i>
            </span>
        </a>
        <a class="carousel-control-next" href="#bannerCarousole" role="button" data-slide="next">
            <span class="slider-mover-right" aria-hidden="true">
                <i class="fa fa-angle-right"></i>
            </span>
        </a>
    </div>
</div>
        </div>
        <div class="col-4 row-no-padding">
            <div class="banner_" id="banner">
                <div id="bannerCarousole" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item banner-max-height active">
                            <img class="d-block w-100" height="400" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqIQij7VwIogkOlnEBoKAEDre0bIgIiAV7RA&usqp=CAU" alt="banner">
                            <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                                <div class="carousel-content container">
                                    <div class="text-center">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item banner-max-height">
                            <img class="d-block w-100" height="400" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkUBTvB2WBHWxtLEkhciOXxew9SBHqnX_1rQ&usqp=CAU" alt="banner">
                            <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                                <div class="carousel-content container">
                                    <div class="text-center">
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item banner-max-height">
                            <img class="d-block w-100" height="400" src="https://www.irea-aii.com/wp-content/uploads/single-service.jpg" alt="banner">
                            <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                                <div class="carousel-content container">
                                    <div class="text-center">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#bannerCarousole" role="button" data-slide="prev">
                        <span class="slider-mover-left" aria-hidden="true">
                            <i class="fa fa-angle-left"></i>
                        </span>
                    </a>
                    <a class="carousel-control-next" href="#bannerCarousole" role="button" data-slide="next">
                        <span class="slider-mover-right" aria-hidden="true">
                            <i class="fa fa-angle-right"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        
    </div>
</div>
<!-- Search Section start -->
<div class="search-section search-area-2 bg-grea">
    <div class="container">
        <div class="search-section-area">
            <div class="search-area-inner">
                <div class="search-contents">
                    <form method="GET">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="area">
                                        <option>Area From</option>
                                        <option>3000</option>
                                        <option>2600</option>
                                        <option>2200</option>
                                        <option>1800</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="property-status">
                                        <option>Property Status</option>
                                        <option>For Sale</option>
                                        <option>For Rent</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="property-types">
                                        <option>Property Types</option>
                                        <option>Apartments</option>
                                        <option>Houses</option>
                                        <option>Commercial</option>
                                        <option>Garages</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="location">
                                        <option>Location</option>
                                        <option>United States</option>
                                        <option>United Kingdom</option>
                                        <option>American Samoa</option>
                                        <option>Belgium</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="max-area">
                                        <option>Bedrooms</option>
                                        <option>2400</option>
                                        <option>2800</option>
                                        <option>3200</option>
                                        <option>3600</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="min-area">
                                        <option>Bathrooms</option>
                                        <option>2400</option>
                                        <option>2800</option>
                                        <option>3200</option>
                                        <option>3600</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="range-slider">
                                  <div class="row">
                                      <div class="col-6">
                                        <select class="selectpicker search-fields" name="munimum">
                                            <option>Minimum </option>
                                            <option>2400</option>
                                            <option>2800</option>
                                            <option>3200</option>
                                            <option>3600</option>
                                        </select>
                                      </div>
                                      <div class="col-6">
                                        <select class="selectpicker search-fields" name="maximum">
                                            <option>Maximum</option>
                                            <option>2400</option>
                                            <option>2800</option>
                                            <option>3200</option>
                                            <option>3600</option>
                                        </select>
                                      </div>
                                  </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <button class="search-button">Search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Featured properties start -->
<div class="featured-properties content-area">
    <div class="container_ m-3">
        <!-- Main title -->
        <div class="main-title mt2">
            <h1>Featured Properties</h1>
            <div class="list-inline-listing">
                <ul class="filters filteriz-navigation clearfix">
                    <li class="active btn filtr-button filtr" data-filter="all">All</li>
                    <li data-filter="1" class="btn btn-inline filtr-button filtr">Apartment</li>
                    <li data-filter="2" class="btn btn-inline filtr-button filtr">House</li>
                    <li data-filter="3" class="btn btn-inline filtr-button filtr">Office</li>
                </ul>
            </div>
        </div>
        <div class="row filter-portfolio">
            <div class="cars">
{{-- property rent --}}
                @foreach ($rents as $propertyrent)

                <div class="col-lg-3 col-md-6 col-sm-12 filtr-item" data-category="{{$propertyrent->id}}">
                    <div class="property-box">

                        <div class="property-thumbnail">
                            <a href="{{ route('rent.show',$propertyrent->id) }}" class="property-img">
                                <div class="listing-badges">
                                    <span class="featured">{{$propertyrent->property_label}}</span>
                                </div>
                                <div class="price-ratings-box">
                                    <p class="price">
                                        {{$propertyrent->currency}}  {{$propertyrent->monthly_rate}} / month
                                    </p>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                                <div class="listing-time opening">{{$propertyrent->property_type}}</div>
                                <img class="d-block w-100 property_img " src="{{$propertyrent->getFirstMediaUrl('main_photo','large')}}" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <strong class="title_">
                                <a href="{{ route('rent.show',$propertyrent->id) }}">{{$propertyrent->title}}</a>
                            </strong>
                            <div class="location">
                                <a href="{{ route('rent.show',$propertyrent->id) }}">
                                    <i class="fa fa-map-marker"></i>{{$propertyrent->location->address}}  {{$propertyrent->location->city}}  {{$propertyrent->location->region}}  {{$propertyrent->location->country}}
                                </a>
                            </div>
                            <ul class="facilities-list clearfix">
                             
                                
                                   
                                <li>
                                    <i class="flaticon-square"></i> {{$propertyrent->detail->nature_of_building}}
                                </li>
                                <li>
                                    <i class="flaticon-square"></i> {{$propertyrent->detail->Area}} sq ft
                                </li>
                                <li>
                                    <i class="flaticon-furniture"></i> {{$propertyrent->detail->bedrooms}} Beds
                                </li>
                                <li>
                                    <i class="flaticon-holidays"></i> {{$propertyrent->detail->bathrooms}} Baths
                                </li>
                                

                               
                               
                            </ul>
                        </div>
                        
                    </div>
                </div>
                @endforeach
                {{-- propety --}}





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

<!-- Services 2 start -->
<div class="services-2 content-area-5 bg-grea-3">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>What are you looking for?</h1>
        </div>
        <div class="row wow">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="service-info-5">
                    <i class="flaticon-apartment"></i>
                    <h4>Apartments</h4>
                    <p>Lorem ipsum dolor sit amet, consectur adipisicing elit, sed do eiusmod tempor incididunt</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="service-info-5">
                    <i class="flaticon-internet"></i>
                    <h4>Houses</h4>
                    <p>Lorem ipsum dolor sit amet, consectur adipisicing elit, sed do eiusmod tempor incididunt</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="service-info-5">
                    <i class="flaticon-vehicle"></i>
                    <h4>Garages</h4>
                    <p>Lorem ipsum dolor sit amet, consectur adipisicing elit, sed do eiusmod tempor incididunt</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="service-info-5">
                    <i class="flaticon-coins"></i>
                    <h4>Commercial</h4>
                    <p>Lorem ipsum dolor sit amet, consectur adipisicing elit, sed do eiusmod tempor incididunt</p>
                </div>
            </div>
        </div>
        <div class="text-center read-more-2">
            <a href="services-1.html" class="btn-white">Read More</a>
        </div>
    </div>
</div>
<!-- Recently properties start -->
<div class="recently-properties content-area-12">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Recently Properties</h1>
        </div>
        <div class="slick-slider-area">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 4, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                @foreach ($rents as $propertyrent)

                <div class="slick-slide-item">
                    <div class="property-box-5">
                        <div class="property-photo">
                            
                            <img class="img-fluid" src="{{$propertyrent->getFirstMediaUrl('main_photo','large')}}" alt="properties">
                        <div class="date-box">{{$propertyrent->property_type}}</div>
                        </div>
                        <div class="detail">
                            <div class="heading">
                                <h3>
                                    <a href="{{ route('rent.show',$propertyrent->id) }}">{{$propertyrent->title}}</a>
                                </h3>
                                <div class="location">
                                    <a href="{{ route('rent.show',$propertyrent->id) }}">
                                        <i class="fa fa-map-marker"></i>{{$propertyrent->location->address}} {{$propertyrent->location->city}} {{$propertyrent->location->region}} {{$propertyrent->location->country}}
                                    </a>
                                </div>
                            </div>
                            <div class="properties-listing">
                                <span>{{$propertyrent->detail->bedrooms}} Beds</span>
                                <span>{{$propertyrent->detail->bathrooms}} Baths</span>
                                <span>{{$propertyrent->Area}} sqft</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                @foreach ($sales as $propertysale)

                <div class="slick-slide-item">
                    <div class="property-box-5">
                        <div class="property-photo">
                           
                            <img class="img-fluid" src="{{$propertysale->getFirstMediaUrl('main_photo','large')}}" alt="properties">
                        <div class="date-box">{{$propertysale->property_type}}</div>
                        </div>
                        <div class="detail">
                            <div class="heading">
                                <h3>
                                <a href="{{ route('sale.show',$propertysale->id) }}">{{$propertysale->title}}</a>
                                </h3>
                                <div class="location">
                                    <a href="{{ route('sale.show',$propertysale->id) }}">
                                        <i class="fa fa-map-marker"></i>{{$propertysale->location->address}} {{$propertysale->location->city}} {{$propertysale->location->region}}
                                        {{$propertysale->location->country}}
                                    </a>
                                </div>
                            </div>
                            <div class="properties-listing">
                                <span>{{$propertysale->detail->bedrooms}} Beds</span>
                                <span>{{$propertysale->detail->bathrooms}} Baths</span>
                                <span>{{$propertysale->Area}} sqft</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
            <div class="slick-btn">
                <div class="slick-prev slick-arrow-buton-2"></div>
                <div class="slick-next slick-arrow-buton-2"></div>
            </div>
        </div>
    </div>
</div>
<!-- Categories strat -->
<div class="categories content-area-8 bg-grea-3">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Most Popular Places</h1>
        </div>
        <div class="row wow">
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-sm-6 col-pad">
                        <div class="category">
                            <div class="category_bg_box cat-2-bg">
                                <div class="category-overlay">
                                    <div class="category-content">
                                        <h3 class="category-title">
                                            <a href="#">House</a>
                                        </h3>
                                        <a href="properties-list-rightside.html" class="category-subtitle">98 Properties</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-pad">
                        <div class="category">
                            <div class="category_bg_box cat-1-bg">
                                <div class="category-overlay">
                                    <div class="category-content">
                                        <h3 class="category-title">
                                            <a href="#">Apartment</a>
                                        </h3>
                                        <a href="properties-list-rightside.html" class="category-subtitle">14 Properties</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-pad">
                        <div class="category">
                            <div class="category_bg_box cat-3-bg">
                                <div class="category-overlay">
                                    <div class="category-content">
                                        <h3 class="category-title">
                                            <a href="#">Villa</a>
                                        </h3>
                                        <a href="properties-list-rightside.html" class="category-subtitle">98 Properties</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-pad d-none d-xl-block d-lg-block">
                <div class="category">
                    <div class="category_bg_box category_long_bg cat-4-bg">
                        <div class="category-overlay">
                            <div class="category-content">
                                <h3 class="category-title">
                                    <a href="#">Farm</a>
                                </h3>
                                <a href="properties-list-rightside.html" class="category-subtitle">12 Properties</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counters strat -->
<div class="counters">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="media counter-box">
                    <div class="media-left">
                        <i class="flaticon-tag"></i>
                    </div>
                    <div class="media-body">
                        <h1 class="counter">967</h1>
                        <p>Listings For Sale</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="media counter-box">
                    <div class="media-left">
                        <i class="flaticon-business"></i>
                    </div>
                    <div class="media-body">
                        <h1 class="counter">1276</h1>
                        <p>Listings For Rent</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="media counter-box">
                    <div class="media-left">
                        <i class="flaticon-people"></i>
                    </div>
                    <div class="media-body">
                        <h1 class="counter">396</h1>
                        <p>Agents</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="media counter-box">
                    <div class="media-left">
                        <i class="flaticon-people-1"></i>
                    </div>
                    <div class="media-body">
                        <h1 class="counter">177</h1>
                        <p>Brokers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <!-- Our team 2 start -->
<div class="our-team-2 content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Our Agent</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-1">
                    <div class="team-photo">
                        <a href="#">
                            <img src="assets/img/avatar/avatar-7.jpg" alt="agent-2" class="img-fluid">
                        </a>
                    </div>
                    <div class="team-details">
                        <h5><a href="agent-detail.html">Martin Smith</a></h5>
                        <h6>Web Developer</h6>
                        <ul class="social-list clearfix">
                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-1">
                    <div class="team-photo">
                        <a href="#">
                            <img src="assets/img/avatar/avatar-6.jpg" alt="agent-2" class="img-fluid">
                        </a>
                    </div>
                    <div class="team-details">
                        <h5><a href="agent-detail.html">John Pitarshon</a></h5>
                        <h6>Creative Director</h6>
                        <ul class="social-list clearfix">
                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-1">
                    <div class="team-photo">
                        <a href="#">
                            <img src="assets/img/avatar/avatar-8.jpg" alt="agent-2" class="img-fluid">
                        </a>
                    </div>
                    <div class="team-details">
                        <h5><a href="agent-detail.html">Maria Blank</a></h5>
                        <h6>Office Manager</h6>
                        <ul class="social-list clearfix">
                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-1">
                    <div class="team-photo">
                        <a href="#">
                            <img src="assets/img/avatar/avatar-5.jpg" alt="agent-2" class="img-fluid">
                        </a>
                    </div>
                    <div class="team-details">
                        <h5><a href="#">Karen Paran</a></h5>
                        <h6>Support Manager</h6>
                        <ul class="social-list clearfix">
                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Testimonial 3 start -->
<div class="testimonial-3">
    <div class="container">
        <header class="testimonia-header">
            <h1>Our Testimonial</h1>
        </header>
        <div class="slick-slider-area">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 2, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <div class="slick-slide-item">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-full"></i>
                                <span>( 7 Reviews )</span>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been standard dummy text ever</p>
                        </div>
                        <div class="media">
                            <a href="#">
                                <img src="assets/img/avatar/avatar-2.jpg" alt="testimonial-avatar" class="img-fluid">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    Eliane Perei
                                </h5>
                                <h6>Web Developer</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-full"></i>
                                <span>( 7 Reviews )</span>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been standard dummy text ever</p>
                        </div>
                        <div class="media">
                            <a href="#">
                                <img src="assets/img/avatar/avatar-3.jpg" alt="testimonial-avatar" class="img-fluid">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    Maria Blank
                                </h5>
                                <h6>Office Manager</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-full"></i>
                                <span>( 7 Reviews )</span>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been standard dummy text ever</p>
                        </div>
                        <div class="media">
                            <a href="#">
                                <img src="assets/img/avatar/avatar-4.jpg" alt="testimonial-avatar" class="img-fluid">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    Karen Paran
                                </h5>
                                <h6>Support Manager</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-full"></i>
                                <span>( 7 Reviews )</span>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been standard dummy text ever</p>
                        </div>
                        <div class="media">
                            <a href="#">
                                <img src="assets/img/avatar/avatar-1.jpg" alt="testimonial-avatar" class="img-fluid">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    John Pitarshon
                                </h5>
                                <h6>Creative Director</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog start -->
<div class="blog content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Our Blog</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="blog-3">
                    <div class="blog-photo">
                        <img src="assets/img/blog/blog-1.jpg" alt="blog-1" class="img-fluid">
                        <div class="date-box">
                            <span>17</span>Feb
                        </div>
                    </div>
                    <div class="post-meta">
                        <ul>
                            <li class="profile-user">
                                <img src="assets/img/avatar/avatar-1.jpg" alt="user-blog">
                            </li>
                            <li><span>John Doe</span></li>
                            <li><i class="fa fa-calendar"></i></li>
                            <li><i class="fa fa-comments"></i></li>
                        </ul>
                    </div>
                    <div class="caption detail">
                        <h4><a href="blog-single-sidebar-right.html">Buying a Home</a></h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy text ever since the 1500s, when</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-3">
                    <div class="blog-photo">
                        <img src="assets/img/blog/blog-2.jpg" alt="blog" class="img-fluid">
                        <div class="date-box">
                            <span>17</span>Jan
                        </div>
                    </div>
                    <div class="post-meta">
                        <ul>
                            <li class="profile-user">
                                <img src="assets/img/avatar/avatar-2.jpg" alt="user-blog">
                            </li>
                            <li><span>Alex Teseira</span></li>
                            <li><i class="fa fa-calendar"></i></li>
                            <li><i class="fa fa-comments"></i></li>
                        </ul>
                    </div>
                    <div class="caption detail">
                        <h4><a href="blog-single-sidebar-right.html">Selling Your Real House</a></h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy text ever since the 1500s, when</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 none-992">
                <div class="blog-3">
                    <div class="blog-photo">
                        <img src="assets/img/blog/blog-3.jpg" alt="blog" class="img-fluid">
                        <div class="date-box">
                            <span>23</span>May
                        </div>
                    </div>
                    <div class="post-meta">
                        <ul>
                            <li class="profile-user">
                                <img src="assets/img/avatar/avatar-3.jpg" alt="user-blog">
                            </li>
                            <li><span>Karen Paran</span></li>
                            <li><i class="fa fa-calendar"></i></li>
                            <li><i class="fa fa-comments"></i></li>
                        </ul>
                    </div>
                    <div class="caption detail">
                        <h4><a href="blog-single-sidebar-right.html">Find Your Dream Real Estate</a></h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy text ever since the 1500s, when</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Partners strat -->
<div class="partners">
    <div class="container">
        <h4>Brands and Partners</h4>
        <div class="slick-slider-area">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 5, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 3}}, {"breakpoint": 768,"settings":{"slidesToShow": 2}}]}'>
                <div class="slick-slide-item"><img src="assets/img/brand/brand-1.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="assets/img/brand/brand-2.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="assets/img/brand/brand-3.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="assets/img/brand/brand-4.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="assets/img/brand/brand-5.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="assets/img/brand/brand-6.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="assets/img/brand/brand-2.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="assets/img/brand/brand-4.png" alt="brand" class="img-fluid"></div>
            </div>
            <div class="slick-prev slick-arrow-buton">
                <i class="fa fa-angle-left"></i>
            </div>
            <div class="slick-next slick-arrow-buton">
                <i class="fa fa-angle-right"></i>
            </div>
        </div>
    </div>
</div>
@endsection