<?php
require_once 'model/database.php';
require_once 'functions.php';

$id = $_GET["id"];
$pays = getOneEntity("pays", $id);
$liste_sejour = getAllSejourPays($id);

getHeader("Séjours", "Liste de tout nos séjours");
?>


    <header>
        <?php getMenu()?>
        <div class="header-title container">
            <h1><?= $pays['titre'] ?></h1>
            <h2>Nos séjours</h2>
        </div>
        <ul class="reseau-sociaux">
            <li><a href="#"><img src="./images/facebook-header.png" alt=""></a></li>
            <li><a href="#"><img src="./images/twitter-header.png" alt=""></a></li>
            <li><a href="#"><img src="./images/instagram-header.png" alt=""></a></li>
            <li><a href="#"><img src="./images/youtube-header.png" alt=""></a></li>
        </ul>
    </header>

    <main id="pays" class="container-fluid">

        <section class="row w-100">
            <?php foreach ($liste_sejour as $sejour) : ?>
                <div class="col-md-4">
                    <h2><?= $sejour['titre'] ?></h2>
                    <a href="sejour.php?id=<?= $sejour['id'] ?>">
                        <img src="uploads/<?= $sejour['image'] ?>" alt="">
                    </a>
                    <p>Duree : <?= $sejour['duree'] ?></p>

                    <p>
                        <?php $difficulte = getOneEntity('difficulte', $sejour['difficulte_id'])["id"]; ?>
                        <?php for($i = 1; $i <= 4; $i++) : ?>
                            <?php if ($i <= $difficulte) : ?>
                                <i class="fa fa-star"></i>
                            <?php else: ?>
                                <i class="fa fa-star-o"></i>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </p>

                    <p>Prix : <?= getOneEntity("depart", $sejour['id'])["prix"] ?></p>
                </div>
            <?php endforeach; ?>

        </section>

    </main>

<?php getFooter() ?>