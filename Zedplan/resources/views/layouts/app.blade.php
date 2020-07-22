<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ZedPlan') }}</title>

    <!-- Fonts -->

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    <!-- Favicons -->
    <link href="{{ asset ('img/favicon.png') }}" rel="icon">
    <link href="{{ asset ('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nivo-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/venobox.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset ('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Styles -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
</head>

<body data-spy="scroll" data-target="#navbar-example">

    <!-- ======= Header ======= -->
        <header id="header" class="fixed-top">
          <div class="container d-flex">

            <div class="logo mr-auto">
              <h1 class="text-light"><a href="{{ url ('/')}}"><span>Z</span>edPlan</a></h1>
              <!-- Uncomment below if you prefer to use an image logo -->
              <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu d-none d-lg-block">
              <ul>
                @if(Request::url() === '/')
                    <li class="active"><a href="#header">Inicio</a></li>
                    <li><a href="#about">Sobre Nosotros</a></li>
                    <li><a href="#services">Servicios</a></li>
                    <li><a href="#team">Equipo</a></li>
                    <li><a href="#portfolio">Portafolio</a></li>
                    <li><a href="#contact">Contacto</a></li>
                @endif
                @guest
                    <li><a href="{{ route('login') }}">Ingresar</a></li>
                    <li><a href="{{ route('register') }}">Registrarse</a></li>
                @else
                  <li class="drop-down"><a href="">{{ ucfirst(Auth::user()->username) }}</a>
                    <ul>
                      <li><a href="{{ route('perfil_show') }}">Perfil</a></li>
                      <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Salir</a></li>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
                    </ul>
                  </li>
              </ul>
            </nav><!-- .nav-menu -->

          </div>
          @endguest
        </header><!-- End Header -->

        <main style="padding-top: 110px;">
            @yield('content')
            <hr>
        </main>
        <!-- ======= Footer ======= -->
        <footer>
          <div class="footer-area">
            <div class="container">
              <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="footer-content">
                    <div class="footer-head">
                      <div class="footer-logo">
                        <h2><span>Z</span>edPlan</h2>
                      </div>

                      <br>
                      <div class="footer-icons">
                        <ul>
                          <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="fa fa-google"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end single footer -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="footer-content">
                    <div class="footer-head">
                      <h4>Contacto</h4>
                      <div class="footer-contacts">
                        <p><span>Telefono:</span> 0800-333-5842</p>
                        <p><span>Email:</span> contacto@zedplan.com</p>
                        <p><span>Horario Laboral:</span> 9:00-17:00</p>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end single footer -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="footer-content">
                    <div class="footer-head">
                      <h4>Instagram</h4>
                      <div class="flicker-img">
                        <a href="#"><img src="{{ asset ('img/portfolio/1.jpg') }}" alt=""></a>
                        <a href="#"><img src="{{ asset ('img/portfolio/2.jpg') }}" alt=""></a>
                        <a href="#"><img src="{{ asset ('img/portfolio/3.jpg') }}" alt=""></a>
                        <a href="#"><img src="{{ asset ('img/portfolio/4.jpg') }}" alt=""></a>
                        <a href="#"><img src="{{ asset ('img/portfolio/5.jpg') }}" alt=""></a>
                        <a href="#"><img src="{{ asset ('img/portfolio/6.jpg') }}" alt=""></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </footer>
        <!-- End  Footer -->
    <!-- Vendor JS Files -->
    <script src="{{ asset ('js/jquery.min.js') }}"></script>
    <script src="{{ asset ('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset ('js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset ('js/validate.js') }}"></script>
    <script src="{{ asset ('js/jquery.appear.js') }}"></script>
    <script src="{{ asset ('js/jquery.knob.js') }}"></script>
    <script src="{{ asset ('js/parallax.js') }}"></script>
    <script src="{{ asset ('js/wow.min.js') }}"></script>
    <script src="{{ asset ('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset ('js/jquery.nivo.slider.js') }}"></script>
    <script src="{{ asset ('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset ('js/venobox.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset ('js/main.js') }}"></script>

</body>
@yield('scripts')
</html>
