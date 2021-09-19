<?php

if(isset($_POST['registrarme'])){
    if(empty($usuario)){
        echo "<p class='error'>* Ingresa un usuario</p>";
    }
    if(empty($correo)){
        echo "El correo no debe estar vacio";
    }
    else{
        if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
            echo "El correo es incorrecto";
        }
    }
}
