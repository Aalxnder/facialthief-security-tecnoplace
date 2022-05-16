<?php
    $conn = mysqli_connect('localhost','root','','GALERIA');
    if($conn)
    {
        echo'conectado';
    }
    else
    {
        echo 'ha ocurrido un error';
    }
    session_start();
?>