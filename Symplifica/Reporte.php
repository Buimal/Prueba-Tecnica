<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>REPORTE</title>
    </head>
    <body>
			<center>
						<table border="2">
							<hr>
								<td>NOMBRE EMPLEADOR</td>
								<td>CEDULA EMPLEADOR</td>
								<td>DIRECCION EMPLEADOR</td>
								<td>NOMBRE EMPLEADO</td>
								<td>CEDULA EMPLEADO</td>
								<td>TIPO CONTRATO</td>
								<br/>
							</hr>
							<?php
								$con=mysql_connect("localhost","root","");
							
								mysql_select_db("SYMPLIFICA",$con);
								$query="SELECT (EMPLEADORES.NOMBRE) AS NOMBRE_EMPLEADOR,EMPLEADORES.CEDULA,EMPLEADORES.DIRECCION,(EMPLEADOS.NOMBRE) AS NOMBRE_EMPLEADO,EMPLEADOS.CEDULA,EMPLEADOS.TIPO_CONTRATO FROM DATALLE_EMPLEADOS INNER JOIN EMPLEADORES ON EMPLEADORES.CEDULA = DATALLE_EMPLEADOS.ID_EMPLEADOR INNER JOIN EMPLEADOS ON DATALLE_EMPLEADOS.ID_EMPLEADO = EMPLEADOS.CEDULA";
					
								$result=mysql_query($query,$con);
								
								while($row=mysql_fetch_array($result)){
									print "<tr>";
									print "<td>".$row[0]."</td>";
									print "<td>".$row[1]."</td>";
									print "<td>".$row[2]."</td>";
									print "<td>".$row[3]."</td>";
									print "<td>".$row[4]."</td>";
									print "<td>".$row[5]."</td>";
									print "</tr>";
								}
							?>
						</table>
					
					<input name="regresar" type="submit" value="Regresar" onclick=" location.href='Index.html' "/>
			</center>
    </body>
</html>
