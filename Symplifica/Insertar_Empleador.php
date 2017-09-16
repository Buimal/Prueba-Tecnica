<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Datos enviados</title>
    </head>
    <body>
        <?php
		$Nombre		=	$_POST['Nom'];
		$Sexo		=	$_POST['Sexo'];	
		$Cedula		=	$_POST['Ced'];					
		$Telefono	=	$_POST['Tel'];
		$Direccion	=	$_POST['Dir'];
		$Fecha		=	$_POST['Fec'];
		$Empleados	= 	$_POST['empleados'];
		
		
		try{
			$con=mysql_connect("localhost","root","");
			//echo $con;
			mysql_select_db("SYMPLIFICA",$con);
			$query="INSERT INTO SYMPLIFICA.EMPLEADORES VALUES('".$Nombre."','".$Sexo."',".$Cedula.",'".$Telefono."','".$Direccion."','".$Fecha."');";
			$result=mysql_query($query,$con);
			//echo $result;
			
			
			

			foreach($_POST['empleados'] as $indice=>$valor){
				
				$query1="INSERT INTO SYMPLIFICA.DATALLE_EMPLEADOS VALUES(0,".$Cedula.",".$valor.");";
				$result1=mysql_query($query1,$con);
			}
			
			
			
			if($result == 1){
				Print "Datos ingresados correctamente";
			}else{
				Print "Error al guardar los datos";
				print "</br>";
				
			}
			
			
		}catch (Exception $e){
			echo 'Excepción capturada: ',  $e->getMessage(), "\n";
		}
        ?>
		<input name="Regresar" type="submit" value="Regresar" onclick=" location.href='Index.html' "/>
    </body>
</html>

