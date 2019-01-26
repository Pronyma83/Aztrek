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

function getAllDepartSejour(int $sejour_id) :array {
    global $connection;

    $query = "
    SELECT depart.*,
      DATE_FORMAT(depart.date_depart, '%d-%m-%Y') AS date_depart_format
    FROM depart
    WHERE sejour_id = :sejour_id
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":sejour_id", $sejour_id);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getNombrePlaceRestantes(int $depart_id) {
    global $connection;

    // On récupère le nombre de place disponible pour le départ
    $query = "
    SELECT nb_places
    FROM depart
    WHERE id = :depart_id
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":depart_id", $depart_id);
    $stmt->execute();

    // Nombre de place disponible pour le départ (fetch retourne un tableau indexé par le nom des colonnes
    $nb_place_depart = $stmt->fetch()['nb_places'];

    // On récupère le nombre de personne qui ont réservés le départ
    $nb_personnes_total = getNbPersonnesDepart($depart_id);

    // On soustrait les deux valeurs pour connaitre le nombre de place restante pour le départ
    $total_place_disponible = $nb_place_depart - $nb_personnes_total;

    return $total_place_disponible;
}

function getNombrePlaceRestantesJoin(int $depart_id) {

    global $connection;

    // On récupère le nombre de place du départ ainsi que le nombre de personne pour chaque réservation
    $query = "
    SELECT nb_places, nb_personnes
    FROM depart
    LEFT JOIN utilisateur_has_depart ON depart.id = utilisateur_has_depart.depart_id
    WHERE id = :depart_id
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":depart_id", $depart_id);
    $stmt->execute();

    // On enregistre le résultat dans une variable (tableau de réservation)
    $reservations = $stmt->fetchAll();

    // On calcule le nombre de personne à partir des réservations sur le départ
    $nb_personnes_total = 0;
    foreach ($reservations as $reservation) {
        $nb_personnes_total = $nb_personnes_total + $reservation['nb_personnes'];
    }

    // On récupère le nombre de place du départ, si la requête SQL retourne bien au moins un élément
    if(count($reservations) > 0) {
        $nb_place_depart = $reservations[0]['nb_places'];
    }
    // Sinon, on considère qu'il n'y aucune place disponible pour le départ
    else {
        $nb_place_depart = 0;
    }

    // On soustrait les deux valeurs pour connaitre le nombre de place restante pour le départ
    $total_place_disponible = $nb_place_depart - $nb_personnes_total;

    // On retourne le nombre de place disponible
    return $total_place_disponible;
}