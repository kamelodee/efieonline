<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>agent Dash board ||efieonline</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
   
    <link rel="stylesheet" type="text/css" href="    {{ asset('assets/css/user-dasboard.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/dropzone.css')}}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  

<script type='text/javascript'>


    $(document).ready(function(){
    
     $('#smartwizard').smartWizard({
     selected: 0,
     theme: 'arrows',
     autoAdjustHeight:true,
     transitionEffect:'fade',
     showStepURLhash: false,
    
     });
    
    
     $('#smartwizard1').smartWizard({
     selected: 0,
     theme: 'arrows',
     autoAdjustHeight:true,
     transitionEffect:'fade',
     showStepURLhash: false,
    
     });
    
    
     });</script>
</head>
<body>
    <div class="dashboard-header">
    <nav class="navbar navbar-expand-lg bg-white fixed-top"> <a class="navbar-brand" href="{{route('agent.index')}}"><img src="{{asset('assets/img/efieonline.png')}}" alt="" srcset=""></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <u class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a class="nav-link dropdown-item" href="{{route('home')}}">Go to Home</a>

                         </li>
                </u>
                <ul class="navbar-nav ml-auto navbar-right-top">
                   
                    <li class="nav-item">
                        <div id="custom-search" class="top-search-bar"> <input class="form-control" type="text" placeholder="Search.."> </div>
                    </li>
                  
                  
                    <li class="nav-item dropdown connection"> <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">   My Properties<i class="fas fa-fw fa-th ml-3"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                            <li class="connection-list">
                                <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 "> <a href="{{route('rent.index')}}" class="connection-item"><i class="fas fa-fw fa-th ml-3"></i> <span>Rent</span></a> </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 "> <a href="{{route('sale.index')}}" class="connection-item"><i class="fas fa-fw fa-th ml-3"></i> <span>Sale</span></a> </div>
                                    
                                </div>
                             
                            </li>
                            <li>
                                <div class="conntection-footer"><a href="#">More</a></div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown nav-user"> <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="https://img.icons8.com/dusk/100/000000/user-female-circle.png" alt="" class="user-avatar-md rounded-circle"></a>
                        <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                            <div class="nav-user-info">
                            <h5 class="mb-0 text-white nav-user-name">{{Auth::user()->name}}</h5> <span class="status"></span><span class="ml-2">Available</span>
                            </div> <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                             <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                              
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                              <i class="fas fa-power-off mr-2"></i>
                                 {{ __('Logout') }}
                             </a>
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
      {{--  --}}
<main class="py-4">
    @yield('content')
</main>
    </div>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGrnLTmXwXmaHm-kAal-EsbMbN7gHfrW0&callback=initAutocomplete&libraries=places&v=weekly"
      defer
    ></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    @yield('scripts')
</body>


<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
    $(function () {
      var table = $('.data-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: "/property-rent",
          columns: [
              {data: 'DT_RowIndex', name: 'DT_RowIndex'},
              {data: 'title', name: 'title'},
              {data: 'description', name: 'description'},
              {data: 'action', name: 'id', orderable: false, searchable: false},
          ]
      });
    });
// sales
    $(function () {
      var table = $('.data-table-sale').DataTable({
          processing: true,
          serverSide: true,
          ajax: "/property-sale",
          columns: [
              {data: 'DT_RowIndex', name: 'DT_RowIndex'},
              {data: 'title', name: 'title'},
              {data: 'description', name: 'description'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });
    });
  </script>
</html>