<?php
require "../vendor/autoload.php";

use Jorge\QrGenerator\QrBuilder;

$qr1 = QrBuilder::create("texto del codigo QR","Etiqueta del QR","qr1");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Generador de codigo QR</h1>
    <img src="img/qr1.png" alt="texto del codigo QR">
</body>
</html>