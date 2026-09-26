
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="Css/Style.css"">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarce</title>
</head>

<body>
    <header>

        <nav>
          <a class="imghover" href="inicio.html"> <img  src="Css/Assets/hogar.png"> </a> <a class="imghover" href="IniciarSesion.html">  <img src="Css/Assets/iniciar seccion.png" alt="Logo"> </a>  <a class="imghover" href=""> <img src="Css/Assets/carrito-de-compras.png"> </a> 
        </nav>
    
    </header>
    <main>

        </section>
        <section id="registrar" class="cuadro">
      <?php
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Numero = $_POST['Numero'];
$Fecha = $_POST['Fecha'];
$Email = $_POST['Email'];
$Contraseña = $_POST['Contrasena'];
$Genero = $_POST['Genero'];
echo "<h1> USUARIO VALIDADO </h1> <br> ";
echo "Nombre del Usuario $Nombre <br>";
echo "Apellido del Usuario $Apellido <br>";
echo "Numero del Usuario $Numero <br>"; 
echo "Fecha del cumpleaño del Usuario $Fecha <br>";
echo "Correo del Usuario $Email <br>";
echo "Contraseña del Usuario $Contraseña <br>";
echo "Genero del Usuario $Genero <br>";

?>
             
        </section>

    </main>
    <footer>
        <p>@Andru, Todos los derechos reservados</p>
        <p>Contacto: ANdru@gmail.com | Tel +123 456 789</p>
    </footer>
</body>

</html>
