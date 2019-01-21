<?php
require_once 'model/database.php';
require_once 'functions.php';

$liste_pays = getAllEntities("pays");


getHeader("Pays", "Liste de tout nos pays");
?>


<header>

    <?php getMenu()?>
        <div class="header-title container">
            <h1>Nos pays</h1>
        </div>
        <ul class="reseau-sociaux">
            <li><a href="#"><img src="./images/facebook-header.png" alt=""></a></li>
            <li><a href="#"><img src="./images/twitter-header.png" alt=""></a></li>
            <li><a href="#"><img src="./images/instagram-header.png" alt=""></a></li>
            <li><a href="#"><img src="./images/youtube-header.png" alt=""></a></li>
        </ul>
    </header>

    <main id="pays">

        <section class="pays-img contenair">

            <?php foreach ($liste_pays as $pays) : ?>
                <h2><?= $pays['titre'] ?></h2>
                <a href="sejour.php">
                    <img src="uploads/<?= $pays['image'] ?>" alt="">
                </a>
            <?php endforeach; ?>

        </section>

    </main>

<?php getFooter() ?>