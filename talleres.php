<?php include_once 'inc/htmlElements.php' ?>
<!DOCTYPE html>
<html lang="en">
<?php print htmlHead('Consultorio de memoria'); ?>
    
    <body id="talleres">
        <?php print htmlNav(); ?>
        
        <div id="menuButton">
            <div class="menuBtn">
                <a href="index.php" class="linkNav">Formación y Experiencia</a>
            </div>
            <div class="menuBtn">
                <a href="neuro.php" class="linkNav">Evaluación neuropsicológica</a>
            </div>
            <div class="menuBtn active last">
                <a href="talleres.php" class="linkNav">Talleres de memoria y estimulación cognitiva</a>
            </div>
        </div>

        <div id="mainInformation">
            <div class="lista uba">
                <div class="listaTexto">
                    <span class="subTitleBox"><h5>Talleres de la memoria</h5></span>
                    <p>Destinado a adultos mayores que quieren mejorar su rendimiento intelectual y aprender estrategias para optimizar el funcionamiento de la memoria. Sesiones grupales e individuales</p>
                </div>
            </div>
            <hr>
            <div class="lista conicet">
                <div class="listaTexto">
                    <span class="subTitleBox"><h5>Estimulación cognitiva para pacientes con problemas de memoria</h5></span>
                    <p>Destinado a pacientes con diagnóstico de Alzheimer u otras demencias con el objetivo de potenciar los resultados del tratamiento médico.</p>
                    <p>Actualmente, no existe ninguna intervención médica conocida que consiga detener o prevenir la aparición del deterioro asociado al Alzheimer.</p>
                    <p>Si bien el tratamiento farmacológico produce mejoras en la memoria y en otros aspectos mentales, es fundamental que el paciente cuente con un espacio en el que se proponen actividades que apuntan mantener el desafío intelectual y brindar estrategias para compensar los problemas de memoria. Sesiones individuales a la medida de cada paciente.</p>
                </div>
            </div>
            <hr>
            <div class="lista uba">
                <div class="listaTexto">
                    <span class="subTitleBox"><h5>Estimulación y rehabilitación cognitiva en múltiples patologías</h5></span>
                    <p>Programas de tratamiento rehabilitador o de estimulación cognitiva para pacientes con daño cerebral: esclerosis múltiples, Enfermedad de Parkinson, traumatismo de cráneo, déficits atencionales, entre otras. Sesiones individuales a la medida de cada paciente.</p>
                </div>
            </div>
            <hr>
            
        </div>

        <div id="footer" class="container">
            <p>María Eugenia Tabernero  ::  <span class="bigger"><strong>156-423-4999</strong></span>  ::  consultoriodememoria@gmail.com</p>
        </div>


    </body>

</html>