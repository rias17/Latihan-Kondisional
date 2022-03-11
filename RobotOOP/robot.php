<?php
class Robot
{
    private $warnaKepala, $warnaBadan, $warnaKaki, $jSenjata;
    public function __construct($warnaKepala, $warnaBadan, $warnaKaki, $jSenjata)
    {
        $this->warnaKepala = $warnaKepala;
        $this->warnaBadan = $warnaBadan;
        $this->warnaKaki = $warnaKaki;
        $this->jSenjata = $jSenjata;
    }

    public function getWarnaBadan()
    {
        return $this->warnaKepala ."". $this->warnaBadan ."". $this->warnaKaki ."". $this->jSenjata;
    }
    public function changeWarnaBadan($warnaKepala, $warnaBadan, $warnaKaki, $jSenjata)
    {
        $this->warnaKepala = $warnaKepala;
        $this->warnaBadan = $warnaBadan;
        $this->warnaKaki = $warnaKaki;
        $this->jSenjata = $jSenjata;
    }

}

$robot = new Robot("Merah","Biru","Kuning",3);

$robot->getWarnaBadan(); // Merah, Biru, Kuning, 3

$robot->changeWarnaBadan("Merah","Biru","Kuning",3);

$robot->getWarnaBadan(); // Merah, Hijau, Putih, 2

// echo $robot->getWarnaBadan();
// echo $robot->changeWarnaBadan();
echo $robot->getWarnaBadan();

    

    