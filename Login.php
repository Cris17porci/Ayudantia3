<?php

session_start();
include 'Conexion.php';
if (isset($_POST['user']) && !empty($_POST['user']) && isset($_POST['pw']) && !empty($_POST['pw'])) {
    $sel = mysql_query("SELECT Usuario,Pass FROM tbl_usuario WHERE Usuario ='$_POST[user]'", $con);
    $sesion = mysql_fetch_array($sel);
    if ($_POST['pw'] == $sesion['Pass']) {
        $_SESSION['username'] = $_POST['user'];
        echo "session exitosa";
        header("Location: usuario.php");
    } else {
        echo "<script type=\"text/javascript\">alert(\"No esta registrado vuelva a intentarlo\");document.location=('./index.html')</script>";
    }
}
?>