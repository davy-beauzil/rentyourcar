<!DOCTYPE html>
<html lang="fr">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <meta charset="utf-8" />
        <meta name="csrf-token" with content="{{ csrf_token() }}">


        <title>RentYourCarhubert</title>
    </head>

    <!-- Afficher Header -->
    @include('header') 

    <body onload="listeVehicule()"> 
    <!-- Liste Véhicule -->
        <div class="container">
            <br>
            <h1 class="display-4 text-center">Liste des véhicules</h1>
            <input type="text" name="search" id="search" class="form-control" placeholder="Recherche ..." />
            <br>
        </div>

        <!-- Afficher une fois filtrer -->    
        <p id="demo"></p>
        <br>
    </body>

    <!-- Afficher Footer -->
    @include('footer')

</html>

<!-- JS Recherche Vehicule-->  
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>  
      $(document).ready(function(){  
           $('#search').keyup(function(){  
                search_table($(this).val());  
           });  
           function search_table(value){  
                $('#vehicule div').each(function(){  
                     var found = 'false';  
                     $(this).each(function(){  
                          if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)  
                          {  
                               found = 'true';  
                          }  
                     });  
                     if(found == 'true')  
                     {  
                          $(this).show();  
                     }  
                     else  
                     {  
                          $(this).hide();  
                     }  
                });  
           }  
      });  


function listeVehicule(conteneur, choix){
    
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "/listeVehicule",
        type: "POST",
        dataType: "json",
    }).done(function(response){
        for(var i = 0 ; i < response.length ; i++){
            $(conteneur).append('<a class="nav-link" href="ficheVehicule/'+ response[i]['id']'>'
            +'<div class="card">'
            +'<img src="../../img/'+ response[i]['pathImage'] +'"></img>'
            +'<div class="card-body text-center">'
            +'<h5 class="card-title">'+ response[i]['nom'] +'</h5>'  
            +'</div>'
            +'</div>'
        }
        }, 100)
        return response;
    }).fail(function(error){
        console.log(JSON.stringify(error))
    })
    window.onload = listeVehicule();
}

function affiche(elem){

    id = $(elem).attr("id");
    parent = document.querySelector('body');

    fermer = document.createElement('div');
    fermer.style.float = "right";
    fermer.style.margin = "0 10px 0 0";
    fermer.style.fontSize = "150%";
    fermer.id = "fermer";       

    divPrincipale = document.createElement('div');
    divPrincipale.style.height = "70vh";
    divPrincipale.style.border = "1px solid black";
    divPrincipale.style.borderRadius = "10px";
    divPrincipale.style.width = "80%"
    divPrincipale.style.zIndex = "1"
    divPrincipale.style.margin = "5% 10% 0 10%";
    divPrincipale.style.position = "fixed";
    divPrincipale.style.background = "repeating-linear-gradient(112.5deg, hsla(19,0%,93%,0.2) 0px, hsla(19,0%,93%,0.2) 0px,transparent 0px, transparent 1px,hsla(19,0%,93%,0.2) 1px, hsla(19,0%,93%,0.2) 4px,transparent 4px, transparent 5px,hsla(19,0%,93%,0.2) 5px, hsla(19,0%,93%,0.2) 8px),repeating-linear-gradient(0deg, hsla(19,0%,93%,0.2) 0px, hsla(19,0%,93%,0.2) 0px,transparent 0px, transparent 1px,hsla(19,0%,93%,0.2) 1px, hsla(19,0%,93%,0.2) 4px,transparent 4px, transparent 5px,hsla(19,0%,93%,0.2) 5px, hsla(19,0%,93%,0.2) 8px),linear-gradient(135deg, rgb(238, 238, 238),rgb(121, 121, 121))";
    divPrincipale.id = "fiche"

    divImage = document.createElement('div');
    divImage.style.width = "50%";
    divImage.style.height = "80%";
    divImage.style.margin = "9% 0% 5% 1%";

    img = document.createElement('img');
    img.style.position= "absolute";
    img.style.height = "55%";
    img.style.width = "50%";
    img.id = 'image';

    divInfo = document.createElement('div');
    divInfo.style.width = "50%";
    divInfo.style.height = "80%";
    divInfo.style.margin = "5% 1% 5% 0%";
    divInfo.style.float = "right";

    divImage.append(img);
    divPrincipale.append(divInfo);
    divPrincipale.append(divImage);
    divPrincipale.prepend(fermer);
    parent.prepend(divPrincipale);

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "/findModele",
        type: "POST",
        data: {id: id},
        dataType: "json",

    }).done(function(response){


        $('#image').attr('src', '../../img/'+response[0]['pathImage']);

    }).fail(function(error){

        console.log(error)
    })
    


    $("#fermer").text("X");
    $( "#fermer" ).click(function() {
        divPrincipale.remove();
    });

}
</script>



<!-- CSS -->    
<style>
    body{
        background-image: linear-gradient(339deg, rgba(47, 47, 47,0.02) 0%, rgba(47, 47, 47,0.02) 42%,transparent 42%, transparent 99%,rgba(17, 17, 17,0.02) 99%, rgba(17, 17, 17,0.02) 100%),linear-gradient(257deg, rgba(65, 65, 65,0.02) 0%, rgba(65, 65, 65,0.02) 11%,transparent 11%, transparent 92%,rgba(53, 53, 53,0.02) 92%, rgba(53, 53, 53,0.02) 100%),linear-gradient(191deg, rgba(5, 5, 5,0.02) 0%, rgba(5, 5, 5,0.02) 1%,transparent 1%, transparent 45%,rgba(19, 19, 19,0.02) 45%, rgba(19, 19, 19,0.02) 100%),linear-gradient(29deg, rgba(28, 28, 28,0.02) 0%, rgba(28, 28, 28,0.02) 33%,transparent 33%, transparent 40%,rgba(220, 220, 220,0.02) 40%, rgba(220, 220, 220,0.02) 100%),linear-gradient(90deg, rgb(255,255,255),rgb(255,255,255));
    }
    .card{
        margin-bottom: 10%;
        width: 15rem; 
    }
    .card img{
        width: 238px;
        height: 150px;
    }
    .card-title{
        color: black;
    }
</style>

