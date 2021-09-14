<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KALKULATOR SEDERHANA</title>
    <link rel="stylesheet" href="Tugas4_ZainalFitrani.css">
</head>

<body>
    <form action="" method="post" class="form">
        <h1>KALKULATOR SEDERHANA</h1>
        <div class="inputBilangan">
            <label for="bilangan1">Bilangan Ke-1</label>
            <input type="text" name="bilangan1" value="<?php echo (isset($_POST['bilangan1']) ? $_POST['bilangan1'] : "") ?>" />
        </div>
        <div class="inputBilangan">
            <label for="bilangan2">Bilangan Ke-2</label>
            <input type="text" name="bilangan2" value="<?php echo (isset($_POST['bilangan2']) ? $_POST['bilangan2'] : "") ?>" />
        </div>
        <input type="submit" value="Hitung" />
    </form>
    <?php if (isset($_POST['bilangan1'])) : ?>
        <?php
        function penjumlahan($a, $b)
        {
            return $a + $b;
        }
        function pengurangan($a, $b)
        {
            return $a - $b;
        }
        function perkalian($a, $b)
        {
            return $a * $b;
        }
        function pembagian($a, $b)
        {
            return $a / $b;
        }
        ?>
        <div class="form">
            <h2>HASIL PERHITUNGAN</h2>
            <div class="inputBilangan">
                <label for="bilangan1">Hasil Penjumlahan</label>
                <input type="text" value="<?php echo penjumlahan($_POST['bilangan1'], $_POST['bilangan2']) ?>" readonly />
            </div>
            <div class="inputBilangan">
                <label for="bilangan1">Hasil Pengurangan</label>
                <input type="text" value="<?php echo pengurangan($_POST['bilangan1'], $_POST['bilangan2']) ?>" readonly />
            </div>
            <div class="inputBilangan">
                <label for="bilangan1">Hasil Perkalian</label>
                <input type="text" value="<?php echo perkalian($_POST['bilangan1'], $_POST['bilangan2']) ?>" readonly />
            </div>
            <div class="inputBilangan">
                <label for="bilangan1">Hasil Pembagian</label>
                <input type="text" value="<?php echo pembagian($_POST['bilangan1'], $_POST['bilangan2']) ?>" readonly />
            </div>
        </div>
    <?php endif; ?>
</body>

</html>