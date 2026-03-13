<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="get">
        Número 1: <input type="number" name="n1"><br><br>
        Número 2: <input type="number" name="n2"><br><br>
        <input type="submit" value= "Calcular">
</form>
<?php
if(isset($_GET["n1"]) && isset($_GET["n2"])) {
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];

    $divisão = $n1 / $n2;
    echo "A divisão entre $n1 e $n2 é $divisão";
}
?>
</body>
</html>