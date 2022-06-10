<html>
<div class="container">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<br><br>
<h1>Lista de variantes del COVID-19</h1><br>
<a href="agregarVariante.html"><h5>Agregar una nueva variante</h5></a>
<?php
require_once "config.php";

$sql = "SELECT * FROM variantes";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class= \"table\">";
            echo "<tr>";
                echo "<th scope= \"col \">Denominacion</th>";
                echo "<th scope= \"col \">Primer Lugar Visto</th>";
                echo "<th scope= \"col \">Peligrosidad</th>";
                echo "<th scope= \"col \">Numero de contagios</th>";

            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['denominacion'] . "</td>";
                echo "<td>" . $row['primerlugarvisto'] . "</td>";
                echo "<td>" . $row['peligrosidad'] . "</td>";
                echo "<td>" . $row['contagios'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else
	{
        echo "No se encontraron registros.";
    	}
} else	{
    echo "ERROR: No se pudo realizar la query: $sql. " . 
    mysqli_error($link);
} 
// Close connection
mysqli_close($link);
?>
</div>
</html>
