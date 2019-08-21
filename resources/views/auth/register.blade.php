@extends('layouts.frontend') 
@section('content')

<body class="hold-transition register-page">
<!-- Signup -->
<section class="container g-py-100">
    <div class="row justify-content-center">
      <div class="col-sm-10 col-md-9 col-lg-6">
        <div class="g-brd-around g-brd-gray-light-v4 g-bg-black-opacity-0_4 rounded g-py-40 g-px-30">
          <header class="text-center mb-4">
            <h2 class="h2 g-color-primary g-font-weight-600">Signup</h2>
          </header>

          <!-- Form -->
          <form class="g-py-15" action="{{ route('register') }}" method="post">
            @csrf
            <div class="row">
              <div class="col-xs-12 col-sm-6 mb-4">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text g-width-45 g-brd-right-none g-brd-gray-light-v4 g-color-gray-dark-v5"><i class="icon-finance-067 g-color-white u-line-icon-pro"></i></span>
                  </div>
                  <input id="name" name="name" type="text" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover g-py-15 g-px-15 {{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" placeholder="Your name" required autofocus>
                  @if ($errors->has('name'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <div class="col-xs-12 col-sm-6 mb-4">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text g-width-45 g-brd-right-none g-brd-gray-light-v4 g-color-gray-dark-v5"><i class="icon-finance-067 g-color-white u-line-icon-pro"></i></span>
                  </div>
                  <input id="lastname" name="lastname" type="text"  class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover g-py-15 g-px-15 {{ $errors->has('lastname') ? ' is-invalid' : '' }}" value="{{ old('lastname') }}" placeholder="Your lastname" required>
                  @if ($errors->has('lastname'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('lastname') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
            </div>

            <div class="mb-4">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text g-width-45 g-brd-right-none g-brd-gray-light-v4 g-color-gray-dark-v5"><i class="icon-communication-062 g-color-white u-line-icon-pro"></i></span>
                </div>
                <input id="email" type="email" name="email" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover g-py-15 g-px-15 {{ $errors->has('name') ? ' is-invalid' : '' }}"  value="{{ old('email') }}" placeholder="johndoe@gmail.com" required>
                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12 col-sm-6 mb-4">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text g-width-45 g-brd-right-none g-brd-gray-light-v4 g-color-gray-dark-v5"><i class="icon-media-094 g-color-white u-line-icon-pro"></i></span>
                  </div>
                  <input id="password" type="password" name="password" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover g-py-15 g-px-15 {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="********" required>
                  @if ($errors->has('password'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <div class="col-xs-12 col-sm-6 mb-4">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text g-width-45 g-brd-right-none g-brd-gray-light-v4 g-color-gray-dark-v5"><i class="icon-media-094 g-color-white u-line-icon-pro"></i></span>
                  </div>
                  <input id="password-confirm" type="password" name="password_confirmation" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover g-py-15 g-px-15" placeholder="********" required>
                  @if ($errors->has('password'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row justify-content-between mb-5">
              <div class="col-8 align-self-center g-color-white">
                <label class="form-check-inline u-check g-font-size-13 g-pl-25">
                  <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                  <div class="u-check-icon-checkbox-v6 g-color-white g-absolute-centered--y g-left-0">
                    <i class="fa g-rounded-2 g-color-white" data-check-icon="&#xf00c"></i>
                  </div>
                  I accept the <a href="#!">Terms and Conditions</a>
                </label>
              </div>
              <div class="col-4 align-self-center text-right">
                <button class="btn btn-md u-btn-primary g-py-13 g-px-25" type="submit">Signup</button>
              </div>
            </div>
          </form>
          <!-- End Form -->
          <footer class="text-center">
            <p class="g-color-white g-font-size-13 mb-0">Already have an account? <a class="g-font-weight-600" href="{{route('login')}}">signin</a>
            </p>
          </footer>
        </div>
      </div>
    </div>
  </section>
  <!-- End Signup -->

<!---------------------------------------------------------------------------------------------------->
       
@endsection