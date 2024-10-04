<?php
include "orang.php";
include "visibility.php";
include "nilai.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratikum 2</title>
</head>
<body>
    <h1>Pratikum 2</h1>
    <div>
        <?php
            $james = new orang ();
            $james->nama = " James Smith";
            $james->ucapsalam();

            echo "<br>";
            
            $nova = new orang();
            $nova->nama = " Nova Wijaya";
            $nova->ucapsalam();

            echo "<br>";

            $visibility = new visibility();
            $visibility ->tampilkanproperty();

            echo "Ini akses di luar kelas  <br>";
            echo "Public :" . $visibility->public . "<br>";
            //echo "Private :" . $visibility->private . "<br>";
            //echo "Protected :" . $visibility->protected . "<br>";

            echo "<br><br>";

            echo "Nilai Pemrograman Web : <br>";
            $nilai = new nilai();
            $nilai->setTugas(80);
            $nilai->setUts(75);
            $nilai->setUas(79);

            echo "Nilai Tugas : ".$nilai->getTugas(). "<br>";
            echo "Nilai Uts : ".$nilai->getUts(). "<br>";
            echo "Nilai Uas : ".$nilai->getUas(). "<br>";
            echo "Nilai Rata-Rata : ".$nilai->hitungtotal();
        ?>
    </div>
</body>
</html>