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