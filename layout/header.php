<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?= $description; ?>">
    <link rel="icon" href="./images/favicon.ico" />
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/main.css">
    <title>Aztrek</title>

    <?php foreach ($stylesheets as $stylesheet) : ?>
        <link rel="stylesheet" href="<?= $stylesheet; ?>">
    <?php endforeach ?>
</head>

<body>