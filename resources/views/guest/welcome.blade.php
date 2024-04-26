<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Kuchai Motor Sdn Bhd </title>
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

  <style>
    .skiptranslate {
      display: none !important;
    }

    body {
      top: 0px !important;
    }

    #google_translate_element {
      display: none !important;
    }
  </style>
</head>

<body class="page-home">


  <div class="page-wrapper">
    @include('guest.layouts.navbar')

    <main class="page-main">
      <div class="section-hero">
        <div data-uk-slideshow="autoplay: true; min-height: 560; max-height: 950; animation: fade">
          <div class="uk-position-relative" tabindex="-1">
            <ul class="uk-slideshow-items" style="background-color: black">

            <li class="slideshow-item"><img src="{{asset('frontend/img/img-home-slideshow-3.jpg')}}" alt data-uk-cover>
                <div class="uk-position-center uk-position-small">
                    <div class="uk-container">
                    <div class="uk-grid" data-uk-grid>
                        <div class="uk-width-3-5@m">
                        <div class="slideshow-item__content">
                            {{-- <div class="slideshow-item__decor" data-uk-slideshow-parallax="opacity: 0,1">Kuchai Motor</div> --}}
                            <div class="slideshow-item__title" data-uk-slideshow-parallax="x: 100,-100"><span>Taking rides
                                to a newer level</span>
                            <div class="uk-h2">Elevate Your Ride with Kuchai Motor</div>
                            </div>
                            <div class="slideshow-item__desc" data-uk-slideshow-parallax="x: 200,-200">
                            <p>Discover the sleek, modern design of Kuchai Motor. Perfect blend of style and performance for the discerning rider.</p>
                            </div>
                            <div class="slideshow-item__btns" data-uk-slideshow-parallax="x: 300,-300">
                                <a
                                class="uk-button uk-button-danger" href="{{route('new.motors')}}">Browse Motorbikes </a>
                            </div>
                        </div>
                        </div>
                        <div class="uk-width-2-5@m uk-visible@l"></div>
                    </div>
                    </div>
                </div>
            </li>

              <li class="slideshow-item">
                <img src="{{asset('frontend/img/img-home-slideshow.jpg')}}" alt data-uk-cover>
                <div class="uk-position-center uk-position-small">
                  <div class="uk-container">
                    <div class="uk-grid" data-uk-grid>
                      <div class="uk-width-3-5@m">
                        <div class="slideshow-item__content">
                          {{-- <div class="slideshow-item__decor" data-uk-slideshow-parallax="opacity: 0,1">KUCHAI MOTOR</div> --}}
                          <div class="slideshow-item__title" data-uk-slideshow-parallax="x: 100,-100"><span>Taking rides
                              to a newer level</span>
                            <div class="uk-h2">Unleash Power with KUCHAI MOTOR</div>
                          </div>
                          <div class="slideshow-item__desc" data-uk-slideshow-parallax="x: 200,-200">
                            <p>Experience the fusion of power and perfection. KUCHAI MOTOR brings unparalleled performance to every ride.</p>
                          </div>
                          <div class="slideshow-item__btns" data-uk-slideshow-parallax="x: 300,-300">
                            <a
                            class="uk-button uk-button-danger" href="{{route('new.motors')}}">Browse Motorbikes </a>
                            </div>
                        </div>
                      </div>
                      <div class="uk-width-2-5@m uk-visible@l"></div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="slideshow-item"><img src="{{asset('frontend/img/img-home-slideshow-2.jpg')}}" alt data-uk-cover>
                <div class="uk-position-center uk-position-small">
                  <div class="uk-container">
                    <div class="uk-grid" data-uk-grid>
                      <div class="uk-width-2-5@m uk-visible@l"></div>
                      <div class="uk-width-3-5@m">
                        <div class="slideshow-item__content">
                          {{-- <div class="slideshow-item__decor" data-uk-slideshow-parallax="opacity: 0,1">KeyMoto</div> --}}
                          <div class="slideshow-item__title" data-uk-slideshow-parallax="x: 100,-100"><span>Taking rides
                              to a newer level</span>
                            <div class="uk-h2">Trust Your Journey with Kuchai Motor</div>
                          </div>
                          <div class="slideshow-item__desc" data-uk-slideshow-parallax="x: 200,-200">
                            <p>Where reliability meets the road. Engineered for safety, designed for the journey ahead.</p>
                          </div>
                          <div class="slideshow-item__btns" data-uk-slideshow-parallax="x: 300,-300">
                            <a
                            class="uk-button uk-button-danger" href="{{route('new.motors')}}">Browse Motorbikes </a>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>

            </ul>
          </div>
          <div class="slideshow-nav"><a href="#" data-uk-slidenav-previous data-uk-slideshow-item="previous"></a>
            <div class="slideshow-nav__count">
              <ul>
                <li data-uk-slideshow-item="0"><span>1 </span></li>
                <li data-uk-slideshow-item="1"><span>2</span></li>
                <li data-uk-slideshow-item="2"><span>3</span></li>
              </ul><span>/ 3</span>
            </div><a href="#" data-uk-slidenav-next data-uk-slideshow-item="next"></a>
          </div>
        </div>
      </div>
      {{-- <div class="section-about" id="section-about">
        <div class="uk-section-large uk-container">
          <div class="uk-grid uk-grid-collapse" data-uk-grid>
            <div class="uk-width-1-3@m"><img class="section-about__img" src="assets/img/img-about.jpg" alt="img-about">
            </div>
            <div class="uk-width-2-3@m">
              <div class="section-about__content">
                <div class="section-title"> <span>Taking rides to a newer level</span>
                  <h3 class="uk-h2">Great performance<br> that matters in future</h3>
                </div>
                <div class="section-content">
                  <p>Dolore magna aliqua quis nostrud exercitation ullamco laboris nisi ut aliquip exa comads consequat
                    asuis aute irure dolor in reprehenderit in voluptate velit esse cilum dolore fugiat sed ipsum nulla
                    pariatur nostrul done elit magna.</p>
                  <div class="uk-margin-medium">
                    <div class="uk-grid uk-child-width-1-2@s" data-uk-grid>
                      <div>
                        <div class="block-icon">
                          <div class="block-icon__icon"><img class="block-icon__img" src="assets/img/icons/about-1.svg"
                              alt="icon-about"></div>
                          <div class="block-icon__desc">
                            <div class="block-icon__title">Cutting Edge Tech</div>
                            <div class="block-icon__text">Exercitation ullamco laboris nis exa duis aute irure dolor.
                            </div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="block-icon">
                          <div class="block-icon__icon"><img class="block-icon__img" src="assets/img/icons/about-2.svg"
                              alt="icon-about"></div>
                          <div class="block-icon__desc">
                            <div class="block-icon__title">Perfect Styling</div>
                            <div class="block-icon__text">Exercitation ullamco laboris nis exa duis aute irure dolor.
                            </div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="block-icon">
                          <div class="block-icon__icon"><img class="block-icon__img" src="assets/img/icons/about-3.svg"
                              alt="icon-about"></div>
                          <div class="block-icon__desc">
                            <div class="block-icon__title">Distinctive Beauty</div>
                            <div class="block-icon__text">Exercitation ullamco laboris nis exa duis aute irure dolor.
                            </div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="block-icon">
                          <div class="block-icon__icon"><img class="block-icon__img" src="assets/img/icons/about-4.svg"
                              alt="icon-about"></div>
                          <div class="block-icon__desc">
                            <div class="block-icon__title">Radiance Polishing </div>
                            <div class="block-icon__text">Exercitation ullamco laboris nis exa duis aute irure dolor.
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="section-about__gallery">
                    <div class="uk-grid uk-grid-small uk-child-width-1-2@s" data-uk-grid>
                      <div><img class="uk-width-1-1" src="assets/img/about-gallery-1.jpg" alt="about-gallery"></div>
                      <div><img class="uk-width-1-1" src="assets/img/about-gallery-2.jpg" alt="about-gallery"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
      {{-- <div class="section-category" id="section-category">
        <div class="uk-container uk-container-large">
          <div class="uk-position-relative" tabindex="-1" data-uk-slider>
            <ul
              class="uk-slider-items uk-grid uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l uk-child-width-1-5@xl">
              <li>
                <div class="category-item"><a class="category-item__link" href="page-shop-grid.html">
                    <div class="category-item__title"> <strong>Roadster</strong><span>Explore type</span></div>
                    <div class="category-item__icon"><img src="assets/img/icons/category-1.svg" alt="icon-category"
                        data-uk-svg></div>
                  </a></div>
              </li>
              <li>
                <div class="category-item"><a class="category-item__link" href="page-shop-grid.html">
                    <div class="category-item__title"> <strong>Sportbike</strong><span>Explore type</span></div>
                    <div class="category-item__icon"><img src="assets/img/icons/category-2.svg" alt="icon-category"
                        data-uk-svg></div>
                  </a></div>
              </li>
              <li>
                <div class="category-item"><a class="category-item__link" href="page-shop-grid.html">
                    <div class="category-item__title"> <strong>Chopper</strong><span>Explore type</span></div>
                    <div class="category-item__icon"><img src="assets/img/icons/category-3.svg" alt="icon-category"
                        data-uk-svg></div>
                  </a></div>
              </li>
              <li>
                <div class="category-item"><a class="category-item__link" href="page-shop-grid.html">
                    <div class="category-item__title"> <strong>Cruiser</strong><span>Explore type</span></div>
                    <div class="category-item__icon"><img src="assets/img/icons/category-4.svg" alt="icon-category"
                        data-uk-svg></div>
                  </a></div>
              </li>
              <li>
                <div class="category-item"><a class="category-item__link" href="page-shop-grid.html">
                    <div class="category-item__title"> <strong>Touring bike</strong><span>Explore type</span></div>
                    <div class="category-item__icon"><img src="assets/img/icons/category-5.svg" alt="icon-category"
                        data-uk-svg></div>
                  </a></div>
              </li>
            </ul>
            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-top"></ul>
          </div>
        </div>
      </div> --}}
      <div class="section-products">
        <div class="uk-section-large uk-container">
          <div class="section-title uk-text-center"><img src="assets/img/logo-dark.svg" alt=""><span>Taking rides to a
              newer level</span>
            <h3 class="uk-h2">Our Brand New Motorcycle</h3>
          </div>
          <div class="section-content">
            <div class="uk-text-center uk-margin-medium-bottom">

              <p>Dive into our selection and find the perfect match for your lifestyle, embodying excellence in
                engineering and design.</p>
            </div>
            <div class="uk-grid uk-grid-medium uk-child-width-1-3@l uk-child-width-1-2@s" data-uk-grid>


              @foreach ($motors as $motor)
              <!-- Display motorcycle details as before -->
              <div>
                <div class="product-item uk-transition-toggle">
                  <div class="product-item__head">
                    <div>
                      <div class="product-item__name"> <a href="{{ route('motor.show', $motor->id) }}">{{$motor->model}}
                        </a></div>
                      <div class="product-item__manufacturer">Powered by {{$motor->brand}}</div>
                      <div class="product-item__category">category: <a href="#!">Adventure</a></div>
                    </div>
                    <div>
                      <div class="product-item__price">{{$motor->pricing}}</div>
                    </div>
                  </div>
                  <div class="product-item__media uk-inline-clip uk-inline"><img
                      src="{{asset('storage/motor_covers/'. $motor->motor_cover_filename)}}" alt="HONDA CB500X ABS" /><a
                      class="uk-transition-fade" href="{{ route('motor.show', $motor->id) }}">
                      <div class="uk-overlay-cover uk-overlay-primary"></div>
                      <div class="uk-position-center"><span class="icon-cross"></span></div>
                    </a>
                    <div class="product-item__label">Featured</div><button class="product-item__whish btn-whish"><i
                        class="far fa-heart"></i></button>
                  </div>
                  <div class="product-item__info">
                    <ul class="list-info">
                      <li class="list-info-item">
                        <div class="list-info-item__title">Year</div>
                        <div class="list-info-item__value">{{$motor->manufacture_year}}</div>
                      </li>
                      <li class="list-info-item">
                        <div class="list-info-item__title">Colour</div>
                        <div class="list-info-item__value">{{$motor->colour}}</div>
                      </li>
                      <li class="list-info-item">
                        <div class="list-info-item__title">Make</div>
                        <div class="list-info-item__value">{{$motor->brand}}</div>
                      </li>
                    </ul>
                  </div>
                  <div class="product-item__specifications">
                    <ul class="specifications-list">
                      <li class="specifications-list-item">
                        <div class="specifications-list-item__icon">
                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
                            <path fill="gray"
                              d="M7 4v2h3v2H7l-2 2v3H3v-3H1v8h2v-3h2v3h3l2 2h8v-4h2v3h3V9h-3v3h-2V8h-6V6h3V4H7Z" />
                          </svg>
                        </div>
                        <div class="specifications-list-item__desc">
                          <div class="specifications-list-item__title">Engine type</div>
                          <div class="specifications-list-item__value">{{$motor->engine_type}}</div>
                        </div>
                      </li>
                      <li class="specifications-list-item">
                        <div class="specifications-list-item__icon">
                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
                            <g fill="none" fill-rule="evenodd">
                              <path
                                d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z" />
                              <path fill="gray"
                                d="M12 3a1 1 0 1 1 0 2h-1v1h2.764a2 2 0 0 1 .894.211l3.236 1.618A2 2 0 0 1 19 9.618V12h1v-1a1 1 0 1 1 2 0v4a1 1 0 1 1-2 0v-1h-1v1.5a2 2 0 0 1-.8 1.6l-3.333 2.5a2 2 0 0 1-1.2.4H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4V5H8a1 1 0 0 1 0-2h4Zm-.985 6.643a1 1 0 0 0-1.307.246l-.065.097l-1.491 2.484a1.01 1.01 0 0 0 .75 1.524l.116.006h1.216l-.591.986a1 1 0 0 0 1.649 1.125l.066-.096l1.49-2.485a1.01 1.01 0 0 0-.75-1.524L11.982 12h-1.216l.591-.985a1 1 0 0 0-.342-1.372Z" />
                            </g>
                          </svg>

                        </div>
                        <div class="specifications-list-item__desc">
                          <div class="specifications-list-item__title">Engine Power</div>
                          <div class="specifications-list-item__value">{{$motor->max_power}}</div>
                        </div>
                      </li>
                      <li class="specifications-list-item">
                        <div class="specifications-list-item__icon">
                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
                            <path fill="gray"
                              d="M12 15.5A3.5 3.5 0 0 1 8.5 12A3.5 3.5 0 0 1 12 8.5a3.5 3.5 0 0 1 3.5 3.5a3.5 3.5 0 0 1-3.5 3.5m7.43-2.53c.04-.32.07-.64.07-.97c0-.33-.03-.66-.07-1l2.11-1.63c.19-.15.24-.42.12-.64l-2-3.46c-.12-.22-.39-.31-.61-.22l-2.49 1c-.52-.39-1.06-.73-1.69-.98l-.37-2.65A.506.506 0 0 0 14 2h-4c-.25 0-.46.18-.5.42l-.37 2.65c-.63.25-1.17.59-1.69.98l-2.49-1c-.22-.09-.49 0-.61.22l-2 3.46c-.13.22-.07.49.12.64L4.57 11c-.04.34-.07.67-.07 1c0 .33.03.65.07.97l-2.11 1.66c-.19.15-.25.42-.12.64l2 3.46c.12.22.39.3.61.22l2.49-1.01c.52.4 1.06.74 1.69.99l.37 2.65c.04.24.25.42.5.42h4c.25 0 .46-.18.5-.42l.37-2.65c.63-.26 1.17-.59 1.69-.99l2.49 1.01c.22.08.49 0 .61-.22l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.66Z" />
                          </svg>
                        </div>
                        <div class="specifications-list-item__desc">
                          <div class="specifications-list-item__title">Displacement</div>
                          <div class="specifications-list-item__value">{{$motor->displacement}} cc</div>
                        </div>
                      </li>
                      <li class="specifications-list-item">
                        <div class="specifications-list-item__icon">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2">
                              <path
                                d="M17 17v4h1a2 2 0 1 0 0-4h-1zm0-6h1.5a1.5 1.5 0 0 0 0-3H17v5M3 5a2 2 0 1 0 4 0a2 2 0 1 0-4 0" />
                              <path d="M5 7v3a1 1 0 0 0 1 1h3v7a1 1 0 0 0 1 1h3m-4-8h4" />
                            </g>
                          </svg>
                        </div>
                        <div class="specifications-list-item__desc">
                          <div class="specifications-list-item__title">Transmission</div>
                          <div class="specifications-list-item__value">{{$motor->transmission}}</div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              @endforeach

            </div>
            <div class="uk-text-center uk-margin-medium-top">
                <a class="uk-button uk-button-danger" href="{{route('new.motors')}}">View all models</a></div>
          </div>
        </div>
      </div>

      {{-- <div class="section-video">
        <div class="video-block">
          <div class="video-info">
            <div class="video-info__title">The Powerful performance<br> With optimized balanced </div>
            <div class="video-info__subtitle">Adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore.
            </div>
            <div class="video-info__list-thumb">
              <ul>
                <li><img src="{{asset('frontend/img/img-video-thumb-1.jpg')}}" alt="img-video-thumb"></li>
                <li><img src="{{asset('frontend/img/img-video-thumb-2.jpg')}}" alt="img-video-thumb"></li>
                <li><img src="{{asset('frontend/img/img-video-thumb-3.jpg')}}" alt="img-video-thumb"></li>
              </ul>
            </div>
          </div>
          <div class="video-box" data-uk-lightbox="video-autoplay: true"><a
              href="https://www.youtube.com/watch?v=c2pz2mlSfXA" data-caption="YouTube"
              data-attrs="width: 1280; height: 720;">
              <div class="btn-play"><img src="{{asset('frontend/img/icons/play.png')}}" alt="play"><span>Play video</span></div>
            </a></div>
        </div>
      </div> --}}


      <div class="section-rental">
        <div class="uk-section uk-container">
          <div class="section-title uk-text-center"><img src="{{asset('frontend/img/logo-dark.svg')}}" alt=""><span>Taking rides to a
              newer level</span>
            <h3 class="uk-h2">Used Motorcycles</h3>
          </div>
          <div class="section-content">
            <div class="uk-text-center uk-margin-medium-bottom">
              {{-- <p>Dolore magna aliqua quis nostrud exercitation ullamco laboris nisi ut aliquip exa comds<br> consequat
                duis aute irure dolor repreh enderit in voluptate velit esse cilum.</p> --}}
            </div>
            <div data-uk-slider="autoplay:true">
                <div class="uk-position-relative" tabindex="-1">
                    <ul class="uk-slider-items uk-child-width-1-1">
                        @foreach ($usedMotors as $usedMotor)
                        <li>
                            <div class="rental-item">
                                <div class="uk-grid uk-grid-small uk-flex-middle" data-uk-grid>
                                    <div class="uk-width-3-5@m uk-flex-last@m">
                                        <div class="rental-item__img d-flex">
                                            <div class="text-right">
                                                <img src="{{ $usedMotor->motor_cover_url }}" alt="{{ $usedMotor->name }}" style="width: 450px; height: 350px; object-fit: cover;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-2-5@m uk-flex-first@m">
                                        <div class="rental-item__desc">
                                            <div class="rental-item__title" ><a href="{{ route('motor.show', $motor->id) }}"> {{ $usedMotor->model }} </a>
                                             </div>
                                            <div class="product-item__manufacturer">Powered by {{$usedMotor->brand}}</div>
                                            <!-- Assume you have price and other details in $usedMotor -->
                                            <div class="rental-item__price">
                                                <br><br>
                                                {{-- <div class="label">Rent for as low as</div> --}}
                                                <div class="price">{{$usedMotor->pricing}}</div>

                                                {{-- <div class="value"> <span>per </span><span>day</span></div> --}}


                                            </div>
                                            {{-- <div class="rental-item__text">{!!$usedMotor->description !! }}</div> --}}
                                            <!-- Specifications List -->
                                            <div class="rental-item__specifications">
                                                <ul class="specifications-list">
                                                    <li class="specifications-list-item">
                                                      <div class="specifications-list-item__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"><path fill="gray" d="M17.5 12a1.5 1.5 0 0 1-1.5-1.5A1.5 1.5 0 0 1 17.5 9a1.5 1.5 0 0 1 1.5 1.5a1.5 1.5 0 0 1-1.5 1.5m-3-4A1.5 1.5 0 0 1 13 6.5A1.5 1.5 0 0 1 14.5 5A1.5 1.5 0 0 1 16 6.5A1.5 1.5 0 0 1 14.5 8m-5 0A1.5 1.5 0 0 1 8 6.5A1.5 1.5 0 0 1 9.5 5A1.5 1.5 0 0 1 11 6.5A1.5 1.5 0 0 1 9.5 8m-3 4A1.5 1.5 0 0 1 5 10.5A1.5 1.5 0 0 1 6.5 9A1.5 1.5 0 0 1 8 10.5A1.5 1.5 0 0 1 6.5 12M12 3a9 9 0 0 0-9 9a9 9 0 0 0 9 9a1.5 1.5 0 0 0 1.5-1.5c0-.39-.15-.74-.39-1c-.23-.27-.38-.62-.38-1a1.5 1.5 0 0 1 1.5-1.5H16a5 5 0 0 0 5-5c0-4.42-4.03-8-9-8Z"/></svg>

                                                        </div>
                                                      <div class="specifications-list-item__desc">
                                                        <div class="specifications-list-item__title">Color</div>
                                                        <div class="specifications-list-item__value">{{$usedMotor->colour}} </div>
                                                      </div>
                                                    </li>
                                                    <li class="specifications-list-item">
                                                      <div class="specifications-list-item__icon">

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"><path fill="gray" d="M7 4v2h3v2H7l-2 2v3H3v-3H1v8h2v-3h2v3h3l2 2h8v-4h2v3h3V9h-3v3h-2V8h-6V6h3V4H7Z"/></svg>

                                                        </div>
                                                      <div class="specifications-list-item__desc">
                                                        <div class="specifications-list-item__title">Engine type</div>
                                                        <div class="specifications-list-item__value">{{$usedMotor->engine_type}}</div>
                                                      </div>
                                                    </li>
                                                    <li class="specifications-list-item">
                                                      <div class="specifications-list-item__icon">

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"><path fill="gray" d="M10.45 15.5q.625.625 1.575.588T13.4 15.4L19 7l-8.4 5.6q-.65.45-.712 1.362t.562 1.538ZM5.1 20q-.55 0-1.012-.238t-.738-.712q-.65-1.175-1-2.437T2 14q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 4q2.05 0 3.85.775T19 6.888q1.35 1.337 2.15 3.125t.825 3.837q.025 1.375-.312 2.688t-1.038 2.512q-.275.475-.737.713T18.874 20H5.1Z"/></svg>


                                                        </div>
                                                      <div class="specifications-list-item__desc">
                                                        <div class="specifications-list-item__title">Max Power</div>
                                                        <div class="specifications-list-item__value">{{$usedMotor->max_power}} </div>
                                                      </div>
                                                    </li>
                                                    <li class="specifications-list-item">
                                                      <div class="specifications-list-item__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 16 16"><g fill="gray"><path d="M3 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5z"/><path d="M1 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v8a2 2 0 0 1 2 2v.5a.5.5 0 0 0 1 0V8h-.5a.5.5 0 0 1-.5-.5V4.375a.5.5 0 0 1 .5-.5h1.495c-.011-.476-.053-.894-.201-1.222a.97.97 0 0 0-.394-.458c-.184-.11-.464-.195-.9-.195a.5.5 0 0 1 0-1c.564 0 1.034.11 1.412.336c.383.228.634.551.794.907c.295.655.294 1.465.294 2.081v3.175a.5.5 0 0 1-.5.501H15v4.5a1.5 1.5 0 0 1-3 0V12a1 1 0 0 0-1-1v4h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1zm9 0a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v13h8z"/></g></svg>


                                                        </div>
                                                      <div class="specifications-list-item__desc">
                                                        <div class="specifications-list-item__title">Fuel System</div>
                                                        <div class="specifications-list-item__value">{{$usedMotor->fuel_system}}</div>
                                                      </div>
                                                    </li>
                                                    <li class="specifications-list-item">
                                                      <div class="specifications-list-item__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M17 17v4h1a2 2 0 1 0 0-4h-1zm0-6h1.5a1.5 1.5 0 0 0 0-3H17v5M3 5a2 2 0 1 0 4 0a2 2 0 1 0-4 0"/><path d="M5 7v3a1 1 0 0 0 1 1h3v7a1 1 0 0 0 1 1h3m-4-8h4"/></g></svg>

                                                        </div>
                                                      <div class="specifications-list-item__desc">
                                                        <div class="specifications-list-item__title">Transmission</div>
                                                        <div class="specifications-list-item__value">{{$usedMotor->transmission}}</div>
                                                      </div>
                                                    </li>
                                                    <li class="specifications-list-item">
                                                      <div class="specifications-list-item__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"><path fill="gray" d="M3 2h3c.28 0 .53.11.71.29l2.08 2.09l.8-.79C10 3.2 10.5 3 11 3h6c.5 0 1 .2 1.41.59l1 1C19.8 5 20 5.5 20 6v13a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V8c0-.5.2-1 .59-1.41l.79-.8L5.59 4H3V2m8 3v2h6V5h-6m.41 6l-2-2H8v1.41l2 2v3.18l-2 2V19h1.41l2-2h3.18l2 2H18v-1.41l-2-2v-3.18l2-2V9h-1.41l-2 2h-3.18m.59 2h2v2h-2v-2Z"/></svg>

                                                        </div>
                                                      <div class="specifications-list-item__desc">
                                                        <div class="specifications-list-item__title">Fuel Capacity</div>
                                                        <div class="specifications-list-item__value">{{$usedMotor->ignition_system}}</div>
                                                      </div>
                                                    </li>
                                                  </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="slider-nav">
                    <a href="#" data-uk-slidenav-previous data-uk-slider-item="previous"></a>
                    <div class="slider-nav__count">
                        <ul>
                            @for ($i = 0; $i < count($usedMotors); $i++)
                            <li data-uk-slider-item="{{ $i }}"><span>{{ $i + 1 }}</span></li>
                            @endfor
                        </ul><span>/ {{ count($usedMotors) }}</span>
                    </div>
                    <a href="#" data-uk-slidenav-next data-uk-slider-item="next"></a>
                </div>

            </div>
          </div>

          <div class="uk-text-center uk-margin-medium-top">
            <a class="uk-button uk-button-danger" href="{{route('new.motors')}}">View all models</a></div>


        </div>

      </div>




      <div class="section-gallery">
        <div class="section-title uk-text-center"><img src="assets/img/logo-dark.svg" alt=""><span>Taking rides to a
            newer level</span>
          <h3 class="uk-h2">Gallery</h3>
        </div>

        <div class="uk-section uk-container uk-container-large">
          <div class="uk-grid uk-child-width-1-4@m uk-child-width-1-3@s" data-uk-grid data-uk-lightbox>
            <div>
              <div><a href="{{asset('frontend/img/gallery/gallery8.jpg')}}"><img class="uk-width-1-1"
                    src="{{asset('frontend/img/gallery/gallery8.jpg')}}" alt="img-gallery"></a></div>
            </div>
            <div>
              <div><a href="{{asset('frontend/img/gallery/gallery2.jpg')}}"><img class="uk-width-1-1"
                    src="{{asset('frontend/img/gallery/gallery2.jpg')}}" alt="img-gallery"></a></div>
            </div>
            <div>
              <div><a href="{{asset('frontend/img/gallery/gallery12.jpg')}}"><img class="uk-width-1-1"
                    src="{{asset('frontend/img/gallery/gallery12.jpg')}}" alt="img-gallery"></a></div>
            </div>
            <div>
              <div><a href="{{asset('frontend/img/gallery/gallery4.jpg')}}"><img class="uk-width-1-1"
                    src="{{asset('frontend/img/gallery/gallery4.jpg')}}" alt="img-gallery"></a></div>
            </div>
            <div>
              <div><a href="{{asset('frontend/img/gallery/gallery5.jpg')}}"><img class="uk-width-1-1"
                    src="{{asset('frontend/img/gallery/gallery5.jpg')}}" alt="img-gallery"></a></div>
            </div>
            <div>
              <div><a href="{{asset('frontend/img/gallery/gallery9.jpg')}}"><img class="uk-width-1-1"
                    src="{{asset('frontend/img/gallery/gallery9.jpg')}}" alt="img-gallery"></a></div>
            </div>
            <div>
              <div><a href="{{asset('frontend/img/gallery/gallery3.jpg')}}"><img class="uk-width-1-1"
                    src="{{asset('frontend/img/gallery/gallery3.jpg')}}" alt="img-gallery"></a></div>
            </div>
            <div>
              <div><a href="{{asset('frontend/img/gallery/gallery11.jpg')}}"><img class="uk-width-1-1"
                    src="{{asset('frontend/img/gallery/gallery11.jpg')}}" alt="img-gallery"></a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-reviews">
        <div class="section-title uk-text-center"><img src="assets/img/logo-dark.svg" alt=""><span>Taking rides to a
            newer level</span>
          <h3 class="uk-h2">Testimonials</h3>
        </div>
        <div class="uk-section uk-container uk-container-large">
          <div class="uk-grid uk-grid-collapse uk-flex-middle uk-child-width-1-2@m" data-uk-grid>
            <div class="uk-text-center"> <img src="{{asset('frontend/img/img-reviews.png')}}" alt="img-reviews"></div>
            <div>
              <div class="section-title"> <span>Taking rides to a newer level</span>
                <div class="uk-h2">What client are<br> talking about us</div>
              </div>
              <div class="section-content">
                <div class="reviews-vertical">
                  <div data-uk-slider="autoplay:true">
                    <div class="uk-position-relative" tabindex="-1">
                      <ul class="uk-slider-items uk-grid uk-child-width-1-1">
                        <li>
                          <div class="review-item">
                            <div class="review-item__desc">
                                <p>First time buy motor at Kuchai Motor ! Doesn’t know the process was so smooth with interchange car plate number as well. the boss, sales staff, cashier and runner are so helpful to get the things done within a day ! Strongly recommended !
                                </p>
                                </div>
                            <div class="review-item__user">
                              <div>
                                {{-- <div class="review-item__user-avatar"><img src="{{asset('frontend/img/img-review-thumb.jpg')}}"
                                    alt="John Martin"></div> --}}
                              </div>
                              <div>
                                <div class="review-item__user-name">Pangkal Majujaya</div>
                                <div class="review-item__user-position">Happy Customer</div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="review-item">
                            <div class="review-item__desc">
                                <p>Sooo much bike we can get here(almost all bike)with reliable price..and very nice and humble tauke.. Tq sifu rahman! </p>

                            </div>
                            <div class="review-item__user">
                              <div>
                                {{-- <div class="review-item__user-avatar"><img src="assets/img/img-review-thumb.jpg"
                                    alt="John Martin"></div> --}}
                              </div>
                              <div>
                                <div class="review-item__user-name">Syed Shahril81</div>
                                <div class="review-item__user-position">Happy Customer</div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="review-item">
                            <div class="review-item__desc">
                              <p>This place seller service is very nice and so friendly, they've sell many brand and type motorcycle and they've help people to register the motorcycle bank loan</p>
                              {{-- <img src="" alt=""> --}}
                            </div>
                            <div class="review-item__user">
                              {{-- <div>
                                <div class="review-item__user-avatar"><img src="assets/img/img-review-thumb.jpg"
                                    alt="John Martin"></div>
                              </div> --}}
                              <div>
                                <div class="review-item__user-name">Lee</div>
                                <div class="review-item__user-position">Happy Customer</div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <ul class="uk-slider-nav uk-dotnav uk-dotnav-vertical"></ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-brands">
        <div class="uk-section uk-container uk-container-large">
          <div data-uk-slider="autoplay:true">
            <div class="uk-position-relative" tabindex="-1">
              <ul
                class="uk-slider-items uk-grid uk-flex-middle uk-text-center uk-child-width-1-1 uk-child-width-1-3@s uk-child-width-1-5@m">
                <li><img src="{{asset('frontend/img/partnering/honda.png')}}" width="70%" alt="brand-logo"></li>
                <li><img src="{{asset('frontend/img/partnering/modenas.png')}}" width="80%" alt="brand-logo"></li>
                <li><img src="{{asset('frontend/img/partnering/kawasaki.png')}}" width="100%" alt="brand-logo"></li>
                <li><img src="{{asset('frontend/img/partnering/suzuki.png')}}" width="60%" alt="brand-logo"></li>
                <li><img src="{{asset('frontend/img/partnering/yamaha.png')}}" width="80%" alt="brand-logo"></li>
                <li><img src="{{asset('frontend/img/partnering/keeway.png')}}"  width="80%" alt="brand-logo"></li>
                <li><img src="{{asset('frontend/img/partnering/smsport.png')}}"  width="100%" alt="brand-logo"></li>
                <li><img src="{{asset('frontend/img/partnering/benelli.png')}}"  width="100%" alt="brand-logo"></li>
              </ul>
            </div>
            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
          </div>
        </div>
      </div>
    </main>

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
