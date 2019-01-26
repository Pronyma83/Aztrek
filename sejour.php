<?php
require_once 'model/database.php';
require_once 'functions.php';

$id = $_GET["id"];
$sejour = getOneEntity("sejour", $id);
$liste_depart = getAllDepartSejour($id);

getHeader("Sejour", "Detail du sejour...");
?>


<header>

    <?php getMenu()?>
        <div class="header-title container">
            <h1>Séjour</h1>
        </div>
        <ul class="reseau-sociaux">
            <li><a href="#"><img src="./images/facebook-header.png" alt=""></a></li>
            <li><a href="#"><img src="./images/twitter-header.png" alt=""></a></li>
            <li><a href="#"><img src="./images/instagram-header.png" alt=""></a></li>
            <li><a href="#"><img src="./images/youtube-header.png" alt=""></a></li>
        </ul>
    </header>

    <main>
        <section id="presentation" class="contenair">
            <article class="presentation">
                <div class="col-md-4">
                    <h2><?= $sejour['titre'] ?></h2>
                    <p><?= $sejour['description'] ?></p>
                    <p>Durée: <?= $sejour['duree'] ?> jours</p>
                    <p>Difficulté :
                        <?php $difficulte = getOneEntity('difficulte', $sejour['difficulte_id'])["id"]; ?>
                        <?php for($i = 1; $i <= 4; $i++) : ?>
                            <?php if ($i <= $difficulte) : ?>
                                <i class="fa fa-star"></i>
                            <?php else: ?>
                                <i class="fa fa-star-o"></i>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </p>

                    <p>Prix :
                        <?= getOneEntity("depart", $sejour['id'])["prix"] ?>
                        <i class="fa fa-euro"></i>
                    </p>
                </div>
            </article>

            <aside>
                <img src="uploads/<?= $sejour['image'] ?>" alt="">
            </aside>

        </section>

        <section class="depart">
            <h2>Nos Départs</h2>
            <table>
                <?php foreach ($liste_depart as $depart) : ?>
                    <tr>
                        <th><?= $depart['date_depart_format']; ?></th>
                        <th>Au</th>
                        <th><?= $depart['prix']; ?> €</th>
                        <th>Places : <?= $depart['nb_places']; ?></th>
                        <?php $nombre_place_restantes = getNombrePlaceRestantesJoin($depart['id']); ?>
                        <th><label>Places restantes : <?= $nombre_place_restantes ?></label></th>
                        <th>
                            <label>Nombre de personne :</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <?php for ($i = 1; $i <= $nombre_place_restantes; $i++) : ?>
                                    <option><?= $i ?></option>
                                <?php endfor; ?>
                            </select>
                        </th>
                        <th>
                            <button>Réserver</button>
                        </th>
                    </tr>
                <?php endforeach; ?>
            </table>
        </section>

    </main>

<?php getFooter() ?>