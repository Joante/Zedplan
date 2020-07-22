@extends('layouts.app')

@section('content')
        <!-- ======= Slider Section ======= -->
        <div id="home" class="slider-area">
          <div class="bend niceties preview-2">
            <div id="ensign-nivoslider" class="slides">
              <img src="{{ asset ('img/slider/slider1.jpg') }}" alt="" title="#slider-direction-1" />
              <img src="{{ asset ('img/slider/slider2.jpg') }}" alt="" title="#slider-direction-2" />
              <img src="{{ asset ('img/slider/slider3.jpg') }}" alt="" title="#slider-direction-3" />
            </div>

            <!-- direction 1 -->
            <div id="slider-direction-1" class="slider-direction slider-one">
              <div class="container">
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="slider-content">
                      <!-- layer 1 -->
                      <div class="layer-1-1 hidden-xs wow animate__slideInDown animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                        <h2 class="title1">La Mejor Informacion Empresarial</h2>
                      </div>
                      <!-- layer 2 -->
                      <div class="layer-1-2 wow animate__fadeIn animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                        <h1 class="title2">Estamos En El Negocio De Ayudarte a Iniciar Tu Negocio</h1>
                      </div>
                      <!-- layer 3 -->
                      <div class="layer-1-3 hidden-xs wow animate__slideInUp animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                        <a class="ready-btn right-btn page-scroll" href="#services">Ver Servicios</a>
                        <a class="ready-btn page-scroll" href="#about">Conocer Mas</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- direction 2 -->
            <div id="slider-direction-2" class="slider-direction slider-two">
              <div class="container">
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="slider-content text-center">
                      <!-- layer 1 -->
                      <div class="layer-1-1 hidden-xs wow animate__slideInUp animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                        <h2 class="title1">La Mejor Informacion Empresarial</h2>
                      </div>
                      <!-- layer 2 -->
                      <div class="layer-1-2 wow animate__fadeIn animate__animated" data-wow-duration="2s" data-wow-delay=".1s">
                        <h1 class="title2">Estamos En El Negocio De Obtener Calidad De Servicio Empresarial</h1>
                      </div>
                      <!-- layer 3 -->
                      <div class="layer-1-3 hidden-xs wow animate__slideInUp animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                        <a class="ready-btn right-btn page-scroll" href="#services">Ver Servicios</a>
                        <a class="ready-btn page-scroll" href="#about">Conocer Mas</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- direction 3 -->
            <div id="slider-direction-3" class="slider-direction slider-two">
              <div class="container">
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="slider-content">
                      <!-- layer 1 -->
                      <div class="layer-1-1 hidden-xs wow animate__slideInUp animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                        <h2 class="title1">La Mejor Informacion Empresarial</h2>
                      </div>
                      <!-- layer 2 -->
                      <div class="layer-1-2 wow animate__fadeIn animate__animated" data-wow-duration="2s" data-wow-delay=".1s">
                        <h1 class="title2">Ayudando A La Seguridad Empresarial Y A la Paz Mental Para Tu Familia</h1>
                      </div>
                      <!-- layer 3 -->
                      <div class="layer-1-3 hidden-xs wow animate__slideInUp animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                        <a class="ready-btn right-btn page-scroll" href="#services">Ver Servicios</a>
                        <a class="ready-btn page-scroll" href="#about">Conocer Mas</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Slider -->

        <main id="main">

          <!-- ======= About Section ======= -->
          <div id="about" class="about-area area-padding">
            <div class="container">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="section-headline text-center">
                    <h2>Acerca de ZedPlan</h2>
                  </div>
                </div>
              </div>
              <div class="row">
                <!-- single-well start-->
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="well-left">
                    <div class="single-well">
                      <a href="#">
                        <img src="{{ asset ('img/about/1.jpg') }}" alt="">
                      </a>
                    </div>
                  </div>
                </div>
                <!-- single-well end-->
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="well-middle">
                    <div class="single-well">
                      <a href="#">
                        <h4 class="sec-head">Mantenimiento de Projecto</h4>
                      </a>
                      <ul>
                        <li>
                          <i class="fa fa-check"></i> Paquete de diseño de interiores
                        </li>
                        <li>
                          <i class="fa fa-check"></i> Construccion de su hogar
                        </li>
                        <li>
                          <i class="fa fa-check"></i> Arreglo de techo residencial
                        </li>
                        <li>
                          <i class="fa fa-check"></i> Renovacion de oficina comercial
                        </li>
                        <li>
                          <i class="fa fa-check"></i> Construccion de productos de calidad
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- End col-->
              </div>
            </div>
          </div><!-- End About Section -->

          <!-- ======= Services Section ======= -->
          <div id="services" class="services-area area-padding">
            <div class="container">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="section-headline services-head text-center">
                    <h2>Nuestros Servicios</h2>
                  </div>
                </div>
              </div>
              <div class="row text-center">
                <!-- Start Left services -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="about-move">
                    <div class="services-details">
                      <div class="single-services">
                        <a class="services-icon" href="#">
                          <i class="fa fa-code"></i>
                        </a>
                        <h4>Desarrollador Experto</h4>
                      </div>
                    </div>
                    <!-- end about-details -->
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="about-move">
                    <div class="services-details">
                      <div class="single-services">
                        <a class="services-icon" href="#">
                          <i class="fa fa-camera-retro"></i>
                        </a>
                        <h4>Diseñador Creativo</h4>
                      </div>
                    </div>
                    <!-- end about-details -->
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <!-- end col-md-4 -->
                  <div class=" about-move">
                    <div class="services-details">
                      <div class="single-services">
                        <a class="services-icon" href="#">
                          <i class="fa fa-wordpress"></i>
                        </a>
                        <h4>Desarrollador Wordpress</h4>
                      </div>
                    </div>
                    <!-- end about-details -->
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <!-- end col-md-4 -->
                  <div class=" about-move">
                    <div class="services-details">
                      <div class="single-services">
                        <a class="services-icon" href="#">
                          <i class="fa fa-camera-retro"></i>
                        </a>
                        <h4>Community Manager </h4>
                      </div>
                    </div>
                    <!-- end about-details -->
                  </div>
                </div>
                <!-- End Left services -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <!-- end col-md-4 -->
                  <div class=" about-move">
                    <div class="services-details">
                      <div class="single-services">
                        <a class="services-icon" href="#">
                          <i class="fa fa-bar-chart"></i>
                        </a>
                        <h4>Experto en SEO</h4>
                      </div>
                    </div>
                    <!-- end about-details -->
                  </div>
                </div>
                <!-- End Left services -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <!-- end col-md-4 -->
                  <div class=" about-move">
                    <div class="services-details">
                      <div class="single-services">
                        <a class="services-icon" href="#">
                          <i class="fa fa-ticket"></i>
                        </a>
                        <h4>Soporte 24/7</h4>
                      </div>
                    </div>
                    <!-- end about-details -->
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Services Section -->

          <!-- ======= Skills Section ======= -->
          <div class="our-skill-area fix hidden-sm">
            <div class="test-overly"></div>
            <div class="skill-bg area-padding-2">
              <div class="container">
                <!-- section-heading end -->
                <div class="row">
                  <!-- single-skill start -->
                  <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                    <div class="single-skill">
                      <div class="progress-circular">
                        <input type="text" class="knob" value="0" data-rel="95" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                        <h3 class="progress-h4">Diseño Web</h3>
                      </div>
                    </div>
                  </div>
                  <!-- single-skill end -->
                  <!-- single-skill start -->
                  <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                    <div class="single-skill">
                      <div class="progress-circular">
                        <input type="text" class="knob" value="0" data-rel="85" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                        <h3 class="progress-h4">Diseñador Grafico</h3>
                      </div>
                    </div>
                  </div>
                  <!-- single-skill end -->
                  <!-- single-skill start -->
                  <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                    <div class="single-skill">
                      <div class="progress-circular">
                        <input type="text" class="knob" value="0" data-rel="75" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                        <h3 class="progress-h4">Desarrollador Php</h3>
                      </div>
                    </div>
                  </div>
                  <!-- single-skill end -->
                  <!-- single-skill start -->
                  <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                    <div class="single-skill">
                      <div class="progress-circular">
                        <input type="text" class="knob" value="0" data-rel="65" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                        <h3 class="progress-h4">Java Script</h3>
                      </div>
                    </div>
                  </div>
                  <!-- single-skill end -->
                </div>
              </div>
            </div>
          </div><!-- End Skills Section -->

          <!-- ======= Team Section ======= -->
          <div id="team" class="our-team-area area-padding">
            <div class="container">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="section-headline text-center">
                    <h2>Nuestro Equipo Especial</h2>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12">
                  <div class="single-team-member">
                    <div class="team-img">
                      <a href="#">
                        <img src="{{ asset ('img/team/1.jpg') }}" alt="">
                      </a>
                      <div class="team-social-icon text-center">
                        <ul>
                          <li>
                            <a href="#">
                              <i class="fa fa-facebook"></i>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <i class="fa fa-twitter"></i>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <i class="fa fa-instagram"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="team-content text-center">
                      <h4>Jhon Mickel</h4>
                      <p>Seo</p>
                    </div>
                  </div>
                </div>
                <!-- End column -->
                <div class="col-md-3 col-sm-3 col-xs-12">
                  <div class="single-team-member">
                    <div class="team-img">
                      <a href="#">
                        <img src="{{ asset ('img/team/2.jpg') }}" alt="">
                      </a>
                      <div class="team-social-icon text-center">
                        <ul>
                          <li>
                            <a href="#">
                              <i class="fa fa-facebook"></i>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <i class="fa fa-twitter"></i>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <i class="fa fa-instagram"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="team-content text-center">
                      <h4>Andrew Arnold</h4>
                      <p>Desarrollador Web</p>
                    </div>
                  </div>
                </div>
                <!-- End column -->
                <div class="col-md-3 col-sm-3 col-xs-12">
                  <div class="single-team-member">
                    <div class="team-img">
                      <a href="#">
                        <img src="{{ asset ('img/team/3.jpg') }}" alt="">
                      </a>
                      <div class="team-social-icon text-center">
                        <ul>
                          <li>
                            <a href="#">
                              <i class="fa fa-facebook"></i>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <i class="fa fa-twitter"></i>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <i class="fa fa-instagram"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="team-content text-center">
                      <h4>Lellien Linda</h4>
                      <p>Diseñadora Web</p>
                    </div>
                  </div>
                </div>
                <!-- End column -->
                <div class="col-md-3 col-sm-3 col-xs-12">
                  <div class="single-team-member">
                    <div class="team-img">
                      <a href="#">
                        <img src="{{ asset ('img/team/4.jpg') }}" alt="">
                      </a>
                      <div class="team-social-icon text-center">
                        <ul>
                          <li>
                            <a href="#">
                              <i class="fa fa-facebook"></i>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <i class="fa fa-twitter"></i>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <i class="fa fa-instagram"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="team-content text-center">
                      <h4>Jhon Powel</h4>
                      <p>Experto en SEO</p>
                    </div>
                  </div>
                </div>
                <!-- End column -->
              </div>
            </div>
          </div><!-- End Team Section -->

          <!-- ======= Rviews Section ======= -->
          <div class="reviews-area">
            <div class="row no-gutters">
              <div class="col-lg-6 py-0">
                <img src="{{ asset ('img/about/2.jpg') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-6 work-right-text d-flex align-items-center">
                <div class="px-5 py-5 py-lg-0">
                  <h2>trabaja con nosotros</h2>
                  <h5>Diseño Web, Consultoria, Construccion y Co-operacion de edificios destacados.</h5>
                  <a href="#contact" class="ready-btn scrollto">Contactenos</a>
                </div>
              </div>
            </div>
          </div><!-- End Rviews Section -->

          <!-- ======= Portfolio Section ======= -->
          <div id="portfolio" class="portfolio-area area-padding fix">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="section-headline text-center">
                    <h2>Nuestro Portafolio</h2>
                  </div>
                </div>
              </div>
              <div class="row wesome-project-1 fix">
                <!-- Start Portfolio -page -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="awesome-menu ">
                    <ul class="project-menu">
                      <li>
                        <a href="#" class="active" data-filter="*">Todos</a>
                      </li>
                      <li>
                        <a href="#" data-filter=".development">Desarrollo</a>
                      </li>
                      <li>
                        <a href="#" data-filter=".design">Diseño</a>
                      </li>
                      <li>
                        <a href="#" data-filter=".photo">Photoshop</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="row awesome-project-content">
                <!-- single-awesome-project start -->
                <div class="col-md-4 col-sm-4 col-xs-12 design development">
                  <div class="single-awesome-project">
                    <div class="awesome-img">
                      <a href="#"><img src="{{ asset ('img/portfolio/1.jpg') }}" alt="" /></a>
                      <div class="add-actions text-center">
                        <div class="project-dec">
                          <a class="venobox" data-gall="myGallery" href="{{ asset ('img/portfolio/1.jpg') }}">
                            <h4>Business City</h4>
                            <span>Desarrollo Web</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- single-awesome-project end -->
                <!-- single-awesome-project start -->
                <div class="col-md-4 col-sm-4 col-xs-12 photo">
                  <div class="single-awesome-project">
                    <div class="awesome-img">
                      <a href="#"><img src="{{ asset ('img/portfolio/2.jpg') }}" alt="" /></a>
                      <div class="add-actions text-center">
                        <div class="project-dec">
                          <a class="venobox" data-gall="myGallery" href="{{ asset ('img/portfolio/2.jpg') }}">
                            <h4>Blue Sea</h4>
                            <span>Photoshop</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- single-awesome-project end -->
                <!-- single-awesome-project start -->
                <div class="col-md-4 col-sm-4 col-xs-12 design">
                  <div class="single-awesome-project">
                    <div class="awesome-img">
                      <a href="#"><img src="{{ asset ('img/portfolio/3.jpg') }}" alt="" /></a>
                      <div class="add-actions text-center">
                        <div class="project-dec">
                          <a class="venobox" data-gall="myGallery" href="{{ asset ('img/portfolio/3.jpg') }}">
                            <h4>Beautiful Nature</h4>
                            <span>Diseño Web</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- single-awesome-project end -->
                <!-- single-awesome-project start -->
                <div class="col-md-4 col-sm-4 col-xs-12 photo development">
                  <div class="single-awesome-project">
                    <div class="awesome-img">
                      <a href="#"><img src="{{ asset ('img/portfolio/4.jpg') }}" alt="" /></a>
                      <div class="add-actions text-center">
                        <div class="project-dec">
                          <a class="venobox" data-gall="myGallery" href="{{ asset ('img/portfolio/4.jpg') }}">
                            <h4>Creative Team</h4>
                            <span>Diseño Web</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- single-awesome-project end -->
                <!-- single-awesome-project start -->
                <div class="col-md-4 col-sm-4 col-xs-12 development">
                  <div class="single-awesome-project">
                    <div class="awesome-img">
                      <a href="#"><img src="{{ asset ('img/portfolio/5.jpg') }}" alt="" /></a>
                      <div class="add-actions text-center text-center">
                        <div class="project-dec">
                          <a class="venobox" data-gall="myGallery" href="{{ asset ('img/portfolio/5.jpg') }}">
                            <h4>Beautiful Flower</h4>
                            <span>Desarrollo Web</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- single-awesome-project end -->
                <!-- single-awesome-project start -->
                <div class="col-md-4 col-sm-4 col-xs-12 design photo">
                  <div class="single-awesome-project">
                    <div class="awesome-img">
                      <a href="#"><img src="{{ asset ('img/portfolio/6.jpg') }}" alt="" /></a>
                      <div class="add-actions text-center">
                        <div class="project-dec">
                          <a class="venobox" data-gall="myGallery" href="{{ asset ('img/portfolio/6.jpg') }}">
                            <h4>Night Hill</h4>
                            <span>Photoshop</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- single-awesome-project end -->
              </div>
            </div>
          </div>
          <!-- End Portfolio Section -->

          <!-- ======= Suscribe Section ======= -->
          <div class="suscribe-area">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
                  <div class="suscribe-text text-center">
                    <h3>Bienvenido a nuestra compania ZedPlan</h3>
                    <a class="sus-btn" href="#">Conseguir Cotizacion</a>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Suscribe Section -->

          <!-- ======= Contact Section ======= -->
          <div id="contact" class="contact-area">
            <div class="contact-inner area-padding">
              <div class="contact-overly"></div>
              <div class="container ">
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                      <h2>Contactenos</h2>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <!-- Start contact icon column -->
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-icon text-center">
                      <div class="single-icon">
                        <i class="fa fa-mobile"></i>
                        <p>
                          Telefono: 0800-333-5842<br>
                          <span>Lunes-Viernes (9:00-17:00)</span>
                        </p>
                      </div>
                    </div>
                  </div>
                  <!-- Start contact icon column -->
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-icon text-center">
                      <div class="single-icon">
                        <i class="fa fa-envelope-o"></i>
                        <p>
                          Email: info@zedplan.com<br>
                          <span>Web: www.zedplan.com</span>
                        </p>
                      </div>
                    </div>
                  </div>
                  <!-- Start contact icon column -->
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-icon text-center">
                      <div class="single-icon">
                        <i class="fa fa-map-marker"></i>
                        <p>
                          Ubicacion: Av. Corrientes 541<br>
                          <span>Buenos Aires, Argentina</span>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">

                  <!-- Start Google Map -->
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <!-- Start Map -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5523.0854276251075!2d-58.37591267938004!3d-34.602992134947264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccacd075f1ca7%3A0xaefb6b742bb3e14a!2sAv.%20Corrientes%20541%2C%20C1043AAF%20CABA!5e0!3m2!1ses!2sar!4v1595385889088!5m2!1ses!2sar" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <!-- End Map -->
                  </div>
                  <!-- End Google Map -->

                  <!-- Start  contact -->
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form contact-form">
                      <form action="#" method="post" role="form" class="php-email-form">
                        <div class="form-group">
                          <input type="text" name="name" class="form-control" id="name" placeholder="Su Nombre" data-rule="minlen:4" data-msg="Por favor escriba al menos 4 caracteres" />
                          <div class="validate"></div>
                        </div>
                        <div class="form-group">
                          <input type="email" class="form-control" name="email" id="email" placeholder="Su Email" data-rule="email" data-msg="Por favor ingrese un email valido" />
                          <div class="validate"></div>
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Por favor escriba como minimo 8 caracteres de asunto" />
                          <div class="validate"></div>
                        </div>
                        <div class="form-group">
                          <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor escriba algo para nosotros" placeholder="Mensaje"></textarea>
                          <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                          <div class="loading">Cargando</div>
                          <div class="error-message"></div>
                          <div class="sent-message">Su mensaje fue enviado. Muchas gracias!</div>
                        </div>
                        <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
                      </form>
                    </div>
                  </div>
                  <!-- End Left contact -->
                </div>
              </div>
            </div>
          </div><!-- End Contact Section -->

@endsection