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

    <!-- Bootstrap core CSS -->

    <link href="<?php echo SITE_URL; ?>node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="<?php echo SITE_URL; ?>node_modules/select2/dist/css/select2.min.css" rel="stylesheet"/>
    <link href="<?php echo SITE_URL; ?>node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet"/>

    <!-- Custom styles for this template -->
    <link href="<?php echo SITE_URL; ?>css/dashboard.css" rel="stylesheet">
    <link href="<?php echo SITE_URL; ?>css/style.css" rel="stylesheet">

    <title>Aztrek</title>

    <?php foreach ($stylesheets as $stylesheet) : ?>
        <link rel="stylesheet" href="<?= $stylesheet; ?>">
    <?php endforeach ?>
</head>

<body>