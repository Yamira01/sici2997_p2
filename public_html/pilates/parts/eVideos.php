<style>
#nombreiz:after{visibility: visible;content: "ELIMINAR VIDEOS";margin-left:-90px;
} 
#nombreiz{visibility: hidden;
}
#inicio{visibility: visible;
}
</style> 
<br><br><br>
<!--TABLA PARA ELIMINAR VIDEOS DE LA BASE DE DATOS-->
    	<div class="row">
			<div class="col-sm-1">
			&nbsp;
			</div>
			<div class="col-sm-10">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h2 class="panel-title"> Videos  </h2>
					</div>
					<table class="table table-hover" id="dev-table">
						<thead>
							<tr>
								<th></th>
								<th>Nombre de los videos</th>
								<th>Enfoque del video</th>
								<th>Nivel de dificultad del video</th>
								<th>Link del video</th>
							</tr>
						</thead>
						<tbody><!-- hasta aquí esta la tabla creada -->
<?php

$removido = ($_GET['removido']) ?? ''; // Con este comando se borra la información de la tabla
if ($removido == 1) {
	showSuccess('Su video ha sido eliminado');
}

$records =  getResultFromSQL("SELECT * FROM Tbl_Videos");

foreach($records as $rec) {// desde aqui 
    echo "<tr>
		<td><a class=\"btn btn-default btn-sm\" href=\"?a=dovideos&do=remover&videosId={$rec['ID_Videos']}\"><span class=\"glyphicon glyphicon-minus\"></span> Eliminar</a></td>
		<td>{$rec['Nombre_video']}</td>        
		<td>{$rec['Enfoque_de_ejercicio']}</td>
		<td>{$rec['Nivel']}</td>
		<td>{$rec['link']}</td>
		</tr>";  //hasta aquí esta el código para que aparezca la información de la base de datos en la tabla. Además, aparece el botón de elminiar
}
?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="col-sm-1">
			&nbsp;
			</div>
	</div>
