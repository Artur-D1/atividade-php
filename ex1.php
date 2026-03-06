<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicío 1</title>
</head>
<body>
    <h1> My first PHP page</h1>
    
    <?php
    $t = date("H");

    if($t <"10") {
        echo "Have a good morning!";
    } elseif ($t < "20") {
        echo "Have a good day!";
    }else{
        echo "Have a good night";
    }
    ?>

<form method="get">
        Número 1: <input type="number" name="n1"><br><br>
        Número 2: <input type="number" name="n2"><br><br>
        <input type="submit" value= "Calcular">
</form>
<?php
if(isset($_GET["n1"]) && isset($_GET["n2"])) {
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];

    $soma = $n1 +  $n2;
    echo "A soma entre $n1 e $n2 é $soma";
}
?>
</body>
</html>