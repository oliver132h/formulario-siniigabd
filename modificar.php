<!-- en este apartado de modificar.php se encuentra lo que es la conexion para modificar los datos de la tabla ingresar dependiendo cual
sea el campo que se quiere modificar esto se realiza con una consulta que se llama select en la cual se podra modificar los datos los datos
del campo que se selecciono. -->
 

<?php
               $id = $_REQUEST['id'];
        
                include 'conexion.php';
                $mostrar = "SELECT * FROM ingresar WHERE id ='$id'";
                $resultado = mysqli_query($cone, $mostrar);
                $row=$resultado->fetch_assoc();
   ?>
    
<!DOCTYPE html>
<html >
	
	<!-- dentro de este apartado del codigo en la etiqueta head se establece la etiqueta meta de igual forma se especifica el 
         link de el archivo css y seguidamente una etiqueta title en la cual se encuentra en titulo de la pagina-->
	
<head>
  <meta charset="UTF-8">
     <link rel="stylesheet" href="css/Style.css">
  <title>Formulario Siniiga</title>

</head>  

	<!--  dentro del body se encuenta un header en el cual se especifica el link de una imagen la cual es el logotipo de siniiga seguidamente 
		  de lo que es un texto en las etiquetas lista con el nombre de formulario siniiga y seguidamente el de cedula de identificacion de la especie bovina.  
-->
	
<body>
	

  <header>
	  <h1> 
	  <a><img width="160px" height="140px" src="img/siniga.gif"></a> 
    </h1> 
	  
	  <nav align="center" >
		  <ul>
			  <li><a><b>FORMULARIO SINIIGA</b></a></li><br>
	 		<li><a><b>CEDULA DE IDENTIFICAION DE ESPECIE (BOVINA)</b></a></li>
		  </ul>
	  </nav>
  </header>
	
	<!-- seguidamente se agrega una etiqueta form en la cual se agregara todos los datos que se necesitan para complementar el formulario, todos los campos que tendran almacenados los valores del formulario se agregaron en etiquetas label en las cuales se pone un texto de lo que se devera poner en un cajo de texto que se pondran en la estructura con una etiqueta input en la cual se le asiga un nombre al cajon de texto un ancho y la clase a la que pertenece todo esto dentro del formulario se agrego en la etiqueta fieldset que esta etiqueta sirve para crear grupos de campos de una manera organizada de igual forma entre los campos que llevara el formulario se agregaron unas etiquetas de fecha ya que de igual forma se agregaran entre los datos  fechas.

	de igual forma se agrego un boton que tendra la funcionalidad de guardar todo el registro del formulario.

	-->
	
  <form action="modificar2.php?id=<?php echo $row['id']; ?>" method="POST">
    
	  
	  

      <fieldset>
		  
        <fieldset>
          <legend>Datos</legend>
			<br>
          <label>Clave UPP:</label>
    <input type="text" name="ClaveUpp" id="ClaveUpp"  placeholder="Clave UPP" value="<?php echo $row['ClaveUpp']; ?>"/> 
			
			<label>Nombre del Productor:</label>
          <input type="text" name="NomProduc" id="NomProduc" placeholder="Nombre Del Productor" value="<?php echo $row['NomProduc']; ?>"/>
          
			<label>Nombre del Predio:</label>
           <input type="text" name="NomPredio" id="NomPredio" placeholder="Nombre Del Predio" value="<?php echo $row['NomPredio']; ?>"/>
			<br><br>
			
			<label>Nombre del Tecnico:</label>
          <input type="text" name="NomTecni" id="NomTecni" placeholder="Nombre Del Tecnico" value="<?php echo $row['NomTecni']; ?>"/>
			
			<label>Serie del:</label>
         <input type="text" name="SerieDel" id="SerieDel" placeholder="Serie Del" value="<?php echo $row['SerieDel']; ?>"/>
			
			<label>AI:</label>
         <input type="text" name="AL" id="AL" placeholder="AL" value="<?php echo $row['AL']; ?>"/>
			
			<label>Total De Paquetes Completos:</label>
          <input type="text" name="TotalPaqComp" id="TotalPaqComp" placeholder="Total Paq. Completos" value="<?php echo $row['TotalPaqComp']; ?>"/>
			<br><br>
			
			
		  	<labe>Fecha de Aretado: </labe>
        <input type="date" name="FechaAre" id="FechaAre" value="<?php echo $row['FechaAre']; ?>" > 
		   <br>
          <br>
			
        </fieldset>


        <fieldset>
          <legend> Campos Obligatorios </legend>
        <br>
		   <label>No. SINIIGA:</label>
         <input type="text" name="NumSini" placeholder="No. SINIIGA" required value="<?php echo $row['NumSini']; ?>"/>
			
			<label>Arete Campaña:</label>
           <input type="text" name="AreteCam" placeholder="Arete Campaña" required value="<?php echo $row['AreteCam']; ?>"/>
			
			<label>Mes:</label>
			<input type="text" name="Mes" placeholder="MM" required value="<?php echo $row['Mes']; ?>"/>
			<label>Anio:</label>
            <input type="text" name="Anio" placeholder="AAAA" required value="<?php echo $row['Anio']; ?>"/>
 
			<label>Sexo:</label>
        <input type="text" name="Genero" placeholder="Hembra o Macho" required value="<?php echo $row['Genero']; ?>"/>
			<br><br>
			
			<label>Raza:</label>
            <input type="text" name="Raza" placeholder="Raza" required value="<?php echo $row['Raza']; ?>"/>
			
			<label>Especificar Cruzada (Raza/Cruza):</label>
         <input type="text" name="RazaCruza" placeholder="Especificar Raza/Cruza" required value="<?php echo $row['RazaCruza']; ?>"/>
			
			<label>Empadre:</label>
          <input type="text" name="Empadre" placeholder="Empadre" required value="<?php echo $row['Empadre']; ?>"/>
           
			<br> <br>
			
			<label>Padre:</label>
         <input type="text" name="Padre" placeholder="Padre" required value="<?php echo $row['Padre']; ?>"/>
			
			<label>Madre:</label>
         <input type="text" name="Madre" placeholder="Madre" required value="<?php echo $row['Madre']; ?>"/>
			
		  <br>
          <br> 
			
			  <br>
  <input type="submit" value="GUARDAR" > 
		
          <br><br> 
			
        </fieldset>

	
      </fieldset>


      	
	
	  
	  
  </form>	
</body>
</html>