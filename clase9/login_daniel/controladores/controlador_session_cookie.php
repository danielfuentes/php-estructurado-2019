<?php
  session_start();


function capturaDatos($data){
    $_SESSION['nombre']=$data['nombre'];
}

function recordarPassword($data){
    $finalizacion=time()+60*60*2;
    setcookie('nombre',$data['nombre'],$finalizacion);
    setcookie('password',$data['password'],$finalizacion);
    
}    
    


?>