
<!DOCTYPE html>
<html lang="es">
<head>

  <meta charset="UTF-8">
  <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
		<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 	    <link href="https://fonts.googleapis.com/css2?family=Fondamento:ital@1&family=Overpass:wght@700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/formulario.css">
		<link rel="stylesheet" href="css/footer.css">
        <title>Registrarse</title>
  <title>Formulario Registro</title>
</head>
<body>
   
  <section class="form-register">
    <form id="formulario"class="aling-items" action="" method="post">
     <h4>Registrarme <i class="fas fa-user-edit"></i></h4>
     <div class="input-field">
        <i class="fas fa-user"></i>
        <input type="text" placeholder="Usuario" id="usuario" name="usuario"/>
      </div> 
   </div>
      <div class="input-field">
        <i class="fas fa-envelope"></i>
        <input type="email" placeholder="Correo" id="correo" name="correo"/>
      </div>
      <div class="input-field">
        <i class="fas fa-lock"></i>
        <input type="password" placeholder="Contraseña" id="pw" name="pw"/>
      </div>
      <input type="submit" class="btn" value="Registrarme" name="registrarme" onclick=""/>
      <div id="error"></div>
    </form>
  </section>

  <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Sobre la página web <i class="fas fa-info-circle"></i></h4>
                    <ul>
                        <li><a href="mision.html">Misión</a></li>
                        <li><a href="vision.html">Visión</a></li>
                        <li><a href="objetivos.html">Objetivos</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Obtener Ayuda <i class="fas fa-hands-helping"></i></h4>
                    <ul>
                        <li><a href="manualRegistro.html">¿Cómo registrarme?</a></li>
                        <li><a href="buscarProblema.html">¿Cómo buscar un problema?</a></li>
                        <li><a href="form.html">Iniciar Sesión | Registrarme</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Siguénos <i class="fas fa-thumbs-up"></i></h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f" id="icon-fb"></i></a>
                        <a href="#"><i class="fab fa-twitter" id="icon-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram" id="icon-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
   </footer>

   <script src="https://kit.fontawesome.com/9654fb2e68.js" crossorigin="anonymous"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script src="../js/validar.js"></script>
</body>
</html>
