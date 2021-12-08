<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

{{--      <h1 class="logo mr-auto"><a href="index.html"><span>Com</span>pany</a></h1>--}}
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="{{ route('anasayfa') }}" class="logo mr-auto"><img src="{{ asset('fontend/assets/img/logo.png') }}" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="{{ Route::is('anasayfa') ? 'active' : '' }}"><a href="{{ route('anasayfa') }}">Anasayfa</a></li>

          <li class="drop-down"><a href="">E Fatura</a>
            <ul>
              <li class="{{ Route::is('efatura') ? 'active' : '' }}"><a href="{{ route('efatura') }}">E-Fatura nedir?</a></li>
                <li class="{{ Route::is('earsiv') ? 'active' : '' }}"><a href="{{ route('earsiv') }}">E-Arşiv nedir?</a></li>
              <li class="{{ Route::is('zorunlu') ? 'active' : '' }}"><a href="{{ route('zorunlu') }}">E-Fatura ve E-Arşiv Kimlere Zorunlu?</a></li>
                <li class="{{ Route::is('neden') ? 'active' : '' }}"><a href="{{ route('neden') }}">Neden Ecza-Fatura'ya Geçmeyelim?</a></li>
            </ul>
          </li>
            <li class="drop-down"><a href="">Sizden Gelenler</a>
                <ul>
                    <li class="{{ Route::is('musteri') ? 'active' : '' }}"><a href="{{ route('musteri') }}">Müşteri Yorumlarımız</a></li>
                    <li class="{{ Route::is('faq') ? 'active' : '' }}"><a href="{{ route('faq') }}">Sık Sorulan Sorular</a></li>
                </ul>
            </li>

          <li class="{{ Route::is('fiyatlandirma') ? 'active' : '' }}"><a href="{{ route('fiyatlandirma') }}">Fiyatlandırma</a></li>
            <li class="{{ Route::is('edefter') ? 'active' : '' }}"><a href="{{ route('edefter') }}">e-Defter</a></li>
            <li><a href="{{ route('iletisim') }}">İletişim</a></li>
{{--          <li><a href="{{ route('blog') }}">Blog</a></li>--}}
{{--          --}}
{{--          <li><a href="{{ route('login') }}">Login</a></li>--}}

        </ul>
      </nav><!-- .nav-menu -->

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
      </div>

    </div>
  </header><!-- End Header -->
