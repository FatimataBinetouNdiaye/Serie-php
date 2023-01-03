<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a=12;
    if ($a%3==0 && $a%5==0) 
    echo ($a. "est un multiple de 3 et de 5");
    else 
    echo($a. "nest pas un multiple de 3 et 5");
    ?>
</body>
</html>