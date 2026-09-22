<?php
echo "Ejemplo de uso de Mobile Detect<br>";
include_once ("Mobile_Detect.php");
echo "Definimos el uso de la clase<br>";
$detecta = new Mobile_Detect();
echo "<html>";
echo "  <body>";
echo "  El usuario entro por medio de:<br>";
if ($detecta->isMobile()) 
    {
        echo "Un dispositivo movil<br>";
    }
    else
    {
        if ($detecta->isTablet())
            {
                echo "Una tablet<br>";
            }
    else
        {
            echo "Una computadora<br>";
        }
    }
echo "  </body>";
echo "</html>";
?> 