<?php
$conexion = mysqli_connect("127.0.0.1", "gabi", "gabi", "prueba");
$consulta = "SELECT * FROM tabla";
 
// Ejecutas las consulta




// Use result
//Aca recorres todas las filas y te va devolviendo el resultado
$recupero1 = mysqli_query($consulta, $conexion) or die(mysql_error());
$rec_nombre=""; 
while ($row_tb=mysqli_fetch_assoc($recupero1))
{ 
$rec_nombre = ($row_tb['matricula'].""); 
}

echo "$rec_nombre <br>";
 
//Liberas el resultado
mysqli_free_result($resultado);
//Cerras coneccion
mysqli_close($conexion);
?>

