<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Motor</title>
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

    .image-full {
        width: 100%; /* Adjust the width as needed */
        height: 100%; /* Maintain aspect ratio */
        display: block; /* Remove extra space below the image */
    }


    .skiptranslate {
      display: none !important;
    }

    body {
      top: 0px !important;
    }

    #google_translate_element {
      display: none !important;
    }

    .modal-icons {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .modal-icons svg {
      font-size: 30px;
      cursor: pointer;
      margin-right: 20px; /* Adjust the margin to create a gap between icons */
    }
  </style>

  <style>
    .sidebar {
    position: sticky;
    top: 20px; /* Adjust the distance from the top as needed */
}
  </style>
</head>

<body class="page-shop">


  <div class="page-wrapper">
    @include('guest.layouts.navbar')

    <main class="page-main">
      <div class="section-hero">
        <div class="section-hero__bg" style="background-image: url({{asset('frontend/img/bg/product.jpg')}})">
          <div class="uk-container">
            <div class="section-hero__content">
              <div class="section-hero__title">
                <div class="uk-h1">{{$motor->brand}}</div>
              </div>
              <div class="section-hero__breadcrumb">
                <ul class="uk-breadcrumb">
                  <li><a href="#">Home</a></li>

                  <li> <span>{{$motor->brand}}</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="page-content">
        <div class="uk-section-large uk-container">
          <div class="page-product">
            <div class="uk-grid uk-flex-middle" data-uk-grid>


              <div class="uk-width-2-3@m">
                <div class="page-product__title">
                  <div class="uk-h1">{{$motor->model}}</div><span>Always Pushing To Full Limits For A Great Riding Experience!</span>
                </div>
              </div>
              <div class="uk-width-1-3@m">
                <div class="page-product__price">
                {{-- <button class="share-button" style="">
                    <i class="fas fa-share-alt"></i>
                </button> --}}


                <div class="page-product__right">
                    <div class="page-product__btns">
                        <button class="danger" type="button" id="shareMotorBtn">Share Motor</button>
                        <div id="shareMotorDropdown" class="dropdown-content" style="display:none;">

                            <a href="" id="fb_share">Facebook</a>
                            <a href="whatsapp://send?text={{url()->current()}}" >Whatsapp</a>
                            {{-- <a href="#" id="fb_share">Tiktok</a> --}}
                        </div>
                    </div>


                    <div class="price-info">
                        <span class="current">{{$motor->pricing}}</span>
                        <div class="uk-margin-small-top">
                            <span>Included Taxes & Checkup*</span>
                        </div>
                    </div>
                </div>

                <style>

                    .page-product__right {
                        display: flex;
                        flex-direction: column;
                        align-items: flex-end;
                        padding-right: 20px; /* Adjust as needed */
                    }

                    .page-product__btns {
                        margin-bottom: 10px; /* Space between buttons and price info */
                    }

                    /* Button with Downward Arrow */
                    #shareMotorBtn:after {
                        content: ' ▼ ';
                        font-size: 12px; /* Adjust size as needed */
                    }


                    /* Dropdown Content/Box */
                    .dropdown-content {
                        display: none;
                        position: absolute;
                        background-color: #f9f9f9;
                        min-width: 160px; /* Adjust width as needed */
                        box-shadow: 0 8px 16px rgba(0,0,0,0.2);
                        z-index: 1;
                        border-radius: 4px; /* Rounded corners */
                        overflow: hidden; /* Ensures the rounded corners */
                    }

                    /* Dropdown Links */
                    .dropdown-content a {
                        color: black;
                        padding: 12px 16px;
                        text-decoration: none;
                        display: block;
                        text-align: center; /* Center align text */
                        transition: background-color 0.2s; /* Smooth background transition */
                    }

                    /* Change color of dropdown links on hover */
                    .dropdown-content a:hover {
                        background-color: #f1f1f1;
                    }

                    /* Optional: Clear floats if needed */
                    .clearfix::after {
                        content: "";
                        clear: both;
                        display: table;
                    }



                </style>



              </div>
            </div>
            <div class="uk-grid" data-uk-grid>
              <div class="uk-width-2-3@m">
                <div class="page-product__btns">
                    {{-- <button class="danger" type="button"><i class="fas fa-star"></i><span>Save to fav</span></button>
                    <button class="secondary" type="button"><i class="fas fa-columns"></i><span>Add to compare</span></button> --}}
                    {{-- <button type="button"><i class="fas fa-motorcycle"></i><span>schedule test drive</span></button> --}}
                    {{-- <button type="button"><i class="fas fa-envelope"></i><span>email friend</span></button> --}}

                </div>
                <div class="page-product__gallery">
                  <div data-uk-slideshow="min-height: 300; max-height: 430">
                    <ul class="uk-slideshow-items uk-child-width-1-1">


                      <li>
                        <img class="image-full" src="{{$motor->motor_cover_url}}" alt="Motor Image" style="border-radius: 2%" >
                    </li>

                      @foreach ($motorImages as $motorImage)
                        <li><img class="uk-width-1-1" src="{{$motorImage->url}}" alt="{{$motor->name}}" data-uk-cover></li>
                      @endforeach

                    </ul>
                    <div class="uk-margin-top" data-uk-slider>
                      <ul class="uk-thumbnav uk-slider-items uk-grid uk-grid-small uk-child-width-1-3 uk-child-width-1-4@m uk-child-width-1-5@l">
                        <li data-uk-slideshow-item="0"><a href="#"><img src="{{$motor->motor_cover_url}}" alt="img-gallery"></a></li>

                        @foreach ($motorImages as $motorImage)
                            <li data-uk-slideshow-item="{{ $loop->iteration }}"><a href="#"><img src="{{$motorImage->url}}" alt="img-gallery"></a></li>
                        @endforeach

                      </ul>
                    </div>
                  </div>
                </div>
                <div class="page-product__list-info">
                  <div class="product-list-info">
                    <div>
                      <div class="product-list-info-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 1024 1024"><path fill="gray" d="m960 95.888l-256.224.001V32.113c0-17.68-14.32-32-32-32s-32 14.32-32 32v63.76h-256v-63.76c0-17.68-14.32-32-32-32s-32 14.32-32 32v63.76H64c-35.344 0-64 28.656-64 64v800c0 35.343 28.656 64 64 64h896c35.344 0 64-28.657 64-64v-800c0-35.329-28.656-63.985-64-63.985zm0 863.985H64v-800h255.776v32.24c0 17.679 14.32 32 32 32s32-14.321 32-32v-32.224h256v32.24c0 17.68 14.32 32 32 32s32-14.32 32-32v-32.24H960v799.984zM736 511.888h64c17.664 0 32-14.336 32-32v-64c0-17.664-14.336-32-32-32h-64c-17.664 0-32 14.336-32 32v64c0 17.664 14.336 32 32 32zm0 255.984h64c17.664 0 32-14.32 32-32v-64c0-17.664-14.336-32-32-32h-64c-17.664 0-32 14.336-32 32v64c0 17.696 14.336 32 32 32zm-192-128h-64c-17.664 0-32 14.336-32 32v64c0 17.68 14.336 32 32 32h64c17.664 0 32-14.32 32-32v-64c0-17.648-14.336-32-32-32zm0-255.984h-64c-17.664 0-32 14.336-32 32v64c0 17.664 14.336 32 32 32h64c17.664 0 32-14.336 32-32v-64c0-17.68-14.336-32-32-32zm-256 0h-64c-17.664 0-32 14.336-32 32v64c0 17.664 14.336 32 32 32h64c17.664 0 32-14.336 32-32v-64c0-17.68-14.336-32-32-32zm0 255.984h-64c-17.664 0-32 14.336-32 32v64c0 17.68 14.336 32 32 32h64c17.664 0 32-14.32 32-32v-64c0-17.648-14.336-32-32-32z"/></svg>
                        <div class="product-list-info-item__title">Model year</div>
                        <div class="product-list-info-item__value">{{$motor->manufacture_year}}</div>
                      </div>
                    </div>


                    <div>
                      <div class="product-list-info-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 256 256"><path fill="gray" d="M216 120a41 41 0 0 0-6.6.55l-5.82-15.14A55.64 55.64 0 0 1 216 104a8 8 0 0 0 0-16h-19.12l-13.41-34.87A8 8 0 0 0 176 48h-32a8 8 0 0 0 0 16h26.51l9.23 24H152c-18.5 0-33.5 4.31-43.37 12.46a16 16 0 0 1-16.76 2.07c-10.58-4.81-73.29-30.12-73.8-30.26a8 8 0 0 0-5 15.19s55.5 21.94 66.53 32.94A55.67 55.67 0 0 1 95.43 152H79.2a40 40 0 1 0 0 16h52.12a31.91 31.91 0 0 0 30.74-23.1a56 56 0 0 1 26.59-33.72l5.82 15.13A40 40 0 1 0 216 120ZM40 168h22.62a24 24 0 1 1 0-16H40a8 8 0 0 0 0 16Zm176 16a24 24 0 0 1-15.58-42.23l8.11 21.1a8 8 0 1 0 14.94-5.74L215.35 136h.65a24 24 0 0 1 0 48Z"/></svg>
                        <div class="product-list-info-item__title">Make</div>
                        <div class="product-list-info-item__value">{{$motor->brand}}</div>
                      </div>
                    </div>
                    <div>
                      <div class="product-list-info-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 256 256"><path fill="gray" d="M248 106a6 6 0 0 0-6 6v26h-20v-18a14 14 0 0 0-14-14h-12.69a2 2 0 0 1-1.41-.58L158.58 70.1a13.9 13.9 0 0 0-9.89-4.1H126V46h26a6 6 0 0 0 0-12H88a6 6 0 0 0 0 12h26v20H48a14 14 0 0 0-14 14v58H14v-26a6 6 0 0 0-12 0v64a6 6 0 0 0 12 0v-26h20v22.69a13.9 13.9 0 0 0 4.1 9.89l35.32 35.32a13.9 13.9 0 0 0 9.89 4.1h65.38a13.9 13.9 0 0 0 9.89-4.1l35.32-35.32a2 2 0 0 1 1.41-.58H208a14 14 0 0 0 14-14v-18h20v26a6 6 0 0 0 12 0v-64a6 6 0 0 0-6-6Zm-38 62a2 2 0 0 1-2 2h-12.69a13.9 13.9 0 0 0-9.89 4.1l-35.32 35.32a2 2 0 0 1-1.41.58H83.31a2 2 0 0 1-1.41-.58L46.58 174.1a2 2 0 0 1-.58-1.41V80a2 2 0 0 1 2-2h100.69a2 2 0 0 1 1.41.58l35.32 35.32a13.9 13.9 0 0 0 9.89 4.1H208a2 2 0 0 1 2 2Z"/></svg>
                        <div class="product-list-info-item__title">Engine Type</div>
                        <div class="product-list-info-item__value">{{$motor->engine_type}}</div>
                      </div>
                    </div>
                    <div>
                      <div class="product-list-info-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24"><path fill="gray" d="M10.45 15.5q.625.625 1.575.588T13.4 15.4L19 7l-8.4 5.6q-.65.45-.712 1.362t.562 1.538ZM5.1 20q-.55 0-1.012-.238t-.738-.712q-.65-1.175-1-2.437T2 14q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 4q2.05 0 3.85.775T19 6.888q1.35 1.337 2.15 3.125t.825 3.837q.025 1.375-.312 2.688t-1.038 2.512q-.275.475-.737.713T18.874 20H5.1Z"/></svg><div class="product-list-info-item__title">Top Speed</div>
                        <div class="product-list-info-item__value">{{$motor->max_power}}</div>
                      </div>
                    </div>

                    @if($motor->mileage)
                    <div>
                      <div class="product-list-info-item">
                        <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 512 512"><path fill="grey" d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm320 96c0-26.9-16.5-49.9-40-59.3V88c0-13.3-10.7-24-24-24s-24 10.7-24 24V292.7c-23.5 9.5-40 32.5-40 59.3c0 35.3 28.7 64 64 64s64-28.7 64-64zM144 176a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm-16 80a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm288 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64zM400 144a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"/></svg>
                        <div class="product-list-info-item__title">Mileage</div>
                        <div class="product-list-info-item__value">{{$motor->mileage}} KM</div>
                      </div>
                    </div>
                    @endif


                    @if($motor->mileage)
                    <div>
                      <div class="product-list-info-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="currentColor" d="M22 3H2c-1.09.04-1.96.91-2 2v14c.04 1.09.91 1.96 2 2h20c1.09-.04 1.96-.91 2-2V5a2.074 2.074 0 0 0-2-2m0 16H2V5h20zm-8-2v-1.25c0-1.66-3.34-2.5-5-2.5c-1.66 0-5 .84-5 2.5V17zM9 7a2.5 2.5 0 0 0-2.5 2.5A2.5 2.5 0 0 0 9 12a2.5 2.5 0 0 0 2.5-2.5A2.5 2.5 0 0 0 9 7m5 0v1h6V7zm0 2v1h6V9zm0 2v1h4v-1z"/></svg>
                        <div class="product-list-info-item__title">Registration Date</div>
                        <div class="product-list-info-item__value">{{$motor->vehicle_registration_date}} </div>
                      </div>
                    </div>
                    @endif

                    @if($motor->mileage)
                    <div>
                      <div class="product-list-info-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 19L8 5m8 0l4 14M12 8V6m0 7v-2m0 7v-2"/></svg>                        <div class="product-list-info-item__title">Road Tax Expiry</div>
                        <div class="product-list-info-item__value">{{$motor->road_tax_expiry_date}} </div>
                      </div>
                    </div>
                    @endif

                  </div>
                </div>
                <hr class="uk-margin-medium">
                <h2>Motorcycle Overview</h2>
                <p>{!! $motor->description !!}</p>
                <hr class="uk-margin-medium">
                <h2>Technical Specifications</h2>
                <div class="page-product__specifications">
                  <ul class="product-specifications">
                    <li class="product-specifications-item">
                      <div class="product-specifications-item__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"><path fill="gray" d="M17.5 12a1.5 1.5 0 0 1-1.5-1.5A1.5 1.5 0 0 1 17.5 9a1.5 1.5 0 0 1 1.5 1.5a1.5 1.5 0 0 1-1.5 1.5m-3-4A1.5 1.5 0 0 1 13 6.5A1.5 1.5 0 0 1 14.5 5A1.5 1.5 0 0 1 16 6.5A1.5 1.5 0 0 1 14.5 8m-5 0A1.5 1.5 0 0 1 8 6.5A1.5 1.5 0 0 1 9.5 5A1.5 1.5 0 0 1 11 6.5A1.5 1.5 0 0 1 9.5 8m-3 4A1.5 1.5 0 0 1 5 10.5A1.5 1.5 0 0 1 6.5 9A1.5 1.5 0 0 1 8 10.5A1.5 1.5 0 0 1 6.5 12M12 3a9 9 0 0 0-9 9a9 9 0 0 0 9 9a1.5 1.5 0 0 0 1.5-1.5c0-.39-.15-.74-.39-1c-.23-.27-.38-.62-.38-1a1.5 1.5 0 0 1 1.5-1.5H16a5 5 0 0 0 5-5c0-4.42-4.03-8-9-8Z"/></svg>
                    </div>
                      <div class="product-specifications-item__desc">
                        <div class="product-specifications-item__title">Color</div>
                        <div class="product-specifications-item__value">{{$motor->colour}} </div>
                      </div>
                    </li>
                    <li class="product-specifications-item">
                      <div class="product-specifications-item__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M17 17v4h1a2 2 0 1 0 0-4h-1zm0-6h1.5a1.5 1.5 0 0 0 0-3H17v5M3 5a2 2 0 1 0 4 0a2 2 0 1 0-4 0"/><path d="M5 7v3a1 1 0 0 0 1 1h3v7a1 1 0 0 0 1 1h3m-4-8h4"/></g></svg>
                                   </div>
                      <div class="product-specifications-item__desc">
                        <div class="product-specifications-item__title">Transmission</div>
                        <div class="product-specifications-item__value">{{$motor->transmission}}</div>
                      </div>
                    </li>
                    <li class="product-specifications-item">
                      <div class="product-specifications-item__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"><path fill="gray" d="M7 4v2h3v2H7l-2 2v3H3v-3H1v8h2v-3h2v3h3l2 2h8v-4h2v3h3V9h-3v3h-2V8h-6V6h3V4H7Z"/></svg>

                        </div>
                      <div class="product-specifications-item__desc">
                        <div class="product-specifications-item__title">Engine Type</div>
                        <div class="product-specifications-item__value">{{$motor->engine_type}}</div>
                      </div>
                    </li>
                    <li class="product-specifications-item">
                      <div class="product-specifications-item__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"><path fill="gray" d="M10.45 15.5q.625.625 1.575.588T13.4 15.4L19 7l-8.4 5.6q-.65.45-.712 1.362t.562 1.538ZM5.1 20q-.55 0-1.012-.238t-.738-.712q-.65-1.175-1-2.437T2 14q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 4q2.05 0 3.85.775T19 6.888q1.35 1.337 2.15 3.125t.825 3.837q.025 1.375-.312 2.688t-1.038 2.512q-.275.475-.737.713T18.874 20H5.1Z"/></svg>
                                      </div>
                      <div class="product-specifications-item__desc">
                        <div class="product-specifications-item__title">Max Power</div>
                        <div class="product-specifications-item__value">{{$motor->max_power}}</div>
                      </div>
                    </li>
                    <li class="product-specifications-item">
                      <div class="product-specifications-item__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 16 16"><g fill="gray"><path d="M3 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5z"/><path d="M1 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v8a2 2 0 0 1 2 2v.5a.5.5 0 0 0 1 0V8h-.5a.5.5 0 0 1-.5-.5V4.375a.5.5 0 0 1 .5-.5h1.495c-.011-.476-.053-.894-.201-1.222a.97.97 0 0 0-.394-.458c-.184-.11-.464-.195-.9-.195a.5.5 0 0 1 0-1c.564 0 1.034.11 1.412.336c.383.228.634.551.794.907c.295.655.294 1.465.294 2.081v3.175a.5.5 0 0 1-.5.501H15v4.5a1.5 1.5 0 0 1-3 0V12a1 1 0 0 0-1-1v4h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1zm9 0a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v13h8z"/></g></svg>
                               </div>
                      <div class="product-specifications-item__desc">
                        <div class="product-specifications-item__title">Fuel System</div>
                        <div class="product-specifications-item__value">{{$motor->fuel_system}}</div>
                      </div>
                    </li>
                    <li class="product-specifications-item">
                      <div class="product-specifications-item__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"><g fill="none"><path d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z"/><path fill="gray" d="m11.514 2.142l-1.26-.755l-.24 1.449C9.632 5.124 8.069 7.25 6.345 8.744C2.97 11.67 2.231 14.85 3.276 17.475c1 2.512 3.538 4.232 6.114 4.519l.596.066c-1.474-.901-2.42-3.006-2.09-4.579c.326-1.546 1.438-2.994 3.574-4.33l1.077-.672l.402 1.205c.237.712.647 1.284 1.064 1.865c.2.28.403.563.589.864c.643 1.045.813 2.207.398 3.36c-.378 1.048-1.001 1.872-1.86 2.329l.97-.108c2.418-.269 4.193-1.096 5.346-2.479C20.599 18.144 21 16.379 21 14.5c0-1.75-.719-3.554-1.567-5.055c-.994-1.758-2.291-3.218-3.707-4.633c-.245.49-.226.688-.73 1.475a8.146 8.146 0 0 0-3.482-4.145Z"/></g></svg>                    </div>
                      <div class="product-specifications-item__desc">
                        <div class="product-specifications-item__title">Ignition System</div>
                        <div class="product-specifications-item__value">{{$motor->ignition_system}}</div>
                      </div>
                    </li>
                    <li class="product-specifications-item">
                      <div class="product-specifications-item__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"><path fill="gray" d="M3 2h3c.28 0 .53.11.71.29l2.08 2.09l.8-.79C10 3.2 10.5 3 11 3h6c.5 0 1 .2 1.41.59l1 1C19.8 5 20 5.5 20 6v13a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V8c0-.5.2-1 .59-1.41l.79-.8L5.59 4H3V2m8 3v2h6V5h-6m.41 6l-2-2H8v1.41l2 2v3.18l-2 2V19h1.41l2-2h3.18l2 2H18v-1.41l-2-2v-3.18l2-2V9h-1.41l-2 2h-3.18m.59 2h2v2h-2v-2Z"/></svg>
                         </div>
                      <div class="product-specifications-item__desc">
                        <div class="product-specifications-item__title">Fuel Capacity</div>
                        <div class="product-specifications-item__value">{{$motor->fuel_capacity}}</div>
                      </div>
                    </li>
                    <li class="product-specifications-item">
                      <div class="product-specifications-item__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><path d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z"/><path fill="gray" d="M12 3a1 1 0 1 1 0 2h-1v1h2.764a2 2 0 0 1 .894.211l3.236 1.618A2 2 0 0 1 19 9.618V12h1v-1a1 1 0 1 1 2 0v4a1 1 0 1 1-2 0v-1h-1v1.5a2 2 0 0 1-.8 1.6l-3.333 2.5a2 2 0 0 1-1.2.4H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4V5H8a1 1 0 0 1 0-2h4Zm-.985 6.643a1 1 0 0 0-1.307.246l-.065.097l-1.491 2.484a1.01 1.01 0 0 0 .75 1.524l.116.006h1.216l-.591.986a1 1 0 0 0 1.649 1.125l.066-.096l1.49-2.485a1.01 1.01 0 0 0-.75-1.524L11.982 12h-1.216l.591-.985a1 1 0 0 0-.342-1.372Z"/></g></svg>
                    </div>
                      <div class="product-specifications-item__desc">
                        <div class="product-specifications-item__title">Engine Power / Torque</div>
                        <div class="product-specifications-item__value">{{$motor->max_torque}}</div>
                      </div>
                    </li>
                    <li class="product-specifications-item">
                      <div class="product-specifications-item__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"><path fill="gray" d="M12 15.5A3.5 3.5 0 0 1 8.5 12A3.5 3.5 0 0 1 12 8.5a3.5 3.5 0 0 1 3.5 3.5a3.5 3.5 0 0 1-3.5 3.5m7.43-2.53c.04-.32.07-.64.07-.97c0-.33-.03-.66-.07-1l2.11-1.63c.19-.15.24-.42.12-.64l-2-3.46c-.12-.22-.39-.31-.61-.22l-2.49 1c-.52-.39-1.06-.73-1.69-.98l-.37-2.65A.506.506 0 0 0 14 2h-4c-.25 0-.46.18-.5.42l-.37 2.65c-.63.25-1.17.59-1.69.98l-2.49-1c-.22-.09-.49 0-.61.22l-2 3.46c-.13.22-.07.49.12.64L4.57 11c-.04.34-.07.67-.07 1c0 .33.03.65.07.97l-2.11 1.66c-.19.15-.25.42-.12.64l2 3.46c.12.22.39.3.61.22l2.49-1.01c.52.4 1.06.74 1.69.99l.37 2.65c.04.24.25.42.5.42h4c.25 0 .46-.18.5-.42l.37-2.65c.63-.26 1.17-.59 1.69-.99l2.49 1.01c.22.08.49 0 .61-.22l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.66Z"/></svg>
                    </div>
                      <div class="product-specifications-item__desc">
                        <div class="product-specifications-item__title">Displacement</div>
                        <div class="product-specifications-item__value">{{$motor->displacement}}</div>
                      </div>
                    </li>
                    <li class="product-specifications-item">

                        <div class="product-specifications-item__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12.75 17.75V6.25H16v-1.5H8v1.5h3.25v11.5H8v1.5h8v-1.5h-3.25Z" opacity=".5"/><path fill="currentColor" d="M8 6.5v-2c0-.465 0-.697-.038-.89A2 2 0 0 0 6.39 2.038C6.197 2 5.965 2 5.5 2s-.697 0-.89.038A2 2 0 0 0 3.038 3.61C3 3.803 3 4.035 3 4.5v2c0 .465 0 .697.038.89A2 2 0 0 0 4.61 8.962C4.803 9 5.035 9 5.5 9s.697 0 .89-.038A2 2 0 0 0 7.962 7.39C8 7.197 8 6.965 8 6.5Zm13 0v-2c0-.465 0-.697-.038-.89a2 2 0 0 0-1.572-1.572C19.197 2 18.965 2 18.5 2s-.697 0-.89.038a2 2 0 0 0-1.572 1.572C16 3.803 16 4.035 16 4.5v2c0 .465 0 .697.038.89a2 2 0 0 0 1.572 1.572c.193.038.425.038.89.038s.697 0 .89-.038a2 2 0 0 0 1.572-1.572C21 7.197 21 6.965 21 6.5Zm-13 13v-2c0-.465 0-.697-.038-.89a2 2 0 0 0-1.572-1.572C6.197 15 5.965 15 5.5 15s-.697 0-.89.038a2 2 0 0 0-1.572 1.572C3 16.803 3 17.035 3 17.5v2c0 .465 0 .697.038.89a2 2 0 0 0 1.572 1.572c.193.038.425.038.89.038s.697 0 .89-.038a2 2 0 0 0 1.572-1.572C8 20.197 8 19.965 8 19.5Zm13 0v-2c0-.465 0-.697-.038-.89a2 2 0 0 0-1.572-1.572C19.197 15 18.965 15 18.5 15s-.697 0-.89.038a2 2 0 0 0-1.572 1.572c-.038.193-.038.425-.038.89v2c0 .465 0 .697.038.89a2 2 0 0 0 1.572 1.572c.193.038.425.038.89.038s.697 0 .89-.038a2 2 0 0 0 1.572-1.572c.038-.193.038-.425.038-.89Z"/></svg>
                        </div>

                      <div class="product-specifications-item__desc">


                        <div class="product-specifications-item__title">Front Suspension</div>
                        <div class="product-specifications-item__value">{{$motor->front_suspension}}</div>
                      </div>
                    </li>
                    <li class="product-specifications-item">
                      <div class="product-specifications-item__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"><path fill="currentColor" d="M4 13.256V12H2v-2h6.365L11.2 8h3.492L13.6 5H11V3h4l1.092 3H20v3h-2.816l1.456 4.002a4.5 4.5 0 1 1-1.985.392L15.419 10h-.947l-1.582 5.87l-.002-.001l.002.005l-2.925 1.065A4.5 4.5 0 1 1 4 13.256Zm2-.229a4.5 4.5 0 0 1 3.281 2.033l1.957-.713L12.403 10h-.547L9 12H6v1.027ZM5.5 20a2.5 2.5 0 1 0 0-5a2.5 2.5 0 0 0 0 5Zm13 0a2.5 2.5 0 1 0 0-5a2.5 2.5 0 0 0 0 5Z"/></svg>
                    </div>
                      <div class="product-specifications-item__desc">
                        <div class="product-specifications-item__title">Frame Type</div>
                        <div class="product-specifications-item__value">{{$motor->frame_type}}</div>
                      </div>
                    </li>
                    <li class="product-specifications-item">
                      <div class="product-specifications-item__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 36 36"><path fill="gray" d="M22 4V2.62a.6.6 0 0 0-.58-.62h-6.84a.6.6 0 0 0-.58.62V4h-4a1.09 1.09 0 0 0-1 1.07v28a1 1 0 0 0 1 .93h16a1 1 0 0 0 1-.94v-28A1.09 1.09 0 0 0 26 4Zm-1.74 21.44a1.2 1.2 0 0 1-2.15 1.07l-5.46-10.95l6 1l-2.29-4a1.2 1.2 0 1 1 2.08-1.2l4.83 8.37l-6.37-1.03Z" class="clr-i-solid clr-i-solid-path-1"/><path fill="none" d="M0 0h36v36H0z"/></svg>                    </div>
                      <div class="product-specifications-item__desc">
                        <div class="product-specifications-item__title">Battery</div>
                        <div class="product-specifications-item__value">{{$motor->battery}}</div>
                      </div>
                    </li>
                  </ul>
                </div>
                {{-- <hr class="uk-margin-medium">
                <h2>Additional Options & Features</h2>
                <p>Ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididuntu labore dolor magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. Allamco laboris nisi ut aliquip ex ea commodo consequat duis aute irure dolor in reprehenderits voluptaty velit esse cillum.</p>
                <ul class="list-check uk-column-1-2@m">
                  <li>Designed for the pole position</li>
                  <li>Power to turn signals, brake lights</li>
                  <li>With the M carbon wheels with a 0.5 disc</li>
                  <li>Pioneer superbikes: the 6.5" TFT display</li>
                  <li>RR is your perfect partner in performance</li>
                  <li>Always ready for the racing track</li>
                  <li>For lights all integrated into one unit</li>
                  <li>Wheels with a 1.0 mm thicker brakes</li>
                  <li>For better rides reliable partner</li>
                  <li>Maximum support energy-saving ergonomics</li>
                </ul> --}}
              </div>
              <div class="uk-width-1-3@m">
                <div class="product-block-info">
                  <div class="product-block-info__logos">
                    <img src="{{asset('frontend/img/logo-b.png')}}" width="50%" alt="user-logo">
                </div>
                  <div class="product-block-info__user user">

                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24"><path fill="#e63619" d="M11 21v-2h8v-7.1q0-2.925-2.037-4.962T12 4.9q-2.925 0-4.962 2.038T5 11.9V18H4q-.825 0-1.412-.587T2 16v-2q0-.525.263-.987T3 12.275l.075-1.325q.2-1.7.988-3.15t1.975-2.525Q7.225 4.2 8.762 3.6T12 3q1.7 0 3.225.6t2.725 1.663q1.2 1.062 1.975 2.512t1 3.15l.075 1.3q.475.225.738.675t.262.95v2.3q0 .5-.262.95t-.738.675V19q0 .825-.587 1.413T19 21h-8Zm-2-7q-.425 0-.712-.288T8 13q0-.425.288-.712T9 12q.425 0 .713.288T10 13q0 .425-.288.713T9 14Zm6 0q-.425 0-.712-.288T14 13q0-.425.288-.712T15 12q.425 0 .713.288T16 13q0 .425-.288.713T15 14Zm-8.975-1.55Q5.85 9.8 7.625 7.9T12.05 6q2.225 0 3.913 1.412T18 11.026Q15.725 11 13.813 9.8t-2.938-3.25q-.4 2-1.687 3.563T6.025 12.45Z"/></svg>
                    </div>

                    <div style="padding-left:15px;" class="user__desc">
                      <div class="user__name">{{$motor->user->name}}</div>
                      <div class="user__date">Sales Executive at Kuchai Motor Sdn Bhd</div>
                      {{-- <div class="user__social">
                        <ul class="social-list">
                          <li class="social-list__item"><a class="social-list__link" href="#!"><i class="fab fa-twitter"></i></a></li>
                          <li class="social-list__item"><a class="social-list__link" href="#!"><i class="fab fa-facebook-f"></i></a></li>
                          <li class="social-list__item"><a class="social-list__link" href="#!"><i class="fab fa-google-plus-g"></i></a></li>
                          <li class="social-list__item"><a class="social-list__link" href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                      </div> --}}
                    </div>
                  </div>
                  <div class="product-block-info__email block-icon">
                    <div class="block-icon__icon">
-                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24"><path fill="gray" d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-2 12H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"/></svg>
                    </div>
                    <div class="block-icon__desc">
                      <div class="block-icon__title">Contact Via Email</div>
                      <div class="block-icon__value"><a href="mailto:joseph.hill@domain.com">{{$motor->user->email}}</a></div>
                    </div>
                  </div>
                  <div class="product-block-info__phone block-icon">
                    <div class="block-icon__icon">

                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 256 258"><defs><linearGradient id="logosWhatsappIcon0" x1="50%" x2="50%" y1="100%" y2="0%"><stop offset="0%" stop-color="#1FAF38"/><stop offset="100%" stop-color="#60D669"/></linearGradient><linearGradient id="logosWhatsappIcon1" x1="50%" x2="50%" y1="100%" y2="0%"><stop offset="0%" stop-color="#F9F9F9"/><stop offset="100%" stop-color="#FFF"/></linearGradient></defs><path fill="url(#logosWhatsappIcon0)" d="M5.463 127.456c-.006 21.677 5.658 42.843 16.428 61.499L4.433 252.697l65.232-17.104a122.994 122.994 0 0 0 58.8 14.97h.054c67.815 0 123.018-55.183 123.047-123.01c.013-32.867-12.775-63.773-36.009-87.025c-23.23-23.25-54.125-36.061-87.043-36.076c-67.823 0-123.022 55.18-123.05 123.004"/><path fill="url(#logosWhatsappIcon1)" d="M1.07 127.416c-.007 22.457 5.86 44.38 17.014 63.704L0 257.147l67.571-17.717c18.618 10.151 39.58 15.503 60.91 15.511h.055c70.248 0 127.434-57.168 127.464-127.423c.012-34.048-13.236-66.065-37.3-90.15C194.633 13.286 162.633.014 128.536 0C58.276 0 1.099 57.16 1.071 127.416Zm40.24 60.376l-2.523-4.005c-10.606-16.864-16.204-36.352-16.196-56.363C22.614 69.029 70.138 21.52 128.576 21.52c28.3.012 54.896 11.044 74.9 31.06c20.003 20.018 31.01 46.628 31.003 74.93c-.026 58.395-47.551 105.91-105.943 105.91h-.042c-19.013-.01-37.66-5.116-53.922-14.765l-3.87-2.295l-40.098 10.513l10.706-39.082Z"/><path fill="#FFF" d="M96.678 74.148c-2.386-5.303-4.897-5.41-7.166-5.503c-1.858-.08-3.982-.074-6.104-.074c-2.124 0-5.575.799-8.492 3.984c-2.92 3.188-11.148 10.892-11.148 26.561c0 15.67 11.413 30.813 13.004 32.94c1.593 2.123 22.033 35.307 54.405 48.073c26.904 10.609 32.379 8.499 38.218 7.967c5.84-.53 18.844-7.702 21.497-15.139c2.655-7.436 2.655-13.81 1.859-15.142c-.796-1.327-2.92-2.124-6.105-3.716c-3.186-1.593-18.844-9.298-21.763-10.361c-2.92-1.062-5.043-1.592-7.167 1.597c-2.124 3.184-8.223 10.356-10.082 12.48c-1.857 2.129-3.716 2.394-6.9.801c-3.187-1.598-13.444-4.957-25.613-15.806c-9.468-8.442-15.86-18.867-17.718-22.056c-1.858-3.184-.199-4.91 1.398-6.497c1.431-1.427 3.186-3.719 4.78-5.578c1.588-1.86 2.118-3.187 3.18-5.311c1.063-2.126.531-3.986-.264-5.579c-.798-1.593-6.987-17.343-9.819-23.64"/></svg>
                    </div>
                    <div class="block-icon__desc">
                      <div class="block-icon__title">Contact Via WA</div>
                      <div class="block-icon__value"><a href="tel:12584037960"></a>{{$motor->user->phone_number}}</div>
                    </div>
                  </div>
                </div>
                <aside class="sidebar"  id="sticky-sidebar">
                  <div class="widjet widjet--form">
                    <div class="widjet__title">

                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif


                      <div class="uk-h4">Make an viewing appointment</div><span>we will get back in short</span>
                    </div>
                    <div class="widjet__content">
                    <form action="{{ route('booking.store') }}" method="POST">
                            @csrf

                            <div class="uk-margin-small">
                                <input class="uk-input uk-form-large" name="motorcycle_id" value="{{$motor->id}}" type="number" hidden>
                            </div>

                            <div class="uk-margin-small">
                                <input class="uk-input uk-form-large" name="salesman_id" value="{{$motor->user->id}}" type="number" hidden>
                            </div>

                            <div class="uk-margin-small">
                                <input class="uk-input uk-form-large" name="datetime" type="datetime-local" placeholder="Date Time">
                            </div>

                            <div class="uk-margin-small">
                                <input class="uk-input uk-form-large" name="name" type="text" placeholder="Your Name">
                            </div>

                            <div class="uk-margin-small">
                                <input class="uk-input uk-form-large" name="email" type="text" placeholder="Email">
                            </div>

                            <div class="uk-margin-small">
                                <input class="uk-input uk-form-large" name="phone_number" type="text" placeholder="Phone (Optional)">
                            </div>

                            <div class="uk-margin-small">
                                <textarea class="uk-textarea uk-form-large" name="message" placeholder="Message"></textarea>
                            </div>

                            <div class="uk-margin-small uk-text-center">
                                <button class="uk-button uk-button-danger uk-button-large" type="submit">Make Booking</button>
                            </div>


                        </form>
                    </div>
                  </div>
                </aside>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- <div class="related-products">
        <div class="uk-section uk-container">
          <div class="uk-h2 uk-margin-medium-bottom">You May Also Like...</div>
          <div class="uk-grid uk-child-width-1-3@m" data-uk-grid>
            <div><li tabindex="-1" class="uk-active uk-transition-active" style="transform: translate3d(0px, 0px, 0px);">
                        <img class="image-full" src="http://127.0.0.1:8000/storage/motor_covers/27fb4273-71ea-4592-a609-88050c5e18ea_1718413548.jpg" alt="Motor Image">
                    </li>
              <div class="product-item uk-transition-toggle">
                <div class="product-item__head">
                  <div>
                    <div class="product-item__name"> <a href="page-shop-product-1.html">DUCATI HYPER 950</a></div>
                    <div class="product-item__manufacturer">Powered by Ducati</div>
                  </div>
                  <div>
                    <div class="product-item__price">$4,500</div>
                  </div>
                </div>
                <div class="product-item__media uk-inline-clip uk-inline"><img src="assets/img/product-4.jpg" alt="DUCATI HYPER 950" /><a class="uk-transition-fade" href="page-shop-product-1.html">
                    <div class="uk-overlay-cover uk-overlay-primary"></div>
                     <div class="uk-position-center"><span class="icon-cross"></span></div>
                  </a><button class="product-item__whish btn-whish"><i class="far fa-heart"></i></button></div>
                <div class="product-item__info">
                  <ul class="list-info">
                    <li class="list-info-item">
                      <div class="list-info-item__title">Year</div>
                      <div class="list-info-item__value">2021</div>
                    </li>
                    <li class="list-info-item">
                      <div class="list-info-item__title">Type</div>
                      <div class="list-info-item__value">Sports</div>
                    </li>
                    <li class="list-info-item">
                      <div class="list-info-item__title">Make</div>
                      <div class="list-info-item__value">Ducati</div>
                    </li>
                  </ul>
                </div>
                <div class="product-item__specifications">
                  <ul class="specifications-list">
                    <li class="specifications-list-item">
                      <div class="specifications-list-item__icon">
                        <img src="assets/img/icons/specifications-1.png" alt="Engine type" />
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path fill="gray" d="M7 4v2h3v2H7l-2 2v3H3v-3H1v8h2v-3h2v3h3l2 2h8v-4h2v3h3V9h-3v3h-2V8h-6V6h3V4H7Z"/></svg>

                    </div>
                      <div class="specifications-list-item__desc">
                        <div class="specifications-list-item__title">Engine type</div>
                        <div class="specifications-list-item__value">Desmosedici 90 V4</div>
                      </div>
                    </li>
                    <li class="specifications-list-item">
                      <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-2.png" alt="Engine Power" /></div>
                      <div class="specifications-list-item__desc">
                        <div class="specifications-list-item__title">Engine Power</div>
                        <div class="specifications-list-item__value">208hp (153 kW)</div>
                      </div>
                    </li>
                    <li class="specifications-list-item">
                      <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-3.png" alt="Displacement" /></div>
                      <div class="specifications-list-item__desc">
                        <div class="specifications-list-item__title">Displacement</div>
                        <div class="specifications-list-item__value">1,103 cc</div>
                      </div>
                    </li>
                    <li class="specifications-list-item">
                      <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-4.png" alt="Bore/Stroke" /></div>
                      <div class="specifications-list-item__desc">
                        <div class="specifications-list-item__title">Bore/Stroke</div>
                        <div class="specifications-list-item__value">80mm / 49.7mm</div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div>
              <div class="product-item uk-transition-toggle">
                <div class="product-item__head">
                  <div>
                    <div class="product-item__name"> <a href="page-shop-product-1.html">KAWASAKI VULCAN</a></div>
                    <div class="product-item__manufacturer">Powered by Kawasaki</div>
                  </div>
                  <div>
                    <div class="product-item__price">$6,200</div>
                  </div>
                </div>
                <div class="product-item__media uk-inline-clip uk-inline"><img src="assets/img/product-5.jpg" alt="KAWASAKI VULCAN" /><a class="uk-transition-fade" href="page-shop-product-1.html">
                    <div class="uk-overlay-cover uk-overlay-primary"></div>
                     <div class="uk-position-center"><span class="icon-cross"></span></div>
                  </a><button class="product-item__whish btn-whish"><i class="far fa-heart"></i></button></div>
                <div class="product-item__info">
                  <ul class="list-info">
                    <li class="list-info-item">
                      <div class="list-info-item__title">Year</div>
                      <div class="list-info-item__value">2021</div>
                    </li>
                    <li class="list-info-item">
                      <div class="list-info-item__title">Type</div>
                      <div class="list-info-item__value">Sports</div>
                    </li>
                    <li class="list-info-item">
                      <div class="list-info-item__title">Make</div>
                      <div class="list-info-item__value">Kawasaki</div>
                    </li>
                  </ul>
                </div>
                <div class="product-item__specifications">
                  <ul class="specifications-list">
                    <li class="specifications-list-item">
                      <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-1.png" alt="Engine type" /></div>
                      <div class="specifications-list-item__desc">
                        <div class="specifications-list-item__title">Engine type</div>
                        <div class="specifications-list-item__value">4-Stroke Cylinder</div>
                      </div>
                    </li>
                    <li class="specifications-list-item">
                      <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-2.png" alt="Engine Power" /></div>
                      <div class="specifications-list-item__desc">
                        <div class="specifications-list-item__title">Engine Power</div>
                        <div class="specifications-list-item__value">190hp (137 kW)</div>
                      </div>
                    </li>
                    <li class="specifications-list-item">
                      <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-3.png" alt="Displacement" /></div>
                      <div class="specifications-list-item__desc">
                        <div class="specifications-list-item__title">Displacement</div>
                        <div class="specifications-list-item__value">537 cc</div>
                      </div>
                    </li>
                    <li class="specifications-list-item">
                      <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-4.png" alt="Bore/Stroke" /></div>
                      <div class="specifications-list-item__desc">
                        <div class="specifications-list-item__title">Bore/Stroke</div>
                        <div class="specifications-list-item__value">80mm / 49.7mm</div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div>
              <div class="product-item uk-transition-toggle">
                <div class="product-item__head">
                  <div>
                    <div class="product-item__name"> <a href="page-shop-product-1.html">HONDA CB500X ABS</a></div>
                    <div class="product-item__manufacturer">Powered by Honda</div>
                  </div>
                  <div>
                    <div class="product-item__price">$4,500</div>
                  </div>
                </div>
                <div class="product-item__media uk-inline-clip uk-inline"><img src="assets/img/product-6.jpg" alt="HONDA CB500X ABS" /><a class="uk-transition-fade" href="page-shop-product-1.html">
                    <div class="uk-overlay-cover uk-overlay-primary"></div>
                     <div class="uk-position-center"><span class="icon-cross"></span></div>
                  </a><button class="product-item__whish btn-whish"><i class="far fa-heart"></i></button></div>
                <div class="product-item__info">
                  <ul class="list-info">
                    <li class="list-info-item">
                      <div class="list-info-item__title">Year</div>
                      <div class="list-info-item__value">2021</div>
                    </li>
                    <li class="list-info-item">
                      <div class="list-info-item__title">Type</div>
                      <div class="list-info-item__value">Adventure</div>
                    </li>
                    <li class="list-info-item">
                      <div class="list-info-item__title">Make</div>
                      <div class="list-info-item__value">Honda</div>
                    </li>
                  </ul>
                </div>
                <div class="product-item__specifications">
                  <ul class="specifications-list">
                    <li class="specifications-list-item">
                      <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-1.png" alt="Engine type" /></div>
                      <div class="specifications-list-item__desc">
                        <div class="specifications-list-item__title">Engine type</div>
                        <div class="specifications-list-item__value">4-Stroke Cylinder</div>
                      </div>
                    </li>
                    <li class="specifications-list-item">
                      <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-2.png" alt="Engine Power" /></div>
                      <div class="specifications-list-item__desc">
                        <div class="specifications-list-item__title">Engine Power</div>
                        <div class="specifications-list-item__value">205hp (151 kW)</div>
                      </div>
                    </li>
                    <li class="specifications-list-item">
                      <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-3.png" alt="Displacement" /></div>
                      <div class="specifications-list-item__desc">
                        <div class="specifications-list-item__title">Displacement</div>
                        <div class="specifications-list-item__value">999 cc</div>
                      </div>
                    </li>
                    <li class="specifications-list-item">
                      <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-4.png" alt="Bore/Stroke" /></div>
                      <div class="specifications-list-item__desc">
                        <div class="specifications-list-item__title">Bore/Stroke</div>
                        <div class="specifications-list-item__value">80mm / 49.7mm</div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
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



  <script>
        document.getElementById('shareMotorBtn').addEventListener('click', function() {
        var dropdown = document.getElementById('shareMotorDropdown');
        dropdown.style.display = dropdown.style.display === 'none' ? 'block' : 'none';
    });

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.danger')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.style.display === "block") {
                    openDropdown.style.display = "none";
                }
            }
        }
    }

  </script>


    <script>
        window.onload = function() {
            fb_share.href ='http://www.facebook.com/share.php?u=' + encodeURIComponent(location.href);
        }
    </script>


</body>




</html>
