<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Penggunaan kontrol switch</h2>
    <?php
    $angka_mutu=3;
    echo ("Angka mutu $angka_mutu<br>");
    switch ($angka_mutu) {
        case 0: echo("Huruf mutu E<br>"); break;
        case 1: echo("Huruf mutu D<br>"); break;
        case 2: echo("Huruf mutu C<br>"); break;
        case 3: echo("Huruf mutu B<br>"); break;
        case 4: echo("Huruf mutu A<br>"); break;
        default: echo("Huruf mutu tidak dikenal");
    }
    ?>
</body>
</html>