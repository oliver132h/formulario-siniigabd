<!-- en esta parte se hace la consulta a la base de datos con la sentencia select en la cual se hace referencia a la tabla en la 
estaran todos los datos de la tabla ingresar. -->

<?php
require('conexion.php');

$query="SELECT * FROM ingresar";

$resultado= $cone-> query($query); 

?>

<!-- en este apartado se hace una estructura html en la cual se esta expresando lo que es la tabla donde se visualizaran los datos que se encuentran
en la base de datos la cual estara estructurada con forme esten ordenados en la base de datos dentro del ody se encuentra alojada lo que es las etiquetas
<td> en las cuales se hacen referencia a el orden  de la tabla que se apreciara en el index consulta.php.

de igual forma se agregaron estilos para que la tabla donde se mostraran los datos tenga una manera llamativa de mostrar todos los datos en ella -->

<html>
	<head>
		<title>TABLA DE REGISTROS</title>
<style type="text/css">


/* Datagrid */
	body {
  font: normal medium/1.4 sans-serif;
  background: linear-gradient( 0deg, #C0C0C0   , #F8F8F8);}
table {
  border-collapse: collapse;
  width: 100%;
}
th, td {
  padding: 0.25rem;
  border: 1px solid #ccc;
}
tbody tr:nth-child(odd) {
  background: #eee;
}
.centro{
  padding: 0.5rem;
  background: #F1C40F ;
  color: white;
  text-align: center;
  font-size: 12px;

}

#cuadro{
	width: 100%;
	background: #F8F8F8 ;
	padding: 25px;
	margin: 5px auto;
	border: 3px solid #D8D8D8;
}
#titulo{
	width: 100%;
	background: #F1C40F;
	color:white;

}
	</style>
	</head>
	
	<body>
	<div id="cuadro">
		<center><img src="img/siniga.gif"><br> 
		<div id="titulo">
		<center><h1>Regristos De Datos SINIIGA</h1></center>
		</div>
		
		<table>
			<thead>
				<tr class="centro">
					<td>Id</td>
					<td>Clave UPP</td>
					<td>Productor</td>
					<td>Predio</td>
					<td>Tecnico</td>
					<td>SerieDel</td>
					<td>AL</td>
					<td>Paquetes</td>
					<td>Fecha Aretado</td>
					<td>No.Siniiga</td>
					<td>Arete Campaña</td>
					<td>Mes</td>
					<td>Año</td>
					<td>Genero</td>
					<td>Raza</td>
					<td>Raza/Cruzada</td>
					<td>Empadre</td>
					<td>Padre</td>
					<td>Madre</td>
					<td colspan="2">Operaciones</td>
				
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
						<tr>
							<td><?php echo $row['id'];?>
							</td>
							<td>
								<?php echo $row['ClaveUpp'];?>
							</td>
							<td>
								<?php echo $row['NomProduc'];?>
							</td>
							<td>
								<?php echo $row['NomPredio'];?>
							</td>
							<td>
								<?php echo $row['NomTecni'];?>
							</td>
								<td><?php echo $row['SerieDel'];?>
							</td>
							<td>
								<?php echo $row['AL'];?>
							</td>
							<td>
								<?php echo $row['TotalPaqComp'];?>
							</td>
							<td>
								<?php echo $row['FechaAre'];?>
							</td>
							<td>
								<?php echo $row['NumSini'];?>
							</td>
							<td>
								<?php echo $row['AreteCam'];?>
							</td>
							<td>
								<?php echo $row['Mes'];?>
							</td>
							<td>
								<?php echo $row['Anio'];?>
							</td>
							<td>
								<?php echo $row['Genero'];?>
							</td>
							<td>
								<?php echo $row['Raza'];?>
							</td>
							<td>
								<?php echo $row['RazaCruza'];?>
							</td>
							<td>
								<?php echo $row['Empadre'];?>
							</td>
							<td>
								<?php echo $row['Padre'];?>
							</td>
							<td>
								<?php echo $row['Madre'];?>
							</td>
							
						    <td><a href="modificar.php?id=<?php echo $row['id']; ?>">Modificar</a></td> 
							<td><a href="Eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</a></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>	
			</center>
		<a href="index.html"><button>Regresar</button></a> 
		</div>
		
		</body>
	</html>	
	