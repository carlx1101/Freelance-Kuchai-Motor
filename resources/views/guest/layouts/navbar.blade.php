<header class="page-header page-header-transparent">
    <div class="page-header__inner">
      <div class="page-header__left">
        <div class="logo"><a class="logo__link" href="index.html">
            <div class="logo__icon"><img src="assets/img/logo.svg" alt="KeyMoto"></div>
            <div class="logo__text">Kuchai Motor</div>
          </a></div>
      </div>
      <div class="page-header__center">
        <nav class="page-nav" data-uk-navbar>
          <ul class="uk-navbar-nav">
            <li><a href="/">Home</a>
            </li>
            <li><a href="/about-us">About Us</a></li>
            <li><a href="#">Motorcycles </a>
              <div class="uk-navbar-dropdown">
                <ul class="uk-nav uk-navbar-dropdown-nav">
                  <li><a href="{{route('new.motors')}}">New Motorcycles</a></li>
                  <li><a href="{{route('used.motors')}}">Used Motorcycles</a></li>
                </ul>
              </div>
            </li>

            <li><a href="#">Accessories</a>
              {{-- <div class="uk-navbar-dropdown">
                <ul class="uk-nav uk-navbar-dropdown-nav">
                  <li><a href="page-blog-grid.html">Page Blog grid</a></li>
                  <li><a href="page-blog-list.html">Page Blog list</a></li>
                  <li><a href="page-blog-article.html">Page Blog article</a></li>
                </ul>
              </div> --}}
            </li>

            <li><a href="{{route('contact')}}">Contact Us</a></li>
          </ul>
        </nav>
      </div>


      <div class="page-header__right">
        {{-- <a class="uk-navbar-toggle search-btn" href="#modal-search" data-uk-search-icon data-uk-toggle></a>
        <a class="uk-navbar-toggle cart-btn" href="#!"> --}}
          {{-- <div class="cart-btn__icon uk-icon" data-uk-icon="cart"><span class="cart-btn__count">2</span></div> --}}
        </a><a class="uk-navbar-toggle menu-btn" href="#offcanvas" data-uk-toggle><img src="assets/img/icons/menu.svg" alt="menu"></a></div>
    </div>
  </header>
