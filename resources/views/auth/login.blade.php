@extends('layouts.app')

@section('content')
<div class="cms">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">{{ __('Login') }}</div>
          
          <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
            @csrf

              <div class="form-group row">
                <label for="email"
                  class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                  <input id="email" type="email"
                    class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="password"
                class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

              <div class="col-md-6">
                <input id="password" type="password"
                  class="form-control @error('password') is-invalid @enderror" name="password"
                  required autocomplete="current-password">

              @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>

          <div class="form-group row mb-0 login">
            <div class="col-md-9 offset-md-1 card-bottom">
              <button type="submit" class="btn btn-primary card-bottom__button">
                {{ __('Login') }}
              </button>
              @if (Route::has('register'))
                <a class="btn btn-link card-bottom__link" href="{{ route('register') }}">{{ __('Register') }}</a>
              @endif
              <br>
              @if (Route::has('password.request'))
                <a class="btn btn-link card-bottom__link" href="{{ route('password.request') }}">
                  {{ __('Forgot Your Password?') }}
                </a>
              @endif
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
