function validar(){
   
    var correo = document.getElementById("correoU").value;
    var contrasenia = document.getElementById("contraseniaU").value;


    if( (correo=== "" && contrasenia==="") ||  (correo=== "" || contrasenia==="") ){
        alert("todos los campos deben llenarse");
        return false;
    }else{
        if(correo==="reyes.1@gmail.com" && contrasenia==="1234"){
            return true;
        }else{
            return false;
        }
    }
}