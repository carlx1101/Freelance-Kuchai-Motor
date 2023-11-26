<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Kuchai Motor </title>
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

<body class="page-home">


  <div class="page-wrapper">
    @include('guest.layouts.navbar')

    <main class="page-main">
      <div class="section-hero">
        <div data-uk-slideshow="autoplay: true; min-height: 560; max-height: 950; animation: fade">
          <div class="uk-position-relative" tabindex="-1">
            <ul class="uk-slideshow-items">
              <li class="slideshow-item"><img src="assets/img/img-home-slideshow.jpg" alt data-uk-cover>
                <div class="uk-position-center uk-position-small">
                  <div class="uk-container">
                    <div class="uk-grid" data-uk-grid>
                      <div class="uk-width-3-5@m">
                        <div class="slideshow-item__content">
                          <div class="slideshow-item__decor" data-uk-slideshow-parallax="opacity: 0,1">KeyMoto</div>
                          <div class="slideshow-item__title" data-uk-slideshow-parallax="x: 100,-100"><span>Taking rides to a newer level</span>
                            <div class="uk-h2">the combination of<br> power & perfection</div>
                          </div>
                          <div class="slideshow-item__desc" data-uk-slideshow-parallax="x: 200,-200">
                            <p>Consectetur adipiscing elit sed ipsum eiusmod tempor ncdidunt<br> labore et dolore magna aliqua quis ipsum suspendisse.</p>
                          </div>
                          <div class="slideshow-item__btns" data-uk-slideshow-parallax="x: 300,-300"><a class="uk-button uk-button-danger" href="#section-about">Learn more </a><a class="uk-button uk-button-secondary" href="#section-category">Motorcycles </a></div>
                        </div>
                      </div>
                      <div class="uk-width-2-5@m uk-visible@l"></div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="slideshow-item"><img src="assets/img/img-home-slideshow-2.jpg" alt data-uk-cover>
                <div class="uk-position-center uk-position-small">
                  <div class="uk-container">
                    <div class="uk-grid" data-uk-grid>
                      <div class="uk-width-2-5@m uk-visible@l"></div>
                      <div class="uk-width-3-5@m">
                        <div class="slideshow-item__content">
                          <div class="slideshow-item__decor" data-uk-slideshow-parallax="opacity: 0,1">KeyMoto</div>
                          <div class="slideshow-item__title" data-uk-slideshow-parallax="x: 100,-100"><span>Taking rides to a newer level</span>
                            <div class="uk-h2">putting a reliable<br> machine on road</div>
                          </div>
                          <div class="slideshow-item__desc" data-uk-slideshow-parallax="x: 200,-200">
                            <p>Consectetur adipiscing elit sed ipsum eiusmod tempor ncdidunt<br> labore et dolore magna aliqua quis ipsum suspendisse.</p>
                          </div>
                          <div class="slideshow-item__btns" data-uk-slideshow-parallax="x: 300,-300"><a class="uk-button uk-button-danger" href="#!">Learn more </a><a class="uk-button uk-button-secondary" href="#!">Motorcycles </a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="slideshow-item"><img src="assets/img/img-home-slideshow-3.jpg" alt data-uk-cover>
                <div class="uk-position-center uk-position-small">
                  <div class="uk-container">
                    <div class="uk-grid" data-uk-grid>
                      <div class="uk-width-3-5@m">
                        <div class="slideshow-item__content">
                          <div class="slideshow-item__decor" data-uk-slideshow-parallax="opacity: 0,1">KeyMoto</div>
                          <div class="slideshow-item__title" data-uk-slideshow-parallax="x: 100,-100"><span>Taking rides to a newer level</span>
                            <div class="uk-h2">modern designed<br> for a Sleek look</div>
                          </div>
                          <div class="slideshow-item__desc" data-uk-slideshow-parallax="x: 200,-200">
                            <p>Consectetur adipiscing elit sed ipsum eiusmod tempor ncdidunt<br> labore et dolore magna aliqua quis ipsum suspendisse.</p>
                          </div>
                          <div class="slideshow-item__btns" data-uk-slideshow-parallax="x: 300,-300"><a class="uk-button uk-button-danger" href="#!">Learn more </a><a class="uk-button uk-button-secondary" href="#!">Motorcycles </a></div>
                        </div>
                      </div>
                      <div class="uk-width-2-5@m uk-visible@l"></div>
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
      <div class="section-about" id="section-about">
        <div class="uk-section-large uk-container">
          <div class="uk-grid uk-grid-collapse" data-uk-grid>
            <div class="uk-width-1-3@m"><img class="section-about__img" src="assets/img/img-about.jpg" alt="img-about"></div>
            <div class="uk-width-2-3@m">
              <div class="section-about__content">
                <div class="section-title"> <span>Taking rides to a newer level</span>
                  <h3 class="uk-h2">Great performance<br> that matters in future</h3>
                </div>
                <div class="section-content">
                  <p>Dolore magna aliqua quis nostrud exercitation ullamco laboris nisi ut aliquip exa comads consequat asuis aute irure dolor in reprehenderit in voluptate velit esse cilum dolore fugiat sed ipsum nulla pariatur nostrul done elit magna.</p>
                  <div class="uk-margin-medium">
                    <div class="uk-grid uk-child-width-1-2@s" data-uk-grid>
                      <div>
                        <div class="block-icon">
                          <div class="block-icon__icon"><img class="block-icon__img" src="assets/img/icons/about-1.svg" alt="icon-about"></div>
                          <div class="block-icon__desc">
                            <div class="block-icon__title">Cutting Edge Tech</div>
                            <div class="block-icon__text">Exercitation ullamco laboris nis exa duis aute irure dolor.</div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="block-icon">
                          <div class="block-icon__icon"><img class="block-icon__img" src="assets/img/icons/about-2.svg" alt="icon-about"></div>
                          <div class="block-icon__desc">
                            <div class="block-icon__title">Perfect Styling</div>
                            <div class="block-icon__text">Exercitation ullamco laboris nis exa duis aute irure dolor.</div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="block-icon">
                          <div class="block-icon__icon"><img class="block-icon__img" src="assets/img/icons/about-3.svg" alt="icon-about"></div>
                          <div class="block-icon__desc">
                            <div class="block-icon__title">Distinctive Beauty</div>
                            <div class="block-icon__text">Exercitation ullamco laboris nis exa duis aute irure dolor.</div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="block-icon">
                          <div class="block-icon__icon"><img class="block-icon__img" src="assets/img/icons/about-4.svg" alt="icon-about"></div>
                          <div class="block-icon__desc">
                            <div class="block-icon__title">Radiance Polishing </div>
                            <div class="block-icon__text">Exercitation ullamco laboris nis exa duis aute irure dolor.</div>
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
      </div>
      <div class="section-category" id="section-category">
        <div class="uk-container uk-container-large">
          <div class="uk-position-relative" tabindex="-1" data-uk-slider>
            <ul class="uk-slider-items uk-grid uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l uk-child-width-1-5@xl">
              <li>
                <div class="category-item"><a class="category-item__link" href="page-shop-grid.html">
                    <div class="category-item__title"> <strong>Roadster</strong><span>Explore type</span></div>
                    <div class="category-item__icon"><img src="assets/img/icons/category-1.svg" alt="icon-category" data-uk-svg></div>
                  </a></div>
              </li>
              <li>
                <div class="category-item"><a class="category-item__link" href="page-shop-grid.html">
                    <div class="category-item__title"> <strong>Sportbike</strong><span>Explore type</span></div>
                    <div class="category-item__icon"><img src="assets/img/icons/category-2.svg" alt="icon-category" data-uk-svg></div>
                  </a></div>
              </li>
              <li>
                <div class="category-item"><a class="category-item__link" href="page-shop-grid.html">
                    <div class="category-item__title"> <strong>Chopper</strong><span>Explore type</span></div>
                    <div class="category-item__icon"><img src="assets/img/icons/category-3.svg" alt="icon-category" data-uk-svg></div>
                  </a></div>
              </li>
              <li>
                <div class="category-item"><a class="category-item__link" href="page-shop-grid.html">
                    <div class="category-item__title"> <strong>Cruiser</strong><span>Explore type</span></div>
                    <div class="category-item__icon"><img src="assets/img/icons/category-4.svg" alt="icon-category" data-uk-svg></div>
                  </a></div>
              </li>
              <li>
                <div class="category-item"><a class="category-item__link" href="page-shop-grid.html">
                    <div class="category-item__title"> <strong>Touring bike</strong><span>Explore type</span></div>
                    <div class="category-item__icon"><img src="assets/img/icons/category-5.svg" alt="icon-category" data-uk-svg></div>
                  </a></div>
              </li>
            </ul>
            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-top"></ul>
          </div>
        </div>
      </div>
      <div class="section-products">
        <div class="uk-section-large uk-container">
          <div class="section-title uk-text-center"><img src="assets/img/logo-dark.svg" alt=""><span>Taking rides to a newer level</span>
            <h3 class="uk-h2">Choose a motorcycle</h3>
          </div>
          <div class="section-content">
            <div class="uk-text-center uk-margin-medium-bottom">
              <p>Dolore magna aliqua quis nostrud exercitation ullamco laboris nisi ut aliquip exa comds<br> consequat duis aute irure dolor repreh enderit in voluptate velit esse cilum.</p>
            </div>
            <div class="uk-grid uk-grid-medium uk-child-width-1-3@l uk-child-width-1-2@s" data-uk-grid>
              <div>
                <div class="product-item uk-transition-toggle">
                  <div class="product-item__head">
                    <div>
                      <div class="product-item__name"> <a href="page-shop-product-1.html">BMW S1000 RX</a></div>
                      <div class="product-item__manufacturer">Powered by BMW</div>
                    </div>
                    <div>
                      <div class="product-item__price">$4,500</div>
                    </div>
                  </div>
                  <div class="product-item__media uk-inline-clip uk-inline"><img src="assets/img/product-1.jpg" alt="BMW S1000 RX" /><a class="uk-transition-fade" href="page-shop-product-1.html">
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
                        <div class="list-info-item__value">BMW</div>
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
              <div>
                <div class="product-item uk-transition-toggle">
                  <div class="product-item__head">
                    <div>
                      <div class="product-item__name"> <a href="page-shop-product-1.html">YAMAHA MT09</a></div>
                      <div class="product-item__manufacturer">Powered by Yamaha</div>
                    </div>
                    <div>
                      <div class="product-item__price">$4,500</div>
                    </div>
                  </div>
                  <div class="product-item__media uk-inline-clip uk-inline"><img src="assets/img/product-2.jpg" alt="YAMAHA MT09 BASE" /><a class="uk-transition-fade" href="page-shop-product-1.html">
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
                        <div class="list-info-item__value">Yamaha</div>
                      </li>
                    </ul>
                  </div>
                  <div class="product-item__specifications">
                    <ul class="specifications-list">
                      <li class="specifications-list-item">
                        <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-1.png" alt="Engine type" /></div>
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
                      <div class="product-item__name"> <a href="page-shop-product-1.html">KTM RC 390 BASE</a></div>
                      <div class="product-item__manufacturer">Powered by KTM</div>
                    </div>
                    <div>
                      <div class="product-item__price">$6,200</div>
                    </div>
                  </div>
                  <div class="product-item__media uk-inline-clip uk-inline"><img src="assets/img/product-3.jpg" alt="KTM RC 390 BASE" /><a class="uk-transition-fade" href="page-shop-product-1.html">
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
                        <div class="list-info-item__value">KTM</div>
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
                        <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-1.png" alt="Engine type" /></div>
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
            <div class="uk-text-center uk-margin-medium-top"><a class="uk-button uk-button-danger" href="page-shop-grid.html">View all models</a></div>
          </div>
        </div>
      </div>
      <div class="section-info">
        <div class="uk-container uk-container-expand">
          <div class="uk-grid uk-flex-middle uk-child-width-1-2@m" data-uk-grid>
            <div><img class="section-info__img" src="assets/img/img-info.png" alt="img-info"></div>
            <div>
              <div class="section-info__content">
                <div class="section-title"> <span>Taking rides to a newer level </span>
                  <h3 class="uk-h2">A step above with<br> rider-friendly nature</h3>
                </div>
                <div class="section-content">
                  <p>Dolore magna aliqua quis nostrud exercitation ullamco laboris nisi ut aliquip ex consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cilum dol sed ipsum nulla pariatur nostrul done elit magna.</p>
                  <div class="uk-margin-medium-top">
                    <div class="uk-grid uk-grid-small uk-child-width-1-3@l uk-child-width-1-2@m uk-child-width-1-3@s" data-uk-grid>
                      <div>
                        <div class="block-icon">
                          <div class="block-icon__icon"><img class="block-icon__img" src="assets/img/icons/info-1.svg" alt="icon-info"></div>
                          <div class="block-icon__desc">
                            <div class="block-icon__title">Easy To Book for rentals</div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="block-icon">
                          <div class="block-icon__icon"><img class="block-icon__img" src="assets/img/icons/info-2.svg" alt="icon-info"></div>
                          <div class="block-icon__desc">
                            <div class="block-icon__title">Longer rides for All day</div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="block-icon">
                          <div class="block-icon__icon"><img class="block-icon__img" src="assets/img/icons/info-3.svg" alt="icon-info"></div>
                          <div class="block-icon__desc">
                            <div class="block-icon__title">Get mileage Unlimited</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-video">
        <div class="video-block">
          <div class="video-info">
            <div class="video-info__title">The Powerful performance<br> With optimized balanced </div>
            <div class="video-info__subtitle">Adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore.</div>
            <div class="video-info__list-thumb">
              <ul>
                <li><img src="assets/img/img-video-thumb-1.jpg" alt="img-video-thumb"></li>
                <li><img src="assets/img/img-video-thumb-2.jpg" alt="img-video-thumb"></li>
                <li><img src="assets/img/img-video-thumb-3.jpg" alt="img-video-thumb"></li>
              </ul>
            </div>
          </div>
          <div class="video-box" data-uk-lightbox="video-autoplay: true"><a href="https://www.youtube.com/watch?v=c2pz2mlSfXA" data-caption="YouTube" data-attrs="width: 1280; height: 720;">
              <div class="btn-play"><img src="assets/img/icons/play.png" alt="play"><span>Play video</span></div>
            </a></div>
        </div>
      </div>
      <div class="section-rental">
        <div class="uk-section uk-container">
          <div class="section-title uk-text-center"><img src="assets/img/logo-dark.svg" alt=""><span>Taking rides to a newer level</span>
            <h3 class="uk-h2">Motorcycles on rent</h3>
          </div>
          <div class="section-content">
            <div class="uk-text-center uk-margin-medium-bottom">
              <p>Dolore magna aliqua quis nostrud exercitation ullamco laboris nisi ut aliquip exa comds<br> consequat duis aute irure dolor repreh enderit in voluptate velit esse cilum.</p>
            </div>
            <div data-uk-slider="autoplay:true">
              <div class="uk-position-relative" tabindex="-1">
                <ul class="uk-slider-items uk-child-width-1-1">
                  <li>
                    <div class="rental-item">
                      <div class="uk-grid uk-grid-small uk-flex-middle" data-uk-grid>
                        <div class="uk-width-3-5@m uk-flex-last@m">
                          <div class="rental-item__img"><img src="assets/img/img-rental.jpg" alt="Ducati X Diavel S"></div>
                        </div>
                        <div class="uk-width-2-5@m uk-flex-first@m">
                          <div class="rental-item__desc">
                            <div class="rental-item__title">2021 Ducati X Diavel S<br> - Glossy Black</div>
                            <div class="rental-item__price">
                              <div class="label">Rent for as low as</div>
                              <div class="price">$35</div>
                              <div class="value"> <span>per </span><span>day</span></div>
                            </div>
                            <div class="rental-item__text">Meet the new Ducati - A beauty with high speed excitement cruiser control, best of both worlds & sporty power.</div>
                            <div class="rental-item__specifications">
                              <ul class="specifications-list">
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-5.svg" alt="Engine type"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Color</div>
                                    <div class="specifications-list-item__value">Black </div>
                                  </div>
                                </li>
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-6.svg" alt="Engine Power"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Category</div>
                                    <div class="specifications-list-item__value">Adventure</div>
                                  </div>
                                </li>
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-4.svg" alt="Bore/Stroke"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Bore/Stroke</div>
                                    <div class="specifications-list-item__value">80mm / 49.7mm </div>
                                  </div>
                                </li>
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-3.svg" alt="Displacement"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Displacement</div>
                                    <div class="specifications-list-item__value">999 cc</div>
                                  </div>
                                </li>
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-1.svg" alt="Engine type"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Engine type</div>
                                    <div class="specifications-list-item__value">4-Stroke Cylinder</div>
                                  </div>
                                </li>
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-2.svg" alt="Engine Power"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Engine Power</div>
                                    <div class="specifications-list-item__value">205hp (151 kW)</div>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="rental-item">
                      <div class="uk-grid uk-grid-small uk-flex-middle" data-uk-grid>
                        <div class="uk-width-3-5@m uk-flex-last@m">
                          <div class="rental-item__img"><img src="assets/img/img-rental.jpg" alt="Ducati X Diavel S"></div>
                        </div>
                        <div class="uk-width-2-5@m uk-flex-first@m">
                          <div class="rental-item__desc">
                            <div class="rental-item__title">2021 Ducati X Diavel S<br> - Glossy Black</div>
                            <div class="rental-item__price">
                              <div class="label">Rent for as low as</div>
                              <div class="price">$35</div>
                              <div class="value"> <span>per </span><span>day</span></div>
                            </div>
                            <div class="rental-item__text">Meet the new Ducati - A beauty with high speed excitement cruiser control, best of both worlds & sporty power.</div>
                            <div class="rental-item__specifications">
                              <ul class="specifications-list">
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-5.svg" alt="Engine type"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Color</div>
                                    <div class="specifications-list-item__value">Black </div>
                                  </div>
                                </li>
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-6.svg" alt="Engine Power"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Category</div>
                                    <div class="specifications-list-item__value">Adventure</div>
                                  </div>
                                </li>
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-4.svg" alt="Bore/Stroke"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Bore/Stroke</div>
                                    <div class="specifications-list-item__value">80mm / 49.7mm </div>
                                  </div>
                                </li>
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-3.svg" alt="Displacement"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Displacement</div>
                                    <div class="specifications-list-item__value">999 cc</div>
                                  </div>
                                </li>
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-1.svg" alt="Engine type"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Engine type</div>
                                    <div class="specifications-list-item__value">4-Stroke Cylinder</div>
                                  </div>
                                </li>
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-2.svg" alt="Engine Power"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Engine Power</div>
                                    <div class="specifications-list-item__value">205hp (151 kW)</div>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="rental-item">
                      <div class="uk-grid uk-grid-small uk-flex-middle" data-uk-grid>
                        <div class="uk-width-3-5@m uk-flex-last@m">
                          <div class="rental-item__img"><img src="assets/img/img-rental.jpg" alt="Ducati X Diavel S"></div>
                        </div>
                        <div class="uk-width-2-5@m uk-flex-first@m">
                          <div class="rental-item__desc">
                            <div class="rental-item__title">2021 Ducati X Diavel S<br> - Glossy Black</div>
                            <div class="rental-item__price">
                              <div class="label">Rent for as low as</div>
                              <div class="price">$35</div>
                              <div class="value"> <span>per </span><span>day</span></div>
                            </div>
                            <div class="rental-item__text">Meet the new Ducati - A beauty with high speed excitement cruiser control, best of both worlds & sporty power.</div>
                            <div class="rental-item__specifications">
                              <ul class="specifications-list">
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-5.svg" alt="Engine type"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Color</div>
                                    <div class="specifications-list-item__value">Black </div>
                                  </div>
                                </li>
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-6.svg" alt="Engine Power"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Category</div>
                                    <div class="specifications-list-item__value">Adventure</div>
                                  </div>
                                </li>
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-4.svg" alt="Bore/Stroke"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Bore/Stroke</div>
                                    <div class="specifications-list-item__value">80mm / 49.7mm </div>
                                  </div>
                                </li>
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-3.svg" alt="Displacement"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Displacement</div>
                                    <div class="specifications-list-item__value">999 cc</div>
                                  </div>
                                </li>
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-1.svg" alt="Engine type"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Engine type</div>
                                    <div class="specifications-list-item__value">4-Stroke Cylinder</div>
                                  </div>
                                </li>
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-2.svg" alt="Engine Power"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Engine Power</div>
                                    <div class="specifications-list-item__value">205hp (151 kW)</div>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="rental-item">
                      <div class="uk-grid uk-grid-small uk-flex-middle" data-uk-grid>
                        <div class="uk-width-3-5@m uk-flex-last@m">
                          <div class="rental-item__img"><img src="assets/img/img-rental.jpg" alt="Ducati X Diavel S"></div>
                        </div>
                        <div class="uk-width-2-5@m uk-flex-first@m">
                          <div class="rental-item__desc">
                            <div class="rental-item__title">2021 Ducati X Diavel S<br> - Glossy Black</div>
                            <div class="rental-item__price">
                              <div class="label">Rent for as low as</div>
                              <div class="price">$35</div>
                              <div class="value"> <span>per </span><span>day</span></div>
                            </div>
                            <div class="rental-item__text">Meet the new Ducati - A beauty with high speed excitement cruiser control, best of both worlds & sporty power.</div>
                            <div class="rental-item__specifications">
                              <ul class="specifications-list">
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-5.svg" alt="Engine type"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Color</div>
                                    <div class="specifications-list-item__value">Black </div>
                                  </div>
                                </li>
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-6.svg" alt="Engine Power"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Category</div>
                                    <div class="specifications-list-item__value">Adventure</div>
                                  </div>
                                </li>
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-4.svg" alt="Bore/Stroke"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Bore/Stroke</div>
                                    <div class="specifications-list-item__value">80mm / 49.7mm </div>
                                  </div>
                                </li>
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-3.svg" alt="Displacement"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Displacement</div>
                                    <div class="specifications-list-item__value">999 cc</div>
                                  </div>
                                </li>
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-1.svg" alt="Engine type"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Engine type</div>
                                    <div class="specifications-list-item__value">4-Stroke Cylinder</div>
                                  </div>
                                </li>
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-2.svg" alt="Engine Power"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Engine Power</div>
                                    <div class="specifications-list-item__value">205hp (151 kW)</div>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="rental-item">
                      <div class="uk-grid uk-grid-small uk-flex-middle" data-uk-grid>
                        <div class="uk-width-3-5@m uk-flex-last@m">
                          <div class="rental-item__img"><img src="assets/img/img-rental.jpg" alt="Ducati X Diavel S"></div>
                        </div>
                        <div class="uk-width-2-5@m uk-flex-first@m">
                          <div class="rental-item__desc">
                            <div class="rental-item__title">2021 Ducati X Diavel S<br> - Glossy Black</div>
                            <div class="rental-item__price">
                              <div class="label">Rent for as low as</div>
                              <div class="price">$35</div>
                              <div class="value"> <span>per </span><span>day</span></div>
                            </div>
                            <div class="rental-item__text">Meet the new Ducati - A beauty with high speed excitement cruiser control, best of both worlds & sporty power.</div>
                            <div class="rental-item__specifications">
                              <ul class="specifications-list">
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-5.svg" alt="Engine type"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Color</div>
                                    <div class="specifications-list-item__value">Black </div>
                                  </div>
                                </li>
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-6.svg" alt="Engine Power"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Category</div>
                                    <div class="specifications-list-item__value">Adventure</div>
                                  </div>
                                </li>
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-4.svg" alt="Bore/Stroke"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Bore/Stroke</div>
                                    <div class="specifications-list-item__value">80mm / 49.7mm </div>
                                  </div>
                                </li>
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-3.svg" alt="Displacement"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Displacement</div>
                                    <div class="specifications-list-item__value">999 cc</div>
                                  </div>
                                </li>
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-1.svg" alt="Engine type"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Engine type</div>
                                    <div class="specifications-list-item__value">4-Stroke Cylinder</div>
                                  </div>
                                </li>
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-2.svg" alt="Engine Power"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Engine Power</div>
                                    <div class="specifications-list-item__value">205hp (151 kW)</div>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="rental-item">
                      <div class="uk-grid uk-grid-small uk-flex-middle" data-uk-grid>
                        <div class="uk-width-3-5@m uk-flex-last@m">
                          <div class="rental-item__img"><img src="assets/img/img-rental.jpg" alt="Ducati X Diavel S"></div>
                        </div>
                        <div class="uk-width-2-5@m uk-flex-first@m">
                          <div class="rental-item__desc">
                            <div class="rental-item__title">2021 Ducati X Diavel S<br> - Glossy Black</div>
                            <div class="rental-item__price">
                              <div class="label">Rent for as low as</div>
                              <div class="price">$35</div>
                              <div class="value"> <span>per </span><span>day</span></div>
                            </div>
                            <div class="rental-item__text">Meet the new Ducati - A beauty with high speed excitement cruiser control, best of both worlds & sporty power.</div>
                            <div class="rental-item__specifications">
                              <ul class="specifications-list">
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-5.svg" alt="Engine type"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Color</div>
                                    <div class="specifications-list-item__value">Black </div>
                                  </div>
                                </li>
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-6.svg" alt="Engine Power"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Category</div>
                                    <div class="specifications-list-item__value">Adventure</div>
                                  </div>
                                </li>
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-4.svg" alt="Bore/Stroke"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Bore/Stroke</div>
                                    <div class="specifications-list-item__value">80mm / 49.7mm </div>
                                  </div>
                                </li>
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-3.svg" alt="Displacement"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Displacement</div>
                                    <div class="specifications-list-item__value">999 cc</div>
                                  </div>
                                </li>
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-1.svg" alt="Engine type"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Engine type</div>
                                    <div class="specifications-list-item__value">4-Stroke Cylinder</div>
                                  </div>
                                </li>
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-2.svg" alt="Engine Power"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Engine Power</div>
                                    <div class="specifications-list-item__value">205hp (151 kW)</div>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="rental-item">
                      <div class="uk-grid uk-grid-small uk-flex-middle" data-uk-grid>
                        <div class="uk-width-3-5@m uk-flex-last@m">
                          <div class="rental-item__img"><img src="assets/img/img-rental.jpg" alt="Ducati X Diavel S"></div>
                        </div>
                        <div class="uk-width-2-5@m uk-flex-first@m">
                          <div class="rental-item__desc">
                            <div class="rental-item__title">2021 Ducati X Diavel S<br> - Glossy Black</div>
                            <div class="rental-item__price">
                              <div class="label">Rent for as low as</div>
                              <div class="price">$35</div>
                              <div class="value"> <span>per </span><span>day</span></div>
                            </div>
                            <div class="rental-item__text">Meet the new Ducati - A beauty with high speed excitement cruiser control, best of both worlds & sporty power.</div>
                            <div class="rental-item__specifications">
                              <ul class="specifications-list">
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-5.svg" alt="Engine type"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Color</div>
                                    <div class="specifications-list-item__value">Black </div>
                                  </div>
                                </li>
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-6.svg" alt="Engine Power"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Category</div>
                                    <div class="specifications-list-item__value">Adventure</div>
                                  </div>
                                </li>
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-4.svg" alt="Bore/Stroke"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Bore/Stroke</div>
                                    <div class="specifications-list-item__value">80mm / 49.7mm </div>
                                  </div>
                                </li>
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-3.svg" alt="Displacement"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Displacement</div>
                                    <div class="specifications-list-item__value">999 cc</div>
                                  </div>
                                </li>
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-1.svg" alt="Engine type"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Engine type</div>
                                    <div class="specifications-list-item__value">4-Stroke Cylinder</div>
                                  </div>
                                </li>
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-2.svg" alt="Engine Power"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Engine Power</div>
                                    <div class="specifications-list-item__value">205hp (151 kW)</div>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="rental-item">
                      <div class="uk-grid uk-grid-small uk-flex-middle" data-uk-grid>
                        <div class="uk-width-3-5@m uk-flex-last@m">
                          <div class="rental-item__img"><img src="assets/img/img-rental.jpg" alt="Ducati X Diavel S"></div>
                        </div>
                        <div class="uk-width-2-5@m uk-flex-first@m">
                          <div class="rental-item__desc">
                            <div class="rental-item__title">2021 Ducati X Diavel S<br> - Glossy Black</div>
                            <div class="rental-item__price">
                              <div class="label">Rent for as low as</div>
                              <div class="price">$35</div>
                              <div class="value"> <span>per </span><span>day</span></div>
                            </div>
                            <div class="rental-item__text">Meet the new Ducati - A beauty with high speed excitement cruiser control, best of both worlds & sporty power.</div>
                            <div class="rental-item__specifications">
                              <ul class="specifications-list">
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-5.svg" alt="Engine type"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Color</div>
                                    <div class="specifications-list-item__value">Black </div>
                                  </div>
                                </li>
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-6.svg" alt="Engine Power"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Category</div>
                                    <div class="specifications-list-item__value">Adventure</div>
                                  </div>
                                </li>
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-4.svg" alt="Bore/Stroke"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Bore/Stroke</div>
                                    <div class="specifications-list-item__value">80mm / 49.7mm </div>
                                  </div>
                                </li>
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-3.svg" alt="Displacement"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Displacement</div>
                                    <div class="specifications-list-item__value">999 cc</div>
                                  </div>
                                </li>
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-1.svg" alt="Engine type"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Engine type</div>
                                    <div class="specifications-list-item__value">4-Stroke Cylinder</div>
                                  </div>
                                </li>
                                <li class="specifications-list-item">
                                  <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-2.svg" alt="Engine Power"></div>
                                  <div class="specifications-list-item__desc">
                                    <div class="specifications-list-item__title">Engine Power</div>
                                    <div class="specifications-list-item__value">205hp (151 kW)</div>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="slider-nav"><a href="#" data-uk-slidenav-previous data-uk-slider-item="previous"></a>
                <div class="slider-nav__count">
                  <ul>
                    <li data-uk-slider-item="0"><span>1</span></li>
                    <li data-uk-slider-item="1"><span>2</span></li>
                    <li data-uk-slider-item="2"><span>3</span></li>
                    <li data-uk-slider-item="3"><span>4</span></li>
                    <li data-uk-slider-item="4"><span>5</span></li>
                    <li data-uk-slider-item="5"><span>6</span></li>
                    <li data-uk-slider-item="6"><span>7</span></li>
                    <li data-uk-slider-item="7"><span>8</span></li>
                  </ul><span>/ 8</span>
                </div><a href="#" data-uk-slidenav-next data-uk-slider-item="next"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-gallery">
        <div class="uk-section uk-container uk-container-large">
          <div class="uk-grid uk-child-width-1-4@m uk-child-width-1-3@s" data-uk-grid data-uk-lightbox>
            <div>
              <div><a href="assets/img/img-gallery-1-big.jpg"><img class="uk-width-1-1" src="assets/img/img-gallery-1.jpg" alt="img-gallery"></a></div>
            </div>
            <div>
              <div><a href="assets/img/img-gallery-2-big.jpg"><img class="uk-width-1-1" src="assets/img/img-gallery-2.jpg" alt="img-gallery"></a></div>
            </div>
            <div>
              <div><a href="assets/img/img-gallery-3-big.jpg"><img class="uk-width-1-1" src="assets/img/img-gallery-3.jpg" alt="img-gallery"></a></div>
            </div>
            <div>
              <div><a href="assets/img/img-gallery-4-big.jpg"><img class="uk-width-1-1" src="assets/img/img-gallery-4.jpg" alt="img-gallery"></a></div>
            </div>
            <div>
              <div><a href="assets/img/img-gallery-5-big.jpg"><img class="uk-width-1-1" src="assets/img/img-gallery-5.jpg" alt="img-gallery"></a></div>
            </div>
            <div>
              <div><a href="assets/img/img-gallery-6-big.jpg"><img class="uk-width-1-1" src="assets/img/img-gallery-6.jpg" alt="img-gallery"></a></div>
            </div>
            <div>
              <div><a href="assets/img/img-gallery-7-big.jpg"><img class="uk-width-1-1" src="assets/img/img-gallery-7.jpg" alt="img-gallery"></a></div>
            </div>
            <div>
              <div><a href="assets/img/img-gallery-8-big.jpg"><img class="uk-width-1-1" src="assets/img/img-gallery-8.jpg" alt="img-gallery"></a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-reviews">
        <div class="uk-section uk-container uk-container-large">
          <div class="uk-grid uk-grid-collapse uk-flex-middle uk-child-width-1-2@m" data-uk-grid>
            <div class="uk-text-center"> <img src="assets/img/img-reviews.png" alt="img-reviews"></div>
            <div>
              <div class="section-title"> <span>Taking rides to a newer level</span>
                <div class="uk-h2">Why people are<br> talking about us</div>
              </div>
              <div class="section-content">
                <div class="reviews-vertical">
                  <div data-uk-slider="autoplay:true">
                    <div class="uk-position-relative" tabindex="-1">
                      <ul class="uk-slider-items uk-grid uk-child-width-1-1">
                        <li>
                          <div class="review-item">
                            <div class="review-item__desc">
                              <p>Magna aliqua quis nostrud exercitation ullamco laboris nisut aliqua yxa consequat duis aute irure dolor iny reprehenderit voluptate velit esse cilum dols sed ipsum nulla pariatur nostrul doney quis nostrud saercitation ullamco laboris nisi ut aliquip reprehenderit.</p>
                            </div>
                            <div class="review-item__user">
                              <div>
                                <div class="review-item__user-avatar"><img src="assets/img/img-review-thumb.jpg" alt="John Martin"></div>
                              </div>
                              <div>
                                <div class="review-item__user-name">John Martin</div>
                                <div class="review-item__user-position">KTM Motorcycle Buyer</div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="review-item">
                            <div class="review-item__desc">
                              <p>Magna aliqua quis nostrud exercitation ullamco laboris nisut aliqua yxa consequat duis aute irure dolor iny reprehenderit voluptate velit esse cilum dols sed ipsum nulla pariatur nostrul doney quis nostrud saercitation ullamco laboris nisi ut aliquip reprehenderit.</p>
                            </div>
                            <div class="review-item__user">
                              <div>
                                <div class="review-item__user-avatar"><img src="assets/img/img-review-thumb.jpg" alt="John Martin"></div>
                              </div>
                              <div>
                                <div class="review-item__user-name">John Martin</div>
                                <div class="review-item__user-position">KTM Motorcycle Buyer</div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="review-item">
                            <div class="review-item__desc">
                              <p>Magna aliqua quis nostrud exercitation ullamco laboris nisut aliqua yxa consequat duis aute irure dolor iny reprehenderit voluptate velit esse cilum dols sed ipsum nulla pariatur nostrul doney quis nostrud saercitation ullamco laboris nisi ut aliquip reprehenderit.</p>
                            </div>
                            <div class="review-item__user">
                              <div>
                                <div class="review-item__user-avatar"><img src="assets/img/img-review-thumb.jpg" alt="John Martin"></div>
                              </div>
                              <div>
                                <div class="review-item__user-name">John Martin</div>
                                <div class="review-item__user-position">KTM Motorcycle Buyer</div>
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
              <ul class="uk-slider-items uk-grid uk-flex-middle uk-text-center uk-child-width-1-1 uk-child-width-1-3@s uk-child-width-1-5@m">
                <li><img src="assets/img/brand-1.png" alt="brand-logo"></li>
                <li><img src="assets/img/brand-2.png" alt="brand-logo"></li>
                <li><img src="assets/img/brand-3.png" alt="brand-logo"></li>
                <li><img src="assets/img/brand-4.png" alt="brand-logo"></li>
                <li><img src="assets/img/brand-5.png" alt="brand-logo"></li>
              </ul>
            </div>
            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
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
