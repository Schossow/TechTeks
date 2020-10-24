<?php

include('get_db_info.php'); //OBTENEMOS LA INFO DE LA BASE DE DATOS

$link_personalizado = "";

if (isset($_POST['generar'])){

    $numero = $_POST['numero'];
    $mensaje = $_POST['mensaje'];

    $mensaje_convertido = str_replace(" ","%20",$mensaje);
    $mensaje_convertido = str_replace("Ú","%C3%9A",$mensaje_convertido);
    $mensaje_convertido = str_replace("Ó","%C3%93",$mensaje_convertido);
    $mensaje_convertido = str_replace("Í","%C3%8D",$mensaje_convertido);
    $mensaje_convertido = str_replace("É","%C3%89",$mensaje_convertido);
    $mensaje_convertido = str_replace("Á","%C3%81",$mensaje_convertido);
    $mensaje_convertido = str_replace("ú","%C3%BA",$mensaje_convertido);
    $mensaje_convertido = str_replace("ó","%C3%B3",$mensaje_convertido);
    $mensaje_convertido = str_replace("í","%C3%AD",$mensaje_convertido);
    $mensaje_convertido = str_replace("é","%C3%A9",$mensaje_convertido);
    $mensaje_convertido = str_replace("á","%C3%A1",$mensaje_convertido);
    $mensaje_convertido = str_replace("ñ","%C3%B1",$mensaje_convertido);
    $mensaje_convertido = str_replace("Ñ","%C3%91",$mensaje_convertido);

    $link_personalizado = 'https://api.whatsapp.com/send?phone='.$numero.'&text='.$mensaje_convertido;

    include('update_links_history_db.php'); //INCLUIMOS EL CONTADOR DE USUARIOS Y ENLACES CREADOS

    unset($_POST['numero']);
    unset($_POST['mensaje']);
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <title>Crear Link De WhatsApp Personalizado | TechTeks</title>
  <meta name="description" content="Genera enlaces de WhatsApp con mensajes personalizados para tus clientes." />
  <meta name="author" content="TechTeks.net" />
  <meta name="keywords" content="pagina, web, ecomerce, tienda, online, panama, landing, page, one, page, whatsapp, link, personalizado" />

  <link rel="shortcut icon" href="images/Logo.ico" type="image/x-icon">
  <link rel="icon" href="images/Logo.ico" type="image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,,500,600,700" rel="stylesheet">

  <!-- ICONOS OPEN SOURCE DE GOOGLE IONICONS -->
  <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
   

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">

  <style type="text/css">
    <!--
        p.success,
        p.error {
            color: white;
            font-family: lato;
            background: yellowgreen;
            display: inline-block;
            padding: 2px 10px;
            border-radius: 15px;
            opacity: 0.7;
        }
        
        p.error {
            background: orangered;
        }
        
    -->
    </style>

<script language="JavaScript">
if (window.history.replaceState) { // verificamos disponibilidad
    window.history.replaceState(null, null, window.location.href);
}
</script>

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light navbar-shadow" id="ftco-navbar">
    <div class="container">


      <a href="index">

          <img class="img-responsive" width="auto" height="50px" src="images/TECH-TEKS-02.png">
          <!--
          <span class="navbar-brand">TechTeks.net</span>
          -->

      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span><span class="menu-responsive"> Menú</span>
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index" class="nav-link">Inicio</a></li>
          <li class="nav-item"><a href="about" class="nav-link">Nosotros</a></li>


          <li class="nav-item dropdown"><a href="service.html" class="nav-link dropdown-toggle" data-toggle="dropdown" >Servicios <b class="caret"></b></a>

            <ul class="dropdown-menu" id="submenu-servicios">
              <li><a href="service#landing-page">Landing Page</a></li>
              <li><a href="service#one-page">One Page</a></li>
              <li><a href="service#web-comercial">Web Comercial</a></li>
              <li><a href="service#e-commerce">E-Commerce</a></li>
              <li><a href="service#rendimiento">Rendimiento</a></li>
              <li><a href="service#otros-servicios">Otros Servicios</a></li>
            </ul>

          </li>
          <li class="nav-item"><a href="portfolio" class="nav-link">Proyectos</a></li>
          <li class="nav-item active"><a href="contact" class="nav-link">Contacto</a></li>
          <li class="nav-item cta"><a href="contact" class="nav-link"><span>Cotizar</span></a></li>
        </ul>
      </div>

    </div>

  </nav>

  <section class=" ftco-section contact-section bg-light">
    <div class="container justify-content-center text-center">
      <div class="row justify-content-center text-center ">
        <div class="heading-section text-center">
          <h2><ion-icon class="brand-color-text" name="logo-whatsapp"></ion-icon><br>¡Genera Un Enlace De WhatsApp Personalizado!</h2>
          <p><a href="#como_funciona" class="hover-tu">¿Cómo Funciona?</a></p>
        </div>
      </div>
      

      <section class="ftco-section ftco-no-pt ftco-no-pb img" id="section-counter">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-10">
          
            <div class="row mb-3 justify-content-center text-center">
            
		          <div class="col-6 col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number"><?php echo $cantidad_usuarios; ?></strong><br>
		                <span>Usuarios</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-6 col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number"><?php echo $enlaces_creados; ?></strong><br>
		                <span>Enlaces Generados</span>
		              </div>
		            </div>
		          </div>
		          
            </div>
            
	        </div>
        </div>
    	</div>
    </section>


      <div class="row block-9 shadow" style="padding-top:30px; padding-bottom: 30px; background-color:white; border-radius: 15px;">
        
      <div class="col-md-6 pr-md-5 " >
            <div class="col-md-12 mb-4">
              <h2 class="h4 brand-color-text text-center"><strong>Datos para tu enlace</strong></h2>
            </div>
            <!-------------------Contacto------------------>
            <form method="POST">
              <div class="form-group">
                <!--numero-->
                <p>Ingresa tu número de teléfono</p>
                <input type="number" name="numero" class="form-control" placeholder="Ej: +50765567447" required>
              </div>
              <div class="form-group">
                <!--mensaje-->
                <p>Mensaje personalizado</p>
                <textarea name="mensaje" id="mensaje-personalizado" cols="30" rows="2" class="form-control" placeholder="Mensaje"
                  required></textarea>
              </div>
              <div class="form-group text-center">
                <input type="submit" name="generar" value="Generar enlace" class="btn form-bt">
              </div>
            </form>
  
          </div>

        <div class="col-md-6 pr-md-5 text-center pad-from-769">
            <div class="col-md-12 mb-4">
              <h2 class="h4 brand-color-text"><strong>Tu enlace personalizado</strong></h2>
        
            <form>
              <div class="form-group" id="ver_link_personalizado">
                <input type="text" name="link" class="form-control" id="textarea" placeholder="Tu link personalizado" value="<?php echo $link_personalizado; ?>">
              </div>
              <div class="form-group">
                <span id="copyAnswer"></span>
              </div>
              <div class="form-group">
                   <button type="button" id="copyBlock"  class="btn form-bt"><ion-icon size="small" name="copy-outline"></ion-icon> Copiar enlace</button>
              </div>
              <div class="form-group">
              <button class="btn form-bt"><a style="color: black;" href="<?php echo $link_personalizado; ?>" target="_blank"><ion-icon size="small" name="open-outline"></ion-icon> Probar enlace</a></button> 
              </div>
            </form>
            </div>
        </div>
      </div>
    </div>
    <span id="como_funciona"></span>
  </section>

  <section class=" ftco-section bg-light ftco-no-pt">

    <div class="container header-section">
        <h2 class="h4 brand-color-text text-center"><strong>¿Cómo Funciona?</strong></h2>
        <p>
            Ingresa tu número de teléfono con el respectivo indicativo de tu país (ej: +57), si no sabes cúal es el indicativo de tu país puedes consultar <a href="http://www.megem.com/indtelefono.asp" target="_blank" class="hover-tu">aquí</a>.
            Luego ingresa el mensaje que verán tus clientes o usuarios siempre que den clic al enlace y ¡listo!, ya puedes copiar el enlace y compartirlo en todas tus redes para generar ventas,
            accesibilidad a información, conversiones y mucho más. Puedes generar cuantos enlaces gustes, todos con un mensaje diferente, la cantidad de veces que lo necesites.
            <br><br>
            <strong>Importante:</strong><br>
            Si estás en Safari o cualquier otro navegador móvil y tienes error al ingresar el número, solo quítale el más (+) al indicativo. El enlace funciona perfecto con o sin el más (+).
        </p>
        <p>
        <strong>Considerar:</strong><br>
        1. El número debe tener el indicativo del país.<br>
        2. El número no puede tener espacios.<br>
        3. El número debe existir.
        </p>
    </div>

    <div class="container">
    <h2 class="h4 brand-color-text text-center"><strong>Ejemplos de uso</strong></h2>
    <div class="row mb-3 text-center">
      <div class="col">
        <p>
          Embebido en páginas web
        </p>
        <p>
          <img width="250px" src="images/enlace_ejemplos/enlace-qskillz.png" alt="enlace-qskillz">
        </p>
        <script src="https://gist.github.com/AlejoQskillz/a40200676e9e6463d311906aea267338.js"></script>
      </div>

      <div class="col pad-from-769">
        <P>
          Instagram
        </P>
        <p>
          <img width="250px" src="images/enlace_ejemplos/enlace-instagram.jpeg" alt="enlace-qskillz">
        </p>
      </div>

      <div class="col pad-from-769">
        <P>
          WhatsApp
        </P>
        <p>
          <img width="250px" src="images/enlace_ejemplos/enlace-whatsapp.jpeg" alt="enlace-qskillz">
        </p>
      </div>
    </div>
        <p>
        <strong>Aclaraciones:</strong><br>
        + Este generador de enlaces es completamente gratuito y de libre uso. Usted es poseedor de sus datos personales en todo momento, 
        TechTeks no recopila los datos suministrados en ningún momento ni los comparte con terceras compañías.
        </p>
  </div>

  </section>




<section class="bg-light">
    <div class="container text-center">
          <p class="small text-left">
          Último enlace generado el: <?php echo $last_mod; ?>
          </p>
          <p class="small text-center">
              <span>Autor: </span>Alejandro Benavides 09-09-2020 06:37 a.m.
          </p>
    
    </div>
  </section>

  <footer class="ftco-footer ftco-bg-dark ">
    <div class="container">

  
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Social</h2>
            <p>Nos dedicamos a crear productos y soluciones de software para emprendedores y pequeñas empresas.</p>
            <p>Síguenos para estar al tanto de nuevas actualizaciones, nos encantaría tenerte por aquí.</p>
            <ul class="ftco-footer-social list-unstyled mb-0">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="https://www.instagram.com/tech_teks" target="_blank"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>


        
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Navegación</h2>
              <ul class="list-unstyled">
                <li><a href="index" class="py-2 d-block">Inicio</a></li>
                <li><a href="about" class="py-2 d-block">Nosotros</a></li>
                <li><a href="service" class="py-2 d-block">Servicios</a></li>
                <li><a href="portfolio" class="py-2 d-block">Proyectos</a></li>
                <li><a href="contact" class="py-2 d-block">Contacto</a></li>
               
              </ul>
            </div>
          </div>

        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <a href="service"><h2 class="ftco-heading-2">Servicios</h2></a>
            <ul class="list-unstyled">
              <li><a href="service#landing-page" class="py-2 d-block">Landing Page</a></li>
              <li><a href="service#one-page" class="py-2 d-block">One Page</a></li>
              <li><a href="service#web-comercial" class="py-2 d-block">Web Comercial</a></li>
              <li><a href="service#e-commerce" class="py-2 d-block">E-commerce</a></li>
              <li><a href="service#rendimiento" class="py-2 d-block">Rendimiento</a></li>
              <li><a href="service#otros-servicios" class="py-2 d-block">Otros Servicios</a></li>
              <li><a href="enlace-personalizado" class="py-2 d-block">Crea un enlace de WhatsApp personalizado</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <a href="contact"><h2 class="ftco-heading-2">Contacto</h2></a>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">Desde Panamá para el mundo</span></li>
                <li><a href="tel:+507 6206-4626"><span class="icon icon-phone"></span><span class="text">+507
                      6206-4626</span></a></li>
                <li><a href="mailto:info@techteks.com"><span class="icon icon-envelope"></span><span
                      class="text">info@techteks.net</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p>
            
            Copyright &copy;
            <script>document.write(new Date().getFullYear());</script> All rights reserved | TechTeks.net | <a
              href="https://colorlib.com" target="_blank">Licensed</a>
           
          </p>
          <span style="font-size: small;">v1.1.1.30082020</span> 
        </div>
      </div>
    </div>
  </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00" /></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <!--Script del LiveReload -->
  <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
  <!-- Script-->
  <script type="text/javascript" src="js/anexoScript.js"></script>
</body>

<script language="JavaScript">
   
    var textarea = document.getElementById("textarea");
    var answer = document.getElementById("copyAnswer");
    var copy   = document.getElementById("copyBlock");
    copy.addEventListener('click', function(e) {
      
       textarea.select(); 
       try {
           // Copiar el texto seleccionado
           var successful = document.execCommand('copy');
    
           if(successful) answer.innerHTML = 'Copiado!';
           else answer.innerHTML = 'No se pudo copiar!';
       } catch (err) {
           answer.innerHTML = 'Navegador no soportado!';
       }
    });
  </script>

</html>