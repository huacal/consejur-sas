<?php
$name = $_POST["cs2Name"];
$email = $_POST["cs2Email"];
$tel = $_POST['cs2tel'];
$asunto = $_POST['cs2asunto'];
$message = $_POST['cs2menssage'];
 
$EmailTo = "juanm6263gmail.com";
$Subject = $asunto . $name;
 
// prepare email body text
$Body = "Nombre: ";
$Body .= $name;
$Body .= "\n";
 
$Body .= "Correo Electrónico: ";
$Body .= $email;
$Body .= "\n";

$Body .= "Telefono: ";
$Body .= $tel;
$Body .= "\n";

$Body .= "Asunto: ";
$Body .= $asunto;
$Body .= "\n";

$Body .= "Mensaje: ";
$Body .= $message;
$Body .= "\n";
   

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
 
// redirect to success page
if ($success){
   echo "success";
}else{
    echo "invalid";
}
 
?>