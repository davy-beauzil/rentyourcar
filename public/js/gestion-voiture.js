// les options à désactiver
var optionToModeleToDisabled = document.querySelector('.option-to-disable-modele');
var optionToVehiculeToDisabled = document.querySelector('.option-to-disable-vehicule');
optionToModeleToDisabled.setAttribute('disabled', true);
optionToVehiculeToDisabled.setAttribute('disabled', true);

// Afficher l'image de la voiture correspondante + gérer les véhicules correspondant au modèle choisit
var optionsVehicule = document.querySelectorAll('.vehicule');
var optionsModele = document.querySelectorAll('.modele');

var listeModele = document.querySelector('.liste-modele');


listeModele.addEventListener('change', function(event){
    var idModele = listeModele[listeModele.selectedIndex].getAttribute('modele-id');
    // on cherche l'image correspondante et on l'affiche
    var image = document.querySelector('.image-voiture');
    image.setAttribute('src', "../../img/" + event.target.value);

    for(var i = 0 ; i < optionsVehicule.length ; i++){
        if(optionsVehicule[i].getAttribute('modele-id') == idModele){
            optionsVehicule[i].style.display = "block";
        }
        if(optionsVehicule[i].getAttribute('modele-id') != idModele){
            optionsVehicule[i].style.display = "none";
        }
    }

    for(var i = 0 ; i < optionsVehicule.length ; i++){
       
        
    }
})


