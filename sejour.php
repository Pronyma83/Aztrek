<?php
require_once 'model/database.php';
require_once 'functions.php';

$id = $_GET["id"];
$sejour = getOneEntity("sejour", $id);
$liste_depart = getAllDepart();

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
                <h2>Trésors du Yucatán</h2>
                <p>Le Mexique, et en particulier le Yucatán, est une terre de rêve.</p>
                <p>Elle y mêle quelques-uns des plus beaux sites mayas, riche patrimoine culturel, et des trésors
                    naturels, comme la mer des Caraïbes ou les cenotes, ces puits souterrains ou à ciel ouvert, trous
                    d’eau qui parsèment le plateau calcaire du Yucatán.</p>
                <p>L’âme indienne y est bien vivante, celle de la civilisation raffinée des Mayas à leur grande époque
                    bien sûr, mais également celle des Mayas d’aujourd’hui, qui ont gardé leurs us et coutumes.</p>
                <ul>
                    <li>6 jours</li>
                    <li>à partir de 3290 €</li>
                    <li>Niveau 1/5</li>
                </ul>
            </article>

            <aside>
                <img src="./uploads/s1-j3-d.jpg" alt="">
            </aside>

        </section>

        <section class="depart">
                <h2>Nos Départs</h2>
                <table>
                    <?php foreach ($liste_depart as $depart) : ?>
                    <?php if ($id == $depart['sejour_id']) : ?>
                        <tr>
                            <th><?= $depart['date_depart_format']; ?></th>
                            <th>Au</th>
                            <th><?= $depart['prix']; ?> €</th>
                            <th>Place restantes </th>
                            <th>Description de l'exemple</th>
                        </tr>
                    <?php endif; ?>
                    <?php endforeach; ?>

                </table>

    </main>

<?php getFooter() ?>