<?php

function get(int $limit = 999): array {
    global $connection;

    $query = "
    SELECT *
    FROM sejour
    ";

    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();

}