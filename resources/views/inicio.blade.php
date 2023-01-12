<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Inicio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->

    

  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <script src="https://kit.fontawesome.com/d31b6d10c1.js" crossorigin="anonymous"></script>

<meta name="csrf-token" content="{{ csrf_token() }}">
   

   <!-- Include script -->
   <script type="text/javascript">
   function callbackThen(response) {

     // read Promise object
     response.json().then(function(data) {
       console.log(data);
       if(data.success && data.score >= 0.6) {
          console.log('valid recaptcha');
       } else {
          document.getElementById('contactForm').addEventListener('submit', function(event) {
             event.preventDefault();
             alert('recaptcha error');
          });
       }
     });
   }

   function callbackCatch(error){
      console.error('Error:', error)
   }
   </script>

   {!! htmlScriptTagJsApi([
      'callback_then' => 'callbackThen',
      'callback_catch' => 'callbackCatch',
   ]) !!}
   
   <style>
       .back-to-top{
           left:15px!important;
       }
   </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

     <!-- <h1 class="logo me-auto me-lg-0"><a href="index.html">Mi<span>.</span></a></h1>-->
     
       <a href="#" class="logo me-auto me-lg-0"><img src="assets/img/mittum-white-logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#">Inicio</a></li>
          <li><a class="nav-link scrollto" href="#about">Sobre nosotros</a></li>
          <li><a class="nav-link scrollto " href="#counts">Clientes</a></li>
          <!--<li class="dropdown"><a href="#"><span>Email Marketing</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Email Marketing</a></li>
              <li><a href="#">Datos Email Marketing</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>-->
         <!-- <li><a class="nav-link scrollto " href="#portfolio">Agencias</a></li>-->
          <li><a class="nav-link scrollto" href="#team">Recursos</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contacto</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <!--<a href="#about" class="get-started-btn scrollto">Login</a>-->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>La seguridad de la información </h1>
          <h2>debe de ser una de las primeras cosas a tomar en cuenta al gestionar tus campañas de email marketing. <br/>Envía, mide los resultados y optimiza tus campañas de una manera rápida y sencilla, teniendo la infraestructura dentro de territorio nacional. </h2>
          
          <h2>¿Buscas experiencia y seguridad?<br/><br/></h2>
            
            <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Solicita una demo aquí</a>
        </div>
      </div>

     <!-- <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-google-fill"></i>
            <h3><a href="">Analytics</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="fa-brands fa-wordpress"></i>
          
            <h3><a href="">WordPress</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-database-2-line"></i>
            <h3><a href="">Google Data Studio</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="fa-brands fa-magento"></i>
            <h3><a href="">Magento</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="fa-solid fa-laptop"></i>

            <h3><a href="">PrestaShop</a></h3>
          </div>
        </div>
      </div> -->

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/hero-image-v2-mittum-email-marketing.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>Una forma sencilla de crear tus campañas de email marketing.</h3>
            <p class="fst-italic">
              Crea emails adaptados a cualquier plataforma, envía, mide los resultados y optimiza tus campañas de una manera rápida y sencilla.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Gestión de creatividades: test A/B y módulo de personalización</li>
              <li><i class="ri-check-double-line"></i> Consultorías integrales tanto a nivel estratégico</li>
              <li><i class="ri-check-double-line"></i> Máxima entregabilidad</li>
              <li><i class="ri-check-double-line"></i> Integración vía API y gestión de CRM</li> 
              <li><i class="ri-check-double-line"></i> Analítica avanzada</li>
            </ul>
            <p>
              Comunícate con tus clientes mediante email marketing o facebook con la 
              nueva funcionalidad de las audiencias de facebook. ¿A qué esperas para probarnos?
              Confían en nosotros:
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    
    
    
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>MITTUM</h3>
          <p> Envía, mide los resultados y optimiza tus campañas de una manera sencilla. Cuida la seguridad de tu información. </p>
          <a class="cta-btn" href="#">Quiero Empezar</a>
        </div>

      </div>
    </section><!-- End Cta Section -->
     <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right" data-aos-delay="100"></div>
          <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left" data-aos-delay="100">
            <div class="content d-flex flex-column justify-content-center">
              <h3>Colaboración total. </h3>
              <p>
               Instituciones Bancarias, Aseguradoras y grupos de Afores confían en nosotros para poder distribuir su información con los más altos estándares de seguridad de la información. 
              </p>
               <p>
               Millones de correos entregados en bandeja de nuestros clientes nos respaldan.
              </p>
               <p>
              ¿Buscas una asesoría con los expertos?
 
              </p>
              <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                   
                    <p><strong>Ayudamos a entidades financieras en la gestión de sus campañas de email marketing.</strong> Somos especialistas en el cumplimiento de las auditorías de seguridad de la información, gracias a que nuestra infraestructura, la cual se encuentra en territorio nacional. </p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-journal-richtext"></i>
                    <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="2" class="purecounter"></span>
                    <p><strong>Millones de correos entregados</strong>  en bandeja de nuestros clientes nos respaldan.</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-clock"></i>
                    <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="4" class="purecounter"></span>
                    <p><strong>Más de 10 años sumando esfuerzos</strong> con las principales instituciones financieras en México y Latinoamérica en materia de Email Marketing.</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-award"></i>
                    
                    <p><strong>Nuestros equipos dedicados marcan una gran diferencia</strong>, en la operación de cualquier línea de negocio.  
</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/Banco_de_Chile_Logo.png" class="img-fluid" alt=""></div>
        
            <div class="swiper-slide"><img src="assets/img/clients/Citibanamex-logo.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/logo_sccp.png" class="img-fluid" alt=""></div>
             <div class="swiper-slide"><img src="assets/img/clients/Chubb-logo.png" class="img-fluid" alt=""></div>
          
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->
    
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>¿Buscas una asesoría con los expertos?</h3>
          
        </div>

      </div>
    </section><!-- End Cta Section -->
     <!-- ======= Counts Section ======= -->

    <!-- ======= Features Section ======= -->
    <!--<section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="image col-lg-6" style='background-image: url("assets/img/features.jpg");' data-aos="fade-right"></div>
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
            <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-receipt"></i>
              <h4>Est labore ad</h4>
              <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-cube-alt"></i>
              <h4>Harum esse qui</h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-images"></i>
              <h4>Aut occaecati</h4>
              <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-shield"></i>
              <h4>Beatae veritatis</h4>
              <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
            </div>
          </div>
        </div>

      </div>
    </section>--><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <!--<section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Check our Services</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Lorem Ipsum</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Sed ut perspiciatis</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Magni Dolores</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4><a href="">Nemo Enim</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-slideshow"></i></div>
              <h4><a href="">Dele cardo</a></h4>
              <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href="">Divera don</a></h4>
              <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
            </div>
          </div>

        </div>

      </div>
    </section>--><!-- End Services Section -->


    <!-- ======= Portfolio Section ======= -->
   <!-- <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Check our Portfolio</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>--><!-- End Portfolio Section -->

   

    <!-- ======= Testimonials Section ======= -->
   <!--  <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

      </div>
    </section>--><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>EQUIPO</h2>
          <p>CONOCE NUESTRO EQUIPO</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Pedro Abad</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Berenice Ruiz</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Raul Ramirez</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Paola Camarillo</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contacto</h2>
          <p>Ponte en contacto con nosotros</p>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d255.331516300161!2d-99.18794311424885!3d19.43537941300278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2021d4faf7b93%3A0x38ad4cc24ecf7d51!2sElogia%20-%20Agencia%20de%20Marketing%20Digital!5e0!3m2!1ses!2smx!4v1672422424638!5m2!1ses!2smx" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Ubicación:</h4>
                <p>Polanco, Ciudad de Mexico</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@mittum.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Tel:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="{{ route('subscribers.store') }}" method="post" role="form" id="contactForm" class="php-email-form">
                @csrf
                <input type="hidden" name="recaptcha" id="recaptcha">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nombre de la empresa*" required>
                </div>
                 <div class="col-md-6 form-group">
                  <input type="text" name="web" class="form-control" id="name" placeholder="¿Cuál es la web de tu empresa?*" required>
                </div>
                <div class="col-md-6 form-group">
                 
                  <select class="form-select form-control" aria-label="Sector" name="sector" >
  <option selected disabled>Sector</option>
 
 
  <option label="" value=""></option>
  <option label="Administración Pública" value="Administración Pública">Administración Pública</option>
  <option label="Automoción" value="Automoción">Automoción</option>
  <option label="B2B" value="B2B">B2B</option>
  <option label="Beauty" value="Beauty">Beauty</option>
  <option label="CPG " value="CPG">CPG </option>
  <option label="Educación" value="Educación">Educación</option>
  <option label="Entertaiment" value="Entertaiment">Entertaiment</option>
  <option label="Finanzas, Banca, Fintec" value="Finanzas, Banca, Fintec">Finanzas, Banca, Fintec</option>
  <option label="Health &amp; Pharma" value="Health &amp; Pharma">Health &amp; Pharma</option>
  <option label="Hosteleria &amp; Turismo" value="Hosteleria &amp; Turismo">Hosteleria &amp; Turismo</option>
  <option label="Luxury" value="Luxury">Luxury</option>
  <option label="Moda" value="Moda">Moda</option>
  <option label="ONG" value="ONG">ONG</option>
  <option label="Otros" value="Otros">Otros</option>
  <option label="Retail" value="Retail">Retail</option>
  <option label="Seguros" value="Seguros">Seguros</option>

</select>
                </div>
                 <div class="col-md-6 form-group">
                  <input type="text" name="pais" class="form-control"  placeholder="País/región*" required>
                </div>
                <div class="col-md-6 form-group">
              
                  <select class="form-select form-control" aria-label="Presupuesto" name="presupuesto" >
  <option selected disabled>Presupuesto</option>
 
  <option label="Entre 10.000€ y 30.000€" value="Entre 10.000€ y 30.000€">Entre 10.000€ y 30.000€</option>
  <option label="Entre 30.000€ y 80.000€" value="Entre 30.000€ y 80.000€">Entre 30.000€ y 80.000€</option>
  <option label="Más de 80.000€" value="Más de 80.000€">Más de 80.000€</option>

</select>
                </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Tu Email*" required>
                </div>
           
                
              
              </div>
                <div class="form-group mt-3">
               
                 <select class="form-select form-control" aria-label="Objetivo Principal" name="objetivo" required>
  <option selected disabled>Objetivo Principal*</option>
   <option label="Awareness" value="Awareness">Awareness</option>
  <option label="Branding" value="Branding">Branding</option>
  <option label="Conversiones" value="Conversiones">Conversiones</option>
  <option label="Fidelización" value="Fidelización">Fidelización</option>
  <option label="Interacciones" value="Interacciones">Interacciones</option>
  <option label="Leads" value="Leads">Leads</option>
  <option label="Otros" value="Otros">Otros</option>
  <option label="Performance Mkt" value="Performance Mkt">Performance Mkt</option>
  <option label="Tráfico" value="Tráfico">Tráfico</option>
  <option label="Ventas" value="Ventas">Ventas</option>
</select>
              </div>
              <div class="form-group mt-3">
           
                 <textarea class="form-control" name="problema_actual" rows="5" placeholder="Problema Actual" ></textarea>
              </div>
              <div class="form-group mt-3">
            
                <textarea class="form-control" name="otros_objetivo" rows="5" placeholder="Otros objetivos" ></textarea>
              </div>
         
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="publico_objetivo"  placeholder="Publico Objetivo" >
              </div>
                <div class="form-group mt-3">
                <input type="text" class="form-control" name="competencia"  placeholder="Competencia" > 
              </div>
               <div class="form-group mt-3">
                <input type="text" class="form-control" name="metas_kpis"  placeholder="Metas & KPIs" > 
              </div>
             
               <div class="form-group mt-3">
                <textarea class="form-control" name="informacion_adicional" rows="5" placeholder="Información Adicional" ></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Enviando</div>
                <div class="error-message"></div>
                <div class="sent-message">¡Tu mensaje ha sido enviado!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3><img src="assets/img/mittum-white-logo.png" alt="" class="img-fluid"></h3>
              <p>
                Polanco, Ciudad de Mexico <br>
                <br><br>
                <strong>Tel:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@mittum.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Inicio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Acerca de nosotros</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Servicios</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terminos y condiciónes</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Politica de Privacidad</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nuestros Servicios</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Email Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Auditorias</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Gestión de campañas</a></li>
             
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Newsletter</h4>
            <p>Subscríbete a nuestro Newsletter para estar informado</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribirme">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Mittum</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
       
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>