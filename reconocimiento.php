<?php
include ("Conexion2.php");
$query = "select * from imagenes";
$resultado = mysqli_query($conn,$query);
include("conexion.php");

session_start();
if(!isset($_SESSION['id_usuario']))
{
    header("Location: index.php");
}
$iduser = $_SESSION['id_usuario'];

$sql= "SELECT idusuarios, Nombre FROM usuarios WHERE idusuarios = '$iduser'";

$resultado = $conexion->query($sql);
$row = $resultado -> fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto de administracion</title>
    <link rel="stylesheet" href="/loginPHPrecursos/css/reconocimiento.css">
    <!-- BOOtSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/ace.min.css" />
    <!--incluir jquery-->
    <script src="/jquery-1.6.3.min.js"></script>
    <!--funcion de desenfoque al cargar la pagina-->
    <script>
        $(function(){
            $("body").hide().fadeIn(1000)
        });
    </script>
    <script src="https://kit.fontawesome.com/9c7f1ed8be.js" crossorigin="anonymous"></script>
    <!-- EL css si esta importado y alch no se pq no agarra la seccion del formulario en el css
    y por eso el estilo de la seccion del formulario lo puse aqui -->
    <style>
    .sospechosos
    {
        height: 800px;
    }
    /* formulario */
    .formulario
    {
        font-family: 'Montserrat',sans-serif;
        height: 800px;
        min-height: 50vw;
        width: 100%;
        /*height: 100px;*/
        background-color: rgb(209, 241, 253);
        display: flex;
    }
    .form
    {
        background-color: #fff;
        width: 90%;
        margin: auto;
        max-width: 500px;
        border-radius: 1em;
        padding: 3.5em 1.5em;
    }

    .form_title
    {
        text-align: center;
        font-size: 1.9em;
        margin-bottom: .4em;
    }
    .form_container
    {
        width: 100%;
        display: grid;
        gap: 1em;
        grid-auto-columns: 100%;
    }
    .form_input
    {
        font-family: inherit;
        font-size: 1rem;
        padding: .8em 1em;
        outline: none;
        border: none;
        border: 1px solid #bbb0b0;
        border-radius: 0.2em;
    }

    .form_input--message
    {
        resize: none;
        padding: 1.8em 1em;
        margin-bottom: .5em;
    }
    .form_cta
    {
        font-family: inherit;
        font-size: 1rem;
        background-color: #089FE0;
        color: white;
        border: none;
        font-weight: 400;
        padding: 0.7em 0;
        border-radius: .2em;
        cursor: pointer;
    }
    .form_cta:hover
    {
        background-color: rgb(135, 206, 235);
    }

    </style>
</head>


<body>
    <!-- esta es la seccion de la barra de navegacion -->
    <header class="header">
        <div class="container logo-nav-container">
            <h1><a href="reconocimiento.php" class="logo">Facialthief: Tecnoplace</a> 
            
            <nav class="navigation">
                <ul class="show">
                    <li><a href="#presentation">Inicio</a></li>
                    <li><a href="#aboutus">acerca de</a></li>
                    <li><a href="#history">Nuestra historia</a></li>
                    <li><a href="#servicios">servicios</a></li>
                    <li><a href="#suspect">sospechosos</a></li>
                    <li><a href="#formulario">contacto</a></li>
                    <li><a href="salir.php">Inicia sesion/registrate</a></li>
                </ul>
            </nav>
        </div>
    </header>

<!-- seccion de presentacion, es aqui donde va el video -->
    <section class="presentation" id="presentation">
        <br>
        <div class="presentation-video">
            <br>
            <video src="/loginPHPrecursos/assets/images/faceid.mp4" loop="true" autoplay="true" muted="true"></video>
        </div>
        <div class="darkoverlay">
            <div class="presentation-content">
                <h2>La seguridad al alcance de un click</h2>
                <!-- <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, et!</h3> -->
                <br>
            </div>
        </div>
        <hr>
    </section>

    <!-- seccion de about us -->
    <section class="aboutus" id="aboutus">
        <div class="about-container right" id="about-img1">
            <!-- contenedor para la imagen -->
        </div>
        <div class="about-container left about-content">
            <br><br>
            <h2 class="about-title">Sobre Nosotros</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Esse sint hic nobis saepe unde distinctio expedita minus 
                quisquam delectus ipsum labore, minima incidunt sapiente facere.  
                Iure reprehenderit nostrum voluptate at incidunt, possimus quas. 
                Nesciunt necessitatibus est explicabo, aut quae unde facilis, 
                recusandae ratione ad impedit vel ab doloribus suscipit nisi quo libero. 
                Eligendi officia beatae, facere cupiditate dolores minima ut a atque. 
                Molestias, voluptatum necessitatibus animi voluptatem beatae laborum 
                distinctio reprehenderit totam, nostrum eius assumenda nisi repudiandae 
                laboriosam perspiciatis quae impedit quia neque alias nobis vel asperiores 
                aliquam. Quo nam doloribus, optio nisi eligendi facilis architecto laboriosam? 
                Quibusdam, tenetur laboriosam! 
            </p>
        </div>

    </section>

    <section class="history" id="history">
        <div class="history-container left" id="history-img2">
            <!-- contenedor para la segunda imagen -->
        </div>
        <div class="history-container right history-content">
            <h2 class="history-title">Nuestra historia</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Libero corrupti laborum magnam illo eveniet illum laudantium 
                necessitatibus, tenetur ab deserunt dolorum similique consequatur 
                tempora inventore, soluta ut impedit sit tempore! Error aliquid 
                totam quod, ea consequuntur autem veniam perspiciatis? Accusamus 
                cupiditate aliquam blanditiis possimus maiores. Esse repellat nobis 
                distinctio perspiciatis. Libero dolor non reiciendis sit tempore sed 
                accusamus minima amet molestiae, provident, tenetur necessitatibus 
                id neque! Ipsa id ipsum totam rerum, deleniti error. Aliquam, hic. 
                Pariatur labore at ullam aliquid doloremque quas cupiditate ex ipsam, 
                sunt ratione? Perspiciatis nobis explicabo recusandae aliquid sequi, 
                alias error doloremque ducimus esse voluptas iure.
            </p>
        </div>

    </section>

    <!-- seccion de nuestros servicios -->
    <section class="servicios" id="servicios">
        <div class="services-container"> </div>

        <h2 class="services-title">Nuestros servicios</h2>

            <div class="services">
                <div class="fotos">
                    <img src="/loginPHPrecursos/assets/images/logo2.jpg" alt="">
                    
                </div>
                <div class="pie">
                    <p class="subtitle">Exposicion a anunciantes</p>
                    <p>Se ofrece exposicion en la pagina anunciantes dispuestos a pagar una cantidad
                        o a los sponsors que colaboren con nosotros
                    </p>
                </div>
            </div>

            <div class="services">
                <div class="fotos">
                    <img src="/loginPHPrecursos/assets/images/luis.jpg" alt="">
                </div>
                <div class="pie">
                    <p class="subtitle">upload de fotos de criminales</p>
                    <p>La gente registrada podra subir fotos de criminales que hayan
                        cometido algun crimen en su establecimiento
                    </p>
                </div>
            </div>

            <div class="services">
                <div class="fotos">
                    <img src="/loginPHPrecursos/assets/images/exponer.jpg" alt="">
                </div>
                <div class="pie">
                    <p class="subtitle">Exposicion de criminales</p>
                    <p>Cualquier persona que entre a la pagina podra ver 
                        a los criminales expuestos en esta pagina
                    </p>
                </div>
            </div>

    </section>

    <section class="sospechosos" id="suspect">
        <div class="container">
            <div class="row">
                <!-- Bootstrap class -->
                <div class="col-lg-4"> 
                    <h1 class="text-primary">subir imagen</h1>
                    <form action="/loginPHPrecursos/subir.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="my-input">Seleccione una imagen </label>
                            <input  type="file" name="imagen" id="my-input">
                        </div>
                        <div class="form-group">
                            <label for="my-input">Titulo de la imagen</label>
                            <input class="form-control" type="text" name="titulo" id="my-input">
                        </div>

                        <input type="submit" value="Subir" name="Guardar">
                    </form>
                </div>
                <div class="col-lg-8">
                    <h1 class="text-primary text-center">Galeria de Sospechosos</h1>
                    <hr>
                    <div class="card-colums">
                            <?php foreach($resultado as $row){?>
                                <div class="card">
                            <img src="assets/imagenes/ <?php echo $row['imagen']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><strong><?php echo $row['Nombre'];?></strong></h5>
                                <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                            </div>
                            <!-- <div class="card-footer"> -->
                                <!-- <small class="text-muted">Last updated 3 mins ago</small> -->
                    
                    <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Seccion del contacto -->
    <section class="formulario" me id="formulario">
        <form class="form" action="https://formspree.io/f/mgedrkqq" 
            method="POST">
            <div class="form_container">
                <h2 class="form_title">Contactanos</h2>

                <label for="input1">Ingresa tu nombre</label>
                <input type="text" class="form_input" placeholder="Nombre: " name="nombre" id="input1">

                <label for="input2">Ingresa tu E-mail</label>
                <input type="email" class="form_input" placeholder="E-mail: " name="correo" id="input2">
                
                <label for="input3">Ingresa tu Usuario</label>
                <input type="text" class="form_input" placeholder="Usuario:" name="usuario" id="input3">
                
                <label for="input4">Ingresa el motivo de tu contacto</label>
                <textarea class="form_input form_input--message" placeholder="Tu problema" name="motivo" id="input4" ></textarea>
                
                <label for="input5">ingresa Alguna sugerencia</label>
                <textarea class="form_input form_input--message" placeholder="Sugerencia" name="sugerencia" id="input5"></textarea>

                <input class="form_cta" type="submit" value="Enviar">
            </div>
        </form>
    </section>

<!-- seccion del footer o pie de pagina -->
    <footer class="pie-pagina">
        <div class="grupo1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="/loginPHPrecursos/assets/images/logo2.jpg" alt="Logo empresa">
                    </a>
                </figure>
            </div>

            <div class="box">
                <h2>Sobre nosotros</h2>
                <p>Levi Alexander Perez Elizondo <br>Samuel Perez Alfaro <br>Jose Luiz
                    Perez Moyado <br>Jose Luiz Macias Ramirez <br>
                </p>
                <p>
                    Estudiantes de la carrera de ingenieria en computacion de la universidad de guadalajara
                    <br>
                </p>
                <p>
                    proyecto realizado como prototipo para la <br> materia de administracion de proyectos tecnologicos
                    <br>
                </p>
            </div>

            <div class="box">
                <h2>siguenos</h2>
                <div class="redsocial">
                    <a href="https://www.facebook.com/levialexander.elizondo/" target="blank" class="fa fa-facebook"></a>
                    <a href="https://github.com/Aalxnder" target="blank" class="fa fa-github"></a>
                    <a href="https://www.facebook.com/joseluis.maciasramirez.1" class="fa fa-facebook" ></a>
                    <a href="https://www.facebook.com/profile.php?id=100008839685273" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-facebook"></a>
                </div>
                <div class="user">
                    <img class= "imguser" src="/loginPHPrecursos/assets/images/user.png" alt="user" width="50px" height="50px">
                    <p class="user-info">
                        <small>Bienvenid@</small>
                        <!-- Mostrar Nombre del Usuario Logueado-->
                        	<?php echo utf8_decode($row['Nombre']);?>
                    </p>
                    <a class= "salir" href="salir.php">
                        <i class="ace-icon fa fa-power-off"></i>
                        Salir
                    </a>
                </div>
            </div>
        </div>

        <div class="grupo2">
            <small>&copy;2022 -Todos los derechos reservados</small>
        </div>
    </footer>

    <script src="/loginPHPrecursos/app.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>