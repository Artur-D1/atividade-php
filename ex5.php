<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="get">
        Número : <input type="number" name="n"><br><br>
        <input type="submit" value= "Calcular">
</form>
<?php
if(isset($_GET['n'])) {

    $n = $_GET['n'];

    if($n%2==0){;
    echo("ele é par");
}else echo("ele é ímpar");
}
?>
</body>
</html>