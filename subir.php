<?php
    include('conexion2.php');
    
    if(isset($_POST['Guardar']))
    {
        $imagen = $_FILES['imagen']['name'];
        $nombre = $_POST['titulo'];
        if(isset($imagen) && $imagen != "")
        {
            $tipo = $_FILES['imagen']['type'];
            $temp = $_FILES['imagen']['tmp_name'];

            if(!((strpos($tipo,'gif')||strpos($tipo,'jpeg') || strpos($tipo,'webp'))))
            {
                $_SESSION['mensaje']='Solo se permiten archivos del tipo jpeg, webp,gif';
                header('location: reconocimiento.php');
            }
            else
            {
                $query = "INSERT INTO imagenes(imagen,nombre) values('$imagen','$nombre')";
                $resultado = mysqli_query($conn,$query);

                if($resultado)
                {
                    move_uploaded_file($temp,'assets\imagenes'.$imagen);
                    $_SESSION['mensaje'] = 'Se ha subido la imagen correctamente';
                    header('location: reconocimiento.php');
                }
                else
                {
                    $_SESSION['mensaje'] = 'a ocurrido un error en la carga de los archivos';
                }
            }
        }
    }
?>