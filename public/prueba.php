<?php
require "../vendor/autoload.php";

use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\Label\LabelAlignment;
use Endroid\QrCode\Label\Font\NotoSans;
use Endroid\QrCode\RoundBlockSizeMode;
use Endroid\QrCode\Writer\PngWriter;

$result = Builder::create()
    ->writer(new PngWriter())
    ->writerOptions([])
    ->data('Hola este es mi codigo QR')
    ->encoding(new Encoding('UTF-8'))
    ->errorCorrectionLevel(ErrorCorrectionLevel::High)
    ->size(300)
    ->margin(10)
    ->roundBlockSizeMode(RoundBlockSizeMode::Margin)
    // ->logoPath(__DIR__.'/assets/symfony.png')
    // ->logoResizeToWidth(50)
    // ->logoPunchoutBackground(true)
    ->labelText('Esta es mi etiqueta')
    ->labelFont(new NotoSans(10))
    ->labelAlignment(LabelAlignment::Center)
    ->validateResult(false)
    ->build();

// // Directly output the QR code
// header('Content-Type: '.$result->getMimeType());
// echo $result->getString();

// // Save it to a file
// $result->saveToFile(__DIR__.'/img/codigo.png');

// // Generate a data URI to include image data inline (i.e. inside an <img> tag)
// $dataUri = $result->getDataUri();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codigo QR</title>
</head>
<body>
    <h1>Prueba codigo QR</h1>
    <img src="./img/codigo.png" alt="Codigo QR">
    <br>
    <!-- <?= $dataUri = $result->getDataUri(); ?>
    <img src="<?= $dataUri = $result->getDataUri(); ?>" alt="Codigo QR"> -->
</body>
</html>