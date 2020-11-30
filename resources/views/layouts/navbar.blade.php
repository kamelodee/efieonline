@extends('layout.theme')
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