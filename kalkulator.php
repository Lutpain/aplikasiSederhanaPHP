<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>

<body>
    <h3>PROGRAM KALKULATOR</h3>
    <form action="" method="post">
        <label for="">
            Bilangan 1 :
        </label>
        <input type="number" name="nilai1">
        <br>
        <label for="">
            Bilangan 2 :
        </label>
        <input type="number" name="nilai2">
        <input type="submit" name="cetak" value="hitung">
    </form>
    <hr>
    <?php

    if (isset($_POST['cetak'])) {
        $nilai1 = $_POST['nilai1'];
        $nilai2 = $_POST['nilai2'];
        echo "Bilangan 1 = " . $nilai1;
        echo "<br>";
        echo "Bilangan 2 = " . $nilai2;
        echo "<br>";
        echo "<hr>";

        function tambah($nilai1, $nilai2)
        {
            $tambah = $nilai1 + $nilai2;
            echo "Hasil penambahan adalah " . $tambah;
            echo "<br>";
        }

        function kurang($nilai1, $nilai2)
        {
            $kurang = $nilai1 - $nilai2;
            echo "Hasil pengurangan adalah " . $kurang;
            echo "<br>";
        }

        function kali($nilai1, $nilai2)
        {
            $kali = $nilai1 * $nilai2;
            echo "Hasil perkalian adalah " . $kali;
            echo "<br>";
        }

        function bagi($nilai1, $nilai2)
        {
            $bagi = $nilai1 / $nilai2;
            echo "Hasil pembagian adalah " . $bagi;
            echo "<br>";
        }

        tambah($nilai1, $nilai2);
        kurang($nilai1, $nilai2);
        kali($nilai1, $nilai2);
        bagi($nilai1, $nilai2);
    }



    ?>
</body>

</html>