<?php
    $myself = [
    'nama' => 'Rias Gauri Nurhasanah',
    'kampus' => 'Institut Teknologi Telkom Purwokerto',
    'semester' => 'Semester 6',
    'asal' => 'Riau',
    'email' => 'riasgauri@example.com',
    'phone' => '+62128378273',
    'address' => 'Beringin Street',
    'hobbies' => ['Singing', 'Cooking'],
    ];

    echo "Nama : ";
    echo $myself['nama'];
    echo "</br>";
    echo "Kampus : ";
    echo $myself['kampus'];
    echo "</br>";
    echo "Tingkatan : ";
    echo $myself['semester'];
    echo "</br>";
    echo "Asal : ";
    echo $myself['asal'];
    echo "</br>";
    echo "Email : ";
    echo $myself['email'];
    echo "</br>";
    echo "No. Telp : ";
    echo $myself['phone'];
    echo "</br>";
    echo "Alamat : ";
    echo $myself['address'];
    echo "</br>";
    echo "Hobi : ";
    echo $myself['hobbies'][0];

?>