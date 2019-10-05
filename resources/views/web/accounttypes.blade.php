@extends('layouts.web.app') 
@section('content')
<div class="container-fluid my-5 g-pt-120">
        <header class="text-center g-width-60x--md mx-auto g-mb-60">
            <div class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
              <h2 class="h3 u-heading-v2__title  g-color-black text-uppercase g-font-weight-600">Accounts Types</h2>
            </div>
        </header>
        <br>
  <div class="table-responsive g-px-15">
    <table class="table">
      <thead>
        <tr>
          <th class="g-hidden-md-down g-brd-none g-py-50">&nbsp;</th>
          <th class="text-center g-brd-bottom-none g-bg-primary g-valign-middle g-font-weight-400 g-py-50">
            <h3 class="g-font-weight-600 mb-15 g-color-white">BEGINNER</h3>
          </th>
          <th class="text-center g-brd-bottom-none g-bg-gray-dark-v2 g-valign-middle g-font-weight-400 g-py-50 mt-5" style="box-shadow: -2px 0px 40px -6px black;">
            <h3 class="g-font-weight-600 mb-15 g-color-primary">SILVER</h3>
          </th>
          <th class="text-center g-brd-bottom-none g-bg-primary g-valign-middle g-font-weight-400 g-py-50">
            <h3 class="g-font-weight-600 mb-15 g-color-white">GOLD</h3>
          </th>
          <th class="text-center g-brd-bottom-none g-bg-primary g-valign-middle g-font-weight-400 g-py-50">
            <h3 class="g-font-weight-600 mb-15 g-color-white">PLATINUM</h3>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr class="g-font-size-20">
          <td class="g-hidden-md-down g-py-30 g-bg-gray-light-v5">Minimum Deposit</td>
          <td class="text-center g-py-30 g-bg-gray-light-v5 g-color-black">250 USD
          </td>
          <td class="text-center g-py-30 g-bg-gray-dark-v2 g-color-white" style="box-shadow: -2px 0px 40px -6px black;">5,000 USD
          </td>
          <td class="text-center g-py-30 g-bg-gray-light-v5 g-color-black">20,000 USD
          </td>
          <td class="text-center g-py-30 g-bg-gray-light-v5 g-color-black">100,000 USD
          </td>
        </tr>
        <tr>
          <td class="g-hidden-md-down">Minimum Lot Size</td>
          <td class="text-center">
            <span class="d-block g-color-black">0.1</span>
          </td>
          <td class="text-center g-bg-gray-dark-v3 g-color-white" style="box-shadow: -2px 0px 40px -6px black;">
            <span class="d-block">0.1</span>
          </td>
          <td class="text-center">
            <span class="d-block g-color-black">0.1</span>
          </td>
          <td class="text-center">
            <span class="d-block g-color-black">0.1</span>
          </td>
        </tr>
        <tr>
          <td class="g-hidden-md-down g-bg-gray-light-v5">Spreads</td>
          <td class="text-center g-bg-gray-light-v5 g-color-black">Floating
          </td>
          <td class="text-center g-bg-gray-dark-v2 g-color-white" style="box-shadow: -2px 0px 40px -6px black;">Floating
          </td>
          <td class="text-center g-bg-gray-light-v5 g-color-black">Fixed
          </td>
          <td class="text-center g-bg-gray-light-v5 g-color-black">Fixed
          </td>
        </tr>
        <tr>
          <td class="g-hidden-md-down">Trading Platform</td>
          <td class="text-center g-color-black">Synapsis v2.0
          </td>
          <td class="text-center g-bg-gray-dark-v3 g-color-white" style="box-shadow: -2px 0px 40px -6px black;">Synapsis v2.0
          </td>
          <td class="text-center g-color-black">Synapsis v2.0
          </td>
          <td class="text-center g-color-black">Synapsis v2.0
          </td>
        </tr>
        <tr>
          <td class="g-hidden-md-down g-bg-gray-light-v5">Daily Analysis</td>
          <td class="text-center g-bg-gray-light-v5">
            <i class="g-color-primary icon-check"></i>
          </td>
          <td class="text-center g-bg-gray-dark-v2 g-color-white" style="box-shadow: -2px 0px 40px -6px black;">
            <i class="g-color-primary icon-check"></i>
          </td>
          <td class="text-center g-bg-gray-light-v5">
            <i class="g-color-primary icon-check"></i>
          </td>
          <td class="text-center g-bg-gray-light-v5">
            <i class="g-color-primary icon-check"></i>
          </td>
        </tr>
        <tr>
          <td class="g-hidden-md-down">Account Manager</td>
          <td class="text-center">
              <i class="g-color-primary icon-check"></i>
            </td>
            <td class="text-center g-bg-gray-dark-v3 g-color-white" style="box-shadow: -2px 0px 40px -6px black;">
              <i class="g-color-primary icon-check"></i>
            </td>
            <td class="text-center">
              <i class="g-color-primary icon-check"></i>
            </td>
            <td class="text-center">
              <i class="g-color-primary icon-check"></i>
            </td>
        </tr>
        <tr>
          <td class="g-hidden-md-down g-bg-gray-light-v5">Mobile Trading</td>
          <td class="text-center g-bg-gray-light-v5">
            <i class="g-color-primary icon-check"></i>
          </td>
          <td class="text-center g-bg-gray-dark-v2 g-color-white" style="box-shadow: -2px 0px 40px -6px black;">
            <i class="g-color-primary icon-check"></i>
          </td>
          <td class="text-center g-bg-gray-light-v5">
            <i class="g-color-primary icon-check"></i>
          </td>
          <td class="text-center g-bg-gray-light-v5">
            <i class="g-color-primary icon-check"></i>
          </td>
        </tr>
        <tr>
          <td class="g-hidden-md-down">24 Hour Support</td>
          <td class="text-center">
            <i class="g-color-primary icon-check"></i>
          </td>
          <td class="text-center g-bg-gray-dark-v3 g-color-white" style="box-shadow: -2px 0px 40px -6px black;">
            <i class="g-color-primary icon-check"></i>
          </td>
          <td class="text-center">
            <i class="g-color-primary icon-check"></i>
          </td>
          <td class="text-center">
            <i class="g-color-primary icon-check"></i>
          </td>
        </tr>
        <tr>
          <td class="g-hidden-md-down g-bg-gray-light-v5">Free Bank Wire</td>
          <td class="text-center g-bg-gray-light-v5">
            <i class="g-color-primary icon-check"></i>
          </td>
          <td class="text-center g-bg-gray-dark-v2 g-color-white" style="box-shadow: -2px 0px 40px -6px black;">
            <i class="g-color-primary icon-check"></i>
          </td>
          <td class="text-center g-bg-gray-light-v5">
            <i class="g-color-primary icon-check"></i>
          </td>
          <td class="text-center g-bg-gray-light-v5">
            <i class="g-color-primary icon-check"></i>
          </td>
        </tr>
        <tr>
          <td class="g-hidden-md-down g-bg-gray-dark-v3 g-color-white">&nbsp;</td>
          <td class="text-center g-bg-gray-dark-v2 g-color-white">
            <a href="#!" class="btn rounded-0 u-btn-outline-primary g-px-20 g-py-10">Purchase</a>
          </td>
          <td class="text-center g-bg-gray-dark-v3 g-color-white " style="box-shadow: -2px 0px 40px -6px black;">
            <a href="#!" class="btn rounded-0 g-color-white g-bg-primary g-color-primary g-bg-white--hover g-px-20 g-py-10">Purchase</a>
          </td>
          <td class="text-center g-bg-gray-dark-v2 g-color-white">
            <a href="#!" class="btn rounded-0 u-btn-outline-primary g-px-20 g-py-10">Purchase</a>
          </td>
          <td class="text-center g-bg-gray-dark-v3 g-color-white">
            <a href="#!" class="btn rounded-0 u-btn-outline-primary g-px-20 g-py-10">Purchase</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
 <!-- Call To Action -->
 <section class="g-bg-primary g-color-white g-pa-30" style="background-image: url(../../assets/img/bg/pattern5.png);">
  <div class="justify-content-md-center text-center">
    <div class="align-self-md-center">
      <p class="lead g-font-weight-400 g-mr-20--md g-mb-15 g-mb-0--md g-color-black g-font-weight-600">NOT A CLIENT? OPEN A TRADING ACCOUNT TODAY</p>
      <p class="g-color-black">Take advantage of our competitive trading Strategies</p>
    </div>
    <div class="align-self-md-center">
      <a class="btn btn-lg u-btn-black text-uppercase g-font-weight-600 g-font-size-12" target="_blank" href="#">Register</a>
      <a class="btn btn-lg u-btn-white text-uppercase g-font-weight-600 g-font-size-12" target="_blank" href="#">Account Types</a>
    </div>
  </div>
</section>
<!-- End Call To Action -->
@endsection
