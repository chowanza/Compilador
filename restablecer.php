<?php 

    require_once 'admin/conn.php';

    $pass = md5($_POST["Contraseña"]);
    $confirmacion = md5($_POST["Confirmacion"]);
    $cont = "password";
    $id = $_SESSION['ID'];

    if($pass === $confirmacion){
        $query = "UPDATE student SET $cont = '$pass' WHERE stud_id = '$id'";
        if(mysqli_query($conn,$query)){
            header ('Location:index.php');
        }
        else{
            header ('Location:olvidoClave.php');
        }
        
    }

    else{
        header('Location:restablecer-clave.html');
        }
    
    mysqli_close($conn);

?>