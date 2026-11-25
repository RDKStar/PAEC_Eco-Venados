<!DOCTYPE html>
<html>
    <LINK rel=stylesheet type="text/css" href="x-x.css">
<head>
    <meta charset="UTF-8">
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
    $name = htmlspecialchars($_POST['na']);
    $email = htmlspecialchars($_POST['em']);
    $age = htmlspecialchars($_POST['ag']);
    $group = htmlspecialchars($_POST['gr']);
    $answer = htmlspecialchars($_POST['an']);
    $answer2 = htmlspecialchars($_POST['an2']);
    $tk = htmlspecialchars($_POST['tk']);
    $answer3 = htmlspecialchars($_POST['an3']);
    $comment = htmlspecialchars($_POST['co']);

    echo "<span style=‘font-size: 25px;
    color: #2c823d;
    margin-top: 12px;
    margin-bottom: 3px;‘>Hola querido $name, gracias por partcicpar en la encuesta.<br>Desde el grupo de 5G hasta el grupo de $gruoup 
    te mandamos un saludo<br> Ahora bien, al parecer ayudas a la naturaleza haciendo $tk y estamos agredecidos, a pesar 
    que generes mucho $answer. Solo recuerda cumplir con tu compromiso, ya sabes, el $answer3.</span>"
    if (answer2=="No"){
        echo"<span style=‘font-size: 25px;
    color: #2c823d;
    margin-top: 12px;
    margin-bottom: 3px;‘>Solo recuerda separar tus residuos, quieres?</span>"
    }
    else{
        echo"<span style=‘font-size: 25px;
    color: #2c823d;
    margin-top: 12px;
    margin-bottom: 3px;‘>Sigue asi y sigue mejorando, crack</span>"
    }
    ?>

    <div class="beg">
        <button><a href="index.html" id="rl">Regresar a la portada</a></button>
    </div>
    </main>
    <!-- banner imagenes-->
    <aside class="banner-derecho">
        <div class="menu-banner">
            <h2>Mini menu de navegación</h2>
            <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="what.html">Qué es el reciclaje?</a></li>
                <li><a href="types.html">Tipos de residuos</a></li>
                <li><a href="3R.html">Las 3 R: Reducir, Reutilizar, Reciclar</a></li>
                <li><a href="problem.html">Problemas ambientales</a></li>
                <li><a href="school.html">El reciclaje en nuestra escuela</a></li>
                <li><a href="community.html">El reciclaje en nuestra comunidad</a></li>
                <li><a href="http://localhost/napa/formulario.html">Formulario</a></li>
                <ul>
                    <li><a href="http://localhost/napa/formulario.html#min">Minijuego</a></li>
                </ul>
                <li><a href="bibliography.html">Bibliografía</a></li>
            </ul>
        </div>
        <object data="https://www.w3.org/2000/svg" type="image/svg+xml">
      <img src="https://media1.tenor.com/m/XjWq1YsrqOQAAAAd/hatsune-miku.gif" alt="Imagen" ><br>
      <p>"Spin"</p>
      <img src="https://media1.tenor.com/m/q2ofk7xTztcAAAAd/neru-akita-neru.gif" alt="Imagen" ><br>
      <p>"Spin"</p>
      <img src="https://media.tenor.com/AhtU402fQnsAAAAj/teto-teto-kasane.gif" alt="Imagen" ><br>
      <p>"Spin"</p>
    </aside>

    </aside>
  </div>
</body>

<footer>
     <a href="#beg"><button>Regresar al inicio</button></a>
    <div class="banner-derecha">
        <p>© 2026 Eco-Venados. Todos los derechos reservados.</p>
    </div>
</footer>
</html>