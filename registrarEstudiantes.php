<?php
ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);

if(isset($_POST['guardar'])){
    require_once('config.php');
    $config = new Config();
    $config->setNombre($_POST['nombres']);
    $config->setDireccion($_POST['direccion']);
    $config->setLogros($_POST['logros']);

    $config->inserData();
    echo"<script>
            alert(Los datos fueron guardados correctamente);
            document.location='estudiantes.php'
        </script>";
}

?>