<style>
    .user-info {
    display: flex;
    align-items: center;
}

    .user-info .uk-icon {
        margin-right: 10px; /* Adjust spacing as needed */
    }

</style>

<header class="page-header page-header-transparent">
  <div class="page-header__inner">
    <div class="page-header__left">
      <div class="logo"><a class="logo__link" href="/">
          <div class="logo__icon"><img src="{{asset('frontend/img/logo.png')}}" width="25%" alt="Kuchai Motor Sdn Bhd">
          </div>
          {{-- <div class="logo__text">Kuchai Motor</div> --}}
        </a></div>
    </div>
    <div class="page-header__center">
      <nav class="page-nav" data-uk-navbar>
        <ul class="uk-navbar-nav">
          <li><a href="/">Home</a>
          </li>
          {{-- <li><a href="/about-us">About Us</a></li> --}}
          <li><a href="#">Motorcycles </a>
            <div class="uk-navbar-dropdown">
              <ul class="uk-nav uk-navbar-dropdown-nav">
                <li><a href="{{route('new.motors')}}">New Motorcycles</a></li>
                <li><a href="{{route('used.motors')}}">Used Motorcycles</a></li>
              </ul>
            </div>
          </li>

          <li><a href="{{route('accessories')}}">Accessories</a>
            {{-- <div class="uk-navbar-dropdown">
              <ul class="uk-nav uk-navbar-dropdown-nav">
                <li><a href="page-blog-grid.html">Page Blog grid</a></li>
                <li><a href="page-blog-list.html">Page Blog list</a></li>
                <li><a href="page-blog-article.html">Page Blog article</a></li>
              </ul>
            </div> --}}
          </li>

          <li><a href="{{route('contact')}}">Contact</a></li>

          <li><a href="#">Languages </a>
            <div class="uk-navbar-dropdown">
              <ul class="uk-nav uk-navbar-dropdown-nav">
                <li>

                  <a type="button" onclick="changeLanguage('en')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" viewBox="0 0 32 24">
                      <defs>
                        <path id="flagpackGbUkm0" fill="#fff" d="M0 0h32v24H0z" />
                      </defs>
                      <g fill="none">
                        <g clip-path="url(#flagpackGbUkm3)">
                          <use href="#flagpackGbUkm0" />
                          <path fill="#2E42A5" fill-rule="evenodd" d="M0 0v24h32V0H0Z" clip-rule="evenodd" />
                          <mask id="flagpackGbUkm1" width="32" height="24" x="0" y="0" maskUnits="userSpaceOnUse"
                            style="mask-type:luminance">
                            <path fill="#fff" fill-rule="evenodd" d="M0 0v24h32V0H0Z" clip-rule="evenodd" />
                          </mask>
                          <g mask="url(#flagpackGbUkm1)">
                            <path fill="#fff"
                              d="m-3.563 22.285l7.042 2.979l28.68-22.026l3.715-4.426l-7.53-.995l-11.698 9.491l-9.416 6.396l-10.793 8.581Z" />
                            <path fill="#F50100" d="M-2.6 24.372L.989 26.1L34.54-1.599h-5.037l-32.102 25.97Z" />
                            <path fill="#fff"
                              d="m35.563 22.285l-7.042 2.979L-.159 3.238l-3.715-4.426l7.53-.995l11.698 9.491l9.416 6.396l10.793 8.581Z" />
                            <path fill="#F50100"
                              d="m35.323 23.783l-3.588 1.728l-14.286-11.86l-4.236-1.324l-17.445-13.5H.806l17.434 13.18l4.631 1.588l12.452 10.188Z" />
                            <mask id="flagpackGbUkm2" fill="#fff">
                              <path fill-rule="evenodd"
                                d="M19.778-2h-7.556V8H-1.972v8h14.194v10h7.556V16h14.25V8h-14.25V-2Z"
                                clip-rule="evenodd" />
                            </mask>
                            <path fill="#F50100" fill-rule="evenodd"
                              d="M19.778-2h-7.556V8H-1.972v8h14.194v10h7.556V16h14.25V8h-14.25V-2Z"
                              clip-rule="evenodd" />
                            <path fill="#fff"
                              d="M12.222-2v-2h-2v2h2Zm7.556 0h2v-2h-2v2ZM12.222 8v2h2V8h-2ZM-1.972 8V6h-2v2h2Zm0 8h-2v2h2v-2Zm14.194 0h2v-2h-2v2Zm0 10h-2v2h2v-2Zm7.556 0v2h2v-2h-2Zm0-10v-2h-2v2h2Zm14.25 0v2h2v-2h-2Zm0-8h2V6h-2v2Zm-14.25 0h-2v2h2V8Zm-7.556-8h7.556v-4h-7.556v4Zm2 8V-2h-4V8h4Zm-16.194 2h14.194V6H-1.972v4Zm2 6V8h-4v8h4Zm12.194-2H-1.972v4h14.194v-4Zm2 12V16h-4v10h4Zm5.556-2h-7.556v4h7.556v-4Zm-2-8v10h4V16h-4Zm16.25-2h-14.25v4h14.25v-4Zm-2-6v8h4V8h-4Zm-12.25 2h14.25V6h-14.25v4Zm-2-12V8h4V-2h-4Z"
                              mask="url(#flagpackGbUkm2)" />
                          </g>
                        </g>
                        <defs>
                          <clipPath id="flagpackGbUkm3">
                            <use href="#flagpackGbUkm0" />
                          </clipPath>
                        </defs>
                      </g>
                    </svg>
                    English </a>
                </li>
                <li>
                  <a type="button" onclick="changeLanguage('ms')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="72" viewBox="0 0 72 72">
                      <path fill="#fff" d="M5 17h62v38H5z" />
                      <path fill="#d22f27" d="M5 17h62v5H5zm0 9h62v4H5zm0 8h62v4H5zm0 8h62v4H5zm0 8h62v5H5z" />
                      <path fill="#1e50a0" d="M5 17h29v21H5z" />
                      <g fill="#f1b31c" stroke="#f1b31c" stroke-linecap="round" stroke-linejoin="round">
                        <path
                          d="M13.845 27.5a6.215 6.215 0 0 1 5.405-5.885a7.487 7.487 0 0 0-1.297-.115c-3.702 0-6.703 2.686-6.703 6s3 6 6.703 6a7.487 7.487 0 0 0 1.297-.115a6.215 6.215 0 0 1-5.405-5.885Z" />
                        <path
                          d="m24.612 25.969l2.097-3.418l-1.451 3.723l3.409-2.192l-2.964 2.74l4.047-.532l-3.889 1.214l3.883 1.233l-4.044-.552l2.949 2.755l-3.398-2.209l1.433 3.73l-2.079-3.428L24.236 33l-.348-3.969l-2.097 3.418l1.451-3.723l-3.409 2.192l2.964-2.74l-4.047.532l3.889-1.214l-3.883-1.233l4.044.552l-2.949-2.755l3.398 2.209l-1.433-3.73l2.079 3.428l.369-3.967l.348 3.969z" />
                      </g>
                      <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 17h62v38H5z" />
                    </svg>
                    Bahasa Melayu
                  </a>
                </li>
                <div id="google_translate_element"></div>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
    </div>


    <div class="page-header__right">
      {{-- <a class="uk-navbar-toggle search-btn" href="#modal-search" data-uk-search-icon data-uk-toggle></a> --}}

      @auth

      <a class="uk-navbar-toggle cart-btn"  href="#!">
        <div class="user-info">
            <div class="uk-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"/>
                </svg>
            </div>
            <span>{{ Auth::user()->name }}</span>
        </div>
      </a>
      @endauth

        @guest
        <!-- User is not authenticated, show login button -->
        <div style="padding-right:10px;">
            <a href="{{ route('login') }}" class="uk-button uk-button-danger" >Login </a>

        </div>

        @endguest

      <a class="uk-navbar-toggle menu-btn" href="#offcanvas" data-uk-toggle>
        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-list"
          viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
        </svg>
      </a>
    </div>
  </div>
</header>

<script>
  function googleTranslateElementInit() {
  new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
  }

  function changeLanguage(selectedLanguage) {
  const googleTranslateElement = document.querySelector('#google_translate_element');
  const selectElement = document.querySelector('.goog-te-combo');

  selectElement.value = selectedLanguage

  const event = new Event('change');
  selectElement.dispatchEvent(event);
  }
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>
