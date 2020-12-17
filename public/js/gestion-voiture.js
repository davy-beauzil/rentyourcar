function selectChoix(){

    var infosModele = ['Nom', 'Tarif du kilomètre supplémentaire', 'Nombre de places', 'Vitesse maximale', 'Description'];
    var nameModele = ['nom', 'tarifKmSupplementaire', 'nbPlaces', 'vitesseMax', 'description'];

    // je réinitialise les éléments de la page
    var formToDelete = $('.div-form');
    if(formToDelete){
        formToDelete.remove();
    }
    var form = document.querySelector('.form-gestion');
    if(form[1]){
        form[1].remove();
    }
    $('.image-voiture').css('visibility', 'hidden');

    // je mémorise le choix
    var choix = event.target.value;

    var formChoix = document.querySelector('.form-choix');
    var divForm = document.createElement('div');
    divForm.classList.add('div-form');

    // si c'est pour une modification, je demande l'id de la chose à modifier
    if(choix == 'update-modele' || choix == 'update-vehicule'){

        // je créé un input pour récupérer l'id de l'objet à modifier
        var select = document.createElement('select');
        select.style.margin = '10px 0';
        select.className = "form-control select-" + choix
        var optionDefault = document.createElement('option');
        if(choix == 'update-modele'){
            optionDefault.textContent = "Choisissez le modèle à modifier";
            select.append(optionDefault);
            var infos = findAllModeles('.select-' + choix);
        }else{
            optionDefault.textContent = "Choisissez le véhicule à modifier";
            select.append(optionDefault);
            var infos = findAllVehicules('.select-' + choix);
        }
        divForm.append(select);
        formChoix.append(divForm);
''
        // lorsque l'input change, je cherche l'objet correspondant
        select = document.querySelector('.select-' + choix);
        select.addEventListener('change', function(event){
            divForm = document.querySelector('.form-gestion');
            if(divForm){
                divForm.remove();
            }
            generateForm(choix);
            if(choix == 'update-modele'){
                var id = select[select.selectedIndex].getAttribute('modele-id');
                findModele(id);
            }else if(choix == 'update-vehicule'){
                var id = select[select.selectedIndex].getAttribute('vehicule-id');
                findVehicule(id);
            }
        });
    }else{
        formChoix.append(divForm);
        generateForm(choix);
    }
}

function generateForm(choix){

    var csrf = document.createElement('input');
    csrf.name = '_token';
    csrf.type = 'hidden';
    csrf.value = $('meta[name="csrf-token"]').attr('content');

    var imageVoiture = document.querySelector('.image-voiture');
    var infosModele = ['Nom', 'Tarif du kilomètre supplémentaire', 'Nombre de places', 'Vitesse maximale', 'Description'];
    var nameModele = ['nom', 'tarifKmSupplementaire', 'nbPlaces', 'vitesseMax', 'description'];

    var div = document.querySelector('.left-content');

    form = document.createElement('form');
    form.className = 'form-gestion form-' + choix;
    form.setAttribute('action', choix);
    form.setAttribute('method', 'post');
    form.append(csrf)

    var title = document.createElement('h3');
    title.style.margin = '20px 0 10px 0';
    var imageInput = document.createElement('input');
    imageInput.type = 'file';
    imageInput.name = 'photo';
    imageInput.placeholder = "choisir une photo"
    imageInput.style.margin = "0 0 10px 0";
    imageInput.className = "form-control-file image"
    imageInput.setAttribute('accept', 'image/*');
    imageInput.addEventListener('change', function(event){
        var image = imageInput.files[0];
        var reader = new FileReader();

        reader.onload = function(e){
            var img = new Image();
            imageVoiture.setAttribute('src', reader.result);
            imageVoiture.style.visibility = 'visible';
        }
        reader.readAsDataURL(image)
        
    })
    var labelImageInput = document.createElement('label');
    labelImageInput.setAttribute('for', 'photo');
    labelImageInput.textContent = "Choisir une photo";
    var button = document.createElement('button');
    button.className = 'btn btn-secondary';
    button.type = 'submit';
    form.append(title);

    if(choix == 'update-modele' || choix == 'update-vehicule'){
        var label = document.createElement('label');
        label.setAttribute('for', 'id');
        label.textContent = "Identifiant"
        var inputId = document.createElement('input');
        inputId.name = 'id';
        inputId.setAttribute('disabled', true);
        inputId.className = "form-control inputId";
        inputId.style.margin = "0 0 10px 0";
        form.append(label);
        form.append(inputId);
    }

    if(choix == 'create-modele' || choix == 'update-modele'){
        for(var i = 0 ; i < infosModele.length ; i++){
            var input = document.createElement('input');
            input.name = nameModele[i];
            input.style.margin = "0 0 10px 0";
            input.className = "form-control " + nameModele[i];

            var label = document.createElement('label');
            label.style.margin = '0';
            label.textContent = infosModele[i];
            label.setAttribute('for', nameModele[i]); 
            
            form.append(label);
            form.append(input);
        }

        if(choix == 'create-modele'){
            title.textContent = 'Créer un nouveau modèle de voiture';
            button.textContent = 'Créer';
        }else{
            title.textContent = 'Modifier un modèle de voiture existant';
            button.textContent = 'Modifier';
        }
        form.append(labelImageInput);
        form.append(imageInput);
        form.append(button);
        div.append(form);

    }else if(choix == 'create-vehicule' || choix == 'update-vehicule'){
        var modele = document.createElement('select');
        modele.className = "form-control modele";
        modele.style.margin = '0 0 10px 0';
        modele.name = 'modele';
        var labelModele = document.createElement('label');
        labelModele.setAttribute('for', 'modele');
        labelModele.style.margin = '0';
        labelModele.textContent = 'Modèle du véhicule';
        form.append(labelModele);
        form.append(modele);

        findAllModeles('.modele');

        var dateAchat = document.createElement('input');
        dateAchat.name = 'dateAchat';
        dateAchat.className = "form-control dateAchat";
        dateAchat.style.margin = '0 0 10px 0';
        dateAchat.type = 'datetime-local';
        //dateAchat.setAttribute('value', '2017-06-01T08:30');
        var labelvehicule = document.createElement('label');
        labelvehicule.setAttribute('for', 'dateAchat');
        labelvehicule.style.margin = '0';
        labelvehicule.textContent = 'Date d\'achat';
        form.append(labelvehicule);
        form.append(dateAchat);

        if(choix == 'create-vehicule'){
            title.textContent = 'Créer un nouveau véhicule';
            button.textContent = 'Créer';
        }else{
            title.textContent = 'Modifier un véhicule existant';
            button.textContent = 'Modifier';
        }
        form.append(button)
        div.append(form)
    }
}

function findModele(id){

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "/findModele",
        type: "POST",
        data: {id: id},
        dataType: "json",
    }).done(function(response){
        $('.inputId').val(response[0]['id']);
        $('.nom').val(response[0]['nom']);
        $('.tarifKmSupplementaire').val(response[0]['tarifKmSupplementaire']);
        $('.nbPlaces').val(response[0]['nbPlaces']);
        $('.vitesseMax').val(response[0]['vitesseMax']);
        $('.description').val(response[0]['description']);
        $('.image-voiture').attr('src', '../../img/' + response[0]['pathImage']).css('visibility', 'visible');
    }).fail(function(error){
        console.log(JSON.stringify(error))
    })
    
}

function findAllModeles(conteneur, choix){

    
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "/findAllModeles",
        type: "POST",
        dataType: "json",
    }).done(function(response){
        for(var i = 0 ; i < response.length ; i++){
            $(conteneur).append('<option value="'+ response[i]['nom'] +'" modele-id="'+ response[i]['id'] +'" >'+ response[i]['nom'] + '</option>');
        }

        setTimeout(function(){
            if(document.querySelector('.form-update-vehicule')){
                const selectChoix = document.querySelector('.select-update-vehicule');
                const choix = selectChoix[selectChoix.selectedIndex].getAttribute('modele-id');
        
                const selectModele = document.querySelector('.modele');
                if(selectModele.hasChildNodes){
        
                    const optionsModele = selectModele.childNodes;
        
                    for(var i = 0 ; i < optionsModele.length ; i++){
                        var modeleId = optionsModele[i].getAttribute('modele-id');
                        if(choix == modeleId){
                            console.log(optionsModele[i].getAttribute('selected'));
                            optionsModele[i].setAttribute('selected', true)
                            console.log(optionsModele[i].getAttribute('selected'));
                        }
                    }
                }
            }
        }, 500)
        
        return response;
    }).fail(function(error){
        console.log(JSON.stringify(error))
    })

    

}

function findVehicule(id){

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "/findVehicule",
        type: "POST",
        data: {id: id},
        dataType: "json",
    }).done(function(response){
        $('.inputId').val(response[0]['id']);
        $('.modele').val(response[0]['modele_id']);
        $('.dateAchat').val(response[0]['dateAchat']);
    }).fail(function(error){
        console.log(JSON.stringify(error))
    })
    
}

function findAllVehicules(conteneur){
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "/findAllVehicules",
        type: "POST",
        dataType: "json",
    }).done(function(response){
        for(var i = 0 ; i < response.length ; i++){
            $(conteneur).append('<option vehicule-id="'+ response[i]['id'] +'" modele-id="'+ response[i]['modele_id'] +'">' + response[i]['nomModele'] + ' : ' + response[i]['id'] + '</option>');
        }
        return response;
    }).fail(function(error){
        console.log(JSON.stringify(error))
    })
}

function createModele(){
    
    console.log('je suis là')

    var nom = $('.nom').text();
    var tarifKmSupplementaire = $('.tarifKmSupplementaire').text();
    var nbPlaces = $('.nbPlaces').text();
    var vitesseMax = $('.vitesseMax').text();
    var description = $('.description').text();
    var image = $('.image').files[0];
    var fd = new FormData(image);

    $.ajax({
        url: "/create-modele",
        type: "POST",
        data: {nom: nom, tarifKmSupplementaire: tarifKmSupplementaire, nbPlaces: nbPlaces, vitesseMax: vitesseMax, description: description, image: fd},
        dataType: "json",
    }).done(function(response){
        return response;
    }).fail(function(error){
        console.log(JSON.stringify(error))
    })
}


function showMessage(){
    var message = document.querySelector('.resultMessage');
    message.style.display = 'block';

    setTimeout(function(){
        message.style.display = 'none';
    }, 5000)
}
