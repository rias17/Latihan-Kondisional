<?php

$nilai1 = $_POST['nilai1'];
$nilai2 = $_POST['nilai2'];
$nilai3 = $_POST['nilai3'];


//menghitung nilai inputan
$hasil_nilai1 = $nilai1*0.25;
$hasil_nilai2 = $nilai2*0.25;
$hasil_nilai3 = $nilai3*0.5;


//penjumlahan dari nilai-nilai yang telah diinput
$nilai_akhir = $hasil_nilai1 + $hasil_nilai2 + $hasil_nilai3;

//pemetaan grade
if($nilai_akhir>=80){
    $grade= "A";
}elseif ($nilai_akhir>=60) {
    $grade = "B";
}else {
    $grade = "C";
}

echo "<h4>Nilai 1 : $hasil_nilai1</h4>";
echo "<h4>Nilai 2 : $hasil_nilai2</h4>";
echo "<h4>Nilai 3 : $hasil_nilai3</h4>";
echo "<h4>Nilai Akhir : $nilai_akhir</h4>";
echo "<h4>Grade : $grade</h4>";



?>