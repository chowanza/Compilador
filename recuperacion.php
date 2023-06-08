<?php 

    require_once 'admin/conn.php';

    $correo = $_POST["Correo"];

    $query = "SELECT * FROM student WHERE firstname = '$correo';";
    $result = mysqli_query($conn,$query);
    $tabla = mysqli_fetch_array($result);
    $valor = $tabla['stud_no'];
    $_SESSION['User'] = $valor;
    $_SESSION['ID'] = $tabla['stud_id'];

    if(empty($tabla)){
        header ('Location:olvidoClave.html');
    }

    else{ 
        $to = "$correo";
        $subject = 'Solicitud para restablecer contraseña de Rookiex';
        $message = "¡Hola, { $valor}!\r\n\r\n";
        $message .= "Le informamos que hemos recibido su solicitud para restablecer su contraseña de Rookiex. Nos complace ayudarle a recuperar su acceso a su cuenta. \r\n\r\n";
        $message .= "Haz click en el siguiente botón para restablecer tu contraseña de Rookiex. Si no has solicitado una nueva contraseña, ignora este correo. \r\n";
        $message .= "http://localhost/Compilador/restablecer-clave.html \r\n\r\n";
        $message .= "Atentamente,\r\n";
        $message .= "Team Rookiex.";
        $headers = 'From: teamrookiex@gmail.com' . "\r\n" .
            'Reply-To: teamrookiex@gmail.com' . "\r\n" . 
            'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);
        }
    
    mysqli_close($conn);

?>