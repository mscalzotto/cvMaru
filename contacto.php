<?php include_once 'inc/htmlElements.php' ?>
<!DOCTYPE html>
<html lang="en">
<?php print htmlHead('María Eugenia Tabernero'); ?>
	
	<body>
		<?php print htmlNav(); ?>
		
		<div id="menuButton">
			<div class="menuBtn active">
				<a href="index.php" class="linkNav">Currículum Vitae</a>
			</div>
			<div class="menuBtn">
				<a href="neuro.php" class="linkNav">Evaluación neuropsicológica</a>
			</div>
			<div class="menuBtn last">
				<a href="talleres.php" class="linkNav">Talleres de memoria y estimulación cognitiva</a>
			</div>
		</div>

		<form id="maruContacto" action="mail.php" method="post">
			<input type="text" name="nombre" placeholder="Nombre" id="campoNombre" />
			<input type="text" name="apellido" placeholder="Apellido" id="campoApellido" />
			<input type="email" name="mail" placeholder="Correo electrónico" id="campoMail" />
			<textarea name="consulta" rows="4" cols="50" placeholder="Ingrese su consulta" id="campoConsulta"></textarea>
			<input type="button" value="Enviar" />
		</form>

		<div id="footer" class="container">
			<p>María Eugenia Tabernero :: consultoriodememoria@gmail.com</p>
		</div>


	</body>

</html>