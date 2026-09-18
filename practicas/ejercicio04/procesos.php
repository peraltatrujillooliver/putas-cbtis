<?php

    class procesos
    {


        public function regresames($mes, $modo)
    {
        $resultado = "";
        if ($modo == 1) 
        {
            //corto
            switch ($mes)
            {
                case 1: $resultado = "ENE";
                break;
                case 2: $resultado = "FEB";
                break;
                case 3: $resultado = "MAR";
                break;
                case 4: $resultado = "ABR";
                break;
                case 5: $resultado = "MAY";
                break;
                case 6: $resultado = "JUN";
                break;
                case 7: $resultado = "JUL";
                break;
                case 8: $resultado = "AGO";
                break;
                case 9: $resultado = "SEP";
                break;
                case 10: $resultado = "OCT";
                break;
                case 11: $resultado = "NOV";
                break;
                case 12: $resultado = "DIC";
            }
        }
        else {
            if ($modo == 2)
                {
                    //largo
                    switch ($mes)
            {
                case 1: $resultado = "ENERO";
                break;
                case 2: $resultado = "FEBRERO";
                break;
                case 3: $resultado = "MARZO";
                break;
                case 4: $resultado = "ABRRIL";
                break;
                case 5: $resultado = "MAYO";
                break;
                case 6: $resultado = "JUNIO";
                break;
                case 7: $resultado = "JULIO";
                break;
                case 8: $resultado = "AGOSTO";
                break;
                case 9: $resultado = "SEPTIEMBRE";
                break;
                case 10: $resultado = "OCTUBRE";
                break;
                case 11: $resultado = "NOVIEMBRE";
                break;
                case 12: $resultado = "DICIEMBRE";
            }
                }
        }

        
        return $resultado;

    }
        public function regresafechaok($mifecha, $separador)
        {   
            $lanuevafecha = "";
            $eldia  = substr($mifecha,8,2);
            $elmes  = substr($mifecha,5,2);
            $elanno = substr($mifecha,0,4);
            $lanuevafecha = $eldia.$separador.$elmes.$separador.$elanno;
            return $lanuevafecha;
        }


    }

?>