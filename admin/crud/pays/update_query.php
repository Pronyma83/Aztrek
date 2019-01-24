<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];
$pays=  getOneEntity("pays", $id);

$titre = $_POST['titre'];

// Upload de l'image
if ($_FILES["image"]["error"] == 0) {
    $filename = $_FILES["image"]["name"];
    $tmp = $_FILES["image"]["tmp_name"];
    move_uploaded_file($tmp, "../../../uploads/" . $filename);
} else {
    // Aucun fichier uploadé
    $filename = $pays["image"];
}

updatePays($id, $titre, $filename);

header('Location: index.php');
