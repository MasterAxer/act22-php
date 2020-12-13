<?php
    session_start();
    error_reporting(0);
    $log=$_SESSION['nombre'];
    if($log==null||$log='')
    {
      echo "No tiene la autorización para ver el contenido";
      die();
   }
    session_unset();
    session_destroy();
    echo "<script>window.location='../index.php';</script>"
?>