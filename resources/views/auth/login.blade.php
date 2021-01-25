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
                <!-- <h5 class="card-header bg-primary font-weight-bold text-white">
                {{ __('Login') }}
                </h5> -->

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-11 text-center">
                                <button type="submit" class="btn btn-primary col-md-7">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link text-right" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                            <!-- <div class="col-md-8 offset-md-4">
                                <label class="col-md-7 text-md-right">You Don't Have an Account?</label>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div> -->
                           
                        <!-- </div>
                        
                         <div class="form-group row mb-0">
                            <hr></hr>
                            <div class="col-md-8 offset-md-3">
                                <label class="col-form-label col-md-8 text-md-left">
                                Don't Have an Account?
                                </label>
                                 <a class="btn btn-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
                            <div>
                            
                         <div> -->
                        </form>
                </div>
                
            </div>
            <hr class="col-md-8 mt-n3 ml-5">
            <div class="">
                <div class="card-body mt-n3">
                <div class="form-group row">
                    <div class="col-md-11 text-center">
                        <label class="col-md-8">
                        Don't Have an Account?
                        </label>
                        
                        <a class="btn btn-primary col-md-7" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </div>
                    
                </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
