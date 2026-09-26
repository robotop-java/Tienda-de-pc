<?php

require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['Nombre'];
    $password = password_hash($_POST['Contrasena'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO Nombre (usuario, contrasena) VALUES (:Nombre, :Contrasena)";
    $stmt = $pdo->prepare($sql);

    try {
        $stmt->execute(['Nombre' => $username, 'Contrasena' => $password]);
        echo "Usuario registrado con éxito";
    } catch (PDOException $e) {
        if ($e->errorInfo[1] == 1062) {
            echo "El nombre de usuario ya está en uso.";
        } else {
            echo "Error al registrar el usuario: " . $e->getMessage();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="Css/Style.css">
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

        <section id="titulo" class="titulo">
           

                <h1>Registrar</h1>
          
        </section>
        <section id="registrar" class="cuadro">
          <form action="validar_alta.php" method="post">
                        <label for="Nombre">Nombre</label>
                        <input type="text" name="Nombre" id="Nombre" required>
                        <label for="contraseña">Contraseña</label>
                        <input type="password" name="Contrasena" id="Contrasena" required>
                       <button class="subirbutton" type="submit">></button>
                      
                    </form>     
             
        </section>

    </main>
    <footer>
        <p>@Andru, Todos los derechos reservados</p>
        <p>Contacto: ANdru@gmail.com | Tel +123 456 789</p>
    </footer>
</body>

</html>