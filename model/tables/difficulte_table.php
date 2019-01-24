<?php

function getOneDifficulte(int $id) {
    global $connection;

    $query = "
    SELECT *
    FROM difficulte
    WHERE id = :id
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    return $stmt->fetch();
}