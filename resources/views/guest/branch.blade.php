<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>News post</title>
  <meta content="Templines" name="author">
  <meta content="KeyMoto" name="description">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="HandheldFriendly" content="true">
  <meta name="format-detection" content="telephone=no">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <link rel="shortcut icon" href="{{asset('frontend/images/favicon.png" type="image/x-icon')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/uikit.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/slick.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/slick-theme.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/ion.rangeSlider.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
</head>

<body class="page-article">


  <div class="page-wrapper">

    @include('guest.layouts.navbar')


    <main class="page-main">
      <div class="section-hero">
        <div class="section-hero__bg" style="background-image: url({{asset('frontend//img/img-home-slideshow.jpg)')}}">
          <div class="uk-container">
            <div class="section-hero__content">
              <div class="section-hero__title"> <span>Taking rides to a newer level</span>
                <div class="uk-h1">Branch</div>
              </div>
              <div class="section-hero__breadcrumb">
                <ul class="uk-breadcrumb">
                  <li><a href="#">Home</a></li>
                  <li> <span>Branch</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="page-content">
        <div class="uk-section-large uk-container">
          <div class="uk-grid" data-uk-grid>
            <div class="uk-width-3-3@m">





    <article class="article-full">


                  <p>Dolor sit amet, consectetur adipiscing elit. Ut sed bibendum leo. Mauris mau massa, eleifend et <a href="/">purus vel feugiat rutrum</a> . Cras vitae est vel ipsum fau bus fermentum a ultricies urna cum sociis.</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Ut sed bibendum leo. Mauris ma massa eleifend et purus vel feugiat rutrum nulla cras vitae est vel ipsum faucibus ferme aultricies urna cum sociis natoque penatibus.</p>




                  <p>Famur sit amet consectetur adipiscing elit ut sed bibenum leo. Mauris mauris as sa eleifend et purus vel feugiat rutrum nulla.</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Ut sed bibendum leo mauris massa, eleifend et purus vel, feugiat rutrum nulla cras vitae est vel ipsum faucibus ferm aultricies urna dum sociis natoque penatibus et magnis.</p>


                  <ul class="list list-mark-1">
                      <li>Phasellus sit amet velit auctor turpis rhoncus.</li>
                      <li>Phasellus sed dolor sodales eleifend ipsum eu.</li>
                      <li>Nullam id dolor in ex eleifend tempus.</li>
                      <li>Etiam id lorem vel neque faucibus fermentum.</li>
                      <li>Nunc tincidunt augue in enim sollicitudin feugiat.</li>
                  </ul>



                  <p>Dolor sit amet, consectetur adipiscing elit. Ut sed bibendum leo. Mauris mau massa, eleifend et purus vel feugiat rutrum nulla. Cras vitae est vel ipsum fau bus fermentum a ultricies urna cum sociis.</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Ut sed bibendum leo. Mauris ma massa eleifend et purus vel feugiat rutrum nulla cras vitae est vel ipsum faucibus ferme aultricies urna cum sociis natoque penatibus.</p>

                  <p>Famur sit amet consectetur adipiscing elit ut sed bibenum leo. Mauris mauris as sa eleifend et purus vel feugiat rutrum nulla.</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Ut sed bibendum leo mauris massa, eleifend et purus vel, feugiat rutrum nulla cras vitae est vel ipsum faucibus ferm aultricies urna dum sociis natoque penatibus et magnis.</p>

                  <h1>H1. heading</h1>
                  <h2>H2. heading</h2>
                  <h3>H3. heading</h3>
                  <h4>H4. heading</h4>
                  <h5>H5. heading</h5>
                  <h6>H6. heading</h6>


              </article>

            </div>


          </div>
        </div>
      </div>
    </main>
    {{-- <div class="section-subscribe">
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
    </div> --}}
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
