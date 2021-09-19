<?php 
    error_reporting(0);
    if(isset($_POST['registrarme'])){
        include('../php/conexion.php');

        $usuario = $_POST['usuario'];
        $correo = $_POST['correo'];
        $pw = $_POST['pw'];
        
        $insertar ="INSERT INTO usuarios(usuario,correo,pw) VALUES ('$usuario','$correo','$pw')";        

        $resultado = mysqli_query($conexion, $insertar);
        if(!$resultado){
            echo '<script>
                    alert("Error al registrarse");
                    </script>';
            exit;
        }
        else{
            '<script>
                    alert("Correcto");
                    window.location("index.php");
                    </script>';
            exit;
        }

    }
    
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimun-scale=1">
		<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 	    <link href="https://fonts.googleapis.com/css2?family=Fondamento:ital@1&family=Overpass:wght@700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Pirata+One&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/spec.css">
		
        <title>Registrarse</title>
	</head>
	
 <body>   
 <div class="container">
        <div class="header">
            <h2>Registrarme <i class="fas fa-user-circle"></i></h2>
        </div>
        <form method="post" action="spec.php" id="form" class="form">
            <div class="form-control">
                <label for="usuario">Usuario:</label>
                <input type="text" placeholder="grovervas" id="usuario" name="usuario"/>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="correo">Correo:</label>
                <input type="email" placeholder="grovervas@email.com" id="correo" name="correo"/>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="pw">Contraseña:</label>
                <input type="password" placeholder="Contraseña" id="pw" name="pw"/>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>

            <input type="submit" class="button" value="Registrarme" id="registrarme" name="registrarme"/>
            <div class="div-login">
                <a href="" class="login">Ya tengo una cuenta</a>
            </div>
            
        </form>
    </div> 

 <script src="../js/spec.js"></script>
 <script src="https://kit.fontawesome.com/9654fb2e68.js" crossorigin="anonymous"></script>
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 </body>
</html>