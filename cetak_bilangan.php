<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <h3>====================================== CETAK BILANGAN GANJIL GENAP 1-100 ============================================</h3>
    </center>

    <?php

    $bilangan1 = 1;
    $bilangan2 = 100;

    for ($i = $bilangan1; $i <= $bilangan2; $i++) {
        if ($i % 2 == 0) {
            echo $i . " adalah bilangan genap";
        } else {
            echo $i . " adalah bilangan ganjil";
            //echo "<br>";
        }
        echo "<br>";
    }

    ?>
    <br>
    <h3>@Copyright Pain D. Jaeger 2022</h3>
</body>

</html>