@extends('layouts.web.app') 
@section('content')
<div class="container-fluid g-pt-120">
    <header class="text-center g-width-60x--md mx-auto g-mb-60">
      <div class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
        <h2 class="h3 u-heading-v2__title g-color-gray-dark-v2 text-uppercase g-font-weight-600 text-uppercase">Contact <span class="g-color-primary">Us</span></h2>
      </div>
      <p class="lead text-center"><span class="g-color-black">Feel Free to drop us a <span class="g-color-primary g-font-weight-600">Message!</span></p>
      <p class="text-justify">At <span class="g-color-primary">Steiner Greves</span> we pride ourselves in giving you the best possible service We operate in an industry built on trust. This can only be achieved through communication and experienced support. At <span class="g-color-primary">Steiner Greves</span> we prefer the hands on 24/7 approach, we are always available to assist with any and all problems, whether it be face to face or over the phone. If you are interested in knowing more about the services we offer. Our Account Executives are awaiting your call to discuss your existing financial background and help you make smart decisions that best meet your financial needs. Have questions about background screening? Our entire team receives specialized training regularly to ensure you’re receiving the best information possible. From basic questions, complex compliance inquiries, and investment advice we’re here to help!</p>
    </header>

    <form action="/contactform" method="post">
      @csrf
      <div class="row g-px-100">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
          <!-- Teal Alert -->
          @if(Session::has('success'))
          <div class="alert alert-dismissible fade show g-bg-teal g-color-white rounded-0" role="alert">
            <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          
            <div class="media">
              <span class="d-flex g-mr-10 g-mt-5">
                <i class="icon-check g-font-size-25"></i>
              </span>
              <span class="media-body align-self-center">
                The form has been successfully sent!
              </span>
            </div>
          </div>
          @endif
          <!-- End Teal Alert -->
        </div>
        <div class="col-sm-3"></div>
      </div>
        <div class="row g-px-100">
          <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="form-group">
                  <select class="form-control" name="title" id="title">
                    <option value="Mr">Mr.</option>
                    <option value="Ms">Ms.</option>
                    <option value="Mrs">Mrs.</option>
                  </select>
                </div>
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                  <input type="text" name="name" id="name" class="form-control" placeholder="Type your name" aria-describedby="helpId">
                  <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>
                <div class="form-group {{ $errors->has('surname') ? 'has-error' : '' }}">
                  <input type="text" name="surname" id="surname" class="form-control" placeholder="Type your surname" aria-describedby="helpId">
                  <span class="text-danger">{{ $errors->first('surname') }}</span>
                </div>
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                  <input type="email" name="email" id="email" class="form-control" placeholder="Type your email" aria-describedby="helpId">
                  <span class="text-danger">{{ $errors->first('email') }}</span>
                </div>
                <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                  <input type="phone" name="phone" id="phone" class="form-control" placeholder="Type your phone" aria-describedby="helpId">
                  <span class="text-danger">{{ $errors->first('phone') }}</span>
                </div>
                <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                  <textarea class="form-control" name="message" id="message" rows="3" placeholder="Message"></textarea>
                  <span class="text-danger">{{ $errors->first('message') }}</span>
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
        <div class="row">
                <div class="col-sm-12 text-center py-5">
                    <img src="img/ssl.png" alt="Steiner SSL" style="max-width: 135px;">
                    <p class="pb-2 g-font-weight-600">This page is secured by SSL certificate providing encryption of your registration data.</p>
                    <button type="submit" class="btn btn-xl btn-primary g-font-weight-700">SEND MESSAGE</button>
                </div>    
        </div>
    </form>
</div>
@include('partials.formcall') 
@endsection