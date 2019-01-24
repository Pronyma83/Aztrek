<?php

function getAllSejour(int $limit = 999) :array {
    global $connection;

    $query = "
    SELECT *
    FROM sejour
    ";

    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}

function insertSejour(string $titre, int $pays_id, int $duree, int $difficulte_id, string $description, int $publie, string $image) {
    global $connection;

    $query = "
    INSERT INTO sejour (titre, pays_id, duree, difficulte_id, description, image, publie) 
    VALUES (:titre, :pays_id, :duree, :difficulte_id, :description, :image, :publie)
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":pays_id", $pays_id);
    $stmt->bindParam(":duree", $duree);
    $stmt->bindParam(":difficulte_id", $difficulte_id);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":publie", $publie);
    $stmt->execute();
}

function updateSejour(int $id, string $titre, string $image, string $description, int $pays_id, int $difficulte_id, int $duree)
{
    global $connection;
    $query = "
    UPDATE sejour 
    SET titre = :titre, image = :image, description = :description, pays_id = :pays_id, difficulte_id = :difficulte_id, duree = :duree
    WHERE id = :id";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":pays_id", $pays_id);
    $stmt->bindParam(":difficulte_id", $difficulte_id);
    $stmt->bindParam(":duree", $duree);
    $stmt->execute();
}

function getAllSejourPays(int $pays_id, int $limit = 999) :array {
    global $connection;

    $query = "
    SELECT *
    FROM sejour
    WHERE pays_id = :pays_id
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":pays_id", $pays_id);
    $stmt->execute();

    return $stmt->fetchAll();
}