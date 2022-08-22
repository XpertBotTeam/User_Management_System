@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top:5%;filter: drop-shadow(0rem 0rem 0.8rem #3490dc);">
                <div class="card-header" style="text-align: center;color:#3490dc;font-size:1.4rem;font-weight:700">{{ __('Let Me In') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" style="font-family: Arial, Helvetica, sans-serif;" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" style="filter: drop-shadow(0rem 0rem 0.1rem #3490dc);" placeholder="example@gmail.com" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" style="font-family: Arial, Helvetica, sans-serif;" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" style="filter: drop-shadow(0rem 0rem 0.1rem #3490dc);" placeholder="XXXXXXX" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

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

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <button class="btn btn-secondary ml-2">
                                    <a style="text-decoration: none;color:white" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </button>
                                @endif
                            </div>

                            
                            <div style="width: 15%;height:1px;position:absolute;background-color:#3490dc;margin-top:10%;margin-left:36%">

                            </div>
                            <i style="position:absolute ;margin-top:7.9%;margin-left:54.5%">Or</i>
                            <div style="width: 15%;height:1px;position:absolute;background-color:#3490dc;margin-top:10%;margin-left:62%">

                            </div>

                            <a href="{{ route('google.login') }}" class="btn btn-danger btn-block" style="margin: auto; width:43%;margin-left:36%;margin-top:8%;"><i class="fa fa-google"></i> Sign in with <b>Google</b></a>
                        </div>
                        <br>
                        <div>
                            <span style="color:red;margin-left: 54%;">Don't Have an account? <a href="{{ route('register') }}"> Register here</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection