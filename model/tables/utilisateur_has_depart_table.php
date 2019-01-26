<?php

function getNbPersonnesDepart(int $depart_id) {
    global $connection;

    // On récupère toutes les réservations
    $query ="
    SELECT nb_personnes
    FROM utilisateur_has_depart
    WHERE depart_id = :depart_id
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":depart_id", $depart_id);
    $stmt->execute();

    // Liste des réservations pour le départ
    $liste_nb_personnes_depart = $stmt->fetchAll();

    // On additionne le nombre de personnes de chaque réservation du départ
    $nb_personnes_total = 0;
    foreach ($liste_nb_personnes_depart as $nb_personnes) {
        $nb_personnes_total = $nb_personnes_total + $nb_personnes;
    }

    // On retourne le nombre total de personne qui ont réservés le départ
    return $nb_personnes_total;
}