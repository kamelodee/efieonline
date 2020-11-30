@extends('layouts.user-dashboard')

@section('content')
<link href="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1581152092/smartwizard/smart_wizard.min.css" rel="stylesheet" type="text/css" />
<link href="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1581152091/smartwizard/smart_wizard_theme_arrows.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1581152197/smartwizard/jquery.smartWizard.min.js"></script>
<div class="rentform container justify-content-center d-flex align-items-center mt-5" id="rentform">
                 
  
                     <form method="post" action="listing_sales.php" class="container js-switch__message-text ">
                     <h3>List property for Sale</h3>
                     <div id="smartwizard">
                         <ul>
                             <li><a href="#step-1">Step 1<br /><small> Description</small></a></li>
                             <li><a href="#step-2">Step 2<br /><small> Pricing</small></a></li>
                             <li><a href="#step-3">Step 3<br /><small> Details</small></a></li>
                             <li><a href="#step-4">Step 4<br /><small> Feature</small></a></li>
                             <li><a href="#step-5">Step 5<br /><small> Location</small></a></li>
                             <li><a href="#step-6">Step 6<br /><small> Image Uploads</small></a></li>
                             <li><a href="#step-7">Step 7<br /><small> Submit</small></a></li>
                         </ul>
                         <div class="mt-4">
                             <div id="step-1">
                                 
                                 <div class="row">
                                     <div class="col-md-6">
                                          <input id="title"  name="title" type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Property Title" >
                                          @error('title')
                                          <div class="alert alert-danger">{{ $message }}</div>
                                      @enderror
                                        </div>
                                    
                                     <div class="col-md-6">
                                          <select id="property_type"   class="form-control @error('propety_type') is-invalid @enderror" id="" name="property_type">
                                        <option value="" selected disabled="true">Select the type property</option>
                                        <option value="compound">Compound</option>
                                        <option value="shop">Shop</option>
                                        <option value="compound_house">Compound House</option>
                                        <option value="detached">Detached</option>
                                        <option value="hostel">Hostel</option>
                                        <option value="hotel">Hotel</option>
                                        <option value="office">Office</option>
                                        <option value="pent_house">Pent House</option>
                                        <option value="residential">Residential</option>
                                        <option value="apartment">Apartment</option>
                                        <option value="condo">Condo</option>
                                        <option value="multi_family_home">Multi Family Home</option>
                                        <option value="single_family_home">Single Family Home</option>
                                        <option value="studio">Studio</option>
                                        <option value="self_compound">Self Compound</option>
                                        <option value="semi_detached">Semi Detahced</option>
                                        <option value="store">Store</option>
                                        <option value="storey_building">Storey Building</option>
                                        <option value="villa">Villa</option>
                                        @error('property_type')
                                         <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                          </select>
                                         </div>
                                     <div class="col-md-12 mt-4"> 
                                         <textarea name="description" id="description"   class="form-control" placeholder="Property Description @error('description') is-invalid @enderror" ></textarea> 
                                        
                                         @error('description')
                                         <div class="alert alert-danger">{{ $message }}</div>
                                     @enderror
                                        </div>
                                     
                                    </div>
                                 <div class="row mt-3">
                                     <div class="col-md-6"> 
                                        <select name="property_status" id="property_status" class=" form-control @error('property_status') is-invalid @enderror" searchable="Search here...">
                                            <option value="" selected disabled="true">Select the property(s) status</option>
                                            <option value="For Lease">For Lease</option>
                                            <option value="For Sale">For Sale</option>
                                            <option value="Foreclosure">Foreclosure</option>
                                            <option value="New Construction">New Construction</option>
                                            <option value="New Listing">New Listing</option>
                                            <option value="Open House">Open House</option>
                                            <option value="Reduced Price">Reduced Price</option>
                                            <option value="Resale">Resale</option>
                                           
                                          </select>
                                          @error('property_status')
                                          <div class="alert alert-danger">{{ $message }}</div>
                                      @enderror
                                    
                                    </div>
                                     <div class="col-md-6"> 
                                         
                                        <select id="property_label" class="form-control @error('property_label') is-invalid @enderror" name="property_label">
                                             <option selected disabled value="">property label</option>
                                            <option value="best_deals">Best Deals </option>
                                            <option value="hot_offer">Hot Offer</option>
                                            <option value="new_homes">New Homes</option>
                                            <option value="open_house">Open House</option>
                                            <option value="sold">Sold</option>
                                            <option value="new_listing">New Listing</option>
                                           
                                            <option value="reduced_price">Reduced Price</option>
                                            <option value="resale">Resale</option>
                                           
                                          </select>
                                          @error('property_label')
                                          <div class="alert alert-danger">{{ $message }}</div>
                                      @enderror
                                    </div>
                                 </div>
                             </div>
                             <div id="step-2">
                                 <div class="row">
                                     <div class="col-md-6"> <input name="sales_price" type="number" class="form-control " placeholder="Property Sales Price" > </div>
                                     <div class="col-md-6">
                                      <select name="currency" id="sales_price" class="form-control">
                                         <option selected disabled value="">Select currency</option>
                                         <option value="GHC">GHC</option>
                                         <option value="USD">USD</option>
                                     </select>
                                     @error('currency')
                                          <div class="alert alert-danger">{{ $message }}</div>
                                      @enderror
                                    </div>
                                 </div>
                                 
                             </div>
                             <div id="step-3" class="">
                                 <div class="row">
                                     <div class="col-md-6"> <select class="form-control" name="nature_of_building" >
                                         <option value="" selected disabled>Nature of building</option>
                                        <option value="none">No</option>
                                        <option value="blocks">Blocks</option>
                                        <option value="bricks">Bricks</option>
                                        <option value="wooden structre">Wooden Structure</option>
                                        <option value="metal structure">Metal Structure</option>
                                        <option value="other">Other</option>
                                      </select> </div>
                                     <div class="col-md-6"><input class="form-control" name="bedrooms"  id="prop_beds" value="" placeholder="Enter number of bedrooms" type="number" min="1" max="99" >
                                     </div>
                                 </div>
                                 <div class="row mt-3">
                                     <div class="col-md-6">   <input class="form-control" name="bathrooms"  id="prop_beds" value="" placeholder="Enter number of bathrooms" type="number" min="1" max="99">
                                     </div>
                                     <div class="col-md-6">  <input class="form-control" name="area_size"  id="prop_beds" value="" placeholder="Enter property area size" type="text" >
                                     </div>
                                 </div>
                                 <div class="row mt-3">
                                     
                                     <div class="col-md-12">  <input class="form-control" name="year" type="number"  id="prop_beds" placeholder="Year Build YYYY" min="1999" max="3000">
                                     </div>
                                 </div>
                                 <div class="row mt-3">
                                     <div class="col-md-6">
                                          <select class="form-control" name="car_parking_space">
                                              <option value="" selected disabled>Car packing Space</option>
                                        <option>No</option>
                                        <option>1-3 Cars Secured</option>
                                        <option>1-3 Cars Unsecured</option>
                                         <option>1-5 Cars Secured</option>
                                        <option>1-5 Cars Unsecured</option>
                                        <option>Above 5 Cars Secured</option>
                                        <option>Above 5  Cars Unsecured</option>
                                         <option>Road Side Parking </option>
                                        <option>Oustide House Parking </option>
                                        <option>Other</option>
                                      </select> </div>
                                     <div class="col-md-6">
                                        <select name="water" class="form-control">
                                            <option value="" disabled selected>Water </option>
                                            <option>No</option>
                                            <option>Mechanize Borehole</option>
                                            <option>Ghana Water</option>
                                            <option>Manual Well</option>
                                            <option>Connected to all rooms and payed monthly</option>
                                            <option>Not connected pay as you fetch</option>
                                            <option>Not Connected</option>
                                            <option>Fetch From Outside </option>
                                            <option>Polytank provided by landlord for storage of water</option>
                                            <option>Available space for polytank to be instored optionally</option>
                                            <option>Other</option>
                                          </select>  
                                    
                                    </div>
                                 </div>
                                 
                             </div>
                             <div id="step-4">
                             <h5>features of Property</h5>
                                <div class="row">
                                    <div class="col-md-3"> <li class="card p-2">
                                       
                                           <label class="checkbox">
                                               <small> Air Conditioning</small>
                                                                <input name="check[]" type="checkbox" value="Air Conditioning" />
                                                                <span class="success"></span>
                                                            </label>
                                      </li> </div>
                                    <div class="col-md-3"><li class="card p-2">
                                        
                                           <label class="checkbox">
                                               <small>
                                                Garage
                                               </small>
                                                                <input name="check[]" type="checkbox"  value="Garage" />
                                                                <span class="success"></span>
                                                            </label>
                                      </li> </div>
                                    <div class="col-md-3"> <li class="card p-2">
                                       
                                           <label  class="checkbox">
                                               <small> Microwave</small>
                                                                <input name="check[]" type="checkbox" value="Microwave" />
                                                                <span class="success"></span>
                                                            </label>
                                      </li> </div>
                                    <div class="col-md-3">  <li class="card p-2">
                                       
                                           <label class="checkbox">
                                               <small> Swimming Pool</small>
                                                                <input name="check[]" type="checkbox" value="Swimming Pool" />
                                                                <span class="success"></span>
                                                            </label>
                                      </li> </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-3"> <li class="card p-2">
                                      
                                           <label class="checkbox">
                                               <small>  WiFi</small>
                                                                <input name="check[]" type="checkbox" value="WiFi" />
                                                                <span class="success"></span>
                                                            </label>
                                      </li> </div>
                                    <div class="col-md-3"> <li class="card p-2">
                                       
                                           <label class="checkbox">
                                               <small> Barbeque</small>
                                                                <input name="check[]" type="checkbox" value="Barbeque" />
                                                                <span class="success"></span>
                                                            </label>
                                      </li> </div>
                                    <div class="col-md-3"> <li class="card p-2">
                                        
                                           <label class="checkbox">
                                               <small>Gym</small>
                                                                <input name="check[]" type="checkbox" value="Gym" />
                                                                <span class="success"></span>
                                                            </label>
                                      </li> </div>
                                    <div class="col-md-3">  <li class="card p-2">
                                       
                                           <label class="checkbox">
                                               <small> Outdoor Shower</small>
                                                                <input name="check[]" type="checkbox" value="Outdoor Shower" />
                                                                <span class="success"></span>
                                                            </label>
                                      </li> </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-3">   <li class="card p-2">
                                       
                                           <label class="checkbox">
                                               <small> Toilet</small>
                                                                <input name="check[]" type="checkbox" value="Toilet" />
                                                                <span class="success"></span>
                                                            </label>
                                      </li> </div>
                                      
                                    <div class="col-md-3">
                                        <li class="card p-2">
                                        
                                        <label class="checkbox">
                                            <small>Window Coverings</small>
                                                             <input name="check[]" type="checkbox" value="Window Coverings" />
                                                             <span class="success"></span>
                                                         </label>
                                   </li> </div>
                                    <div class="col-md-3">  <li class="card p-2">
                                        
                                           <label class="checkbox">
                                               <small>Bathroom</small>
                                                                <input name="check[]" type="checkbox" value="Bathroom" />
                                                                <span class="success"></span>
                                                            </label>
                                      </li> </div>
                                    <div class="col-md-3"> 
                                        <li class="card p-2">
                                           
                                               <label class="checkbox">
                                                   <small> Laundry</small>
                                                                    <input name="check[]" type="checkbox" value="Laundry" />
                                                                    <span class="success"></span>
                                                                </label>
                                          </li>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-3"> <li class="card p-2">
                                        
                                           <label class="checkbox">
                                               <small>Refrigerator</small>
                                                                <input name="check[]" type="checkbox" value="Refrigerator" />
                                                                <span class="success"></span>
                                                            </label>
                                      </li> </div>
                                    <div class="col-md-3"> <li class="card p-2">
                                       
                                            <label class="checkbox">
                                                <small> TV Cable</small>
                                                                 <input name="check[]" type="checkbox" value="TV Cable" />
                                                                 <span class="success"></span>
                                                             </label>
                                       </li> </div>
                                    <div class="col-md-3"> <li class="card p-2">
                                        
                                           <label class="checkbox">
                                               <small>Dryer</small>
                                                                <input name="check[]" type="checkbox" value="Dryer" />
                                                                <span class="success"></span>
                                                            </label>
                                      </li> </div>
                                    <div class="col-md-3">  <li class="card p-2">
                                        
                                            <label class="checkbox">
                                                <small>Lawn</small>
                                                                 <input name="check[]" type="checkbox" value="Lawn" />
                                                                 <span class="success"></span>
                                                             </label>
                                       </li> </div>
                                    <div class="col-md-3">  <li class="card p-2">
                                        
                                           <label class="checkbox">
                                               <small>Sauna</small>
                                                                <input name="check[]" type="checkbox" value="Sauna" />
                                                                <span class="success"></span>
                                                            </label>
                                      </li> </div>
                                    <div class="col-md-3"> <li class="card p-2">
                                        
                                           <label class="checkbox">
                                               <small>Washer</small>
                                                                <input name="check[]" type="checkbox" value="Washer" />
                                                                <span class="success"></span>
                                                            </label>
                                      </li> </div>
                                </div>
                            </div>
                            <div id="step-5">
                            <div id="locationField_" class="m-3">
                        <input
                        class="form-control"
                            id="autocomplete"
                            placeholder="Enter Property Location"
                            onFocus="geolocate()"
                            type="text"
                            name="address"
                        />
                        </div>

                        
                    <div class="row m-3" id="address_">
                        <div class="col-3 mt-3 ">area Name</div>
                        <div class="col-9 mt-3"><input name="area" class="form-control" id="street_number" " />  <input class="d form-control" id="route"  type="hidden"/></div>
                        <div class="col-3 mt-3 ">City</div>
                        <div class="col-9 mt-3"><input name="city" class="form-control" id="locality"  /> </div>
                        <div class="col-3 mt-3">Region</div>
                        <input class=" form-control" placeholder="Zip code" id="postal_code" type="hidden"  />
    
                        <div class="col-9 mt-3"><input name="region" class="form-control"  id="administrative_area_level_1"  />  </div>
                        <div class="col-3 mt-3">Country</div>
                        <div class="col-9 mt-3"><input name="country"  class="form-control" id="country"  /> </div>



                    </div>






                            </div>
                            <div id="step-6">
                           
                            <div class="row mt-3">
                                     <div class="col-md-12"> <input type="text" class="form-control" placeholder="Property Video Link" > </div>
                                    
                                 </div>
                                 <div class="form-group">
                                    <label for="document">Documents</label>
                                    <div class="needsclick dropzone" id="document-dropzone">
                            
                                    </div>
                                </div>
                        
                            </div>
                             <div id="step-7" class="">
                                 <div class="row">
                                    <div class="col-md-12"> <span><input class="listing-btn" value="submit Prperty gallary" type="submit"></span> </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     
                    </form>
                 </div>
            
                 @section('scripts')
                 <script>
                   var uploadedDocumentMap = {}
                   Dropzone.options.documentDropzone = {
                     url: '/create-listing',
                     maxFilesize: 2, // MB
                     addRemoveLinks: true,
                     headers: {
                       'X-CSRF-TOKEN': "{{ csrf_token() }}"
                     },
                     success: function (file, response) {
                       $('form').append('<input type="hidden" name="document[]" value="' + response.name + '">')
                       uploadedDocumentMap[file.name] = response.name
                     },
                     removedfile: function (file) {
                       file.previewElement.remove()
                       var name = ''
                       if (typeof file.file_name !== 'undefined') {
                         name = file.file_name
                       } else {
                         name = uploadedDocumentMap[file.name]
                       }
                       $('form').find('input[name="document[]"][value="' + name + '"]').remove()
                     },
                     init: function () {
                       @if(isset($project) && $project->document)
                         var files =
                           {!! json_encode($project->document) !!}
                         for (var i in files) {
                           var file = files[i]
                           this.options.addedfile.call(this, file)
                           file.previewElement.classList.add('dz-complete')
                           $('form').append('<input type="hidden" name="document[]" value="' + file.file_name + '">')
                         }
                       @endif
                     }
                   }
                 </script>
                 @stop

<!-- end for sale form -->

<!-- for sale form -->

                 <div class="rentform" id="rentform">
                    
                     <form action="store" method="POST" enctype="multipart/form-data" class="">
                         @csrf
                     <h3>List property for Rent</h3>
                     <div id="smartwizard1">
                         <ul>
                             <li><a href="#step-1">Step 1<br /><small> Description</small></a></li>
                             <li><a href="#step-2">Step 2<br /><small> Pricing</small></a></li>
                             <li><a href="#step-3">Step 3<br /><small> Details</small></a></li>
                             <li><a href="#step-4">Step 4<br /><small> Feature</small></a></li>
                             <li><a href="#step-5">Step 5<br /><small> Location</small></a></li>
                             <li><a href="#step-6">Step 6<br /><small> Image Uploads</small></a></li>
                             <li><a href="#step-7">Step 7<br /><small> Submit</small></a></li>
                         </ul>
                         <div class="mt-4">
                             <div id="step-1">
                                 
                                 <div class="row">
                                     <div class="col-md-6"> <input name="property_title" type="text" class="form-control" placeholder="Property Title" > </div>
                                    
                                     <div class="col-md-6">
                                          <select name="property_type" class="form-control" id="" name="property_type">
                                        <option value="" selected disabled="true">Select the type property</option>
                                        <option value="compound">Compound</option>
                                        <option value="shop">Shop</option>
                                        <option value="compound_house">Compound House</option>
                                        <option value="detached">Detached</option>
                                        <option value="hostel">Hostel</option>
                                        <option value="hotel">Hotel</option>
                                        <option value="office">Office</option>
                                        <option value="pent_house">Pent House</option>
                                        <option value="residential">Residential</option>
                                        <option value="apartment">Apartment</option>
                                        <option value="condo">Condo</option>
                                        <option value="multi_family_home">Multi Family Home</option>
                                        <option value="single_family_home">Single Family Home</option>
                                        <option value="studio">Studio</option>
                                        <option value="self_compound">Self Compound</option>
                                        <option value="semi_detached">Semi Detahced</option>
                                        <option value="store">Store</option>
                                        <option value="storey_building">Storey Building</option>
                                        <option value="villa">Villa</option>
                                          </select>
                                         </div>
                                     <div class="col-md-12 mt-4"> <textarea name="description"    class="form-control" placeholder="Property Description" ></textarea> </div>
                                     
                                    </div>
                                 <div class="row mt-3">
                                     <div class="col-md-6"> 
                                        <select name="property_status" class=" form-control"  searchable="Search here...">
                                            <option value="" selected disabled="true">Select the property(s) status</option>
                                            <option value="For Lease">For Lease</option>
                                            <option value="For Rent">For Rent</option>
                                            <option value="Foreclosure">Foreclosure</option>
                                            <option value="New Construction">New Construction</option>
                                            <option value="New Listing">New Listing</option>
                                            <option value="Open House">Open House</option>
                                            <option value="Reduced Price">Reduced Price</option>
                                          
                                           
                                          </select>
                                    
                                    </div>
                                     <div class="col-md-6"> 
                                         
                                        <select class="form-control" name="property_label">
                                             <option selected disabled value="">property label</option>
                                            <option value="best_deals">Best Deals </option>
                                            <option value="hot_offer">Hot Offer</option>
                                            <option value="new_homes">New Homes</option>
                                            <option value="open_house">Open House</option>
                                            <option value="sold">Sold</option>
                                            <option value="new_listing">New Listing</option>
                                           
                                            <option value="reduced_price">Reduced Price</option>
                                            <option value="resale">Resale</option>
                                           
                                          </select>
                                    
                                    </div>
                                 </div>
                             </div>
                             <div id="step-2">
                                 <div class="row">
                                     <div class="col-md-6"> <input type="number" class="form-control" name="monthly_rate" placeholder="Rent  Price monthly" > </div>
                                     <div class="col-md-6"> <input type="number" class="form-control" name="yearly_rate" placeholder="Rent Price yearly" > </div>
                                 </div>
                                 <div class="row mt-3">
                                    
                                        <div class="col-md-6">
                                       <select name="rent_duration" id="" class="form-control">
                                         <option selected disabled value="">Rent Periot</option>
                                         <option value="One Year">1 Year</option>
                                         <option value="Two Years">2 Years</option>
                                         <option value="Six Month">6 Months</option>
                                     </select> </div>

                                     <div class="col-md-6">
                                      <select name="currency" id="" class="form-control">
                                         <option selected disabled value="">Select currency</option>
                                         <option value="GHC">GHC</option>
                                         <option value="USD">USD</option>
                                     </select> </div>
                                    
                                 </div>
                             </div>
                             <div id="step-3" class="">
                                 <div class="row">
                                     <div class="col-md-6"> <select class="form-control" name="nature_of_building" >
                                         <option value="" selected disabled>Nature of building</option>
                                        <option value="blocks">Blocks</option>
                                        <option value="bricks">Bricks</option>
                                        <option value="wooden structre">Wooden Structure</option>
                                        <option value="metal structure">Metal Structure</option>
                                        <option value="other">Other</option>
                                      </select> </div>
                                     <div class="col-md-6"><input class="form-control" name="bedrooms"  id="prop_beds" value="" placeholder="Enter number of bedrooms" type="number" min="1" max="99" >
                                     </div>
                                 </div>
                                 <div class="row mt-3">
                                     <div class="col-md-6">   <input class="form-control" name="bathrooms"  id="prop_beds" value="" placeholder="Enter number of bathrooms" type="number" min="1" max="99">
                                     </div>
                                     <div class="col-md-6">  <input class="form-control" name="area"  id="prop_beds" value="" placeholder="Enter property area size" type="text" >
                                     </div>
                                 </div>
                                 <div class="row mt-3">
                                   
                                     <div class="col-md-6">  <input class="form-control" name="year" type="number"  id="prop_beds" placeholder="Year Build YYYY" min="1999" max="3000">
                                     </div>
                                     <div class="col-md-6">
                                     
                                     <select class="form-control" name="electricity">
                                         <option disabled selected value="" >Electricity</option>
                                        <option value="No">No</option>
                                        <option value="Single User Prepaid meter">Single User Prepaid meter</option>
                                        <option value="Shared Prepaid meter">Shared Prepaid meter</option>
                                        <option value="Shared PostPaid Meter">Shared PostPaid Meter</option>
                                        <option value="Other">Other</option>
                                        </select>
                                    
                                    </div>
                                     
                                 </div>
                                 <div class="row mt-3">
                                     <div class="col-md-6">
                                          <select class="form-control" name="car_parking">
                                              <option value="" selected disabled>Car packing Space</option>
                                        <option value="No">No</option>
                                        <option value="1-3 Cars Secured">1-3 Cars Secured</option>
                                        <option value="1-3 Cars Unsecured">1-3 Cars Unsecured</option>
                                         <option value="1-5 Cars Secured">1-5 Cars Secured</option>
                                        <option value="1-5 Cars Unsecured">1-5 Cars Unsecured</option>
                                        <option value="Above 5 Cars Secured">Above 5 Cars Secured</option>
                                        <option value="Above 5  Cars Unsecured">Above 5  Cars Unsecured</option>
                                         <option value="Road Side Parking">Road Side Parking </option>
                                        <option value="Oustide House Parking">Oustide House Parking </option>
                                        <option value="Other">Other</option>
                                      </select> </div>
                                     <div class="col-md-6">
                                        <select name="water" class="form-control">
                                            <option value="" disabled selected>Water </option>
                                            <option value="No">No</option>
                                            <option value="Mechanize Borehole">Mechanize Borehole</option>
                                            <option value="Ghana Water">Ghana Water</option>
                                            <option value="Manual Well">Manual Well</option>
                                            <option value="Connected to all rooms and payed monthly">Connected to all rooms and payed monthly</option>
                                            <option value="Not connected pay as you fetch">Not connected pay as you fetch</option>
                                            <option value="Not Connected">Not Connected</option>
                                            <option value="Fetch From Outside">Fetch From Outside </option>
                                            <option value="Polytank provided by landlord for storage of water">Polytank provided by landlord for storage of water</option>
                                            <option value="Available space for polytank to be instored optionally">Available space for polytank to be instored optionally</option>
                                            <option value="Other">Other</option>
                                          </select>  
                                    
                                    </div>
                                    
                                 </div>


                                 <div class="row mt-3">
                                     <div class="col-md-6">
                                     <select name="bathroom_type" class="form-control">
                                         <option value="" selected disabled> Bathroom Type</option>
                                    <option value="No">No</option>
                                    <option value="Built Bathroom">Built Bathroom</option>
                                    <option value="Non Roof Structer">Non Roof Structer</option>
                                    <option value="Shared">Shared</option>
                                        <option value="Self Contained">Self Contained</option>
                                        <option value="Use of Public Bathroom">Use of Public Bathroom</option>
                                        <option value="Other">Other</option>
                                    </select> </div>
                                    
                                     <div class="col-md-6">
                                     <select name="toilet" class="form-control">
                                         <option value="" selected disabled>Toilet</option>
                                        <option value="No">No</option>
                                        <option value="Water Closet">Water Closet</option>
                                        <option value="Shared ">Shared </option>
                                        <option value="Traditional">Traditional</option>
                                        <option value="Self Conatined">Self Conatined</option>
                                        <option value="Use of Public Toilet">Use of Public Toilet</option>
                                        <option value="Other">Other</option>
                                        </select>  
                                    
                                    </div>
                                  
                                     
                                 </div>
                                
                                 <div class="row mt-3">
                                     <div class="col-md-6">
                                     
                                     <select name="security" class="form-control">
                                         <option value="" disabled selected>Security</option>
                                    <option value="No">No</option>
                                    <option value="Personal Security">Personal Security</option>
                                    <option value="Local Security Man Paid Monthly by Tenants">Local Security Man Paid Monthly by Tenants</option>
                                    <option value="Professional Security Company Paid Monthly by Tenants">Professional Security Company Paid Monthly by Tenants</option>
                                    <option value="Police Paid Monthly by Tenants">Police Paid Monthly by Tenants</option>
                                    <option value="Military Paid Monthly by Tenants">Military Paid Monthly by Tenants</option>
                                    <option value="Other">Other</option>
                                    </select>
                                                            
                                    </div>
                                     <div class="col-md-6">
                                     <select name="landlord_residential_status" class="form-control">
                                         <option value="" disabled selected>Landloard Residential Status</option>
                                    <option value="No">No</option>
                                    <option value="In the House">In the House</option>
                                    <option value="Outside the House">Outside the House</option>
                                    </select>
                                    
                                    </div>
                                     
                                 </div>
                                 <div class="row mt-3">
                                     <div class="col-md-6">
                                     
                                     <select class="form-control" name="waste_disposal">
                                    <option value="" selected disabled>Wast Disposal</option>
                                    <option value="Collected by Waste Disposal Company">Collected by Waste Disposal Company</option>
                                    <option value="No">No</option>
                                    <option value="Individual Waste Disposal">Individual Waste Disposal</option>
                                    <option value="Shared Waste Disposal">Shared Waste Disposal</option>
                                    <option value="Individual Burning Of Waste">Individual Burning Of Waste</option>
                                    <option value="Other">Other</option>
                                    </select>
                                    
                                    </div>
                                     <div class="col-md-6">
                                     <select name="compound_cleaning" class="form-control">
                                         <option value="" selected disabled>Compound Cleaning</option>
                                    <option value="No">None</option>
                                    <option value="External Cleaner Paid by the Tenants">External Cleaner Paid by the Tenants</option>
                                    <option value="Personal Cleaning by the Tenant">Personal Cleaning by the Tenant</option>
                                    <option value="Other">Other</option>
                                    </select> 
                                    
                                    </div>
                                     
                                 </div>

                                 <div class="row mt-3">
                                     <div class="col-md-6">
                                     
                                     <p>
                                        <h4>Is there special conditons? </h4>
                                    <input type="radio" id="yes" name="special_condition" value="Yes" class="input-option">
                                        <label for="yes">Yes</label>
                                        <input type="radio" id="no" name="condition" value="No" class="input-option">
                                        <label for="no">No</label>
                                    </p>
                                    
                                    </div>
                                    <div class="col-md-6">
                                     
                                     <select class="form-control" name="kitchen">
                                     <option value="" selected disabled>Kitchen type</option>
                                    <option value="No">No</option>
                                    <option value="Built Kitchen">Built Kitchen</option>
                                    <option value="Balcony/Coridor turned Kitchen">Balcony/Coridor turned Kitchen</option>
                                    <option value="Self Contained">Self Contained</option>
                                    <option value="Outside Cooking ">Outside Cooking </option>
                                    <option value="Shared">Shared</option>
                                    </select>
                                      </div>
                                     <div class="col-md-12">
                                     <textarea name="reason" type="text" class="form-control"placeholder="If yes state reason"></textarea> 
                                    
                                    </div>
                                     
                                 </div>

                                 
                             </div>
                             <div id="step-4">
                             <h5>features of Property</h5>
                                <div class="row">
                                    <div class="col-md-3"> <li class="card p-2">
                                       
                                           <label class="checkbox">
                                               <small> Air Conditioning</small>
                                                                <input name="check[]" type="checkbox" value="Air Conditioning" />
                                                                <span class="success"></span>
                                                            </label>
                                      </li> </div>
                                    <div class="col-md-3"><li class="card p-2">
                                        
                                           <label class="checkbox">
                                               <small>
                                                Garage
                                               </small>
                                                                <input name="check[]" type="checkbox"  value="Garage" />
                                                                <span class="success"></span>
                                                            </label>
                                      </li> </div>
                                    <div class="col-md-3"> <li class="card p-2">
                                       
                                           <label  class="checkbox">
                                               <small> Microwave</small>
                                                                <input name="check[]" type="checkbox" value="Microwave" />
                                                                <span class="success"></span>
                                                            </label>
                                      </li> </div>
                                    <div class="col-md-3">  <li class="card p-2">
                                       
                                           <label class="checkbox">
                                               <small> Swimming Pool</small>
                                                                <input name="check[]" type="checkbox" value="Swimming Pool" />
                                                                <span class="success"></span>
                                                            </label>
                                      </li> </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-3"> <li class="card p-2">
                                      
                                           <label class="checkbox">
                                               <small>  WiFi</small>
                                                                <input name="check[]" type="checkbox" value="WiFi" />
                                                                <span class="success"></span>
                                                            </label>
                                      </li> </div>
                                    <div class="col-md-3"> <li class="card p-2">
                                       
                                           <label class="checkbox">
                                               <small> Barbeque</small>
                                                                <input name="check[]" type="checkbox" value="Barbeque" />
                                                                <span class="success"></span>
                                                            </label>
                                      </li> </div>
                                    <div class="col-md-3"> <li class="card p-2">
                                        
                                           <label class="checkbox">
                                               <small>Gym</small>
                                                                <input name="check[]" type="checkbox" value="Gym" />
                                                                <span class="success"></span>
                                                            </label>
                                      </li> </div>
                                    <div class="col-md-3">  <li class="card p-2">
                                       
                                           <label class="checkbox">
                                               <small> Outdoor Shower</small>
                                                                <input name="check[]" type="checkbox" value="Outdoor Shower" />
                                                                <span class="success"></span>
                                                            </label>
                                      </li> </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-3">   <li class="card p-2">
                                       
                                           <label class="checkbox">
                                               <small> Toilet</small>
                                                                <input name="check[]" type="checkbox" value="Toilet" />
                                                                <span class="success"></span>
                                                            </label>
                                      </li> </div>
                                      
                                    <div class="col-md-3">
                                        <li class="card p-2">
                                        
                                        <label class="checkbox">
                                            <small>Window Coverings</small>
                                                             <input name="check[]" type="checkbox" value="Window Coverings" />
                                                             <span class="success"></span>
                                                         </label>
                                   </li> </div>
                                    <div class="col-md-3">  <li class="card p-2">
                                        
                                           <label class="checkbox">
                                               <small>Bathroom</small>
                                                                <input name="check[]" type="checkbox" value="Bathroom" />
                                                                <span class="success"></span>
                                                            </label>
                                      </li> </div>
                                    <div class="col-md-3"> 
                                        <li class="card p-2">
                                           
                                               <label class="checkbox">
                                                   <small> Laundry</small>
                                                                    <input name="check[]" type="checkbox" value="Laundry" />
                                                                    <span class="success"></span>
                                                                </label>
                                          </li>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-3"> <li class="card p-2">
                                        
                                           <label class="checkbox">
                                               <small>Refrigerator</small>
                                                                <input name="check[]" type="checkbox" value="Refrigerator" />
                                                                <span class="success"></span>
                                                            </label>
                                      </li> </div>
                                    <div class="col-md-3"> <li class="card p-2">
                                       
                                            <label class="checkbox">
                                                <small> TV Cable</small>
                                                                 <input name="check[]" type="checkbox" value="TV Cable" />
                                                                 <span class="success"></span>
                                                             </label>
                                       </li> </div>
                                    <div class="col-md-3"> <li class="card p-2">
                                        
                                           <label class="checkbox">
                                               <small>Dryer</small>
                                                                <input name="check[]" type="checkbox" value="Dryer" />
                                                                <span class="success"></span>
                                                            </label>
                                      </li> </div>
                                    <div class="col-md-3">  <li class="card p-2">
                                        
                                            <label class="checkbox">
                                                <small>Lawn</small>
                                                                 <input name="check[]" type="checkbox" value="Lawn" />
                                                                 <span class="success"></span>
                                                             </label>
                                       </li> </div>
                                    <div class="col-md-3">  <li class="card p-2">
                                        
                                           <label class="checkbox mt-2">
                                               <small>Sauna</small>
                                                                <input name="check[]" type="checkbox" value="Sauna" />
                                                                <span class="success"></span>
                                                            </label>
                                      </li> </div>
                                    <div class="col-md-3 mt-2"> <li class="card p-2">
                                        
                                           <label class="checkbox">
                                               <small>Washer</small>
                                                                <input name="check[]" type="checkbox" value="Washer" />
                                                                <span class="success"></span>
                                                            </label>
                                      </li> </div>
                                </div>
                            </div>
                     <div id="step-5">
                 <div >
                                  
          <div id="locationField1">
      <input
        id="autocomplete1"
        placeholder="Enter your address"
        onFocus="geolocate()"
        type="text"
        class="form-control"
        name="address"
      />
    </div>
    <div id="address" class="form-group">
      <div class="mt-2">
      
      <input class=" form-control" placeholder="Street address" id="street_number1"  />
       
      
      </div>
      <div class="mt-2">
      
      <input class=" form-control" placeholder="City" id="locality1" name="city" />
      
      </div>
        
    
     
        
         <div class="mt-2">
         <input
            class=" form-control"
            id="administrative_area_level_1"
         
            placeholder="State"
            name="region"
          />
         
         </div>
        

      
      <div class="mt-2">
      
      <input class=" form-control" placeholder="Zip code" id="postal_code1"  />
        
      </div>
        
        <div class="mt-2">
        <input class=" form-control" id="country" placeholder="Country" name="country"  />
        </div>
       
    </div>
              </div>
                            </div>
                            <div id="step-6">
                            
                                
                            <div class="row mt-3">
                                     <div class="col-md-12"> 
                                     </div>
                                         <input type="text" name="property_video" class="form-control" placeholder="Property Video Link" >
                                         </div>
                                         <label for="main_photo">main imag</label>
                                <div class="needsclick dropzone" id="main_photo-dropzone">
                                main Image
                                </div>
                                <label for="gallery">Property Gallery</label>
                                <div class="needsclick dropzone" id="gallery-dropzone">

                                </div>
                                                    
                                 </div>
                               
                            </div>
                             <div id="step-7" class="">
                                 <div class="row">
                                    <div class="col-md-12"> <span><input class="listing-btn" value="submit Prperty gallary" type="submit"></span> </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     
                    </form>
                 </div>
            

@endsection
@section('scripts')
<script>
    Dropzone.options.mainPhotoDropzone = {
    url: '{{ route('rent.storeMedia') }}',
    maxFilesize: 5, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 40960,
      height: 40960
    },
    success: function (file, response) {
      $('form').find('input[name="main_photo"]').remove()
      $('form').append('<input type="hidden" name="main_photo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="main_photo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($propertyRent) && $propertyRent->main_photo)
      var file = {!! json_encode($propertyRent->main_photo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, '{{ $propertyRent->main_photo->getUrl('thumb') }}')
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="main_photo" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
<script>
    var uploadedGalleryMap = {}
Dropzone.options.galleryDropzone = {
    url: '{{ route('rent.storeMedia') }}',
    maxFilesize: 5, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 40960,
      height: 40960
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="gallery[]" value="' + response.name + '">')
      uploadedGalleryMap[file.name] = response.name
    },
    removedfile: function (file) {
      console.log(file)
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedGalleryMap[file.name]
      }
      $('form').find('input[name="gallery[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($propertyRent) && $propertyRent->gallery)
      var files =
        {!! json_encode($propertyRent->gallery) !!}
          for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          this.options.thumbnail.call(this, file, file.url)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="gallery[]" value="' + file.file_name + '">')
        }
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
@stop