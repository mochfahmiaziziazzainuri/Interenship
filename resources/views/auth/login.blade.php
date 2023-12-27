@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border border-primary">
                <div class="card-header text-primary" align="center" style="font-family: 'Playfair Display', serif;font-weight: bolder;background-color: transparent;">{{ __('Login Admin Page') }}</div>

                <div class="card-body border-top border-primary">
                    <div class="row">
                        <div class="col-4"><img src="{{ asset('interenship/img/laravel.png') }}" alt="" class="img-thumbnail border-0"></div>
                        <div class="col-8"><form method="POST" action="{{ route('login') }}">
                        @csrf
                        <form action="">
                            <div class="mt-3">
                                <div class="mb-3 ">
                                    <div class="col-md-9">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('Email Address') }}"  class="align-self-center">
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="mb-3">
                                    <div class="col-md-9">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}"  class="align-self-center">
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                               <div class="row">
                                    <div class="col-md-7">
                                        <div class="mb-3">
                                            <div class="col-md-7">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                
                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="row mb-0">
                                            <div class="col-md-5">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Login') }}
                                                </button>
                
                                                {{-- @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                @endif --}}
                                            </div>
                                        </div>
                                    </div>
                               </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
