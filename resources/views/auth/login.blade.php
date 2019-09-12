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
                          <table border='0' cellspacing='0' cellpadding='0' align=center>
                            <tr id='cat'>
                            <tr> <td bgcolor='#f1f1f1' ><font face='verdana, arial, helvetica' size='2' align='center'>  &nbsp;Login ID  &nbsp; &nbsp;
                          </font></td> <td bgcolor='#f1f1f1' align='center'><font face='verdana, arial, helvetica' size='2' >
                          <input type ='text' class='bginput' name='accountId' ></font></td></tr>
                          
                          <tr> <td bgcolor='#ffffff' ><font face='verdana, arial, helvetica' size='2' align='center'>  &nbsp;Password  
                          </font></td> <td bgcolor='#ffffff' align='center'><font face='verdana, arial, helvetica' size='2' >
                          <input type ='password' class='bginput' name='password' ></font></td></tr>
                          
                          <tr> <td bgcolor='#f1f1f1' colspan='2' align='center'><font face='verdana, arial, helvetica' size='2' align='center'>  
                          <input type='submit' value='Submit'> <input type='reset' value='Reset'>
                          </font></td> </tr>
                          
                          
                          <tr> <td bgcolor='#ffffff' ><font face='verdana, arial, helvetica' size='2' align='center'> &nbsp;<a href='signup.php'>New Member Sign UP</a></font></td> <td bgcolor='#ffffff' align='center'><font face='verdana, arial, helvetica' size='2' ><a href=forgot-password.php>
                          Forgot Password</a> ?</font></td></tr>
                          
                          <tr> <td bgcolor='#f1f1f1' colspan='2' align='center'><font face='verdana, arial, helvetica' size='2' align='center'>  
                          &nbsp;</font></td> </tr>
                          
                          
                          </table></center></form>
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