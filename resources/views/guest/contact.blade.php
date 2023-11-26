<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Contact us</title>
  <meta content="Templines" name="author">
  <meta content="KeyMoto" name="description">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="HandheldFriendly" content="true">
  <meta name="format-detection" content="telephone=no">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="{{asset('frontend/css/uikit.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/slick.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/slick-theme.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/ion.rangeSlider.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
</head>

<body class="page-contacts">


  <div class="page-wrapper">

    @include('guest.layouts.navbar')


    <main class="page-main">
      <div class="section-hero">
        <div class="section-hero__bg" style="background-image: url(assets/img/bg/contacts.jpg)">
          <div class="uk-container">
            <div class="section-hero__content">
              <div class="section-hero__title"> <span>Taking rides to a newer level</span>
                <div class="uk-h1">Contact us</div>
              </div>
              <div class="section-hero__breadcrumb">
                <ul class="uk-breadcrumb">
                  <li><a href="#">Home</a></li>
                  <li><span>Contact us</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="contact-map"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3076.515310719304!2d-75.04652368429473!3d39.54798681593648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c72c312084a583%3A0xede8aadeaa53ed5f!2zNDIyNyBMYWtlIFJkLCBOZXdmaWVsZCwgTkogMDgzNDQsINCh0KjQkA!5e0!3m2!1sru!2sua!4v1608717865402!5m2!1sru!2sua"></iframe></div>
      <div class="page-content">
        <div class="uk-section-large uk-container">
          <div class="contact-info">
            <div class="contact-info-title">get in touch with us for buying or selling motorcycles. Also you can<br> take a test drive latest models from almost all brands. </div>
            <div class="uk-grid uk-grid-divider uk-child-width-1-4@m uk-child-width-1-2@s" data-uk-grid>
              <div>
                <div class="contact-info-item">
                  <div class="contact-info-item__icon"><img src="assets/img/icons/contact-icon-1.png" alt="contact-icon"></div>
                  <div class="contact-info-item__title">Schedule A Ride</div>
                  <div class="contact-info-item__value"> <a href="tel:17108796054">+1 (710) 879 6054</a></div>
                  <div class="contact-info-item__title">Buying or Selling</div>
                  <div class="contact-info-item__value"> <a href="tel:08004564040">0 (800) 456 4040</a></div>
                </div>
              </div>
              <div>
                <div class="contact-info-item">
                  <div class="contact-info-item__icon"><img src="assets/img/icons/contact-icon-2.png" alt="contact-icon"></div>
                  <div class="contact-info-item__title">Operating Hours</div>
                  <div class="contact-info-item__value">Mon - Fri 9.30am - 8pm</div>
                  <div class="contact-info-item__title">Operating Hours</div>
                  <div class="contact-info-item__value">Sat - Sun 10am - 7pm</div>
                </div>
              </div>
              <div>
                <div class="contact-info-item">
                  <div class="contact-info-item__icon"><img src="assets/img/icons/contact-icon-3.png" alt="contact-icon"></div>
                  <div class="contact-info-item__title">Reach us by email</div>
                  <div class="contact-info-item__value"> <a href="mailto:dealers@keymoto.com">dealers@keymoto.com</a></div>
                  <div class="contact-info-item__title">Customer Service</div>
                  <div class="contact-info-item__value"> <a href="mailto:m.cycle@domain.com">m.cycle@domain.com</a></div>
                </div>
              </div>
              <div>
                <div class="contact-info-item">
                  <div class="contact-info-item__icon"><img src="assets/img/icons/contact-icon-4.png" alt="contact-icon"></div>
                  <div class="contact-info-item__title">Showroom Address</div>
                  <div class="contact-info-item__value">4227 Lake Road, Surf<br> City, New Jersey<br> 36026 - USA</div>
                </div>
              </div>
            </div>
          </div>
          <div class="contact-form">
            <div class="section-title uk-text-center"><img src="assets/img/logo-dark.svg" alt=""><span>Taking rides to a newer level</span>
              <h3 class="uk-h2">send a message</h3>
            </div>
            <div class="section-content">
              <form action="#!">
                <div class="uk-grid uk-grid-small uk-child-width-1-3@s" data-uk-grid>
                  <div><input class="uk-input uk-form-large" type="text" placeholder="Your Name"></div>
                  <div><input class="uk-input uk-form-large" type="text" placeholder="Email"></div>
                  <div><input class="uk-input uk-form-large" type="text" placeholder="Subject"></div>
                  <div class="uk-width-1-1"><textarea class="uk-textarea uk-form-large" placeholder="Message"></textarea></div>
                  <div class="uk-margin-medium-top uk-width-1-1 uk-text-center"><button class="uk-button uk-button-danger uk-button-large" type="submit">Send message</button></div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>
    <div class="section-subscribe">
      <div class="uk-container">
        <div class="subscribe-box">
          <div class="uk-grid uk-flex-middle uk-child-width-1-2@m" data-uk-grid>
            <div>
              <div class="section-title"><span>Latest news and deals directly to your inbox</span>
                <div class="uk-h2">Subscribe for updated</div>
              </div>
            </div>
            <div>
              <div class="subscribe-box__form">
                <form action="#!">
                  <div class="uk-flex uk-flex-middle"><input class="uk-input" type="email" name="email" placeholder="Email Address ...."><button class="uk-button uk-button-danger" type="submit">Subscribe</button></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @include('guest.layouts.footer')


  </div>
  <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/js/uikit.min.js')}}"></script>
  <script src="{{asset('frontend/js/uikit-icons.min.js')}}"></script>
  <script src="{{asset('frontend/js/fontawesome.all.min.js')}}"></script>
  <script src="{{asset('frontend/js/slick.min.js')}}"></script>
  <script src="{{asset('frontend/js/ion.rangeSlider.min.js')}}"></script>
  <script src="{{asset('frontend/js/main.js')}}"></script>
</body>

</html>
