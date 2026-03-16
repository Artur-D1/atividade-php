<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        Celsius: <input type="number" name="celsius"><br><br>
        
        <input type="submit" celsius= "Calcular">
</form>
<?php
if(isset($_GET["celsius"])) {
    $celsius = $_GET["celsius"];
    $fahrenheit = ($celsius * 9/5) + 32;
    echo ("Temperatura em Fahrenheit: " . $fahrenheit);
}
?>
</body>
</html>