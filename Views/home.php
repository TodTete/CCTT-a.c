<?php
include_once 'Views/sources/nav.php';
?>
<title><?= htmlspecialchars($titulo) ?></title>

<body>
  <section class="section swiper-container swiper-slider swiper-slider-classic" data-loop="true" data-autoplay="4859" data-simulate-touch="true" data-direction="vertical" data-nav="false">
    <div class="swiper-wrapper text-center">
      <div class="swiper-slide" data-slide-bg="Helpers/images/slider-1-slide-2-1770x742.jpg">
        <div class="swiper-slide-caption section-md">
          <div class="container">
            <h1 data-caption-animate="fadeInLeft" data-caption-delay="0">Bienvenida</h1>
            <p class="text-width-large" data-caption-animate="fadeInRight" data-caption-delay="100">Ilustración de bienvenida hacia los estudiantes o docentes o incluso para el público en general</p><a class="button button-primary button-ujarak" href="#modalCta" data-toggle="modal" data-caption-animate="fadeInUp" data-caption-delay="200">Haz clic</a>
          </div>
        </div>
      </div>
      <div class="swiper-slide" data-slide-bg="Helpers/images/slider-1-slide-4-1770x742.jpg">
        <div class="swiper-slide-caption section-md">
          <div class="container">
            <h1 data-caption-animate="fadeInLeft" data-caption-delay="0">Eventos</h1>
            <p class="text-width-large" data-caption-animate="fadeInRight" data-caption-delay="100">Ilustración de las instalaciones o eventos que han surgido dentro de la universidad</p><a class="button button-primary button-ujarak" href="#modalCta" data-toggle="modal" data-caption-animate="fadeInUp" data-caption-delay="200">Haz clic #2</a>
          </div>
        </div>
      </div>
      <div class="swiper-slide" data-slide-bg="Helpers/images/slider-1-slide-6-1770x742.jpg">
        <div class="swiper-slide-caption section-md">
          <div class="container">
            <h1 data-caption-animate="fadeInLeft" data-caption-delay="0">Cursos de la universidad</h1>
            <p class="text-width-large" data-caption-animate="fadeInRight" data-caption-delay="100">Ilustración extra en caso de querer mostrar más avance o algo adicional</p><a class="button button-primary button-ujarak" href="#modalCta" data-toggle="modal" data-caption-animate="fadeInUp" data-caption-delay="200">Haz clic #3</a>
          </div>
        </div>
      </div>
    </div>
    <!-- paginación -->
    <div class="swiper-pagination__module">
      <div class="swiper-pagination__fraction"><span class="swiper-pagination__fraction-index">00</span><span class="swiper-pagination__fraction-divider">/</span><span class="swiper-pagination__fraction-count">00</span></div>
      <div class="swiper-pagination__divider"></div>
      <div class="swiper-pagination"></div>
    </div>
  </section>
  </div>

  <!-- Años de experiencia-->
  <section class="section section-sm bg-default">
    <div class="container">
      <div class="row row-30 row-xl-24 justify-content-center align-items-center align-items-lg-start text-left">
        <div class="col-md-6 col-lg-5 col-xl-4 text-center"><a class="text-img" href="#">
            <div id="particles-js"></div><span class="counter">3</span>
          </a></div>
        <div class="col-sm-8 col-md-6 col-lg-5 col-xl-4">
          <div class="text-width-extra-small offset-top-lg-24 wow fadeInUp">
            <h3 class="title-decoration-lines-left">Años de experiencia</h3>
            <p class="text-gray-500">Agregar una descripción de la experiencia obtenida atravez de los años dentro de la institución</p> <!--<a class="button button-secondary button-pipaluk" href="#">Boton Extra</a>  -->
          </div>
        </div>
        <div class="col-sm-10 col-md-8 col-lg-6 col-xl-4 wow fadeInRight" data-wow-delay=".1s">
          <div class="row justify-content-center border-2-column offset-top-xl-26">
            <div class="col-9 col-sm-6">
              <div class="counter-amy">
                <div class="counter-amy-number"><span class="counter">24</span><span class="symbol"></span>
                </div>
                <h6 class="counter-amy-title">Meses</h6>
              </div>
            </div>
            <div class="col-9 col-sm-6">
              <div class="counter-amy">
                <div class="counter-amy-number"><span class="counter">500</span>
                </div>
                <h6 class="counter-amy-title">Estudiantes</h6>
              </div>
            </div>
            <div class="col-9 col-sm-6">
              <div class="counter-amy">
                <div class="counter-amy-number"><span class="counter">14</span>
                </div>
                <h6 class="counter-amy-title">Cursos</h6>
              </div>
            </div>
            <div class="col-9 col-sm-6">
              <div class="counter-amy">
                <div class="counter-amy-number"><span class="counter">362</span>
                </div>
                <h6 class="counter-amy-title">Días laborales</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-xl-12 align-self-center">
          <div class="row row-30 justify-content-center">
            <div class="col-sm-6 col-md-5 col-lg-6 col-xl-3 wow fadeInLeft"><a class="clients-classic" href="#"><img src="Helpers/images/clients-9-270x117.png" alt="" width="270" height="117" /></a></div>
            <div class="col-sm-6 col-md-5 col-lg-6 col-xl-3 wow fadeInLeft" data-wow-delay=".1s"><a class="clients-classic" href="#"><img src="Helpers/images/clients-10-270x117.png" alt="" width="270" height="117" /></a></div>
            <div class="col-sm-6 col-md-5 col-lg-6 col-xl-3 wow fadeInLeft" data-wow-delay=".2s"><a class="clients-classic" href="#"><img src="Helpers/images/clients-3-270x117.png" alt="" width="270" height="117" /></a></div>
            <div class="col-sm-6 col-md-5 col-lg-6 col-xl-3 wow fadeInLeft" data-wow-delay=".3s"><a class="clients-classic" href="#"><img src="Helpers/images/clients-11-270x117.png" alt="" width="270" height="117" /></a></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Información de la institución -->
  <section class="section section-sm bg-default">
    <div class="container">
      <div class="row row-30 justify-content-center">
        <div class="col-sm-8 col-md-6 col-lg-4">
          <article class="box-contacts">
            <div class="box-contacts-body">
              <div class="box-contacts-icon fl-bigmug-line-cellphone55"></div>
              <div class="box-contacts-decor"></div>
              <p class="box-contacts-link"><a href="tel:#">+52 Número</a></p>
              <p class="box-contacts-link"><a href="tel:#">+52 Número</a></p>
            </div>
          </article>
        </div>
        <div class="col-sm-8 col-md-6 col-lg-4">
          <article class="box-contacts">
            <div class="box-contacts-body">
              <div class="box-contacts-icon fl-bigmug-line-up104"></div>
              <div class="box-contacts-decor"></div>
              <p class="box-contacts-link"><a href="#">Ubicación de la institución</a></p>
            </div>
          </article>
        </div>
        <div class="col-sm-8 col-md-6 col-lg-4">
          <article class="box-contacts">
            <div class="box-contacts-body">
              <div class="box-contacts-icon fl-bigmug-line-chat55"></div>
              <div class="box-contacts-decor"></div>
              <p class="box-contacts-link"><a href="mailto:#">correo@escolar.com</a></p>
              <p class="box-contacts-link"><a href="mailto:#">correo2@escolar.com</a></p>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>

  <!-- Redes Sociales -->
  <section class="section section-sm bg-default text-center">
    <div class="container">
      <h3 class="title-decoration-lines-left">¡Síguenos en nuestras redes sociales!</h3>
      <p class="text-gray-500">Mantente al día con nuestras últimas novedades y eventos siguiéndonos en nuestras redes <a style="text-decoration:none; color:#9b9b9b;" href="index.php?view=LoginPage">sociales</a>.</p>
      <div class="social-icons">
        <a href="https://www.facebook.com/cecatra.tecamachalco" target="_blank" class="fa fa-facebook"></a>
        <a href="https://www.instagram.com/cct_tecamachalco/" target="_blank" class="fa fa-instagram"></a>
        <a href="https://www.youtube.com/@cctt5920" target="_blank" class="fa fa-youtube"></a>
        <a href="https://www.tiktok.com" target="_blank" class="fa fa-music"></a>
        <a href="https://www.twitter.com" target="_blank" class="fa fa-twitter"></a>
      </div>
    </div>
  </section>

  <!-- Google Map-->
  <section class="section section-map">
    <div class="container text-center">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <h2 class="map-title">¡Ven a Visitarnos!</h2>
          <p class="map-subtitle">Descubre nuestras instalaciones y todo lo que tenemos para ofrecerte. ¡Estamos ubicados en el corazón de la ciudad!</p>
          <a class="button button-primary" href="https://www.google.com/maps/dir//Av+Ju%C3%A1rez+902a,+San+Nicol%C3%A1s,+75486+Tecamachalco,+Pue./@18.8804991,-97.7303854,17z" target="_blank">Obtener Direcciones</a>
        </div>
      </div>
    </div>
    <div class="map-container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d905.4193385750445!2d-97.73038537195154!3d18.880499143023805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c563089a48ba79%3A0x161128548e555dae!2sAv%20Ju%C3%A1rez%20902a%2C%20San%20Nicol%C3%A1s%2C%2075486%20Tecamachalco%2C%20Pue.!5e0!3m2!1ses!2smx!4v1719941122255!5m2!1ses!2smx" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

  </section>

  <?php
  include_once __DIR__ . '/sources/footer.php';
  ?>

  <!-- Button Whatsapp Structure -->
  <div class="whatsapp_chat_support wcs_fixed_right" id="button-w">
    <div class="wcs_button_label">
      Contáctanos
    </div>
    <div class="wcs_button wcs_button_circle">
      <span class="fa fa-whatsapp"></span>
    </div>

    <div class="wcs_popup">
      <div class="wcs_popup_close">
        <span class="fa fa-close"></span>
      </div>
      <div class="wcs_popup_header">
        <span class="fa fa-whatsapp"></span>
        <strong>Servicio al cliente</strong>

        <div class="wcs_popup_header_description">¿Necesidad de ayuda? Chatea con nosotros en Whatsapp</div>

      </div>
      <div class="wcs_popup_input"
        data-number="522492096133"
        data-availability='{ "monday":"08:00-20:00", "tuesday":"08:00-20:00", "wednesday":"08:00-20:00", "thursday":"08:00-20:00", "friday":"08:00-20:00", "saturday":"08:00-20:00", "sunday":"08:00-20:00" }'>
        <input type="text" placeholder="Escribir pregunta!" />
        <i class="fa fa-paper-plane-o"></i>
      </div>
      <div class="wcs_popup_avatar">
        <img src="https://img.freepik.com/vector-premium/icono-circulo-usuario-anonimo-ilustracion-vector-estilo-plano-sombra_520826-1931.jpg" alt="">
      </div>
    </div>
  </div>

  <!-- Variables globales de salida-->
  <div class="snackbars" id="form-output-global"></div>
  <!-- Plugin JS file -->
  <script src="plugin/components/moment/moment.min.js"></script>
  <script src="plugin/components/moment/moment-timezone-with-data.min.js"></script> <!-- spanish language (es) -->
  <script src="plugin/whatsapp-chat-support.js"></script>
  <!-- Javascript-->
  <script src="Helpers/js/core.min.js"></script>
  <script src="Helpers/js/script.js"></script>
  <script src="Helpers/js/bootstrap.bundle.min.js"></script>
</body>

</html>