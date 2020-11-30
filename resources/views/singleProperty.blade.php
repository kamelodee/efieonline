@extends('layouts.theme')
@section('navbar')
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
@foreach ($rent as $r)
<!-- Properties Details page start -->
<div class="properties-details-page content-area-7">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-xs-12">
                <div class="properties-details-section">
                    <div id="propertiesDetailsSlider" class="carousel properties-details-sliders slide mb-40">
                        <!-- Heading properties start -->
                        <div class="heading-properties-2">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pull-left">
                                        <h3>{{$r->title}}</h3>
                                    
                                    <p><i class="fa fa-map-marker"></i> {{$r->location->address}} {{$r->location->city}} {{$r->location->region}} {{$r->location->country}}</p>
                                    </div>
                                    <div class="pull-right">
                                    <h3><span class="text-right">{{$r->currency}} {{$r->monthly_rate}}/Month</span></h3>
                                        <p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- main slider carousel items -->
                        <div class="carousel-inner">
                            @foreach ($r->getMedia('gallery') as $galleryItem)
                        <div class="{{ $loop->first ? 'active' : '' }} item carousel-item" data-slide-number="{{$loop->index}}">
                                <img src="{{ $galleryItem->getFullUrl('large') }}" class="img-details" alt="slider-properties">
                            </div>
                            @endforeach
                            <a class="carousel-control left" href="#propertiesDetailsSlider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                            <a class="carousel-control right" href="#propertiesDetailsSlider" data-slide="next"><i class="fa fa-angle-right"></i></a>
                        </div>
                        <!-- main slider carousel nav controls -->
                        <a class="btn btn-primary" href="{{route('rent.apointment',$r->id)}}">Book apointment</a>
                        <div class="slick-slider-area">
                            <div class="row slick-carousel" data-slick='{"slidesToShow": 5, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 3}}, {"breakpoint": 768,"settings":{"slidesToShow": 2}}]}'>
                                @foreach ($r->getMedia('gallery') as $galleryItem)
                                <div class="slick-slide-item {{ $loop->first ? 'active' : '' }} " id="carousel-selector-{{$loop->index}}"  data-slide-to="{{$loop->index}}" data-target="#propertiesDetailsSlider">
                                    <img src="{{ $galleryItem->getFullUrl('large') }}" alt="brand" class="img-fluid img-control">
                                </div>
                                @endforeach
                            </div>

                            <div class="slick-prev slick-arrow-buton">
                                <i class="fa fa-angle-left"></i>
                            </div>
                            <div class="slick-next slick-arrow-buton">
                                <i class="fa fa-angle-right"></i>
                            </div>

                           
                        <!-- main slider carousel items -->
                    </div>
                        <!-- main slider carousel items -->
                    </div>

                    @endforeach
                    <!-- Advanced search start -->
                    <div class="widget-2 sidebar advanced-search-2">
                        <h3 class="sidebar-title">Advanced Search</h3>
                        <div class="s-border"></div>
                        <div class="m-border"></div>
                        <form method="GET">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="property-sdtatus">
                                    <option>Property Status</option>
                                    <option>For Sale</option>
                                    <option>For Rent</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="property-type">
                                    <option>Property Type</option>
                                    <option>Apartments</option>
                                    <option>Houses</option>
                                    <option>Commercial</option>
                                    <option>Garages</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="commercial">
                                    <option>Commercial</option>
                                    <option>Residential</option>
                                    <option>Land</option>
                                    <option>Hotels</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="location">
                                    <option>location</option>
                                    <option>New York</option>
                                    <option>Bangladesh</option>
                                    <option>India</option>
                                    <option>Canada</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="bedrooms">
                                            <option>Bedrooms</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="bathroom">
                                            <option>Bathroom</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="balcony">
                                            <option>Balcony</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="garage">
                                            <option>Garage</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="range-slider">
                                <label>Area</label>
                                <div data-min="0" data-max="10000" data-min-name="min_area" data-max-name="max_area" data-unit="Sq ft" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="range-slider">
                                <label>Price</label>
                                <div data-min="0" data-max="150000"  data-min-name="min_price" data-max-name="max_price" data-unit="USD" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group mb-0">
                                <button class="search-button">Search</button>
                            </div>
                        </form>
                    </div>
                    @foreach ($rent as $r)
                    <!-- Tabbing box start -->
                    <div class="tabbing tabbing-box tb-2 mb-40">
                        <ul class="nav nav-tabs" id="carTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active show" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="one" aria-selected="false">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="two" aria-selected="false">Floor Plans</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="three" aria-selected="true">Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="4-tab" data-toggle="tab" href="#4" role="tab" aria-controls="4" aria-selected="true">Video</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="5-tab" data-toggle="tab" href="#5" role="tab" aria-controls="5" aria-selected="true">Location</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="6-tab" data-toggle="tab" href="#6" role="tab" aria-controls="6" aria-selected="true">Similar Properties</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="carTabContent">
                            <div class="tab-pane fade active show" id="one" role="tabpanel" aria-labelledby="one-tab">
                                <div class="properties-description mb-50">
                                    <h3 class="heading-2">
                                        Description
                                    </h3>
                                <p>{{$r->description}}</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="two" role="tabpanel" aria-labelledby="two-tab">
                                <div class="floor-plans mb-50">
                                    <h3 class="heading-2">Floor Plans</h3>
                                    <table>
                                        <tbody><tr>
                                            <td><strong>Size</strong></td>
                                            <td><strong>Rooms</strong></td>
                                            <td><strong>Bathrooms</strong></td>
                                            <td><strong>Garage</strong></td>
                                        </tr>
                                        <tr>
                                           
                                            <td>{{$r->detail->Area}}</td>
                                            <td>{{$r->detail->bedrooms}}</td>
                                            <td>{{$r->detail->bathrooms}}</td>
                                            <td>{{$r->detail->garage}}</td>
                                           
                                        </tr>
                                        </tbody>
                                    </table>
                                    {{-- <img src="img/floor-plans.png" alt="floor-plans" class="img-fluid"> --}}
                                </div>
                            </div>
                            <div class="tab-pane fade " id="three" role="tabpanel" aria-labelledby="three-tab">
                                <div class="property-details mb-40">
                                    <h3 class="heading-2">Property Details</h3>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <ul>
                                               
                                              
                                                <li>
                                                    <strong>Property Id:</strong>{{$r->id}}
                                                </li>
                                                <li>
                                                    <strong>Price:</strong>{{$r->currency}} {{$r->monthly_rate}}/ Month
                                                    </li>
                                                <li>
                                                    <strong>Property Type:</strong>{{$r->property_type}}
                                                </li>
                                               
                                                <li>
                                                    <strong>Bathrooms:</strong>{{$r->detail->bedrooms}}
                                                </li>
                                                <li>
                                                    <strong>Bathrooms:</strong>{{$r->detail->bathrooms}}
                                                </li>
                                               
                                            </ul>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <ul>
                                               
                                                <li>
                                                    <strong>Nature of Building:</strong>{{$r->detail->nature_of_building}}
                                                </li>
                                                <li>
                                                    <strong>Land area:</strong>{{$r->detail->Area}} ft2
                                                </li>
                                                <li>
                                                    <strong>Year Built:</strong>{{$r->detail->year_build}}
                                                </li>
                                                <li>
                                                    <strong>kitchen</strong>{{$r->detail->kitchen}}
                                                </li>
                                                <li>
                                                    <strong>Garages:</strong>{{$r->detail->car_packing}}
                                                </li>
                                               
                                            </ul>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <ul>
                                                <li>
                                                    <strong>Address: </strong>{{$r->location->address}}
                                                </li>
                                                <li>
                                                    <strong>City:</strong>{{$r->location->city}}
                                                </li>
                                                <li>
                                                    <strong>Region:</strong>{{$r->location->region}}
                                                </li>
                                                <li>
                                                    <strong>Country:</strong>{{$r->location->country}}
                                                </li>
                                                <li>
                                                    <strong>Address: </strong>{{$r->location->address}}
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="4" role="tabpanel" aria-labelledby="4-tab">
                                <div class="inside-properties mb-50">
                                    <h3 class="heading-2">
                                        Property Video
                                    </h3>
                                    <iframe src="https://www.youtube.com/embed/5e0LxrLSzok" allowfullscreen=""></iframe>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="5" role="tabpanel" aria-labelledby="5-tab">
                                <div class="location mb-50">
                                    <div class="map">
                                        <h3 class="heading-2">Property Location</h3>
                                        <ul>
                                            <li>
                                                <strong>Address: </strong>{{$r->location->address}}
                                            </li>
                                            <li>
                                                <strong>City:</strong>{{$r->location->city}}
                                            </li>
                                            <li>
                                                <strong>Region:</strong>{{$r->location->region}}
                                            </li>
                                            <li>
                                                <strong>Country:</strong>{{$r->location->country}}
                                            </li>
                                            <li>
                                                <strong>Address: </strong>{{$r->location->address}}
                                            </li>
                                        <div id="contactMap" class="contact-map"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            <div class="tab-pane fade " id="6" role="tabpanel" aria-labelledby="6-tab">
                                <div class="similar-properties mb-30">
                                    <h3 class="heading-2">Similar Properties</h3>
                                    <div class="row">
                                      
                                            @foreach ($rents as $item)
                                            <div class="col-md-6">
                                                <div class="property-box">
                                                    <div class="property-thumbnail">
                                                        <a href="{{ route('rent.show',$item->id) }}" class="property-img">
                                                            <div class="listing-badges">
                                                                <span class="featured">{{$item->property_label}}</span>
                                                            </div>
                                                            <div class="price-ratings-box">
                                                                <p class="price">
                                                                    {{$item->currency}} {{$item->monthly_rate}}
                                                                </p>
                                                                <div class="ratings">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                            </div>
                                                            <div class="listing-time opening">{{$item->property_type}}</div>
                                                            <img class="d-block property_img" src="{{$item->getFirstMediaUrl('main_photo','large')}}" alt="properties">
                                                        </a>
                                                    </div>
                                                    <div class="detail">
                                                        <h1 class="title">
                                                        <a href="{{ route('rent.show',$item->id) }}">{{$item->title}}</a>
                                                        </h1>
                                                        <div class="location">
                                                            <a href="properties-details.html">
                                                                <i class="fa fa-map-marker"></i>{{$item->location->address}} {{$item->location->city}} {{$item->location->region}} {{$item->location->country}}
                                                            </a>
                                                        </div>
                                                        <ul class="facilities-list clearfix">
                                                            <li>
                                                                <i class="flaticon-square"></i> {{$item->Area}} sq ft
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-furniture"></i> {{$item->detail->bedrooms}} Beds
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-holidays"></i> {{$item->detail->bathrooms}} Baths
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-vehicle"></i> {{$item->detail->garage}} Garage
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-window"></i> {{$item->detail->balcony}} Balcony
                                                            </li>
                                                           
                                                        </ul>
                                                    </div>
                                                   
                                                </div>
                                            </div>
    
    
                                            @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <!-- Properties condition start -->
                    @foreach ($rent as $r)
                    <div class="properties-condition mb-40">
                        <h3 class="heading-2">
                            Condition
                        </h3>
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <ul class="condition">
                                    <li>
                                        <i class="flaticon-furniture"></i>{{$r->detail->bedrooms}} Bedroom
                                    </li>
                                    <li>
                                    <i class="flaticon-holidays"></i> {{$r->detail->bathrooms}} Bathroom
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <ul class="condition">
                                    <li>
                                        <i class="flaticon-square"></i>{{$r->detail->Area}} sq ft
                                    </li>
                                    <li>
                                    <i class="flaticon-monitor"></i> {{$r->detail->tvlouge}}TV Lounge
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <ul class="condition">
                                    <li>
                                        <i class="flaticon-vehicle"></i>{{$r->garage}} Garage
                                    </li>
                                    <li>
                                    <i class="flaticon-window"></i> {{$r->lalcony}} Balcony
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Properties amenities start -->
                    <div class="properties-amenities mb-40">
                        <h3 class="heading-2">
                            Features
                        </h3>
                        <div class="row">
                            @foreach ($r->feature as $feature)
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <ul class="amenities">
                                   
                                    <li>
                                        <i class="flaticon-technology"></i>{{$feature->features}}
                                    </li>  
                                   
                                   
                                </ul>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                   
                    <!-- Comments start -->
                  {{-- comment --}}
                    <!-- Contact 1 start -->
                    <div class="contact-1 mtb-50">
                        <h3 class="heading">Contact Form</h3>
                        <form action="#" method="GET" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group name">
                                        <input type="text" name="name" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group email">
                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group subject">
                                        <input type="text" name="subject" class="form-control" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group number">
                                        <input type="text" name="phone" class="form-control" placeholder="Number">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group message">
                                        <textarea class="form-control" name="message" placeholder="Write message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="send-btn">
                                        <button type="submit" class="btn btn-md button-theme">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="sidebar-right">
                    <!-- Advanced search start -->
                    <div class="sidebar widget advanced-search none-992">
                        <h3 class="sidebar-title">Advanced Search</h3>
                        <div class="s-border"></div>
                        <div class="m-border"></div>
                        <form method="GET">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="property-sdtatus">
                                    <option>Property Status</option>
                                    <option>For Sale</option>
                                    <option>For Rent</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="property-type">
                                    <option>Property Type</option>
                                    <option>Apartments</option>
                                    <option>Houses</option>
                                    <option>Commercial</option>
                                    <option>Garages</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="commercial">
                                    <option>Commercial</option>
                                    <option>Residential</option>
                                    <option>Land</option>
                                    <option>Hotels</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="location">
                                    <option>location</option>
                                    <option>New York</option>
                                    <option>Bangladesh</option>
                                    <option>India</option>
                                    <option>Canada</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="bedrooms">
                                            <option>Bedrooms</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="bathroom">
                                            <option>Bathroom</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="balcony">
                                            <option>Balcony</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="garage">
                                            <option>Garage</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="range-slider">
                                <div class="row">
                                    <div class="col-6">
                                        <select class="selectpicker search-fields" name="minimum_price">
                                            <option>Minimu Price</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <select class="selectpicker search-fields" name="maximum_price">
                                            <option>Maximum Price</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <select class="selectpicker search-fields" name="currency">
                                    <option>USD</option>
                                    <option>GHC</option>
                                </select>
                            </div>
                            <div class="form-group mb-0">
                                <button class="search-button">Search</button>
                            </div>
                        </form>
                    </div>
                    <!-- Posts by category start -->
                    <div class="posts-by-category widget">
                        <h3 class="sidebar-title">Category</h3>
                        <div class="s-border"></div>
                        <div class="m-border"></div>
                        <ul class="list-unstyled list-cat">
                            <li><a href="#">Single Family <span>(45)</span></a></li>
                            <li><a href="#">Apartment <span>(21)</span> </a></li>
                            <li><a href="#">Condo <span>(23)</span></a></li>
                            <li><a href="#">Multi Family <span>(19)</span></a></li>
                            <li><a href="#">Villa <span>(19)</span></a> </li>
                            <li><a href="#">Other <span>(22) </span></a></li>
                        </ul>
                    </div>
                    <!-- Social media box start -->
                    <div class="social-media-box widget clearfix">
                        <h3 class="sidebar-title">Social Media</h3>
                        <div class="s-border"></div>
                        <div class="m-border"></div>
                        <ul class="social-list">
                            <li>
                                <a href="#" class="facebook-bg">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="twitter-bg">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="google-bg">
                                    <i class="fa fa-google"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="linkedin-bg">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="pinterest-bg">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Financing calculator start -->
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection