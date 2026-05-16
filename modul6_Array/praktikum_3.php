<?php
    $pegawai = array("Lina","Arni","Jona","Punjabi", "marcus", "marlin");
    echo "<strong>sebelu diurutkan</strong><br>";
    foreach ($pegawai as $data => $nama){
        echo "$data: $nama"."<br>";
    }
    sort($pegawai);

    echo "<strong>setelah diurutkan</strong><br>";
    foreach ($pegawai as $data => $nama){
        echo "$data: $nama"."<br>";
    }
?>
