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

		<div id="mainInformation">
			<div class="lista uba">
				<div class="listaTexto">
					<span class="subTitleBox"><h5>Títulos obtenidos</h5></span>
					<p>Doctora en Psicología</p>
					<p>Lic. en Psicología UBA</p>
				</div>
			</div>
			<hr>
			<div class="lista conicet">
				<div class="listaTexto">
					<span class="subTitleBox"><h5>Investigación</h5></span>
					<p>Investigadora de apoyo en los proyectos UBACYT y CONICET: ‘Simulación motora y Cognición Social, su relación con los sistemas de neuronas en espejo. Estudio en pacientes con Demencia Frontotemporal’, y “Simulación mental en pacientes con Demencia Frontotemporal variante frontal”</p>
				</div>
			</div>
			<hr>
			<div class="lista uba">
				<div class="listaTexto">
					<span class="subTitleBox"><h5>Docencia</h5></span>
					<p>Ayudante de Primera de la materia Neuropsicología, Facultad de Psicología, UBA</p>
				</div>
			</div>
			<hr>
			<div class="lista peron">
				<div class="listaTexto">
					<span class="subTitleBox"><h5>Evaluaciones neurocognitivas</h5></span>
					<p>Miembro del Laboratorio de Deterioro Cognitivo del Hospital Eva Perón (ex Castex) desde 2007</p>
				</div>
			</div>
			<hr>
			<div class="lista divan">
				<div class="listaTexto">
					<span class="subTitleBox"><h5>Consultas en privado</h5></span>
					<p>Atención en consultorio particular a prepagas y obras sociales</p>
				</div>
			</div>
			<hr>
		</div>

		<div id="footer" class="container">
			<p>María Eugenia Tabernero :: consultoriodememoria@gmail.com</p>
		</div>


	</body>

</html>