@extends('layouts.theme')


@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
<!-- End Google Tag Manager (noscript) -->


<!-- Contact section start -->
<div class="contact-section">
    <div class="container">
        <div class="login-box">
            <div class=" align-self-center pad-0">
                <div class="form-section clearfix">
                    <h3>Create Agent Account</h3>
                   
                    <div class="clearfix"></div>
                <form method="POST" action="{{route('agent.store')}}">
                        @csrf
                        <div class="form-group form-box">
                            <input id="first_name" type="text" class="input-text @error('first_name') is-invalid
                             @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus placeholder="First name">

                            @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group form-box">
                            <input id="last_name" type="text" class="input-text @error('last_name') is-invalid
                             @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="first_name" autofocus placeholder="Last name">

                            @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group form-box">
                            <input id="phone_number" type="number" class="input-text @error('phone_number') is-invalid @enderror" 
                            name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" placeholder="phone_number">

                            @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group form-box clearfix">
                            <input id="address" type="text" class="input-text
                             @error('address') is-invalid @enderror" name="address" required autocomplete="address" placeholder="Address">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group form-box clearfix">
                            <input id="gps_address" type="text" class="input-text
                             @error('gps_address') is-invalid @enderror" name="gps_address" required autocomplete="gps_address" placeholder="Gps Address">

                                @error('gps_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group form-box clearfix">
                            <input id="city" type="text" class="input-text
                             @error('city') is-invalid @enderror" name="city" required autocomplete="address" placeholder="city">

                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group form-box clearfix">
                            <input id="region" type="text" class="input-text
                             @error('region') is-invalid @enderror" name="region" required autocomplete="region" placeholder="region">

                                @error('region')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group form-box clearfix">
                            <input id="country" type="text" class="input-text
                             @error('country') is-invalid @enderror" name="country" required autocomplete="country" placeholder="country">

                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="main_photo">Id card</label>
                            <div class="needsclick dropzone" id="main_photo-dropzone">
                                <div class="dplay-tbl-cell"> <i class="fa fa-cloud-upload"></i>
                                    <h5><b>Choose Your Id Card to Upload</b></h5>
                                    <h6 class="mt-10 mb-70">Or Drop Your Id card Here</h6>
                                </div>
                            </div>
                        </div>
                       
                        <div class="form-group clearfix mb-0">
                            <button type="submit" class="btn-md btn-theme">
                              Create
                            </button>
                         
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</div>


@endsection

@section('scripts')

<script>
    Dropzone.options.mainPhotoDropzone = {
    url: '{{ route('agent.storeMedia') }}',
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
      $('form').find('input[name="id_card"]').remove()
      $('form').append('<input type="hidden" name="id_card" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="id_card"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($propertyRent) && $propertyRent->main_photo)
      var file = {!! json_encode($propertyRent->main_photo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, '{{ $agent->main_photo->getUrl('thumb') }}')
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="id_card" value="' + file.file_name + '">')
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
@stop
