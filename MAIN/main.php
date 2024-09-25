<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
    <link rel="stylesheet" href="../CSS/estilo_main.css?v=<?php echo time(); ?>">
</head>
<body> 
<?php
include "../INCLUDES/header.php";
?>

<div class="contenedorbody1">

 
  <div class="cuadro-texto">
      <h2 class="h2-body">¡¡Reclama tu tarjeta prepago Correos!!</h2>
      <p>Paga tus compras del mes de con tu tarjeta y entrarás en el sorteo de más de 130 cheques regalo ¡Puedes ganar hasta 250€!.</p><br>
      <p>Tus compras seguras y tus gastos bajo control con estas ventajas:</p>
      <ul class="ul-body">
<li><u>Funcional:</u> válida en los más de 37 millones de comercios de todo el mundo adheridos a la red Mastercard.</li>
<li><u>Segura:</u>sin vinculación a ningún cuenta banco, solo podrás gastar el saldo que hayas cargado previamente.</li>
<li><u>Accesible:</u>para adquirirla solo necesitas un documento de identidad en vigor.</li>
<li><u>Perfecta para todos tus viajes:</u>tanto nacionales como internacionales.</li>
</ul>
  </div>

  
  <div class="cuadro-foto">
      <img src="../IMAGENES/main/Tarjeta-Correos-Prepago-Mastercard.png" alt="Imagen tarjeta correos">
  </div>
</div>
<div id="contenedor2">

  <div id="foto2">
      <img src="../IMAGENES/main/nadal-fund.png" alt="Foto de sello Nadal" class="imgnadal">
     
  </div>

  
  <div id="texto2">
      <h2>Pack filatélico con propósito Fundación Rafa Nadal</h2>
      <hr>
      <p>-Colabora con la Fundación Rafa Nadal y Correos para seguir transformando vidas a través del deporte. Pack disponible en nuestra tienda de productos.</p>
     <a href="../PAGINAS EXTERNAS/productos.php"><button id="comprar-btn"><strong>COMPRAR</strong></button></a>
  </div>
</div>
<br><h2 class="h2-body">Siempre pensando en ti</h2><br>
<div class="contenedorbloq">
  <div class="bloque">
      <h3 class="h3-bloq">Gestión aduanera✈️</h3>
      <p>Infórmate sobre cómo realizar los trámites aduaneros que necesitas.</p><br><br>
      <a href="../PAGINAS EXTERNAS/aduanas.php"><p>MÁS INFO ></p></a>
  </div>
  <div class="bloque">
    <h3>¿Quieres encontrarnos?</h3>
    <div class="codigo-postal">
        <input type="text" placeholder="Código Postal">
        
        </div>
        
   
</div>
  <div class="bloque">
    <h3 class="h3-bloq">Tarifas 🏢</h3>
      <p class="pbloq">Consulta las tarifas de forma rápida y segura.</p><br><br><br>
      <a href="../PAGINAS EXTERNAS/tarifas.php"><p>MÁS INFO ></p></a>
  </div>
</div>
<br><br>
<?php include "../INCLUDES/footer.php";
?>
</body>
</html>