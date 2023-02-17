<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Segitiga</title>
</head>
<?php

    function terpecah (int $nilai)
    {
        # code...
        $hitung = substr_count($nilai, 0);
        $jnilai = strlen($nilai) - $hitung;
        while ($jnilai > 0) {
            if ($nilai < 10) { // satuan
                echo $nilai . "<br>";
                
             } else if ($nilai < 100) { // puluhan
                echo substr($nilai, 0, 1) . "0" . "<br>";
                $nilai = $nilai % 10;
                
             } else if ($nilai < 1000) { // ratusan
                echo substr($nilai, 0, 1) . "00" . "<br>";
                $nilai = $nilai % 100;
       
             } else if ($nilai < 10000) { // ribuan
                echo substr($nilai, 0, 1) . "000" . "<br>";
                $nilai = $nilai % 1000;
                
             } else if ($nilai < 100000) { // puluhan ribu
                echo substr($nilai, 0, 1) . "0000" . "<br>";
                $nilai = $nilai % 10000;
                
             } else if ($nilai < 1000000) { // ratusan ribu
                echo substr($nilai, 0, 1) . "00000" . "<br>";
                $nilai = $nilai % 100000;
                
             } else if ($nilai < 10000000) { // juta
                echo substr($nilai, 0, 1) . "000000" . "<br>";
                $nilai = $nilai % 1000000;
                
             } else if ($nilai < 100000000) { // puluhan juta
                echo substr($nilai, 0, 1) . "0000000" . "<br>";
                $nilai = $nilai % 10000000;
       
             } else if ($nilai < 1000000000) { // ratusan juta
                echo substr($nilai, 0, 1) . "00000000" . "<br>";
                $nilai = $nilai % 100000000;
             }
             $jnilai--;
          }
       }

function ganjil(int $ganjil){

    # code...
    for ($i=0; $i <= $ganjil ; $i++) { 
        # code...
        if ($i%2==0) {
            echo "";
        }else {
            echo $i."</br>";
        }
    }

}

function prima(int $prima)
{
    # code...
for ($i=1; $i <= $prima ; $i++) { 
    # code...
    $a = 0;
    for ($j=1; $j <= $i ; $j++) { 
        if ($i%$j==0) {
            # code...
            $a++;
        }
        # code...

    }
    if ($a==2) {
        # code...
        echo $i.'';
    }
}
}


?>
<body>
    <form method="post">
        <label for="value1">Masukkan Angka</label>
        <input type="text" id="value1" name="value1" value="<?= $_POST['value1']?>">
        <input type="submit" name="proses" value="Segitiga">
        <input type="submit" name="ganjil" value="ganjil">
        <input type="submit" name="prima" value="prima">

    </form>
    <h3>Result :</h3>
    <?php
    if (isset($_POST['proses'])){
        $value1 = $_POST['value1'];

        echo terpecah($value1);
    }elseif (isset($_POST['ganjil'])) {
        $ganjil = $_POST['value1'];
        echo ganjil($ganjil);
    }elseif (isset($_POST['prima'])) {
        $prima = $_POST['value1'];
        echo prima($prima);
    }
    ?>
    
</body>
</html>