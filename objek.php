<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h2>Tipe Data Object</h2>
    <?php
    class test{
        var $str= "variable class";
        function set_vars($str){
            $this -> $str=$str;
        }
    }
    $class=new test;
    echo $class->str;
    $class->set_vars("variable objek");
    echo ("<br>");
    echo $class->str;
    ?>
</body>
</html>