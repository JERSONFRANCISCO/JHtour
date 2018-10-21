<?php
   require_once(__CTR_PATH . "ctr_inicio.php");
  $ctr_inicio = new ctr_inicio();
?>

  <!-- <body id="page-top" onload="rotar_imagen();"> -->
  <body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Nombre del sitio</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Tours</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contacto</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Biemvenidos a nuestro sitio!</div>
          <div class="intro-heading text-uppercase">Lorem ipsum dolor.</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
        </div>
      </div>
    </header>
    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Servicios</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row text-center">
        <?php
            foreach($ctr_inicio->obtener_servicios() as $value){
              echo "<div class='col-md-4'>";
              echo "<span class='fa-stack fa-4x'>";
              echo "<i class='fas fa-circle fa-stack-2x text-primary'></i>";
              echo "<i class='fas $value[2] fa-stack-1x fa-inverse'></i>';";
              echo "</span>";
              echo "<h4 class='service-heading'><a class='servicios-color-letras' href='#'>$value[0]</a></h4>";
              echo "<p class='text-muted'  style='text-align: justify !important;'>$value[1]</p>";
              echo "</div>";
            }
        ?>
        </div>
      </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Tours</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
          <?php
            $tours = $ctr_inicio->obtener_tours();
            foreach ($tours as $value) {
              echo "<div class='col-md-4 col-sm-6 portfolio-item'>";
              echo "<a class='portfolio-link' data-toggle='modal' href='#portfolioModal$value[8]'>";
              echo "<div class='portfolio-hover'>";
              echo "<div class='portfolio-hover-content'>";
              echo "<i style='color: red;' class='fas fa-3x'>$value[7]</i>";
              echo "</div>";
              echo "</div>";
              echo "<img  class='img-fluid' style='height: 200px !important; width: 100%;' src='".__RSC_TBN_HOST_PATH."$value[2]-thumbnail.jpg' alt=''>";
              echo "</a>";
              echo "<div class='portfolio-caption'>";
              echo "<h4>$value[0]</h4>";
              echo "<p class='text-muted'>$value[1]</p>";
              echo "</div>";
              echo "</div>";
            }
          ?>
        </div>
      </div>
    </section>

    <!-- Clients -->
    <section class="py-5">
      <div class="container">
        <div class="row">

          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="http://localhost/tourPage/app_core/resources/logos/envato.jpg" alt="">
            </a>
          </div>

          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="http://localhost/tourPage/app_core/resources/logos/designmodo.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="http://localhost/tourPage/app_core/resources/logos/themeforest.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="http://localhost/tourPage/app_core/resources/logos/creative-market.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contacto</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Nombre*" required="required" data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Correo *" required="required" data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Telefono *" required="required" data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Mensaje *" required="required" data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar Mensaje</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Your Website 2018</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
               <li class="list-inline-item">
                <a href="login.php">LOG IN</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Portfolio Modals -->

    <?php 
      foreach ($tours as $value) {
        echo " <div class='portfolio-modal modal fade' id='portfolioModal$value[8]' tabindex='-1' role='dialog' aria-hidden='true'>";
        echo " <div class='modal-dialog'>";
        echo " <div class='modal-content'>";
        echo " <div class='close-modal' data-dismiss='modal'>";
        echo " <div class='lr'>";
        echo " <div class='rl'></div>";
        echo " </div>";
        echo " </div>";
        echo " <div class='container'>";
        echo " <div class='row'>";
        echo " <div class='col-lg-8 mx-auto'>";
        echo " <div class='modal-body'>";
        //<!-- Project Details Go Here -->
        echo " <h2 class='text-uppercase'>$value[0]</h2>";
        echo " <p class='item-intro text-muted'>$value[5]</p>";
        echo " <img class='img-fluid d-block mx-auto' src='".__RSC_PORTFOLIO_HOST_PATH."$value[2]-full.jpg' alt=''>";
        echo " <p style='text-align: justify !important;'>$value[6]</p>";
        echo " <ul class='list-inline'>";
        echo " <li>Valido hasta el : $value[3]</li>";
        echo " <li>PRECIO : $value[7]</li>";
        echo " <li>Categoría: $value[1]</li>";
        echo " </ul>";
        echo " <button class='btn btn-primary' data-dismiss='modal' type='button'>";
        echo " <i class='fas fa-times'></i> Cerrar</button>";
        echo " </div>";
        echo " </div>";
        echo " </div>";
        echo " </div>";
        echo " </div>";
        echo " </div>";
        echo " </div>";
      }
    ?>
