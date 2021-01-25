@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7 mx-auto">
            <div class="col-md-4 mt-n4 mx-auto">
                <img
                        src="{{ asset('assets/images/logo/brand_new_logo.png') }}"
                        alt="brand_new_logo"
                        class="img-fluid rounded"
                        title="Brand New Logo"
                    ><br></br>
            </div>
        </div>
        <div class="col-md-6 mt-n4">
            <div class="">
                <!-- <h5 class="card-header bg-primary font-weight-bold text-white">{{ __('Register') }}</h5> -->

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="John Doe">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone_number" type="tel" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>

                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="johndoe@sutike.id">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
<!-- 
                        <div class="form-group row mb-0 text-center">
                            <div class="col-md-9 offset-md-1">
                                <button type="submit" class="btn btn-primary col-md-3 offset-md-1">
                                    {{ __('Register') }}
                                </button>
                                 <label class="col-md-4">
                                 Have an Account?
                                </label>
                                <a class="btn btn-primary col-md-3" href="{{ route('login') }}">
                                        {{ __('Login') }}
                                </a>
                            </div>
                        </div> -->
                        <div class="form-group row mb-0 justify-content-center">
                            <div class="col-md-11 text-center">
                                <button type="submit" class="btn btn-primary col-md-7 mb-1">
                                    {{ __('Register') }}
                                </button>   
                                 <label class="col-md-9 text-center">
                                 Have an Account?
                                </label>
                                <a class="btn btn-primary col-md-7" href="{{ route('login') }}">
                                        {{ __('Login') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>  
        </div>
    </div>
</div>
@endsection

{{-- @section('js')
<script src="{{ asset('js/intlTelInput/intlTelInput.js') }}"></script>
<script>
    $(document).ready(function() {
        const input = document.querySelector('#phone_number');

        window.intlTelInput(input, {
            allowDropdown: true,
            separateDialCode: true,
            autoPlaceholder: "off",
            hiddenInput: "phone",
            initialCountry: "id",
            preferredCountries: ['id'],
            utilsScript: "js/utils.js",
        });
    });
</script>
@endsection --}}
