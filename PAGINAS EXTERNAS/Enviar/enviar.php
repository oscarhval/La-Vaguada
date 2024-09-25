<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar</title>
    <link rel="stylesheet" href="../../CSS/estilos_enviar.css?v=<?php echo time(); ?>">
</head>

<body>
<?php
    include "../../INCLUDES/headerenv-rec.php";
    ?>   

    <div class="Fondo_enviar">
        <h1>Enviar</h1>
        Conoce la amplia gama de servicios que te ofrecemos <br>
        para que tus envíos lleguen a su destino con la máxima seguridad y confianza.
        <br><br><br>
    </div>
    <div class="contenedorgrl1">
        <h1>Envios Nacionales</h1>
            <div class="envios_Nacio">
                <a href="./envio_rapidoNacio.php">  <img src="../../IMAGENES/Enviar_Recibir/rapido_blanco.svg" alt="paquete"></a>
                <h2>Envío rápido</h2>
                <p>Envíos a cualquier parte del mundo en el menor tiempo posible.</p>
            </div>   
        <div class="Envio_Economicos">
            <a href="./envio_EconomicoNaci.php"> <img src="../../IMAGENES/Enviar_Recibir/eco_blanco.svg" alt="paquete"></a>
            <h2>Envío Económico</h2>
            <p>A cualquier lugar a bajo precio</p>
        </div>
        <div class="Envio_Frio">
            <a href="./envio_Frio.php"> <img src="../../IMAGENES/Enviar_Recibir/correos_frio_white.svg" alt="paquete"></a>
            <h2>Envío en frío</h2>
            <p>Nuestro nuevo servicio de transporte en el que controlamos a tiempo real la cadena de frío.</p>
        </div>
    </div>
    <div class="fondo_Internacional">
        <h1>Envios Internacionales</h1>
    </div>
    <div>
        
            <div class="envios_Rapidos_Inter">
               <a href="./envio_rapidointer.php"> <img  src="../../IMAGENES/Enviar_Recibir/rapido_blanco.svg" alt="paquete"></a>
                <h2>Envío rápido</h2>
                <p>Envíos a cualquier parte del mundo en el menor tiempo posible.</p>
            </div>   
        <div class="Envio_Eco">
            <a href="./envio_enconomicointer.php"> <img src="../../IMAGENES/Enviar_Recibir/eco_blanco.svg" alt="paquete"></a>
            <h2>Envío Económico</h2>
            <p>A cualquier lugar a bajo precio</p>
        </div>
        <div class="Envio_Ligero">
            <a href="./envio_ligeros.php">   <img src="../../IMAGENES/Enviar_Recibir/ligero_blanco.svg" alt="paquete"></a>
            <h2>Envío Ligeros</h2>
            <p>Hasta 2 kg al mejor precio a cualquier lugar del mundo</p>
        </div>
    </div>

    <?php
    include "../../INCLUDES/footerrec-env.php";
    ?>  
</body>

</html>