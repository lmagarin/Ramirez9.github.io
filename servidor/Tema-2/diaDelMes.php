<!DOCTYPE html>
<html lang=es>
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Días del mes</title>
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Francisco Ramírez Ruiz">
    <script src="codigo.js" type ="text/javascript"></script>
    </head>
<body>
    <noscript><h1>Se requiere javascript</h1></noscript>

    <h2>Días del mes</h2>
    <?php
    /**
     * User: Francisco Ramírez Ruiz
     * File: diaDelMes.php
     * Description: Carga en variables mes y año e indicar el número de días del mes.
     */
    $mes = "Febrero";
    $anio = 2018;

    $bisiesto = false;
    if (($anio % 4 == 0  && anio %100 != 0) || $anio % 400 == 0){
        $bisiesto = true;
    }

    switch($mes){
         case "Enero":
    case "Marzo":
    case "Mayo":
    case "Julio":
    case "Agosto":
    case "Octubre":
    case "Diciembre":
        echo "<h3>" . $mes . " tiene 31 dias" . "</h3>";
        break;
        case "Febrero":
        if ($bisiesto)
            echo "<h3>" . $mes . " tiene 29 dias" . "</h3>";
        else
            echo "<h3>" . $mes . " tiene 28 dias" . "</h3>";
        break;
    case "Abril":
    case "Junio":
    case "Septiembre":
    case "Noviembre":
        echo "<h3>" . $mes . " tiene 30 dias" . "</h3>";
        break;
    default:
        echo "Mes inválido";
    }
    ?>
</body>
</html>