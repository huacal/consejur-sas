<?php

if(isset($_POST['go'])){
    if(!empty($_POST['name']) && !empty($_POST['mail']) && !empty($_POST['telefono']) && !empty($_POST['asunto']) && !empty($_POST['mensaje'])){

        $destino = "contacto@comsejur.com";
        $name = $_POST['name'];
        $mail = $_POST['mail'];
        $telefono = $_POST['telefono'];
        $asunto = $_POST['asunto'];
        $msj = $_POST['mensaje'];
       
        $content = "Nombre:" .$name ."\n Correo:" .$mail ."\n Telefono:" .$telefono ."\n Asunto:" .$asunto ."\n Mensaje:" .$msj;

        mail($destino,"Contacto",$content);

        header("Location:index.php");

       

    }
}

?>