<?php
$conexion = mysqli_connect("127.0.0.1", "gabi", "gabi", "prueba");
$consulta = "SELECT * FROM tabla";
 
// Ejecutas las consulta
$resultado = mysqli_query($conexion,$consulta);

if (!$resultado) {
    $mensaje  = 'Consulta no válida: ' . mysqli_error() . "\n";
    $mensaje .= 'Consulta completa: ' . $consulta;
    die($mensaje);
} 

// Use result
//Aca recorres todas las filas y te va devolviendo el resultado

echo '<table>'; 
  while($fila = mysqli_fetch_assoc($resultado)) 
  { 
    echo '<tr>'; 
    echo '<td>' . $fila['matricula'] . '</td><td>' . $fila['marca'] . '</td>
	<td>' . $fila['modelo'] . '</td> <td>' . $fila['color'] . '</td>'; 
    echo '</tr>'; 
  } 
  echo '</table>';

 
//Liberas el resultado
mysqli_free_result($resultado);
//Cerras coneccion
mysqli_close($conexion);
?>
