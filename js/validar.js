
//variables
const usuario = document.getElementById("usuario");
const correo = document.getElementById("correo");
const pw = document.getElementById("pw");
const formulario = document.getElementById("formulario");

//clases para errores
const error = document.getElementById("error");
const correcto = document.getElementById("")

formulario.addEventListener("submit", e=>{
    e.preventDefault();
    let error = "";
    let entrar = false;
    let expresionCorreo = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    parrafo.innerHTML = "";
    

    if(usuario.value.length < 5){
        error += 'El usuario es muy corto';
        entrar = true;
    }
    else if(usuario.value.length >20){
        error += 'El usuario es muy largo';
        entrar = true;
    }
    else if(!expresionCorreo.test(correo.value)){
        error += 'El correo no es válido';
        entrar = true;
    }
    else if(pw.value.length < 5){
        error += 'La contraseña no es válida';
    }
    
    if(entrar){
        parrafo.innerHTML = error;
    }
    else{
        parrafo.innerHTML = '¡Registro exitoso!';
    }
});
