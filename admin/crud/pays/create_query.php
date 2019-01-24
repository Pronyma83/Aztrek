<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$titre = $_POST['titre'];

// Upload de l'image
$filename = $_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];
move_uploaded_file($tmp, "../../../uploads/" . $filename);

insertPays($titre, $filename);

header('Location: index.php');
