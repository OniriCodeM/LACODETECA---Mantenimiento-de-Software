<?php
$correo = $_POST['correoU']; 
$contrasenia = $_POST['contraseniaU']; 



if($correo =="reyes@com" && $contrasenia=="1234"){
    header("Location: ../html/index.html"); 
}else{
    if($correo =="" && $contrasenia==""){
        header("Location: ../html/login.html");
    }
   }
?>