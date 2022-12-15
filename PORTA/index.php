<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Responsive</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>

<body>
    <nav class="nav">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>

        <h1 class="names">ELIASDANIELTERAN</h1>
        <ul class="uli">
            <li class="list"><a href="#sobremi" class="a_principal">SOBRE MI</a></li>
            <li class="list"><a href="#aprendiendo">APRENDIENDO</a></li>
            <li class="list"><a href="#contactos">CONTACTOS</a></li>
            <li class="list"><a href="#pasatiempos">PASATIEMPOS</a></li>
            <button class="switch" id="switch">
                <samp><i class="fa-solid fa-sun"></i></samp>
                <samp><i class="fa-solid fa-moon"></i></samp>
            </button>
        </ul>
    </nav>

    <!--SOBREMI-->
    <div class="sobremi" id="sobremi">
        <div class="img">
            <img src="Tumblr_9e63f38c6b4ab8b60b7af43ad8a40584_b5200ced_640.webp" alt="mi persona">
        </div>
        <div class="movil">
            <div class="miper">
                <h1 class="h1">ELIAS DANIE TERAN</h1>
                <h4 class="h4">DESAROLLADOR WEB</h4>
                <p class="descri">
                    Hola soy Daniel teran, Soy un estudiante de programacion
                    pahra la web, me gusta todo lo relacionado a la tecnologia
                    y me gusta aprender cosas nuevas y refozar conocimientos ya
                    obtenidos, me gusta el back-end, pero este no quiere decir no
                    me interese la parte fron-end
                </p>
            </div>
            <div class="redes">
                <ul class="ul">
                    <li><a href="https://github.com/Programador-45" target="_blank"><i class="fab fa-github"></i></a>
                    </li>
                    <li><a href="https://www.linkedin.com/in/elias-daniel-teran-jimenez-886bb0258/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--APRENDIENDO Y DOMINADOS-->
    <div class="contenedor-hab" id="aprendiendo">
        <h1 class="estudiosh1">MIS ESTUDIOS</h1>
        <div class="aprendiendo" id="PROYECTOS">

            <div class="front-end">
                <h1>front-end</h1>
                <div class="html">
                    <i class="fa-brands fa-html5"></i>
                    <p>INTERMEDIO</p>
                </div>
                <div class="css">
                    <i class="fa-brands fa-css3-alt"></i>
                    <p>INTERMEDIO</p>
                </div>
                <div class="javas">
                    <i class="fa-brands fa-square-js"></i>
                    <P>APRENDIENDO</P>
                </div>
            </div>

            <div class="back-end">
                <h1>back-end</h1>
                <div class="php">
                    <i class="fa-brands fa-php"></i>
                    <p>ESTUDIANDO</p>
                </div>
                <div class="mysql">
                    <i class="fa-solid fa-database"></i>
                    <p>BASICO</p>
                </div>
            </div>

            <div class="estudiando">
                <h1>ESTUDIANDO</h1>
                <div class="javas">
                    <i class="fa-brands fa-square-js"></i>
                    <P>APRENDIENDO</P>
                </div>
                <div class="php">
                    <i class="fa-brands fa-php"></i>
                    <P>APRENDIENDO</P>
                </div>
                <div class="mysql"><i class="fa-solid fa-database"></i>
                    <P>APRENDIENDO</P>
                </div>
            </div>
        </div>
    </div>
    <!--PASATIEMPOS-->
    <div class="pasatiempos" id="pasatiempos">
        <h1 class="pass">PASATIEMPOS</h1>
        <!--VIDEO JUEGO-->
        <div class="pasatiempos-contenido">
            <div class="videojuegos">
                <div class="img_time">
                    <img src="mine.jpg" alt="minecrafts">
                </div>
                <div class="p_time">
                    <p>
                        Me gustan los videojuegos y mas cuando son de
                        aventuras. los videojuegos que mas me llaman la
                        atencion son: los de aventura, RPG, zombis, los futuristas
                        o con tematica del espacio.
                    </p>
                </div>
            </div>
            <!--SERIES-->
            <div class="series">
                <div class="img_time">
                    <img src="mrrobot.jfif" alt="mrrobot">
                </div>
                <div class="p_time">
                    <p>
                        Tambien amo las series, sobre todo las animadas.
                        El tipo series que me gustan son la series de:
                        misterio, futuristas, de ciencia ficicion, las
                        de super heroes entr otras
                    </p>
                </div>
            </div>
            <!--DEPORTES-->
            <div class="tecnologias">
                <div class="img_time">
                    <img src="OIP.jfif" alt="tecnologia">
                </div>
                <div class="p_time">
                    <p>
                        Finalmente otro teme amo es tecnologia, por algo
                        tome esta carre, pues es algo me genera duda e intriga y
                        que amo aprender.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--FORMULARIO-->
    <div class="form" id="contactos">
        <h1 class="cont">CONTACTAME </h1>
        <form  method="POST">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" class="name" placeholder="name">
            <label for="email">Correo</label>
            <input type="email" name="email" id="email" class="email" placeholder="email">
            <label for="number">Numero</label>
            <input type="number" name="number" id="number" class="number" placeholder="Ingres su numero">
            <label for="text">Descricion</label>
            <textarea name="text" id="text" cols="" rows="" placeholder="Describe tu pagina"></textarea>
            <button class="btn">ENVIAR INFORMACION</button>
        </form>
    </div>
    <!--PIE DE PAGINA-->
    <footer class="pie-pagina">
        <div class="redes_pie">
            <div class="redes_h1">
                <h1>REDES SOCIALES</h1>
            </div>
            <div class="lista_redes">
                <ul class="ul_pie">
                    <li><a href=""><i class="fa-brands fa-github"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="boton.js"></script>
</body>

</html>

<?php
include "conexion.php";

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['number']) && isset($_POST['text'])){
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['number']) && !empty($_POST['text'])){
        if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
            $mysql = "INSERT INTO datos_clientes (NOMBRE,EMAIL, NUMERO, INFORMACION ) VALUES (:name,:email,:number,:text)";
            $conexion = $connx->prepare($mysql); #ejecutar la consulta sql
            $conexion->bindValue(':name',$_POST['name']);
            $conexion->bindValue(':email',$_POST['email'] );#vincular los parametros
            $conexion->bindValue(':number',$_POST['number'] );
            $conexion->bindValue(':text',$_POST['text'] );

            $conexion->execute();
        }
        else{
            ?>
            <script>alert("ingresa un corre valide");</script>
            <?php
        }
    }
        else{
            ?>
            <script>alert("Por favor no saltarse el formulario");</script>
            <?php
        } 
        
    }
#EN CASO DE
?>