<?php
    class utilerias
    {
        public function paraselect($alias,$seleccion,$opciones,$vopciones)
        {
            echo "<select name='".$alias."'>";
            for ($i=0;$i<count($opciones);$i++)
            {
                if ($vopciones[$i]==$seleccion)
                    {
                        echo "<option value='".$vopciones[$i]."' selected>".$opciones[$i]."</option>";
                    }
                    else
                    {
                        echo "<option value='".$vopciones[$i]."'>".$opciones[$i]."</option>";
                    }
            }
            echo "</select>";
        }


        public function regresaestado($ecivil)
        {
        $resultado = "";
        switch ($ecivil)
        {
            case 0: $resultado="Sin especificar";break;
            case 1: $resultado="Soltero";break;
            case 2: $resultado="Casado";break;
            case 3: $resultado="Union libre";break;
            case 4: $resultado="Divorciado";break;
            case 5: $resultado="Viudo";break;
        }
        return $resultado;
        }

        public function regresasecundaria($tsecundarias)
        {
            $resultado = "";
            switch ($tsecundarias)
            {
            case 0: $resultado="Sin especificar";break;
            case 1: $resultado="General";break;
            case 2: $resultado="Tecnica";break;
            case 3: $resultado="Abierta";break;
            case 4: $resultado="Telesecundaria";break;
            }
            return $resultado;
        }


        public function regresacarrera($carrera)
        {
            $resultado = "";
            switch ($carrera)
            {
                case 0: $resultado="Sin especificar";break;
                case 1: $resultado="Administracion de Recursos Humanos";break;
                case 2: $resultado="Electronica";break;
                case 3: $resultado="Mecanica Industrial";break;
                case 4: $resultado="Programacion";break;
                case 5: $resultado="Soporte y mantenimiento de computo";break;
                case 6: $resultado="Mecatronica";break;
            }
            return $resultado;    
        }


        public function regresaregimen($regimen)
        {
            $resultado = "";
            switch ($regimen)
            {
                case 0: $resultado="Sin definir";break;
                case 1: $resultado="Publico Federal";break;
                case 2: $resultado="Publico Estatal";break;
                case 3: $resultado="Privado";break;
            }
            return $resultado;
        }

    }
?>