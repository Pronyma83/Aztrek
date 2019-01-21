<?php
require_once 'model/database.php';
require_once 'functions.php';

getHeader("Accueil", "Site de voyage Aztrek...") ?>


    <header>

        <?php getMenu()?>


        <div class="header-title container">
            <h1>AZTREK</h1>
            <h2>Un nouveau monde à chaque pas</h2>
        </div>
        <ul class="reseau-sociaux">
            <li><a href="#"><img src="./images/facebook-header.png" alt=""></a></li>
            <li><a href="#"><img src="./images/twitter-header.png" alt=""></a></li>
            <li><a href="#"><img src="./images/instagram-header.png" alt=""></a></li>
            <li><a href="#"><img src="./images/youtube-header.png" alt=""></a></li>
        </ul>
    </header>

    <main>
        <section class="container">
            <div>
                <h3>AZTREK</h3>
            </div>
            <p>Organisateur de voyage au Mexique, AZTREK propose des circuits hors des sentiers battus pour découvrir
                les régions les plus authentiques de l’Amérique centrale. AZTREK s’inscrit dans une démarche
                d’écotourisme en planifiant des voyages responsables, dans des zones naturelles, en respectant
                l’environnement et en travaillant en collaboration avec les populations locales.
            </p>
            <img src="./images/lisa.jpg" alt="" class="photo">
            <p>L’équipe de AZTREK vous accompagnera dans les démarches de préparation de votre voyage avant de vous
                guider à travers cette terre de contraste.
            </p>
            <img src="./images/groupe.jpg" alt="" class="photo">
            <p>Pour l’organisation de votre voyage au Mexique, choisissez l’agence de voyage AZTREK !
            </p>

            <div class="photo1"></div>
            <div class="photo2"></div>
        </section>

        <section class="slider">
            <h3>Besoin d'inspiration ?</h3>
            <div class="owl-carousel owl-slider">
                <article class="item">
                    <img src="./images/costa-rica-slider.jpg" alt="costa rica">
                    <div class="infos container">
                        <h3>Costa Rica</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius cum consectetur earum
                            assumenda provident id commodi aut non numquam officiis?</p>
                        <a href="" class="btn">Découvrir</a>
                    </div>
                </article>
                <article class="item">
                    <img src="./images/Guatemala-slider.jpg" alt="guatemala">
                    <div class="infos container">
                        <h3>Guatémala</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius cum consectetur earum
                            assumenda provident id commodi aut non numquam officiis?</p>
                        <a href="" class="btn">Découvrir</a>
                    </div>
                </article>
                <article class="item">
                    <img src="./images/honduras-slider.jpg" alt="honduras">
                    <div class="infos container">
                        <h3>Honduras</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius cum consectetur earum
                            assumenda provident id commodi aut non numquam officiis?</p>
                        <a href="" class="btn">Découvrir</a>
                    </div>
                </article>
                <article class="item">
                    <img src="./images/mexique-slider.jpg" alt="mexique">
                    <div class="infos container">
                        <h3>Mexique</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius cum consectetur earum
                            assumenda provident id commodi aut non numquam officiis?</p>
                        <a href="" class="btn">Découvrir</a>
                    </div>
                </article>
                <article class="item">
                    <img src="./images/salvador-slider.jpg" alt="salvador">
                    <div class="infos container">
                        <h3>Salvador</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius cum consectetur earum
                            assumenda provident id commodi aut non numquam officiis?</p>
                        <a href="" class="btn">Découvrir</a>
                    </div>
                </article>
            </div>
        </section>

        <section class="container">
            <h3>Partagez vos expériences</h3>
            <div class="article">
                <article>
                    <div>
                        <a href="#"><img src="./images/julien.jpg" alt="photo julien"></a>
                        <h4 class="position">Julien</h4>
                        <p class="position">120 Likes</p>
                    </div>
                    <div>
                        <p>Départ le : 12/07/2010</p>
                        <img class="notation" src="./images/smile.png" alt="satisfaction">
                        <p>Iam in altera philosophiae parte. quae est quaerendi ac disserendi…</p>
                        <a href="#">En lire plus</a>
                        <button><img class="likes" src="./images/like-white.png" alt="like"></button>
                    </div>
                </article>
                <article>
                    <div>
                        <a href="#"><img src="./images/romain.jpg" alt="photo julien"></a>
                        <h4 class="position">Julien</h4>
                        <p class="position">120 Likes</p>
                    </div>
                    <div>
                        <p>Départ le : 12/07/2010</p>
                        <img class="notation" src="./images/smile.png" alt="satisfaction">
                        <p>Iam in altera philosophiae parte. quae est quaerendi ac disserendi…</p>
                        <a href="#">En lire plus</a>
                        <button><img class="likes" src="./images/like-white.png" alt="like"></button>
                    </div>
                </article>
                <article>
                    <div>
                        <a href="#"><img src="./images/karen.jpg" alt="photo julien"></a>
                        <h4 class="position">Julien</h4>
                        <p class="position">120 Likes</p>
                    </div>
                    <div>
                        <p>Départ le : 12/07/2010</p>
                        <img class="notation" src="./images/smile.png" alt="satisfaction">
                        <p>Iam in altera philosophiae parte. quae est quaerendi ac disserendi…</p>
                        <a href="#">En lire plus</a>
                        <button><img class="likes" src="./images/like-white.png" alt="like"></button>
                    </div>
                </article>
            </div>
            <a class="btn" href="#">Voir plus d'expériences</a>
        </section>

    </main>

<?php getFooter() ?>