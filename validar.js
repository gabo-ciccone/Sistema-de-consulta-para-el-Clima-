function validar(){
    var correo, contraseña, contraseña2, nombre, expresion; 
correo      = document.getElementById("correo").value;
contraseña  = document.getElementById("contraseña").value;
contraseña2 = document.getElementById("contraseña2").value;
nombre      = document.getElementById("nombre").value;

expresion = /\w+@\w+\.+[a-z]/;

if(correo===""|| contraseña===""|| contraseña2===""|| nombre===""){
    alert("Todos los campos son obligatorios");
    return false;
} else if (nombre.length<7){
    alert("Introduce un nombre valido");
    return false;
} else if (!expresion.test(correo)){
    alert("El correo no es valido");
    return false;
}

if (contraseña.length<6){
    alert("La contraseña debe ser mayor a 6 digitos");
    return false;
}
if (contraseña ===contraseña2){
    alert("Las contraseñas Coinciden");
} else {
    alert("Las contraseñas no coinciden");
    return false;
}

}