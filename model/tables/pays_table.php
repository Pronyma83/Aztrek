<?php

function getAllPays() :array{
    global $connection;

    $query = "
    SELECT * 
    FROM pays
    ";

    $stmt = $connection->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll();
}

function getOnePays(int $id) {
    global $connection;
    $query = "
    SELECT *
    FROM pays
    WHERE id = :id
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    return $stmt->fetch();
}

function insertPays(string $titre, string $image){
    global $connection;

    $query = "
    INSERT INTO pays (titre, image) 
    VALUES (:titre, :image)
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":image", $image);
    $stmt->execute();
}

function updatePays(int $id, string $titre, string $image)
{
    global $connection;
    $query = "
    UPDATE pays 
    SET titre = :titre, image = :image
    WHERE id = :id";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":image", $image);
    $stmt->execute();
}