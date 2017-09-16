<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Empleador</title>
    </head>
    <body>
			<center>
					<h1>Datos del empleador</h1>
					<form action="Insertar_Empleador.php" method="post">
						<table>
							<tr>
								<td>Nombre completo:</td>
								<td><input type="text" name="Nom"></td><br/>
							</tr>
							<tr>
								<td>Sexo:</td>
								<td>
									<input type="radio" name="Sexo" value="F">F
									<input type="radio" name="Sexo" value="M">M
								</td><br/>
							</tr>
							<tr>
								<td>Cedula:</td>
								<td><input type="text" name="Ced"></td><br/>
							</tr>
							<tr>
								<td>Telefono:</td>
								<td><input type="text" name="Tel"></td><br/>
							</tr>
							<tr>
								<td>Direccion:</td>
								<td><input type="text" name="Dir"></td><br/>
							</tr>
							<tr>
								<td>Fecha de nacimiento:</td>
								<td><input type="date" name="Fec"></td><br/>
							</tr>
							<tr>
								<td>Relacione empleados:</td>
								<td>
									<select multiple name="empleados[]">
										<?php
											$con=mysql_connect("localhost","root","");
											mysql_select_db("SYMPLIFICA",$con);
											$query="SELECT * FROM EMPLEADOS;";
											$result=mysql_query($query,$con);

											if ($result === false) die("failed"); 
											
											while ($row = mysql_fetch_array($result)){
											
												print "<option value='".$row["Cedula"]."'>".$row["Nombre"]."</option>";
											}
										?>
									</select>
								</td><br/>
							</tr>
						</table>
						<input type="submit" name="enviar" value="Enviar">
						</br>
						
					</form>
					
					<input name="Regresar" type="submit" value="Regresar" onclick=" location.href='Index.html' "/>
			</center>
    </body>
</html>
