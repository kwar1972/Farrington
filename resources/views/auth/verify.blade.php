@extends('layouts.web.app') 
@section('content')
<section class="container" style="padding: 120px 0px 120px 0px;">
            <div class="row">
                <div class="col-sm-2 col-lg-2 aligncenter"></div>
                <div class="col-sm-8 col-lg-8">
                    <div class="pb-5  mt-5 aligncenter">
                        <b>Verify Your Email Address</b>
                    </div>
                
                    <div class=" aligncenter">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                A fresh verification link has been sent to your email address.
                            </div>
                        @endif
                            <p class="pb-5">Before proceeding, please check your email for a verification link. If you did not receive the email,</p>
                        
                         <a class="btn btn-success pt-2" href="{{ route('verification.resend') }}">click here to request another</a>.
                    </div>
                </div>
                <div class="col-sm-2 col-lg-2 aligncenter"></
            </div>
          </section>
@endsection


