<?php
include_once ("utilerias.php");
    $calcula = new utilerias();
    $xecivil        = $_GET["ecivil"];
    $xtsecundarias  = $_GET["tsecundarias"];
    $xcarrera       = $_GET["carrera"];
    $xregimen       =$_GET["regimen"];
    echo "ecivil=[".$xecivil."]<br>";
    echo "Tsecundaria=[".$xtsecundarias."]<br>";
    echo "carrera=[".$xcarrera."]<br>";
    echo "Regimen=[".$xregimen."]<br><br><br>";
    echo "Tsecundaria=[".$calcula->regresasecundaria($xtsecundarias)."]<br>";
    echo "ecivil=[".$calcula->regresaestado($xecivil)."]<br>";
    echo "carrera escogida=[".$calcula->regresacarrera($xcarrera)."]<br>";
    echo "Regimen escogido[".$calcula->regresaregimen($xregimen)."]<br>";
?>