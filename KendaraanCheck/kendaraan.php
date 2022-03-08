<?php
error_reporting(0);
$mesin_bagus    = $_POST['mesin_bagus'];
error_reporting(0);
$mesin_jelek    = $_POST['mesin_jelek'];
error_reporting(0);
$body_bagus     = $_POST['body_bagus'];
error_reporting(0);
$body_jelek     = $_POST['body_jelek'];
error_reporting(0);

if ($mesin_bagus && $body_bagus){
    $kondisi = "bagus";
}elseif ($mesin_bagus || $body_bagus) {
    $kondisi = "Menengah";
}else {
    $kondisi = "jelek";
}


echo "<h4>Kondisi Kendaraan : $kondisi</h4>";


?>