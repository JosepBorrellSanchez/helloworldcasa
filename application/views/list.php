<!DOCTYPE html>
<html>
	<head>
		<title>LLista</title>
		<?php include("capçalera.php"); ?>
	</head>
	<body>
		<p>Aquesta es la taula d'usuaris</p>
		<a href="crear"><button class="btn btn-success" type="button">Crear usuari</button></a>
		<table class="table-striped" id="25" border="1" bordercolor="#000000" width="100%" cellpadding="3" cellspacing="3">
		<thead>
		<tr>
			<th><b>ID</b></th>
			<th><b>Nom</b></th>
			<!--<th><b>DNI</b></th>
			<th><b>Direccio</b></th>
			<th><b>Edad</b></th>
			<th><b>Sexe</b></th>-->
			<th><b>Accions</b></th>
		</tr>
		</thead>
		<tbody>
			<?php 
			foreach($query->result() as $index){ 
				echo "<tr>";
				echo "<td>" .$index ->actor_id. "</td>";
				echo "<td>" .$index-> fullname. "</td>";
				echo "<td>".' <a href="modificarusuari/1"><button class="btn btn-primary" type="button">Modificar</button></a>'.
			'<a href="eliminarusuari/1"><button class="btn btn-danger" type="button">Eliminar</button></a>'."</td>";
			echo "</tr>";}
			
			?>	
		</tbody>
</table>

 <script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php  ?>
