<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>anakayam</title>
    <style type="text/css">
        .ganjil {
            color: orange;
        }

        .genap {
            color: blue;
        }
    </style>
</head>

<body>
    <?php
    $anakayam = 8;
    echo "tek kotek kotek anak ayam ada $anakayam <br>";
    for ($i = $anakayam - 1; $i >= 0; $i--) {
        if ($i % 2 == 1) {
            echo "<p class='ganjil's>mati 1 anak ayam turun $i</p><br>";
        } elseif ($i == 0) {
            echo "mati semua";
        } else {
            echo "<p class='genap'>mati 1 anak ayam turun $i</p><br>";
        }
    }
    ?>
</body>

</html>