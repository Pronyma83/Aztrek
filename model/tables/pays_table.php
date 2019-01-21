<?php

function getAllPays(){

    $query = "
    SELECT * 
    FROM pays
    ";

    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetch();

}