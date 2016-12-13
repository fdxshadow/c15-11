
<div id="container-fluid">

<h1>Peliculas</h1>
<label for="Agregar"></label>
<a href="index.php/crear" class="btn btn-primary">Arrendar</a>
	<table class="table table-borderer">
		<thead>
				<th>Nombre</th>
				<th>Sinopsis</th>
				<th>Genero</th>
				<th>Acciones</th>

		</thead>

		<tbody>

				<?php foreach ($peliculas as $pelicula) { ?>
				<td><?php echo $pelicula->Nombre;?></td>
				<td><?php echo $pelicula->Sinopsis; ?></td>
				<td><?php echo $pelicula->Genero; ?></td>
				<td><button class="btn-success">Editar</button>
				<input type="hidden" name="id" id="id" value="<?php echo $pelicula->id; ?>">
				<button class="btn-warning" id="eliminar">Eliminar</button></td>
				<?php } ?>
		</tbody>







	</table>
</div>

