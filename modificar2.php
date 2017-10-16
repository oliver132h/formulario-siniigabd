<!-- como en el archivo registro.php  se declaran las variables en las cuales estaran alojados los datos de cada campo del formulario
 para despues modificarlos con base a los datos que ya estaban refistrados en la base de datos utilizando la sentencia update que es la 
 que se encargara de modificar los datos-->
<?php
include 'conexion.php';
//recibir los datos y almacenarlos en variables
  $id            = $_REQUEST ['id'];
  $ClaveUpp      = $_POST["ClaveUpp"];
  $NomProduc     = $_POST["NomProduc"];
  $NomPredio     = $_POST["NomPredio"];
  $NomTecni      = $_POST["NomTecni"];
  $SerieDel      = $_POST["SerieDel"];
  $AL            = $_POST["AL"];
  $TotalPaqComp  = $_POST["TotalPaqComp"];
  $FechaAre      = $_POST["FechaAre"];
  $NumSini       = $_POST["NumSini"];
  $AreteCam      = $_POST["AreteCam"];
  $Mes           = $_POST["Mes"];
  $Anio          = $_POST["Anio"];
  $Genero        = $_POST["Genero"];
  $Raza          = $_POST["Raza"];
  $RazaCruza     = $_POST["RazaCruza"];
  $Empadre       = $_POST["Empadre"];
  $Padre         = $_POST["Padre"];
  $Madre         = $_POST["Madre"];
//consulta para modificar los datos 
$mostrar = "UPDATE ingresar SET ClaveUpp='$ClaveUpp', NomProduc='$NomProduc', NomPredio='$NomPredio', NomTecni='$NomTecni', SerieDel='$SerieDel', AL='$AL',TotalPaqComp='$TotalPaqComp', FechaAre='$FechaAre', NumSini='$NumSini', AreteCam='$AreteCam', Mes='$Mes', Anio='$Anio', Genero='$Genero', Raza='$Raza', RazaCruza='$RazaCruza', Empadre='$Empadre', Padre='$Padre', Madre='$Madre'  WHERE id='$id'  ";
//ejecucion de la sentencia y mostrando los resultados en la tabla que se encuentra en el archivo consulta.php
$resultado = mysqli_query($cone, $mostrar);
if ($resultado) {
 header("Location: consulta.php");
} else {
echo 'insercion no exitosa';
}
