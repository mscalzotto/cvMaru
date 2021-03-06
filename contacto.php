<?php include_once 'inc/htmlElements.php' ?>
<!DOCTYPE html>
<html lang="en">
<?php print htmlHead('Consultorio de memoria'); ?>
    
    <body id="contacto">
        <?php print htmlNav(); ?>
        
        <div id="menuButton">
            <div class="menuBtn">
                <a href="index.php" class="linkNav">Formación y Experiencia</a>
            </div>
            <div class="menuBtn">
                <a href="neuro.php" class="linkNav">Evaluación neuropsicológica</a>
            </div>
            <div class="menuBtn last">
                <a href="talleres.php" class="linkNav">Talleres de memoria y estimulación cognitiva</a>
            </div>
        </div>

        <div class="contacto-texto">
            <p>Para turnos y consultas comuníquese al <strong>156-423-4999</strong></p>
            <p>o complete el siguiente formulario</p>
        </div>

        <form id="maruContacto" action="mail.php" method="post" novalidate>
            <input type="text" name="nombre" placeholder="Nombre" id="campoNombre" />
            <input type="text" name="apellido" placeholder="Apellido" id="campoApellido" />
            <input type="email" name="mail" placeholder="Correo electrónico" id="campoMail" />
            <textarea name="consulta" rows="4" cols="50" placeholder="Ingrese su consulta" id="campoConsulta"></textarea>
            <button type="submit">Enviar</button>
        </form>

        <div id="footer" class="container">
            <p>María Eugenia Tabernero  ::  <span class="bigger"><strong>156-423-4999</strong></span>  ::  consultoriodememoria@gmail.com</p>
        </div>


    </body>

</html>