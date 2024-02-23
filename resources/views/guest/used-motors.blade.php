<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Used Motors</title>
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

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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

<body class="page-shop">


  <div class="page-wrapper">
    @include('guest.layouts.navbar')

    <main class="page-main">
      <div class="section-hero">
        <div class="section-hero__bg" style="background-image: url({{asset('frontend/img/bg/shop.jpg)')}}">
          <div class="uk-container">
            <div class="section-hero__content">
              <div class="section-hero__title"> <span>Taking rides to a newer level</span>
                <div class="uk-h1">Used Motor</div>
              </div>
              <div class="section-hero__breadcrumb">
                <ul class="uk-breadcrumb">
                  <li><a href="/">Home</a></li>
                  <li><span>Used Motor</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="page-content">
        <div class="uk-section-large uk-container">
          <div class="uk-grid" data-uk-grid>
            {{-- <div class="uk-width-1-3@m">
              <div class="js-filter-more filter-more">
                <div class="filter-more__desc">
                  <div class="uk-h4">Search options</div><span>Find your motorcycle</span>
                </div>
                <div class="filter-more__icon"><img src="assets/img/logo.svg" alt="logo"></div>
              </div>
              <aside class="sidebar js-filter-content">
                <div class="widjet widjet--filters">
                  <div class="widjet__content">
                    <div class="uk-grid uk-grid-small uk-child-width-1-2" data-uk-grid>
                      <div class="uk-width-1-1"><select class="uk-select uk-form-large" name="make">
                          <option value="">Select Make</option>
                          <option value="option-1">option-1</option>
                          <option value="option-2">option-2</option>
                        </select></div>
                      <div class="uk-width-1-1"><select class="uk-select uk-form-large" name="model">
                          <option value="">Select Model</option>
                          <option value="option-1">option-1</option>
                          <option value="option-2">option-2</option>
                        </select>
                    </div>
                      <div class="uk-width-1-1"><select class="uk-select uk-form-large" name="type">
                          <option value="">Select type</option>
                          <option value="option-1">option-1</option>
                          <option value="option-2">option-2</option>
                        </select></div>
                      <div><select class="uk-select uk-form-large" name="min">
                          <option value="">Min CC</option>
                          <option value="option-1">option-1</option>
                          <option value="option-2">option-2</option>
                        </select></div>
                      <div><select class="uk-select uk-form-large" name="max">
                          <option value="">Max CC</option>
                          <option value="option-1">option-1</option>
                          <option value="option-2">option-2</option>
                        </select></div>
                    </div>
                  </div>
                </div>
                <div class="widjet widjet--price">
                  <div class="widjet__title">
                    <div class="uk-h4">Price range</div><span>Choose your price</span>
                  </div>
                  <div class="widjet__content">
                    <div class="range-box"><input class="js-range-slider" id="range-price" type="text" name="price" value="">
                      <div class="range-box__desc"> <span>KM Range Selected: $</span><input id="range-price-from" type="text"><span>-</span><input id="range-price-to" type="text"></div>
                    </div>
                  </div>
                </div>
                <div class="widjet widjet--mileage">
                  <div class="widjet__title">
                    <div class="uk-h4">mileage range</div><span>Choose required mileage</span>
                  </div>
                  <div class="widjet__content">
                    <div class="range-box"><input class="js-range-slider" id="range-mileage" type="text" name="mileage" value="">
                      <div class="range-box__desc"> <span>KM Range Selected: </span><input id="range-mileage-from" type="text"><span>- </span><input id="range-mileage-to" type="text"></div>
                    </div>
                  </div>
                </div>
                <div class="widjet">
                  <div class="widjet__content">
                    <div class="uk-text-center"><button class="uk-button uk-button-danger" type="button">Apply filter</button><br><a class="uk-text-meta uk-margin-top" href="#!">Clear All Filters</a></div>
                  </div>
                </div>
              </aside>
            </div> --}}



            <div class="uk-width-3-3@m">




                <form method="POST" action="{{ route('motorcycle.search') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="uk-width-1-1">
                                <select class="uk-select uk-form-large" name="brand">
                                    <option value="">Select Brand</option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand }}">{{ $brand }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <button class="uk-button uk-button-danger" type="submit">Search Bikes</button>
                        </div>
                    </div>
                </form>



              <div class="sorting">

                {{-- <div class="sorting-left">
                  <div class="result-count">Your search returned <span>{{$usedMotors->count()}}</span> results.</div>
                </div>
                <div class="sorting-right"> <select class="uk-select" name="orderby">
                    <option value="popularity">Sort by popularity</option>
                    <option value="rating">Sort by average rating</option>
                    <option value="date" selected>Sort by newness</option>
                    <option value="price">Sort by price: low to high</option>
                    <option value="price-desc">Sort by price: high to low</option>
                  </select>
                  <button class="sorting-btn btn-list" type="button"><img src="assets/img/icons/list.svg" alt="list" data-uk-svg></button>
                    <button class="sorting-btn btn-grid is-active" type="button"><img src="assets/img/icons/grid.svg" alt="grid" data-uk-svg></button>

                </div> --}}
              </div>





              <div class="products-items uk-grid uk-child-width-1-3@s" data-uk-grid>


                @if (isset($results))
                    @foreach ($results as $motor)
                        <!-- Display motorcycle details as before -->
                        <div>
                            <div class="product-item uk-transition-toggle">
                              <div class="product-item__head">
                                <div>
                                  <div class="product-item__name"> <a href="{{ route('motor.show', $motor->id) }}">{{$motor->model}} </a></div>
                                  <div class="product-item__manufacturer">Powered by {{$motor->brand}}</div>
                                  <div class="product-item__category">category: <a href="#!">Adventure</a></div>
                                </div>
                                <div>
                                  <div class="product-item__price">{{$motor->pricing}}</div>
                                </div>
                              </div>
                              <div class="product-item__media uk-inline-clip uk-inline"><img src="{{asset('storage/motor_covers/'. $motor->motor_cover_filename)}}" alt="HONDA CB500X ABS" /><a class="uk-transition-fade" href="{{ route('motor.show', $motor->id) }}">
                                  <div class="uk-overlay-cover uk-overlay-primary"></div>
                                  <div class="uk-position-center"><span class="icon-cross"></span></div>
                                </a>
                                <div class="product-item__label">Featured</div><button class="product-item__whish btn-whish"><i class="far fa-heart"></i></button>
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"><path fill="gray" d="M7 4v2h3v2H7l-2 2v3H3v-3H1v8h2v-3h2v3h3l2 2h8v-4h2v3h3V9h-3v3h-2V8h-6V6h3V4H7Z"/></svg>
                                    </div>
                                    <div class="specifications-list-item__desc">
                                      <div class="specifications-list-item__title">Engine type</div>
                                      <div class="specifications-list-item__value">{{$motor->engine_type}}</div>
                                    </div>
                                  </li>
                                  <li class="specifications-list-item">
                                    <div class="specifications-list-item__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><path d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z"/><path fill="gray" d="M12 3a1 1 0 1 1 0 2h-1v1h2.764a2 2 0 0 1 .894.211l3.236 1.618A2 2 0 0 1 19 9.618V12h1v-1a1 1 0 1 1 2 0v4a1 1 0 1 1-2 0v-1h-1v1.5a2 2 0 0 1-.8 1.6l-3.333 2.5a2 2 0 0 1-1.2.4H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4V5H8a1 1 0 0 1 0-2h4Zm-.985 6.643a1 1 0 0 0-1.307.246l-.065.097l-1.491 2.484a1.01 1.01 0 0 0 .75 1.524l.116.006h1.216l-.591.986a1 1 0 0 0 1.649 1.125l.066-.096l1.49-2.485a1.01 1.01 0 0 0-.75-1.524L11.982 12h-1.216l.591-.985a1 1 0 0 0-.342-1.372Z"/></g></svg>

                                    </div>
                                    <div class="specifications-list-item__desc">
                                      <div class="specifications-list-item__title">Engine Power</div>
                                      <div class="specifications-list-item__value">{{$motor->max_power}}</div>
                                    </div>
                                  </li>
                                  <li class="specifications-list-item">
                                    <div class="specifications-list-item__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"><path fill="gray" d="M12 15.5A3.5 3.5 0 0 1 8.5 12A3.5 3.5 0 0 1 12 8.5a3.5 3.5 0 0 1 3.5 3.5a3.5 3.5 0 0 1-3.5 3.5m7.43-2.53c.04-.32.07-.64.07-.97c0-.33-.03-.66-.07-1l2.11-1.63c.19-.15.24-.42.12-.64l-2-3.46c-.12-.22-.39-.31-.61-.22l-2.49 1c-.52-.39-1.06-.73-1.69-.98l-.37-2.65A.506.506 0 0 0 14 2h-4c-.25 0-.46.18-.5.42l-.37 2.65c-.63.25-1.17.59-1.69.98l-2.49-1c-.22-.09-.49 0-.61.22l-2 3.46c-.13.22-.07.49.12.64L4.57 11c-.04.34-.07.67-.07 1c0 .33.03.65.07.97l-2.11 1.66c-.19.15-.25.42-.12.64l2 3.46c.12.22.39.3.61.22l2.49-1.01c.52.4 1.06.74 1.69.99l.37 2.65c.04.24.25.42.5.42h4c.25 0 .46-.18.5-.42l.37-2.65c.63-.26 1.17-.59 1.69-.99l2.49 1.01c.22.08.49 0 .61-.22l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.66Z"/></svg>
                                    </div>
                                    <div class="specifications-list-item__desc">
                                      <div class="specifications-list-item__title">Displacement</div>
                                      <div class="specifications-list-item__value">{{$motor->displacement}} cc</div>
                                    </div>
                                  </li>
                                  <li class="specifications-list-item">
                                    <div class="specifications-list-item__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M17 17v4h1a2 2 0 1 0 0-4h-1zm0-6h1.5a1.5 1.5 0 0 0 0-3H17v5M3 5a2 2 0 1 0 4 0a2 2 0 1 0-4 0"/><path d="M5 7v3a1 1 0 0 0 1 1h3v7a1 1 0 0 0 1 1h3m-4-8h4"/></g></svg>
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
                @else
                    @foreach ($usedMotors as $motor)
                        <!-- Display motorcycle details as before -->
                        <div>
                            <div class="product-item uk-transition-toggle">
                              <div class="product-item__head">
                                <div>
                                  <div class="product-item__name"> <a href="{{ route('motor.show', $motor->id) }}">{{$motor->model}} </a></div>
                                  <div class="product-item__manufacturer">Powered by {{$motor->brand}}</div>
                                  <div class="product-item__category">category: <a href="#!">Adventure</a></div>
                                </div>
                                <div>
                                  <div class="product-item__price">{{$motor->pricing}}</div>
                                </div>
                              </div>
                              <div class="product-item__media uk-inline-clip uk-inline"><img src="{{asset('storage/motor_covers/'. $motor->motor_cover_filename)}}" alt="HONDA CB500X ABS" /><a class="uk-transition-fade" href="{{ route('motor.show', $motor->id) }}">
                                  <div class="uk-overlay-cover uk-overlay-primary"></div>
                                  <div class="uk-position-center"><span class="icon-cross"></span></div>
                                </a>
                                <div class="product-item__label">Featured</div><button class="product-item__whish btn-whish"><i class="far fa-heart"></i></button>
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"><path fill="gray" d="M7 4v2h3v2H7l-2 2v3H3v-3H1v8h2v-3h2v3h3l2 2h8v-4h2v3h3V9h-3v3h-2V8h-6V6h3V4H7Z"/></svg>
                                    </div>
                                    <div class="specifications-list-item__desc">
                                      <div class="specifications-list-item__title">Engine type</div>
                                      <div class="specifications-list-item__value">{{$motor->engine_type}}</div>
                                    </div>
                                  </li>
                                  <li class="specifications-list-item">
                                    <div class="specifications-list-item__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><path d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z"/><path fill="gray" d="M12 3a1 1 0 1 1 0 2h-1v1h2.764a2 2 0 0 1 .894.211l3.236 1.618A2 2 0 0 1 19 9.618V12h1v-1a1 1 0 1 1 2 0v4a1 1 0 1 1-2 0v-1h-1v1.5a2 2 0 0 1-.8 1.6l-3.333 2.5a2 2 0 0 1-1.2.4H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4V5H8a1 1 0 0 1 0-2h4Zm-.985 6.643a1 1 0 0 0-1.307.246l-.065.097l-1.491 2.484a1.01 1.01 0 0 0 .75 1.524l.116.006h1.216l-.591.986a1 1 0 0 0 1.649 1.125l.066-.096l1.49-2.485a1.01 1.01 0 0 0-.75-1.524L11.982 12h-1.216l.591-.985a1 1 0 0 0-.342-1.372Z"/></g></svg>

                                    </div>
                                    <div class="specifications-list-item__desc">
                                      <div class="specifications-list-item__title">Engine Power</div>
                                      <div class="specifications-list-item__value">{{$motor->max_power}}</div>
                                    </div>
                                  </li>
                                  <li class="specifications-list-item">
                                    <div class="specifications-list-item__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"><path fill="gray" d="M12 15.5A3.5 3.5 0 0 1 8.5 12A3.5 3.5 0 0 1 12 8.5a3.5 3.5 0 0 1 3.5 3.5a3.5 3.5 0 0 1-3.5 3.5m7.43-2.53c.04-.32.07-.64.07-.97c0-.33-.03-.66-.07-1l2.11-1.63c.19-.15.24-.42.12-.64l-2-3.46c-.12-.22-.39-.31-.61-.22l-2.49 1c-.52-.39-1.06-.73-1.69-.98l-.37-2.65A.506.506 0 0 0 14 2h-4c-.25 0-.46.18-.5.42l-.37 2.65c-.63.25-1.17.59-1.69.98l-2.49-1c-.22-.09-.49 0-.61.22l-2 3.46c-.13.22-.07.49.12.64L4.57 11c-.04.34-.07.67-.07 1c0 .33.03.65.07.97l-2.11 1.66c-.19.15-.25.42-.12.64l2 3.46c.12.22.39.3.61.22l2.49-1.01c.52.4 1.06.74 1.69.99l.37 2.65c.04.24.25.42.5.42h4c.25 0 .46-.18.5-.42l.37-2.65c.63-.26 1.17-.59 1.69-.99l2.49 1.01c.22.08.49 0 .61-.22l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.66Z"/></svg>
                                    </div>
                                    <div class="specifications-list-item__desc">
                                      <div class="specifications-list-item__title">Displacement</div>
                                      <div class="specifications-list-item__value">{{$motor->displacement}} cc</div>
                                    </div>
                                  </li>
                                  <li class="specifications-list-item">
                                    <div class="specifications-list-item__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M17 17v4h1a2 2 0 1 0 0-4h-1zm0-6h1.5a1.5 1.5 0 0 0 0-3H17v5M3 5a2 2 0 1 0 4 0a2 2 0 1 0-4 0"/><path d="M5 7v3a1 1 0 0 0 1 1h3v7a1 1 0 0 0 1 1h3m-4-8h4"/></g></svg>
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
                @endif








              </div>



{{-- 
              <div class="uk-margin-large-top uk-text-center">
                <ul class="uk-pagination uk-flex-center">
                  <li><a href="#"><span data-uk-pagination-previous></span></a></li>
                  <li class="uk-active"><span>1</span></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#"><span data-uk-pagination-next></span></a></li>
                </ul>
              </div> --}}
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


  <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/js/uikit.min.js')}}"></script>
  <script src="{{asset('frontend/js/uikit-icons.min.js')}}"></script>
  <script src="{{asset('frontend/js/fontawesome.all.min.js')}}"></script>
  <script src="{{asset('frontend/js/slick.min.js')}}"></script>
  <script src="{{asset('frontend/js/ion.rangeSlider.min.js')}}"></script>
  <script src="{{asset('frontend/js/main.js')}}"></script>
</body>

</html>
