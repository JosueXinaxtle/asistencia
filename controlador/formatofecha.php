<?php

date_default_timezone_set('America/Mexico_City');
#echo date('d-F-Y');
$num_dia = date('N');
$dia = date('d');
$mes = date('m');
$anio = date('Y');

$meses = array('01'=> 'Enero', '02'=> 'Febrero', '03'=> 'Marzo', '04'=> 'Abril', '05'=> 'Mayo', '06'=> 'Junio',
             '07'=> 'Julio', '08'=> 'Agosto', '09'=> 'Septiembre', '10'=> 'Octubre', '11'=> 'Noviembre', '12'=> 'Diciembre',);

             $semana = ['', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];
             
             echo '<h1> Fecha y Hora de Sistema </h1>';
             echo $semana[$num_dia].', '.$dia.' de '.$meses[$mes].' del '.$anio. '.' ;

             echo " Hora:". $hora = date(' h:i:s a');
?>