@extends('layouts.frontend') 
@section('content')
    <!-- Login -->
    <section class="container" style="padding: 120px 0px 120px 0px;">
            <div class="row justify-content-center">
                
                <div class="col-sm-3 col-lg-3"></div>
              <div class="col-sm-6 col-lg-6">
                  <div class="panel panel-primary">
                      <div class="panel-heading">
                          <h3 class="panel-title">Client Login</h3>
                        </div>
                        <div class="panel-body">
                          <div class="row">
                          <!-- Form -->
                            <form class="g-py-15" action="{{ route('login') }}" method="post">
                                @csrf
                            <div class="col-6">
                              
                            </div>
                            <div class="col-6">

                            </div>
                              
                            </form>
                            <!-- End Form -->
                          </div>
                        </div>
                  </div>
              </div>
              <div class="col-sm-3 col-lg-3"></div>
            </div>
          </section>
          <!-- End Login -->
@endsection