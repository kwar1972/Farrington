@extends('layouts.frontend') 
@section('content')
    <!-- Login -->
    <section class="container" style="padding: 120px 0px 120px 0px;">
            <div class="row justify-content-center">
                
                <div class="col-sm-3 col-lg-3"></div>
              <div class="col-sm-6 col-lg-6">
                  <div class="alert g-bg-color-darkblue g-color-white" role="alert">
                    <div class="row">
                      <div class="col-sm-1">
                        <i class="fas fa-microphone" style="font-size: 36px;"></i>
                      </div>
                      <div class="col-sm-11">
                        <div class="row" style="font-size: 18px; font-weight: normal;">Welcome to Baxter & Grants client area!</div>
                        
                        <div class="row"  style="font-weight: 200;">We are pleased to announce our new trading platform for 2019/2020.</div>
                      </div>
                    </div>
                    
                  </div>
                  <div class="panel panel-primary">
                      <div class="panel-heading  g-bg-color-darkblue">
                          <h3 class="panel-title g-color-white">Client Login</h3>
                        </div>
                        <div class="panel-body">
                          <div class="row">
                          <!-- Form -->
                            <form class="g-py-15" action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="pb-5 pl-5 pr-5">
                                    <div class="input-group pl-5">
                                      <div class="input-group-addon">
                                        <span class="input-group-text"><i class="icon-finance-067 u-line-icon-pro g-color-darkblue"></i></span>
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
                                  <div class="pb-5 pl-5 pr-5">
                                    <div class="input-group mb-4 pl-5">
                                      <div class="input-group-addon">
                                        <span class="input-group-text g-width-45 g-brd-right-none g-brd-gray-light-v4 g-color-gray-dark-v5"><i class="icon-media-094 u-line-icon-pro g-color-darkblue"></i></span>
                                      </div>
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
                                    <button class="btn btn-md btn-block g-bg-color-darkblue g-color-white g-py-13" type="submit">Login</button>
                                  </div>
                              
                            </form>
                            <!-- End Form -->
                          </div>
                        </div>
                  </div>
              </div>
            </div>
          </section>
          <!-- End Login -->
@endsection