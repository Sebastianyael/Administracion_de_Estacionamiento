<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calendario UTVT con ciclos</title>
  <link rel="stylesheet" href="./assets/styles/styles2.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
  <div>
    <p class="title_prin">CALENDARIO ESCOLAR</p>
  </div>
  <div class="header">
    <div class="logo">
      <img src="./assets/images/logo2.jpeg" alt="UTVT Logo">
    </div>
    <div class="titulo">
      <h1>Universidad Tecnológica Del Valle De Toluca</h1>
      <h1>Calendario Escolar 2025</h1>
    </div>
  </div>

  <div class="lineas">
    <div class="leyenda">
      <div class="leyenda-item" style="flex-basis: 25%;">
        <div class="cuadrito" style="background-color:rgba(205, 117, 24, 0.998);"><i class="fa-solid fa-arrow-right"
            style="color: black; font-size: 16px; justify-content: center;"></i></div>
        <p style="font-size: 10px;"> Inicio de cuatrimestre</p>
      </div>
      <div class="leyenda-item" style="flex-basis: 25%;">
        <div class="cuadrito" style="background-color:black;"></div>
        <p style="font-size: 10px;"> Día no laborable</p>
      </div>
      <div class="leyenda-item" style="flex-basis: 25%;">
        <div class="cuadrito" style="background-color:rgb(175, 220, 175);"></div>
        <p style="font-size: 10px;"> Periodo vacacional</p>
      </div>
      <div class="leyenda-item" style="flex-basis: 25%;">
        <div class="cuadrito" style="background-color:rgb(255, 40, 11);"></div>
        <p style="font-size: 10px;">fin de cuatrimestre</p>
      </div>
      <div class="leyenda-item" style="flex-basis: 75%;">
        <div class="cuadrito" style="background-color:rgb(24, 72, 194);"></div>
        <p style="font-size: 10px;">Entrega de calificaciones finales al departamento de control escolar</p>
      </div>
      <div class="leyenda-item" style="flex-basis: 25%;">
        <div class="cuadrito" style="background-color:rgb(8, 106, 31);"></div>
        <p style="font-size: 10px;"> Evaluación extraordinaria</p>
      </div>
      <div class="leyenda-item" style="flex-basis: 100%;">
        <div class="cuadrito" style="background-color:rgb(251, 255, 0);"></div>
        <p style="font-size: 10px;">Entrega de calificaciones de la evaluación extraordinaria al departamento de control
          escolar </p>
      </div>
      <div class="leyenda-item" style="flex-basis: 25%;">
        <div class="cuadrito" style="background-color:rgba(100, 100, 100, 0);"><i class="fa-duotone fa-solid fa-xmark"
            style="color: gray; font-size: 25px;"></i></div>
        <p style="font-size: 10px;">inscripciones</p>
      </div>
      <div class="leyenda-item" style="flex-basis: 25%;">
        <div class="cuadrito" style="background-color:rgb(202, 104, 173);"></div>
        <p style="font-size: 10px;">Examenes de admisión</p>
      </div>
      <div class="leyenda-item" style="flex-basis: 25%;">
        <div class="cuadrito" style="background-color:orange;"><i class="fa-solid fa-align-justify"
            style="font-size: 14px; background-color: rgb(0, 0, 0); color: rgb(198, 196, 196);"></i><i
            class="fa-solid fa-align-justify"
            style="font-size: 14px; background-color: rgb(0, 0, 0); color: rgb(199, 199, 199);"></i></div>
        <p style="font-size: 10px;">Trámite de titulación</p>
      </div>
      <div class="leyenda-item" style="flex-basis: 25%;">
        <div class="cuadrito" style="background-color:rgb(143, 142, 139);"></div>
        <p style="font-size: 10px;">Día no laborable(Sindicato acádemico)</p>
      </div>
    </div>
  </div>
  <div class="año">
    <h3>2025</h3>
  </div>

  <div class="calendario">

    <?php
$meses = ["ENERO", "FEBRERO", "MARZO", "ABRIL", "MAYO", "JUNIO",
          "JULIO", "AGOSTO", "SEPTIEMBRE", "OCTUBRE", "NOVIEMBRE", "DICIEMBRE"];

$dias_meses = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

// Días de la semana
$dias_semana = ["D", "L", "M", "M", "J", "V", "S"];

// Enero inicia en miércoles -> índice 3
$inicio_dia = 3;

$mes = 0;

while ($mes < count($meses)) {
    echo '<div class="mes">';
    echo "<div class='nombre_mes'><p>{$meses[$mes]}</p></div>";

    // Encabezado de días
    echo '<div class="dias">';
    $d = 0;
    while ($d < count($dias_semana)) {
        echo "<h3>{$dias_semana[$d]}</h3>";
        $d++;
    }
    echo '</div>';

    // Fechas del mes
    echo '<div class="fechas">';

    // Espacios vacíos antes del primer día
    $i = 0;
    while ($i < $inicio_dia) {
        echo "<div class='numero vacio'></div>";
        $i++;
    }

    // Días del mes
    $dia = 1;
    while ($dia <= $dias_meses[$mes]) {
        echo "<div class='numero'>$dia</div>";
        $dia++;
    }

    echo '</div>'; // cierre de fechas
    echo '</div>'; // cierre del mes

    // día de inicio del siguiente mes
    $inicio_dia = ($inicio_dia + $dias_meses[$mes]) % 7;

    $mes++;
}
?>



  </div>

</body>

</html>
