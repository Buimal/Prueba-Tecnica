<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Empleado</title>
    </head>
    <body>
			<center>
					
					<h1>Datos del empleado</h1>
					<form action="Insertar_Empleado.php" method="post">
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
								<td>Tipo contrato:</td>
								<td>
									<select name="Tip">
										<option value="">Seleccion una opcion</option>
										<option value="Termino_indefinido">Termino indefinido</option>
										<option value="Termino_definido">Termino definido</option>
										<option value="Tiempo_parcial">Tiempo parcial</option>
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
