<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>

<body>

    <header class="Titulo">
        <h3>Registro en mi DB</h3>
    </header>
    <div class="Formulario">
        <form action="enviarRegistro.php" method="post">
            <hr>
            <div>
                <label for="nombre_usuario">Ingresa nombre completo:</label>
                <input type="text" name="nombre_usuario" required maxlength="100" placeholder="Ingresa tu Nombre">
                <br><br>
            </div>

            <div>
                <label for="contraseña">Ingresa una contraseña:</label>
                <input type="password" name="contrasena"  placeholder="Ingresa tu contraseña">
                <br><br>
            </div>

            <div>
                <label for="nombre_usuario">Ingresa correo electronico:</label>
                <input type="email" name="email" placeholder="Ingresa un email">
                <br><br>
            </div>

            <div>
                <label for="descripcion">Ingresa una descripcion:</label>
                <input type="text" name="descripcion" required maxlength="100" placeholder="Ingresa una descripcion">
                <br><br>
            </div>


            <button type="submit">Enviar</button>
    </div>
    </form>

    </div>
</body>

</html>

<a href='index.html'>Nuevo registro</a>