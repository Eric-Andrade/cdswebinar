<?php  
    define('PRIVACITY_PH', '');
    // include("filter-content.php");
      
?>

<div>
    <p>Descripción: <strong>DESCRIPTION_PH</strong></p> <!-- WebinarJAM -->
    <p>Costo: <strong>COST_PH</strong></p> <!-- WebinarJAM -->
</div>

<br/>
<div>
    <h6>Presentador(es):</h6>
    <img src="IMG_PRESENTER" alt="avatar_presenter" width="60" heigth="60" > <!-- WebinarJAM -->
    <p><strong>TEACHER_NAME_PH</strong></p> <!-- WebinarJAM -->
    <span><strong>TEACHER_EMAIL_PH</strong></span> <!-- WebinarJAM -->
</div>

<br/>
<div>
    <p class="datait" id="cdswebinar_ing">Alumnos registrados: <strong>STUDENTS_COUNTER_PH</strong></p> <!-- BBDD -->
</div>

<br/>
<div>
    <p>Horario(s): <strong>DATE_PH</strong></p> <!-- WebinarJAM -->
    <p>Tiempo para que inicie el webinar: <strong>CHRONOMETER_PH</strong></p> <!-- BBDD -->
    <p>Este es el mensaje para el usuario: <strong>MESSAGEUSER_PH</strong></p> <!-- BBDD -->
</div>

<div>
    <p>Privacidad del Webinar: <strong>PRIVACITY_PH</strong></p> <!-- WebinarJAM -->
    <!-- <span><?php 
        PRIVACITY_PH === "randompassword" ? "You need to pay for it first." : "ewe" //! pendiente: ewe
        ?></span> -->
</div>
<div>
    <h5>Pre-requisitos: </h5> <!-- BBDD -->
    <ul class="list-unstyled">
        <li><strong></strong></li>
        <li><strong></strong></li>
    </ul>
</div>
<div>BUTTON_CDSWEBINAR_PH</div>

<br/>