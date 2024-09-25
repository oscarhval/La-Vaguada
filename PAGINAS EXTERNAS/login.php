<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIAR SESIÓN</title>
    <link rel="stylesheet" href="../CSS/estilo_login.css">
    
</head>
<body>

</div>
<div id="contenedor">

<div id="panel-izquierdo">
  
</div>

<div id="panel-central">
    <h2>Iniciar Sesión</h2>
    <br>
    <div id="formulario">
        <p>Correo electrónico</p>
        <input type="email" id="email" name="email" required>
<br>
        <p>Contraseña</p>
        <input type="password" id="password" name="password" required>

        <button type="submit">Iniciar Sesión</button>
        <div class="cont-logo">
        <a href="../MAIN/main.php"><img src="../IMAGENES/Enviar_Recibir/LogoCorreospeq.svg" alt="Logo para inicio" class="logo"></a>

        </div>
        <div class="cont_politic">
        <a href="https://www.correos.es/es/es/legales/privacidad-web"><p>Política de privacidad</p></a>
        <a href="https://mioficina.correos.es/es/es/recuperacion-de-contrasena/detalle"><p>¿Tienes problemas de inicio de sesión?</p></a>
        </div>
    </div>
</div>

<div id="panel-derecho">
</div>

</div>
 <?php
 include "../INCLUDES/footer.php"
 ?> 
</body>
</html>