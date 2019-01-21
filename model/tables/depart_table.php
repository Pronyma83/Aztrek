<?php

function getAllDepart() {
    global $connection;

    $query = "
    SELECT depart.*,
      DATE_FORMAT(depart.date_depart, '%d-%m-%Y') AS date_depart_format
    FROM depart
    ";

    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();

}