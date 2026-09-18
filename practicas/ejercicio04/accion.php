<?php
include_once("procesos.php");
    $calcula = new procesos();
    $idalumno   = $_GET["idalumno"];
    $xfecnac    = $_GET["fecnac"];
    $xcorreo    = $_GET["correo"];
    $xclave     = $_GET["clave"];
    $xiva       = $_GET["iva"];
    $xmes       = $_GET["mes"];
    echo "El idalumno es :[".$idalumno."]<br>";
    echo "Fecha de nacimiento :[".$xfecnac."]<br>";
    echo "Fecha corregida: [".$calcula->regresafechaok($xfecnac,"")."]<br>";
    echo "Correo electronico :[".$xcorreo."]<br>";
    echo "Clave :[".md5($xclave)."]<br>";
    echo "IVA :[".$xiva."]<br>";
    echo "Mes: [".$xmes."]<br>";
?>