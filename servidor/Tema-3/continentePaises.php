<?php

/**
 * User: Francisco Ramírez Ruiz
 * File: contienentePaises.php
 * Description: Continentes, países, capitales y banderas.
 */
if (isset($_GET['codigo'])) {
    highlight_file(__FILE__);
    exit;
}
?>
<?php include 'top.php'?>

<h2>Continentes y países</h2>

    <?php

    $continentes = array(
        "Europa" => (array(
            "España" => array("capital" => "Madrid", "bandera" => "img/Spain.jpg"),
            "Italia" => array("capital" => "Roma", "bandera" => "img/Italia.jpg"),
            "Portugal" => array("capital" => "Lisboa", "bandera" => "img/Portugal.jpg"),
            "Francia" => array("capital" => "París", "bandera" => "img/Francia.jpg"),
            "Rumania" => array("capital" => "Bucarest", "bandera" => "img/Rumania.jpg"),
            "Luxemburgo" => array("capital" => "Luxemburgo", "bandera" => "img/Luxemburgo.jpg"),
            "Alemania" => array("capital" => "Berlín", "bandera" => "img/Alemania.jpg"),
        )),
        "América" => (array(
            "Barbados" => array("capital" => "Bridgetown", "bandera" => "img/Barbados.jpg"),
            "Costa Rica" => array("capital" => "San José", "bandera" => "img/CostaRica.jpg"),
            "Nicaragua" => array("capital" => "Managua", "bandera" => "img/Nicaragua.jpg"),
            "Canadá" => array("capital" => "Ottawa", "bandera" => "img/Canada.jpg"),
            "Chile" => array("capital" => "Chile", "bandera" => "img/Chile.jpg"),
            "Brasil" => array("capital" => "Brasilia", "bandera" => "img/Brasil.jpg"),
        )),

        "Asia" => (array(
            "Afganistan " => array("capital" => "Kabul", "bandera" => "img/Afganistan.jpg"),
            "Rusia " => array("capital" => "Moscú", "bandera" => "img/Rusia.jpg"),
            "Georgia " => array("capital" => "Tflis", "bandera" => "img/Georgia.jpg"),
            "Filipinas " => array("capital" => "Manila", "bandera" => "img/Filipinas.jpg"),
            "India " => array("capital" => "Nueva Delhi", "bandera" => "img/India.jpg"),
            "Omán " => array("capital" => "Mascate", "bandera" => "img/Oman.jpg"),
            "Japón" => array("capital" => "Tokio", "bandera" => "img/Japon.jpg"),
        )),

        "África" => (array(
            "Botswana" => array("capital" => "Gaborone", "bandera" => "img/Botswana.jpg"),
            "Cabo Verde" => array("capital" => "Praia", "bandera" => "img/CaboVerde.jpg"),
            "Gambia" => array("capital" => "Banjul", "bandera" => "img/Gambia.jpg"),
            "Madagascar" => array("capital" => "Antananarivo", "bandera" => "img/Madagascar.jpg"),
            "Nigeria" => array("capital" => "Abuja", "bandera" => "img/Nigeria.jpg"),
            "Somalia" => array("capital" => "Mogadiscio", "bandera" => "img/Somalia.jpg"),
            "Togo" => array("capital" => "Lomé", "bandera" => "img/Togo.jpg"),
        )),

        "Oceanía" => (array(
            "Australia" => array("capital" => "Canberra", "bandera" => "img/Australia.jpg"),
            "Kiribati" => array("capital" => "Tarawa Sur", "bandera" => "img/Kiribati.jpg"),
            "Tonga" => array("capital" => "Nukualofa", "bandera" => "img/Tonga.jpg"),
            "Nauru" => array("capital" => "Yaren", "bandera" => "img/Nauru.jpg"),
            "Vanuatu" => array("capital" => "Port Vila", "bandera" => "img/Vanuatu.jpg"),
            "Tuvalu" => array("capital" => "Funafuti", "bandera" => "img/Tuvalu.jpg"),
            "Samoa" => array("capital" => "Apia", "bandera" => "img/Samoa.jpg"),
        ))
    );

    echo "<table style='border: 1px solid;'><tr><td>Continente</td> <td>País</td><td>Capital</td> <td>Bandera</td></tr>";

    foreach ($continentes as $continente => $paises) {

        foreach ($paises as $pais => $info) {
            echo "<td>" . $continente . "</td>";
            echo "<td>" . $pais . "</td>";
            echo "<td>" . $info["capital"] . "</td>";

            echo "<td><img src='$info[bandera]' style='width: 100px; height: 100px;'></td>";
            echo "</tr>";
        }
    }

    echo "</table>";

    ?>
    <h1>
    <a href="../../servidor/Tema-3/continentePaises.php?codigo" target ="_blank">Ver código</a>
    </h1>

<?php include 'bot.php'?>