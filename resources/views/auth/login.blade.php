
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Document</title>
</head>
<body class="mt-5">
  <!-- Login -->
  <section class="container-fluid k-bg-img" >
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
                          <div class="pl-30 ">
                            <button class="btn btn-md btn-info btn-block py-13" type="submit">LOGIN</button>
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
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
    
