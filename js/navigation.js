function openPays() {
    // Remise à zéro du menu
    resetMenu();

    var menuBox = document.getElementById('menu-pays');
    var sejoursBox = document.getElementById('costarica');
    var titreSejoursBox = document.getElementById('costaricatitle');

    // Si le menu est affiché, on le cache
    if(menuBox.style.display == "block") { 
      menuBox.style.display = "none";
    }
    // Si le menu est caché, on l'affiche
    // On sélectionne le premier séjour
    else { 
      menuBox.style.display = "block";
      sejoursBox.style.display = "block";
      titreSejoursBox.classList.add("menu-sejours-select");
    }
  }

  function openSejours(titreId, blocId) {
    // Remise à zéro du menu
    resetMenu();

    // Si le bloc du menu qu'on vient de cliquer n'est pas affiché
    // On l'affiche et on le sélectionne
    if(blocId.style.display != "block") { 
        blocId.style.display = "block";
        titreId.classList.add("menu-sejours-select");
    }  
  }

  function resetMenu() {
    var previousBox = document.getElementById('costarica');
    if(previousBox.style.display == "block") {
      previousBox.style.display = "none";
      var previousTitle = document.getElementById('costaricatitle');
      previousTitle.classList.remove("menu-sejours-select");
    }

    var previousBox = document.getElementById('guatemala');
    if(previousBox.style.display == "block") {
      previousBox.style.display = "none";
      var previousTitle = document.getElementById('guatemalatitle');
      previousTitle.classList.remove("menu-sejours-select");
    }

    var previousBox = document.getElementById('honduras');
    if(previousBox.style.display == "block") {
      previousBox.style.display = "none";
      var previousTitle = document.getElementById('hondurastitle');
      previousTitle.classList.remove("menu-sejours-select");
    }

    var previousBox = document.getElementById('mexique');
    if(previousBox.style.display == "block") {
      previousBox.style.display = "none";
      var previousTitle = document.getElementById('mexiquetitle');
      previousTitle.classList.remove("menu-sejours-select");
    }

    var previousBox = document.getElementById('salvador');
    if(previousBox.style.display == "block") {
      previousBox.style.display = "none";
      var previousTitle = document.getElementById('salvadortitle');
      previousTitle.classList.remove("menu-sejours-select");
    }
  } 