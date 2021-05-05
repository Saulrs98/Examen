<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulta db</title>
    <style type="text/css">
     
      table {
        border: solid 2px #7e7c7c;
        border-collapse: collapse;
                     
      }
     
      th, h1 {
        background-color: #edf797;
      }

      td,
      th {
        border: solid 1px #7e7c7c;
        padding: 2px;
        text-align: center;
      }


    </style>
</head>
<body>
    
</body>
</html>


<?php
//validamos datos del servidor
$user = "root";
$pass = "";
$host = "localhost";

//conetamos al base datos
mysqli_connect($host, $user, $pass);

//hacemos llamado al imput de formulario
$nombre = $_POST["nombre"] ;
$lugar = $_POST["lugar"] ;
$tipo = $_POST["tipo"] ;


//indicamos el nombre de la base datos
$datab = "bd_examen";
//indicamos selecionar ala base datos
 mysqli_select_db($datab);

       /* if (!$db)
        {
        echo "No se ha podido encontrar la Tabla";
        }
        else
        {
        echo "<h3>Tabla seleccionada:</h3>" ;
        }*/
        //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
        $instruccion_SQL = "INSERT INTO Incidentes (nombre, lugar_incidente, tipo_incidente)
                             VALUES ('$nombre','$lugar','$tipo')";

                           
                            
        $resultado = mysqli_query($instruccion_SQL);

  //$consulta = "SELECT * FROM tabla where id ='2'"; si queremos que nos muestre solo un registro en especifivo de ID
  $consulta = "SELECT * FROM Incidentes ";
        
$result = mysqli_query($consulta);
if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}
echo "<table>";
echo "<tr>";
echo "<th><h1>id</th></h1>";
echo "<th><h1>Nombre</th></h1>";
echo "<th><h1>Lugar</th></h1>";
echo "<th><h1>Tipo</th></h1>";
echo "</tr>";


while ($colum = mysqli_fetch_array($result))
 {
    echo "<tr>";
    echo "<td><h2>" . $colum['id']. "</td></h2>";
    echo "<td><h2>" . $colum['nombre']. "</td></h2>";
    echo "<td><h2>" . $colum['lugar_incidente'] . "</td></h2>";
    echo "<td><h2>" . $colum['tipo_incidente'] . "</td></h2>";
    echo "</tr>";
}
echo "</table>";

//mysqli_close( $connection );

   //echo "Fuera " ;
   echo'<a href="index.html"> Volver Atrás</a>';


?>

