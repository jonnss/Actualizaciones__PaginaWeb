<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
		<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 	    <link href="https://fonts.googleapis.com/css2?family=Fondamento:ital@1&family=Overpass:wght@700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Pirata+One&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/index.css">
		<link rel="stylesheet" href="css/footer.css">
        <title>Current</title>
	</head>
	
 <body>    
    
    <div class="container_principal">
       <header class="header_principal">   
          <div>
            <img id="logo_index"src="imagenes/logo1.png" width="200px" />
          </div>
          <div class="container-titulo-index">
            <p id="title-clow-index">Current</p>
          </div>
       </header>
    
        <div class="container_titulo-bienvenido">
          <p id="titulo_bienvenido">¡Bienvenido!, ¿Qué quieres hacer?</p>   
        </div>
     
        <div class="container_buttons">
          <button class="buttons_index" onclick="location.href='iniciar-sesion.php'">Iniciar sesión</button>     
          <button class="buttons_index" onclick="location.href='registrarse.php'">Registrarme</button>    
        </div>
    </div> 

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
                        <li><a href="registrarse.php">Iniciar Sesión | Registrarme</a></li>
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
 </body>
</html>