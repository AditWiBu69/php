<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Penggunaan Kontrol while</h2>
    <?php
    $hari = array("senin","selasa","rabu","kamis","jumat","sabtu","minggu");
    $i=0;
    while ($i<count($hari))
    {
        echo("Hari Ke ".($i+1)." adalah ".$hari[$i]."<br>");
        $i++;
    }
    ?>
</body>
</html>