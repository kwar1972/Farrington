@extends('layouts.frontend') 
@section('content')
    <!-- Login -->
    <section class="container g-py-150">
            <div class="row justify-content-center">
                <div class="col-sm-4 col-lg-4"></div>
              <div class="col-sm-4 col-lg-4">
                <div class="g-brd-around g-brd-gray-light-v4 g-bg-black-opacity-0_4 rounded g-py-40 g-px-30">
                  <header class="text-center mb-4">
                    <h2 class="h2 g-color-primary g-font-weight-600"><p class="login-box-msg">{{ __('Login') }}</p></h2>
                  </header>
      
                  <!-- Form -->
                  <form class="g-py-15" action="{{ route('login') }}" method="post">
                        @csrf
                    <div class="mb-4">
                      <div class="input-group g-brd-primary--focus pl-5">
                        <div class="input-group-prepend">
                          <span class="input-group-text g-width-45 g-brd-right-none g-brd-gray-light-v4 g-color-gray-dark-v5"><i class="icon-finance-067 u-line-icon-pro g-color-white"></i></span>
                        </div>
                        <input id="email" name="email" type="email" class="form-control g-color-black g-bg-white g-brd-gray-light-v4 g-py-15 g-px-15 {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="Email" required autofocus>
                        <div class="input-group-append">
                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif 
                        </div>
                      </div>
                    </div>
                    <div class="g-mb-35">
                      <div class="input-group g-brd-primary--focus mb-4 pl-5">
                        <div class="input-group-prepend">
                          <span class="input-group-text g-width-45 g-brd-right-none g-brd-gray-light-v4 g-color-gray-dark-v5"><i class="icon-media-094 u-line-icon-pro g-color-white"></i></span>
                        </div>
                        <input id="password" name="password" type="password" class="form-control g-color-black g-bg-white g-brd-gray-light-v4 g-py-15 g-px-15{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password"  required>
                        <div class="input-group-append">
                          @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong></span>
                          @endif
                        </div>
                      </div>
      
                      <div class="row justify-content-between">
                        <div class="col align-self-center">
                          <label class="form-check-inline u-check g-font-size-12 g-pl-25 mb-0 g-color-white">
                            <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0 g-color-white" type="checkbox">
                            <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0 g-color-white">
                              <i class="fa g-rounded-2 g-color-white" data-check-icon="&#xf00c"></i>
                            </div>
                            Keep signed in
                          </label>
                        </div>
                        <div class="col align-self-center text-right">
                          <a class="g-font-size-12" href="#!">Forgot password?</a>
                        </div>
                      </div>
                    </div>
      
                    <div class="mb-4">
                      <button class="btn btn-md btn-block u-btn-primary g-py-13" type="submit">Login</button>
                    </div>
                  </form>
                  <!-- End Form -->
      
                  <footer class="text-center">
                    <p class="g-font-size-16 mb-0 g-color-white">Don't have an account? <a class="g-font-weight-600" href="/register">signup</a>
                    </p>
                  </footer>
                </div>
              </div>
              <div class="col-sm-4 col-lg-4"></div>
            </div>
          </section>
          <!-- End Login -->
@endsection