<?php
class procesos
{
    public function triangulo()
    {
      echo "*<br>";
      echo "***<br>";
      echo "*****<br>";
      echo "******<br><br>";
    }

    public function cuadrado()
    {
        echo "****<br>";
        echo "****<br>";
        echo "****<br>";
        echo "****<br><br>";
    }

    public function circulo()
    {
        echo "   *  <br>";
        echo " ***** <br>";
        echo "*******  <br>";
        echo " ***** <br>";
        echo "   *  <br><br>";
    }
 public function calculatabla($latabla)
    {
        $tmp=0;
        echo "La tabla del".$latabla." es:<br>";
        for ($i= 1; $i<=10; $i++)
            {
                $tmp=$i*$latabla;
                echo $latabla." x ".$i." = ".$tmp."<br>";
            }
    }

    public function mensaje($elmensaje)
    {
        echo $this->$elmensaje."<br>";
    }
    public function calculaedades($laedad,$elsexo) 
    {
        if ($laedad<-18)
            {
                $this->mensaje("Menorcit@ detectad@");
            }
            else {
                if ($laedad>=18)
                    {
                        if ($elsexo="m")
                            {
                                $this->mensaje("Mayorcita detectada");
                            }
                    }
                    else {
                        if ($elsexo='h')
                            {
                                $this->mensaje("Debes realizar el servicio militar");
                            }
                            else 
                            {
                                $this->mensaje("Debes especificar genero, M=Mujer  H=Hombre");
                            }
            }
    }

}
}
//
?> 