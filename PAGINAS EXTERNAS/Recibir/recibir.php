<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibir</title>
    <link rel="stylesheet" href="../../CSS/estilos_Recibir.css">
</head>

<body>

<?php
    include "../../INCLUDES/headerenv-rec.php";
    ?>
    <div class="Fondo_segui">
        Recibir
        Gestiona la entrega de tu envío.<br>
        Consulta su estado y mantente informado en cada momento de dónde se encuentra.
    </div>
    <img class="img_Paquete" src="../../IMAGENES/Enviar_Recibir/paquete.jfif" alt="foto paquete">
    <div class="Segimiento">
        <h3>Sigue tu envio</h3>
        <input type="text" placeholder="introduce el Nº del envio">
        <button type="submit">Buscar</button>
    </div>
    <br>
    <div class="Modificar_entrega_Padre">
        <div class="Modificar_entrega_Hijo">
            <h2>Modifica tu entrega</h2>
            <br>
            <h3>Si estás esperando un paquete y no vas a estar en la dirección indicada,<br>
                ahora puedes gestionar la entrega de tu envío.
                Conoce todas las posibilidades que ponemos a tu alcance con Correos Modify.</h3>
            <a href="./Modificar.php"><button class="boton_Modificar">Modificar</button></a>
        </div>
    </div>
    <div class="Preguntas">
        <h1>Preguntas frecuentes</h1>
        <h3><a href="./Pregunta1.php">¿Qué es el aviso de llegada?</a></h3><br>
        <h3><a href="./Pregunta2.php">¿Por qué he recibido un aviso de llegada por SMS?</a></h3><br>
        <h3><a href="./Pregunta3.php">¿Por qué he recibido un SMS de entrega en domicilio?</a></h3><br>
        <h3><a href="./Pregunta4.php">¿Por qué he recibido un SMS de entrega en oficina?</a></h3><br>
    </div>
    <div class="bajar"></div>
    <?php
    include "../../INCLUDES/footerrec-env.php"
    ?> 
</body>

</html>