@extends('layouts.web.app') 
@section('content')
    <!-- Login -->
    <section class="container-fluid k-bg-img" style="padding: 120px 0px 120px 0px;background-image: url(/img/header1.jpg);">
            <div class="row justify-content-center">
                
                <div class="col-sm-4 col-lg-4"></div>
              <div class="col-sm-4 col-lg-4">
                  <div class="panel">
                      <div class="panel-heading text-center">
                        <header class="text-center g-width-60x--md mx-auto g-mb-60">
                          <div class="u-heading-v2-3--bottom g-brd-black g-mb-20">
                            <h2 class="h3 u-heading-v2__title g-color-white text-uppercase g-font-weight-600 text-uppercase">Client <span class="g-color-black">Login</span></h2>
                          </div>
                        </header>
                        </div>
                        <div class="panel-body">
                          <!-- Form -->
                            <form class="g-py-15" action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="pb-5">
                                    <div class="input-group">
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
                                  <div class="pb-5">
                                    <div class="input-group mb-4">
                                      <input id="password" name="password" type="password" class="form-control g-color-black g-bg-white g-brd-gray-light-v4 g-py-15 g-px-15{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password"  required>
                                      <div class="input-group-append">
                                        @if ($errors->has('password'))
                                          <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('password') }}</strong></span>
                                        @endif
                                      </div>
                                    </div>
                                  </div>
                                  <div class="pl-30 pr-5">
                                    <button class="btn btn-md btn-block g-bg-primary g-color-black g-font-weight-600 g-py-13" type="submit">LOGIN</button>
                                  </div>
                            </form>
                            <!-- End Form -->
                        </div>
                  </div>
              </div>
              <div class="col-sm-4 col-lg-4"></div>
            </div>
          </section>
          <!-- End Login -->
@endsection