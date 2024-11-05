<?php
function usuarioOk($usuario, $contraseña) {
   $users = ["user1" => "1resu", "user2" => "2resu", "pepe" => "epep"];
    if (array_key_exists($usuario, $users)) {
        if ($users[$usuario] === $contraseña) {
            return true;  
        }
    }
   return false;
}
