<?php
include ("conexion.php");
if (isset($_POST['usuario']) && !empty($_POST['usuario']) && isset($_POST['nombre']) && !empty($_POST['nombre'])) {
        if($_POST['password'] == $_POST['REpassword'])
            {
            mysql_query("INSERT INTO tbl_usuario (Nombre,Usuario,Pass) VALUES ('$_POST[nombre]','$_POST[usuario]','$_POST[password]')");
            echo "registro exitoso";        
                echo 'Usted se ha registrado correctamente.'; 
                echo "registro exitoso";
                header("Refresh: 2; index.html ");
            
            }
        else{
            echo "Contraseñas no coinsiden";
            echo '<a href="'.$_SERVER['HTTP_REFERER'].'">   Regresar al Registro</a>';
            }
}else{
     echo "registro imposible";
     echo '<a href="'.$_SERVER['HTTP_REFERER'].'">   Regresar al Registro</a>';
}
?>