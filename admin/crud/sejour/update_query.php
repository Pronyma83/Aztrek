<?php

require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];
$sejour = getOneEntity("sejour", $id);

$titre = $_POST['titre'];
$description = $_POST['description'];
$pays_id = $_POST['pays_id'];
$difficulte_id = $_POST['difficulte_id'];
$duree = $_POST['duree'];

// Upload de l'image
if ($_FILES["image"]["error"] == 0) {
    $filename = $_FILES["image"]["name"];
    $tmp = $_FILES["image"]["tmp_name"];
    move_uploaded_file($tmp, "../../../uploads/" . $filename);
} else {
    // Aucun fichier uploadé
    $filename = $sejour["image"];
}

updateSejour($id, $titre, $filename, $description, $pays_id, $difficulte_id, $duree);

header('Location: index.php');
