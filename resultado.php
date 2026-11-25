<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="x-x.css">
    <title>Result</title>
</head>
<body>
    <div class="banner" id="beg"> 
        <h1>Eco-Venados: Tema</h1>
    </div>
    <!-- inicio de banner-->
    <div class="contenedor-principal">
        <!-- banner contenido-->
        <main class="contenido-texto">

        <?php
        $name     = htmlspecialchars($_POST['na'] ?? '', ENT_QUOTES, 'UTF-8');
        $email    = htmlspecialchars($_POST['em'] ?? '', ENT_QUOTES, 'UTF-8');
        $age      = htmlspecialchars($_POST['ag'] ?? '', ENT_QUOTES, 'UTF-8');
        $group    = htmlspecialchars($_POST['gr'] ?? '', ENT_QUOTES, 'UTF-8');
        $answer   = htmlspecialchars($_POST['an'] ?? '', ENT_QUOTES, 'UTF-8');
        $answer2  = htmlspecialchars($_POST['an2'] ?? '', ENT_QUOTES, 'UTF-8');
        $tk       = htmlspecialchars($_POST['tk'] ?? '', ENT_QUOTES, 'UTF-8');
        $answer3  = htmlspecialchars($_POST['an3'] ?? '', ENT_QUOTES, 'UTF-8');
        $comment  = htmlspecialchars($_POST['co'] ?? '', ENT_QUOTES, 'UTF-8');

        $estilo = "font-size: 25px; color: #2c823d; margin-top: 12px; margin-bottom: 3px;";

        echo "<span style='$estilo'>Hola querido $name, gracias por participar en la encuesta.<br>"
           . "Desde el grupo de 5G hasta el grupo de $group te mandamos un saludo.<br>"
           . "Ahora bien, al parecer ayudas a la naturaleza haciendo $tk y estamos agradecidos, a pesar "
           . "que generes mucho $answer.<br>Solo recuerda cumplir con tu compromiso, ya sabes, el $answer3.<br></span>";

        if ($answer2 == "No") {
            echo "<span style='$estilo'><br>Solo recuerda separar tus residuos, ¿quieres?</span>";
        } else {
            echo "<span style='$estilo'>Sigue así y sigue mejorando, crack</span>";
        }
        ?>
		<br><br><br>
        <div class="beg">
            <a href="index.html" id="rl"><button type="button">Regresar a la portada</button></a>
        </div>
        </main>

        <!-- banner imagenes-->
        <aside class="banner-derecho">
            <div class="menu-banner">
                <h2>Mini menu de navegación</h2>
                <ul>
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="what.html">¿Qué es el reciclaje?</a></li>
                    <li><a href="types.html">Tipos de residuos</a></li>
                    <li><a href="3R.html">Las 3 R: Reducir, Reutilizar, Reciclar</a></li>
                    <li><a href="problem.html">Problemas ambientales</a></li>
                    <li><a href="school.html">El reciclaje en nuestra escuela</a></li>
                    <li><a href="community.html">El reciclaje en nuestra comunidad</a></li>
                    <li>
                        <a href="formulario.html">Formulario</a>
                        <ul>
                            <li><a href="formulario.html#min">Minijuego</a></li>
                        </ul>
                    </li>
                    <li><a href="bibliography.html">Bibliografía</a></li>
                </ul>
            </div>


        </aside>
    </div>

    <footer>
        <a href="#beg"><button type="button">Regresar al inicio</button></a>
        <div class="banner-derecha">
            <p>© 2026 Eco-Venados. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>