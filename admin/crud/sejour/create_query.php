<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$titre = $_POST['titre'];
$pays_id = $_POST['pays_id'];
$duree = $_POST['duree'];
$difficulte_id = $_POST['difficulte_id'];
$description = $_POST['description'];
$publie = ($_POST['publie'] == "on") ? 1 : 0;

// Upload de l'image
$filename = $_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];
move_uploaded_file($tmp, "../../../uploads/" . $filename);

insertSejour($titre, $pays_id, $duree, $difficulte_id, $description, $publie, $filename);

header('Location: index.php');
