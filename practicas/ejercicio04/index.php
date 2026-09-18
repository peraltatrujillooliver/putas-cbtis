<?php
   $myid = 1094;
   echo "<html>";
   echo "   <head>";
   echo "      <title>Topitos de HTML</title>";
   echo "   </head>";
   echo "<body>";
   echo "<form action='accion.php' name='Datos' method='GET'>";
   echo "<input type='hidden' name='idalumno' value=".$myid."><br>";
   echo "Fecha de nacimiento:<input type='date' name='fecnac'> <br>";
   echo "mes <input type='number' name='mes' min='1' max='12'><br>";
   echo "correo:<input type='email' name='correo' placeholder='correo personal'> <br>";
   echo "clave:<input type='password' name='clave' required maxlength='5' size='7'> <br>";
   echo "IVA:<input type='number' name='iva' value=16 required readonly> <br><br>";
   echo "<input type='submit' name='procesos' value='enviar'>";
   echo "</body>";
   echo "</form>";
   echo "</html>";
?>
