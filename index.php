
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TechFix Solutions</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" integrity="sha512-KffirajG0OITXuDBqtDk6WcsdZT6H86bKROj12a9iZi4g3ImUtUc6tYtEbB5MEmKLmTpWdmtcYpms/BXmDjCjQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <!-- MENU ENCABEZADO -->
  <div class="contenedor-header">
    <header>
      <div class="contenido-banner">
        <div class="contenedor-img">
          <img src="./img/ts.png" alt="TechFix Solutions">
        </div>
        <ul class="menu-navegacion">
           <li><a href="#inicio">INICIO</a></li> 
          <li><a href="#servicios">SERVICIOS</a></li>
          <li><a href="#productos">PRODUCTOS</a></li>
          <li><a href="#contacto">CONTACTANOS</a></li>
          <li><a href="#nosotros">NOSOTROS</a></li>
        </ul>
        <div class="inicio-sesion">
        <div class="inicio-sesion">
    <form id="loginForm" action="validacion.php" method="post">
        <input type="text" name="email" placeholder="E-mail" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <button type="submit">Iniciar sesión</button>
        <p>¿No tienes una cuenta? <a href="login-animado/login.php" class="myButton" id="registerButton">Registrarse</a></p>
         
    </form>
</div>


      </div>
    </header>
  </div>
  
  <main>
    <section id="banner">
      <video src="video/V_TF.mp4" autoplay muted loop></video>
      <div class="texto-banner">
        <h2>Bienvenido a Tu Empresa TechFix Solutions</h2>
        <p>Brindamos soluciones expertas en reparaciones, mantenimiento y más.</p>
      </div>
    </section>

    <section id="servicios">
      <h2>Catálogo de Servicios</h2>
      <ul>
        <li>
          <h3>Reparaciones</h3>
          <p>En nuestro servicio de reparaciones, nos especializamos en solucionar una amplia gama de problemas en equipos electrónicos y dispositivos. Nuestro equipo de expertos está capacitado para identificar y resolver tanto problemas de hardware como de software en tiempo récord.</p>
        </li>
        <li>
          <h3>Mantenimiento Preventivo</h3>
          <p>El mantenimiento preventivo es una parte fundamental de nuestro enfoque de servicio. Realizamos inspecciones regulares y mantenimiento preventivo en equipos electrónicos para evitar posibles fallas y maximizar su rendimiento. Nuestro equipo de expertos se encarga de identificar y solucionar cualquier problema potencial antes de que se convierta en una avería costosa.</p>
        </li>        
        <li>
          <h3>Actualizaciones de Hardware</h3>
          <p>Nos encargamos de ofrecerte las últimas actualizaciones de hardware para tus equipos electrónicos. Ya sea que necesites mejorar el rendimiento, ampliar la capacidad de almacenamiento o agregar nuevas características, nuestro equipo de expertos te brindará las soluciones adecuadas. Realizamos actualizaciones de hardware con la máxima precisión y cuidado, asegurando un funcionamiento óptimo de tus dispositivos.</p>
        </li>
      </ul>
    </section>

    <section id="productos" class="productos">
      <div class="contenido-seccion">
        <h2>NUESTROS PRODUCTOS</h2>
        <div class="galeria">
          <div class="proyecto">
            <img src="img2/reparaciones.webp" alt="">
            <div class="overlay">
              <h3>MANTENIMIENTO Y REPARACIONES</h3>
              <p>Le damos vida a tu equipo</p>
              <a href="#banner" class="arriba">productos</a>
            </div>
          </div>
          <div class="proyecto">
            <img src="img2/actualizacion.jpg" alt="">
            <div class="overlay">
              <h3>SOFTWARE Y HARDWARE</h3>
              <p>Ten siempre lo ultimo en tecno.</p>
            </div>
          </div>
          <div class="proyecto">
            <img src="img2/partes.webp" alt="">
            <div class="overlay">
              <h3>PARTES Y ACCESORIOS</h3>
              <p>Conciente tu laptop</p>

            </div>
          </div>
          <div class="proyecto">
            <img src="img2/equipos nuevos.webp" alt="">
            <div class="overlay">
              <h3>EQUIPOS NUEVOS</h3>
              <p>Lleva ya el tuyo</p>
            </div>
          </div>
          <div class="proyecto">
            <img src="img2/accesorios.webp" alt="">
            <div class="overlay">
              <h3>EQUIPOS NUEVOS</h3>
              <p>Lleva ya el tuyo</p>
            </div>
          </div>
          <div class="proyecto">
            <img src="img2/laptop-rota.webp" alt="">
            <div class="overlay">
              <h3>COMPRA Y VENTA</h3>
              <p>Usados</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contacto" class="contacto">
      <div class="contenido-seccion">
        <h2>CONTACTANOS</h2>
        <div class="fila">
          <div class="col">
            <input type="text" placeholder="TechFix Solutions" readonly>
            <input type="text" placeholder="321 456 7890" readonly>
            <input type="text" placeholder="info@techfixsolutions.com" readonly>
            <input type="text" placeholder="Cra. 15 #78-33, Bogotá, Cundinamarca, Colombia" readonly>
          </div>
          <div class="col">
            <div id="mapa">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.984990504734!2d-74.05810256875092!3d4.66551864206461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f8ff0f9ed84ef%3A0x2b9a3f08095db81a!2sCentro%20Comercial%20Unilago!5e0!3m2!1sen!2sus!4v1663529437400!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <a href="#banner" class="arriba"><i class="fa-solid fa-angles-up"></i></a>
    <div class="redes">
      <a href="https://www.facebook.com/tu_pagina_de_facebook" target="_blank"><i class="fa-brands fa-facebook"></i></a>
      <a href="https://api.whatsapp.com/send?phone=3204430880" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
      <a href="https://twitter.com/tu_perfil_de_twitter" target="_blank"><i class="fa-brands fa-twitter"></i></a>
      <a href="https://www.instagram.com/andreww_petro/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
    </div>
  </footer>

  <script src="mapa.js"></script>
</body>
</html>
