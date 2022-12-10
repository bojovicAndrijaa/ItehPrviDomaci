<?php

class Pice
{
    public $PiceID;
    public $naziv;
    public $godinaProizvodnje;
    public $cena;
    public $proizvodjacID;


    public function __construct( $naziv, $godinaProizvodnje, $cena, $proizvodjacID)
    {
        
        $this->naziv = $naziv;
        $this->godinaProizvodnje = $godinaProizvodnje;
        $this->cena = $cena;
        $this->proizvodjacID = $proizvodjacID;

    }

    public static function getAll($baza)
    {
        $sql = "SELECT * from pice";
        $rezultat = mysqli_query($baza, $sql);
        return $rezultat;
    }

    public function addNew($baza)
    {
        $sqlUpit = "INSERT INTO pice (naziv, godinaProizvodnje,cena, proizvodjacId)
                        VALUES('$this->naziv', '$this->godinaProizvodnje', '$this->cena', '$this->proizvodjacID')";
        $rez = mysqli_query($baza, $sqlUpit);
        if ($rez)
            echo "Uspesno uneto pice" . '<br>';
        else
            echo "Greska pri unosu pica" . '<br>';

    }

    public static function getById($baza, $PiceID)
    {
        $svi = self::getAll($baza);
        while ($pice = mysqli_fetch_array($svi)) {
            if ($pice['piceId'] == $PiceID) {
                return $pice;
            }
        }
    }

    public static function deleteById($baza, $PiceID)
    {
        $sqlUpit = "DELETE FROM pice WHERE PiceID = $PiceID";
        $rez = mysqli_query($baza, $sqlUpit);
        if ($rez)
            echo "Uspecno obrisano pice" . '<br>';
        else
            echo "Greska pri brisanju pica" . '<br>';
    }


    //da li pice postoji u bazi
    function postojiLi($baza)
    {
        $rez = self::getAll($baza);
        while ($pice = mysqli_fetch_array($rez)) {
            if ($pice['naziv'] == $this->naziv && $pice['proizvodjacId'] == $this->proizvodjacID)
                return true;
        }
        return false;
    }

    //vracam ID pica na osnovu naziv i proizvodjaca
    static function vratiIDPicaZaNaziviProizvodjaca($baza, $naziv)
    {
       $rez = self::getAll($baza);
       while($navijac = mysqli_fetch_array($rez))
       {
         if($pice['naziv'] == $naziv && $pice['proizvodjacId'] == $pice)
             return $pice['piceId'];
       }

       return false;
    }

}
?>