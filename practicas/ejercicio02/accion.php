<?php
//67
     include_once("procesos.php");
     $calcula = new procesos();
     $opcion = $_GET["opciones"];
     $xtabla = $_GET["tabla"];
     $xedad  = $_GET["edad"];
     $xsexo  = $_GET["sexo"];
     if ($opcion == "Figuras") 
    {
        echo ("Aqui van las figuras<br>");
        $calcula->triangulo();
        $calcula->cuadrado();
        $calcula->circulo();
    }
    else
        { 
        if ($opcion == "Calcular Tabla")
        {
            echo ("Aqui va el proceso de la tabla<br>");
            echo "Valor de tabla: ".$xtabla."<br>";
            $calcula->calculatabla($xtabla);
        }
        else
            { 
            if ($opcion == "Edades")
            {
                echo ("Aqui va el proceso de edad");
                echo "Valor de edad: ".$xedad."<br>";
                echo "Valor de sexo: ".$xsexo."<br>";}
                $calcula->calculaedades($xedad,$xsexo);
            }
            else 
                {
                    echo ("No paso nada<br>");
                }
            }
?>