<?php require_once __DIR__ . "/../config/parameters.php"?>

<nav class="nav-header">
    <div class="logo-header">
        <a href="index.php"><img src="./images/logo-header.png" alt="logo aztrek"></a>
    </div>
    <button class="menu-open"></button>
    <div class="main-menu">
        <button class="menu-close">Fermer</button>
        <div id="menu-destination" class="destination">
            <a href="#" onclick="openPays()">Destination</a>
            <div id="menu-pays" class="menu-list">
                <a href="liste_pays.php">Tous nos pays</a>
                <ul class="menu-pays-liste">
                    <li>
                        <a href="#" id="costaricatitle" onclick="openSejours(costaricatitle, costarica)">Costa
                            Rica</a>
                        <ul id="costarica" class="menu-sejours">
                            <li><a href="#">Séjour1</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" id="guatemalatitle" onclick="openSejours(guatemalatitle, guatemala)">Guatémala</a>
                        <ul id="guatemala" class="menu-sejours">
                            <li><a href="#">Séjour1</a></li>
                            <li><a href="#">Séjour2</a></li>
                            <li><a href="#">Séjour3</a></li>
                            <li><a href="#">Séjour4</a></li>
                            <li><a href="#">Séjour5</a></li>
                        </ul>
                    </li>
                    <li><a href="#" id="hondurastitle" onclick="openSejours(hondurastitle, honduras)">Honduras</a>
                        <ul id="honduras" class="menu-sejours">
                            <li><a href="#">Séjour1</a></li>
                            <li><a href="#">Séjour2</a></li>
                        </ul>
                    </li>

                    <li><a href="#" id="mexiquetitle" onclick="openSejours(mexiquetitle, mexique)">Mexique</a>
                        <ul id="mexique" class="menu-sejours">
                            <li><a href="#"><img src="./images/chichenitza.jpg" alt=""> </a>
                                <p>Trésors du Yucatàn</p>
                            </li>
                            <li><a href="#">Comminando Mexico <img src="./images/mexico.jpg" alt=""> </a></li>
                            <li><a href="#">Les Volcans <img src="./images/volcan.jpg" alt=""> </a></li>
                        </ul>
                    </li>
                    <li><a href="#" id="salvadortitle" onclick="openSejours(salvadortitle, salvador)">Salvador</a>
                        <ul id="salvador" class="menu-sejours">
                            <li><a href="#">Séjour1</a></li>
                            <li><a href="#">Séjour2</a></li>
                            <li><a href="#">Séjour3</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <ul class="nav-right">
            <li><a href="#">Vos expériences</a></li>
            <li><a href="#">Écrivez-nous !</a></li>
            <li><a href="#">Connexion</a></li>
            <li>Appelez-nous au 02.XX.XX.XX.XX</li>
        </ul>
    </div>
</nav>