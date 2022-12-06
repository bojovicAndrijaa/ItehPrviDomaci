<?php

class Proizvodjac
{
    public $proizvodjacID;
    public $naziv;
    public $drzava;


    public function __construct( $naziv, $drzava)
    {
        
        $this->naziv = $naziv;
        $this->drzava = $drzava;

    }

    public static function getAll($baza)
    {
        $sql = "SELECT * from proizvodjac";
        $rezultat = mysqli_query($baza, $sql);
        return $rezultat;
    }

    public function addNew($baza)
    {
        $sqlUpit = "INSERT INTO proizvodjac(naziv, drzava)
      VALUES('$this->naziv', '$this->drzava')";
        $rez = mysqli_query($baza, $sqlUpit);
        if ($rez)
            echo "Uspesno unet proizvodjac" . '<br>';
        else
            echo "Greska pri unosu proizvodjaca" . '<br>';

    }

    public static function getById($baza, $proizvodjacID)
    {
        $svi = self::getAll($baza);
        while ($proizvodjac = mysqli_fetch_array($svi)) {
            if ($proizvodjac['proizvodjacID'] == $proizvodjacID) {
                return $proizvodjac;
            }
        }
    }

    public function deleteById($baza, $proizvodjacID)
    {
        $sqlUpit = "DELETE FROM proizvodjac WHERE proizvodjacID = $proizvodjacID";
        $rez = mysqli_query($baza, $sqlUpit);
        if ($rez)
            echo "Uspecno obrisan proizvodjac" . '<br>';
        else
            echo "Greska pri brisanju proizvodjaca" . '<br>';
    }

    // da li postoji proizvodjac
    function postojiLi($baza)
    {
        $rez = self::getAll($baza);
        while ($proizvodjac = mysqli_fetch_array($rez)) {
            if ($proizvodjac['Naziv'] == $this->naziv && $proizvodjac['Drzava'] == $this->drzava  )
                return true;
        }

        return false;
    }
}
?>