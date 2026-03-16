<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        Nascimento: <input type="number" name="nascimento"><br><br>
        
        <input type="submit" nascimento= "Calcular">
</form>
<?php
if(isset($_GET["nascimento"])) {
    $nascimento = $_GET["nascimento"];
    $Idade_atual = (2026 - $nascimento);
    echo ("A idade é: " . $Idade_atual);
}
?>
</body>
</html>