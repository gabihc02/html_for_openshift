<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="estilo.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  
<title>Page Title</title>
</head>
<body>
<?php
$conexion = mysqli_connect("127.0.0.1", "gabi", "gabi", "concesionario");
?>

<div id="colocar">

  <div id="coches" class="card-deck">
    <div class="card">
      <div class="card-body text-center">
        <img src="https://cdn.drivek.it/configurator-covermobile/cars/es/$original$/RENAULT/CLIO/38755_BERLINA-5-PUERTAS/cover-mobile.jpg" />
        <?php
        $consulta = "SELECT * FROM tabla where modelo='Clio' ";
        $resultado = mysqli_query($conexion,$consulta);
        
        $fila = mysqli_fetch_row($resultado);
        echo "<h3>". $fila[1]. "&nbsp" . $fila[2]. "</h3>". "<br>";
        echo "<p>Precio desde". "&nbsp" .$fila[3] . "€</p>";
        mysqli_free_result($resultado);
        ?>
        <ul>
          <li>Climatización Manual</li>
          <li>Llantas de aleación</li>
          <li>Encendido automático de luces</li>
        </ul>
      </div>
    </div>

    <div class="card">
      <div class="card-body text-center">
        <img src="https://mediaservices.arval.com/Large_1.5_x1/Colors_PNG2048/ES-es/Renault/Captur/2020/5SUV/20capturinitalepsu2b/renault_20capturinitalepsu2b_lowaggressive_blanco-albatros-metalizado.png" />
        <?php
        $consulta = "SELECT * FROM coches where modelo='captur' ";
        $resultado = mysqli_query($conexion,$consulta);
        
        $fila = mysqli_fetch_row($resultado);
        echo "<h3>". $fila[1]. "&nbsp" . $fila[2]. "</h3>". "<br>";
        echo "<p>Precio desde". "&nbsp" .$fila[3] . "€</p>";
        mysqli_free_result($resultado);
        ?>
        <ul>
          <li>Climatización Manual</li>
          <li>Suspensión de Amortiguadores Progresivos Hidráulicos</li>
          <li>Encendido automático de luces</li>
        </ul>
      </div>
    </div>

    <div class="card">
      <div class="card-body text-center">
        <img src="https://cdn.group.renault.com/ren/master/renault-new-cars/product-plans/kadjar/hfe-kadjar/kadjar-hfe-ph2/2560x1440-responsive-format/renault-kadjar1-ph2-exterior-lifestyle-019.jpg.ximg.xsmall.jpg/718fd3f263.jpg" />
        <?php
        $consulta = "SELECT * FROM coches where modelo='Kadjar' ";
        $resultado = mysqli_query($conexion,$consulta);
        
        $fila = mysqli_fetch_row($resultado);
        echo "<h3>". $fila[1]. "&nbsp" . $fila[2]. "</h3>". "<br>";
        echo "<p>Precio desde". "&nbsp" .$fila[3] . "€</p>";
        mysqli_free_result($resultado);
        ?>
        <ul>
          <li>Climatización Manual</li>
          <li>Llantas de aleación</li>
          <li>Encendido automático de luces</li>
        </ul>
        </div>
      </div>

      <div class="card">
        <div class="card-body text-center">
        <img src="https://www.autobild.es/sites/autobild.es/public/dc/fotos/Fiat-Freemont_Cross_2015_C01.jpg" />
        <?php
        $consulta = "SELECT * FROM coches where modelo='Freemont' ";
        $resultado = mysqli_query($conexion,$consulta);
        
        $fila = mysqli_fetch_row($resultado);
        echo "<h3>". $fila[1]. "&nbsp" . $fila[2]. "</h3>". "<br>";
        echo "<p>Precio desde". "&nbsp" .$fila[3] . "€</p>";
        mysqli_free_result($resultado);
        ?>
        <ul>
          <li>Climatización Manual</li>
          <li>Llantas de aleación</li>
          <li>Encendido automático de luces</li>
        </ul>
        </div>
      </div>

    </div>
    

<div id="coches" class="card-deck">

    <div class="card">
      <div class="card-body text-center">
        <img src="https://mediaservices.arval.com/Large_1.5_x1/Pix_PNG2048/ES/Citroen/Jumpy/2017/5CargoVan/17jumpybizl1h1pv3bc/citroen_17jumpybizl1h1pv3bc_lowaggressive.png" />
        <?php
        $consulta = "SELECT * FROM coches where modelo='Jumpy' ";
        $resultado = mysqli_query($conexion,$consulta);
        
        $fila = mysqli_fetch_row($resultado);
        echo "<h3>". $fila[1]. "&nbsp" . $fila[2]. "</h3>". "<br>";
        echo "<p>Precio desde". "&nbsp" .$fila[3] . "€</p>";
        mysqli_free_result($resultado);
        ?>
        <ul>
          <li>Suspensión de Amortiguadores Progresivos Hidráulicos</li>
          <li>Llantas de aleación</li>
          <li>Encendido automático de luces</li>
        </ul>
      </div>
    </div>

    <div class="card">
      <div class="card-body text-center">
        <img src="https://cdn.drivek.it/configurator-covermobile/cars/es/$original$/MERCEDES/CLASE-A/32213_BERLINA-5-PUERTAS/mercedes-benz-classe-a-2018-cover-mobile.jpg" />
        <?php
        $consulta = "SELECT * FROM coches where modelo='Clase a' ";
        $resultado = mysqli_query($conexion,$consulta);
        
        $fila = mysqli_fetch_row($resultado);
        echo "<h3>". $fila[1]. "&nbsp" . $fila[2]. "</h3>". "<br>";
        echo "<p>Precio desde". "&nbsp" .$fila[3] . "€</p>";
        mysqli_free_result($resultado);
        ?>
        <ul>
          <li>Freno estacionamiento eléctrico</li>
          <li>Llantas de aleación</li>
          <li>Encendido automático de luces</li>
        </ul>
      </div>
    </div>

    <div class="card">
      <div class="card-body text-center">
        <img src="https://www.automocionpere.com/storage/app/uploads/public/5e6/fd7/629/5e6fd76299715769961170.jpg" />
        <?php
        $consulta = "SELECT * FROM coches where modelo='Xsara' ";
        $resultado = mysqli_query($conexion,$consulta);
        
        $fila = mysqli_fetch_row($resultado);
        echo "<h3>". $fila[1]. "&nbsp" . $fila[2]. "</h3>". "<br>";
        echo "<p>Precio desde". "&nbsp" .$fila[3] . "€</p>";
        mysqli_free_result($resultado);
        ?>
        <ul>
          <li>Climatización Manual</li>
          <li>Llantas de aleación</li>
          <li>Encendido automático de luces</li>
        </ul>
        </div>
      </div>

      <div class="card">
        <div class="card-body text-center">
        <img src="https://cdn-jaguarlandrover.com/api/v1/image/24120" />
        <?php
        $consulta = "SELECT * FROM coches where modelo='XE' ";
        $resultado = mysqli_query($conexion,$consulta);
        
        $fila = mysqli_fetch_row($resultado);
        echo "<h3>". $fila[1]. "&nbsp" . $fila[2]. "</h3>". "<br>";
        echo "<p>Precio desde". "&nbsp" .$fila[3] . "€</p>";
        mysqli_free_result($resultado);
        ?>
        <ul>
          <li>Climatización Manual</li>
          <li>Reconocimiento de Señales de Velocidad</li>
          <li>Encendido automático de luces</li>
        </ul>
      </div>
    </div>

</div>
</div>

</body>
</html>

