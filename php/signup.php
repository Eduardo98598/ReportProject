<html>
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Report</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <!-- Vendor CSS Files -->
 <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
 <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
 <link href="../assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
 <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

 <link href="../css/style.css" rel="stylesheet">
<link href="../css/stylelog.css" rel="stylesheet">
</head>




<body>
<!--Inicia todo etiquetas del cuerpo-->
  <!-- ======= Mobile Menu ======= -->
  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>
<!-- ======= Header ======= -->
<header class="site-navbar js-sticky-header site-navbar-target" role="banner">

    <div class="container">
      <div class="row align-items-center">

        <div class="col-6 col-lg-2">
          <h1 class="mb-0 site-logo"><a href="index.html" class="mb-0">Report</a></h1>
        </div>

        <div class="col-12 col-md-10 d-none d-lg-block">
          <nav class="site-navigation position-relative text-right" role="navigation">

            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
              <li class="active"><a href="../index.html" class="nav-link">Inicio</a></li>
              <li><a href="#" class="nav-link">Blog</a></li>
              <li><a href="#" class="nav-link">Nosotros</a></li>

              <li class="has-children">
                <a href="#" class="nav-link">Unirse</a>
                <ul class="dropdown">
                  <li><a href="signup.php" class="nav-link">Registrarse</a></li>
                  <li><a href="login.php" class="nav-link">Iniciar Sesión</a></li>
                </ul>
              </li>
              <li><a href="#" class="nav-link">Contacto</a></li>
            </ul>
          </nav>
        </div>

        <div class="col-6 d-inline-block d-lg-none ml-md-0 py-3" style="position: relative; top: 3px;">

          <a href="#" class="burger site-menu-toggle js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
            <span></span>
          </a>
        </div>

      </div>
    </div>

  </header>
  <section class="hero-section" id="hero">

    <div class="wave">

      <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
            <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
          </g>
        </g>
      </svg>

    </div>

    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 hero-text-image">
          <div class="row">
            <div class="wrapper fadeInDown">
                <div id="formContent">
                  <!-- Tabs Titles -->
              
                  <!-- Icon -->
                  <div class="fadeIn first">
                    <img src="../images/login.png" id="icon" alt="User Icon" />
                  </div>
              
                  <!-- signup Form -->
                  <form action="controller_login.php" method="post">
                  <input type="text" id="name" class="fadeIn first" name="name" placeholder="Nombre">
                  <input type="text" id="lastname" class="fadeIn second" name="lastname" placeholder="Apellido">
                  <input type="text" id="email" class="fadeIn third" name="email" placeholder="Correo">
                    <input type="text" id="pass" class="fadeIn fourth" name="pass" placeholder="Contraseña">
                  <input type="text" id="country" class="fadeIn five" name="country" placeholder="País">
                  <input type="text" id="city" class="fadeIn six" name="city" placeholder="Ciudad">
                  <label for="datos" class="fadeIn seven">¿Padece de?</label>
                  <select id="datos" name="datos" class="fadeIn eight">
                    <option value="1">Ninguno</option>
                    <option value="2">Enfermedad respiratoria</option>
                    <option value="3">Enfermedad de corazon</option>
                    <option value="4">Sindrome de Bernoulli</option>
                    <option value="5">VIH</option>
                    <option value="6">Hepatitis</option>
                    <option value="7">Diabetes</option>
                  </select>
                  <label><input type="checkbox" id="check" name="check" value="1"> Acepto terminos y condiciones</label>


                   
                    <input type="submit" class="fadeIn fourth" name="signup" value="Registrar">
                  </form>
              
                  <!-- Remind Passowrd -->
                 
              
                </div>
              </div>
            
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
 


  

<!--inicia todo recurso de BootStrap-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--Inicia todo JAvascript-->
<!-- Vendor JS Files -->
<script src="../assets/vendor/jquery/jquery.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="../assets/vendor/php-email-form/validate.js"></script>
<script src="../assets/vendor/aos/aos.js"></script>
<script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="../assets/vendor/jquery-sticky/jquery.sticky.js"></script>
<script src="../js/main.js"></script>
<!--Finaliza todo etiquetas del cuerpo-->
</body>
</html>
