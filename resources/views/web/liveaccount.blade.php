@extends('layouts.web.app') 
@section('content')
<div class="container-fluid g-pt-120">
    <header class="text-center g-width-60x--md mx-auto g-mb-60">
      <div class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
        <h2 class="h3 u-heading-v2__title g-color-gray-dark-v2 text-uppercase g-font-weight-600 text-uppercase">Live <span class="g-color-primary">Account</span></h2>
      </div>
      <p class="lead text-center"><span class="g-color-black">Fill out the application form below with your details to officially <span class="g-color-primary g-font-weight-600">start trading!</span></p>
    </header>
    <form action="liveacc" method="post">
        <div class="row g-px-100">
            <div class="col-sm-6">
                <h5 class="g-font-weight-600">Personal Details</h5>
                <div class="form-group">
                  <select class="form-control" name="title" id="title">
                    <option>Mr.</option>
                    <option>Ms.</option>
                    <option>Mrs.</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="text" name="name" id="name" class="form-control" placeholder="Type your name" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Type your lastname" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <input type="email" name="email" id="email" class="form-control" placeholder="Type your email" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <input type="phone" name="phone" id="phone" class="form-control" placeholder="Type your phone" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <div class="input-group g-brd-primary--focus">
                      <input id="datepickerDefault" class="form-control form-control-md u-datepicker-v1 g-brd-right-none rounded-0" type="text">
                      <div class="input-group-append">
                        <span class="input-group-text rounded-0 g-color-gray-dark-v5"><i class="icon-calendar"></i></span>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <h5 class="g-font-weight-600">Contact Details</h5>
                 <div class="form-group">
                  <input type="addr1" name="addr1" id="addr1" class="form-control" placeholder="Type your address" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for=""></label>
                  <select class="form-control" name="" id="">
                    <option></option>
                    <option></option>
                    <option></option>
                  </select>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection