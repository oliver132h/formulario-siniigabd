<!-- en este apartado de eliminar.php se hace lo que es la sentencia de eliminar los datos de la tabla que se llama ingresar en la cual
se encuentran los datos. -->

<?php
include 'conexion.php';
// aqui se recibe los datos del id de la base de datos que tiene asigando y los almacena en las variables.

$id         =    $_REQUEST ['id'];

//consulta para eliminar los datos de la base de datos ingresar.

$mostrar = "DELETE FROM ingresar WHERE id='$id'  ";
//ejecucion de la sentencia delete y seguidamente se visualizara en el archivo consulta.php en el cual se mstrara los datos de la base de datos.
$resultado = mysqli_query($cone, $mostrar);
if ($resultado) {
 header("Location: consulta.php");
} else {
echo 'insercion no exitosa';
}

