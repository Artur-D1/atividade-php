<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="get">
        Nota 1: <input type="number" name="n1"><br><br>
        Nota 2: <input type="number" name="n2"><br><br>
        Nota 3: <input type="number" name="n3"><br><br>
        <input type="submit" notes= "Calcular">
</form>
<?php
if(isset($_GET["n1"]) && isset($_GET["n2"]) &&(isset($_GET["n3"]))) {
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $n3 = $_GET["n3"];

    $média = ($n1+$n2+$n3)/3;

    if($média>=7) {
    echo("Aprovado");
    }else if($média>=5 &&  $média<7){
    echo("Recuperação");
    }else
    echo("Reprovado");
}
?>
</body>
</html>