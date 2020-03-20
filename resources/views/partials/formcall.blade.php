<!------ Banner FORM ---->
<div class="conteiner-fluid g-bg-black-opacity-0_8">
    <div class="row">
      <div class="col-sm-6  text-center">
        <h2 class="g-color-primary text-uppercase pt-3 pb-4">request a free consultation</h2>
          <form class="" action="/formcall" method="post" id="contactForm" >
            @csrf
            <div class="row pl-3 pr-3">
            <div class="form-group col-md-6 {{ $errors->has('name') ? 'has-error' : '' }}">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
                <span class="text-danger">{{ $errors->first('name') }}</span>
            </div>
            <div class="form-group col-md-6 {{ $errors->has('email') ? 'has-error' : '' }}">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                <span class="text-danger">{{ $errors->first('email') }}</span>
            </div>
          </div>
          <div class="row pl-3 pr-3">
            <div class="form-group col-md-6">
                <input type="text" class="form-control {{ $errors->has('phone') ? 'has-error' : '' }}" id="phone" name="phone" placeholder="Phone number">
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                <span class="text-danger">{{ $errors->first('subject') }}</span>
            </div>
          </div>
            <div class="form-group col-md-12 {{ $errors->has('message') ? 'has-error' : '' }}">
                <textarea class="form-control" name="message" id="message" rows="10" placeholder="Message"></textarea>
                <span class="text-danger">{{ $errors->first('message') }}</span>
            </div>
            <div class="form-group col-md-12">
                <button type="submit" value="submit" class="btn g-bg-primary btn-xl form-control g-color-black text-uppercase font-weight-bold">submit now</button>
            </div>
        </form>
      </div>
      <div class="col-sm-6">
          <img class="image-responsive" src="img/contact-right.jpg" alt="">
        </div>
    </div>
  </div>
  <!------ END Banner FORM ---->