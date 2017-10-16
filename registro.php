<?php
include 'conexion.php';
//recibir los datos y almacenarlos en variables
  $ClaveUpp      = $_POST['ClaveUpp'];
  $NomProduc     = $_POST['NomProduc'];
  $NomPredio     = $_POST['NomPredio'];
  $NomTecni      = $_POST['NomTecni'];
  $SerieDel      = $_POST['SerieDel'];
  $AL            = $_POST['AL'];
  $TotalPaqComp  = $_POST['TotalPaqComp'];
  $FechaAre      = $_POST['FechaAre'];
  $NumSini       = $_POST['NumSini'];
  $AreteCam      = $_POST['AreteCam'];
  $Mes           = $_POST['Mes'];
  $Anio          = $_POST['Anio'];
  $Genero        = $_POST['Genero'];
  $Raza          = $_POST['Raza'];
  $RazaCruza     = $_POST['RazaCruza'];
  $Empadre       = $_POST['Empadre'];
  $Padre         = $_POST['Padre'];
  $Madre         = $_POST['Madre'];
  
//consulta para insertar los datos en la tabla ingresar de mi base de datos siniiga.
$insertar = "INSERT INTO ingresar(ClaveUpp, NomProduc, NomPredio, NomTecni, SerieDel, AL, TotalPaqComp, FechaAre, NumSini, AreteCam, Mes, Anio, Genero, Raza, RazaCruza, Empadre, Padre, Madre ) VALUES ('$ClaveUpp', '$NomProduc', '$NomPredio', '$NomTecni', '$SerieDel', '$AL', '$TotalPaqComp', '$FechaAre', '$NumSini', '$AreteCam', '$Mes', '$Anio', '$Genero', '$Raza', '$RazaCruza', '$Empadre', '$Padre', '$Madre')";
//ejecutacion de los resultados y mostrados en el archivo consulta.php
$resultado = mysqli_query($cone, $insertar);
if (!$resultado) {
 echo 'error al registrarse';
} else {

   header ("Location: consulta.php");
}
//cerrar conexion de la base de datos.
mysqli_close($cone);
