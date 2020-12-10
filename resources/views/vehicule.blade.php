<!DOCTYPE html>
<html lang="fr">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="javascript.js"></script>
        <link rel="stylesheet" href="style.css">
        <meta charset="utf-8" />
<<<<<<< resources/views/vehicule.blade.php
=======
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

>>>>>>> resources/views/vehicule.blade.php
        <title>RentYourCarhubert</title>
    </head>

    <!-- Afficher Header -->
    @include('header') 

    <body>
    <!-- Liste Véhicule -->
        <div class="container">
            <br>
            <h1 class="display-4 text-center">Liste des véhicules</h1>
            <input type="text" name="search" id="search" class="form-control" placeholder="Recherche ..." />
            <br>
        </div>
        
        <?php
        $servername = "127.0.0.1";
        $username = "root";
        $password = "root";
        $dbname = "rentyourcar";
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($conn->connect_error) {
            die("Impossible de se connecter à la base de données : " . $conn->connect_error);
        }
        $sql = "SELECT * FROM modele";
        $result = $conn->query($sql);

        echo'<div class="container" id="vehicule">
        <div class="row mb-5">';
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div id="'.$row["id"].'" onclick="affiche(this)" class="col-md-3">
                    
                        <div class="card">
                            <img src="../../img/'.$row["pathImage"].'"></img>
                            <div class="card-body text-center">
                                <h5 class="card-title">'.$row["nom"].'</h5>
                            </div>
                        </div>
                    
                </div>';
            }
        } else {
<<<<<<< resources/views/vehicule.blade.php
         echo "Aucun voiture n'existe dans notre catalogue";
=======
         echo "0 resultat";;
>>>>>>> resources/views/vehicule.blade.php
        }

        echo '</div> </div>';
        
        $conn->close();
        ?>

        <!-- Afficher une fois filtrer -->    
        <p id="demo"></p>
        <br>
    </body>

    <!-- Afficher Footer -->
    @include('footer')

</html>

<!-- JS Recherche Vehicule-->  
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

var jeton = 0;
var parent;
var divPrincipale;
var id = 0;

function affiche(elem){

    id = $(elem).attr("id");
    parent = document.querySelector('body');

    fermer = document.createElement('div');
    fermer.style.float = "left";
    fermer.id = "fermer";       

    divPrincipale = document.createElement('div');
    divPrincipale.style.height = "80vh";
    divPrincipale.style.width = "80%"
    divPrincipale.style.zIndex = "1"
    divPrincipale.style.margin = "5% 10% 0 10%";
    divPrincipale.style.position = "fixed";
    divPrincipale.style.background = "linear-gradient(339deg, rgba(47, 47, 47,0.02) 0%, rgba(47, 47, 47,0.02) 42%,transparent 42%, transparent 99%,rgba(17, 17, 17,0.02) 99%, rgba(17, 17, 17,0.02) 100%),linear-gradient(257deg, rgba(65, 65, 65,0.02) 0%, rgba(65, 65, 65,0.02) 11%,transparent 11%, transparent 92%,rgba(53, 53, 53,0.02) 92%, rgba(53, 53, 53,0.02) 100%),linear-gradient(191deg, rgba(5, 5, 5,0.02) 0%, rgba(5, 5, 5,0.02) 1%,transparent 1%, transparent 45%,rgba(19, 19, 19,0.02) 45%, rgba(19, 19, 19,0.02) 100%),linear-gradient(29deg, rgba(28, 28, 28,0.02) 0%, rgba(28, 28, 28,0.02) 33%,transparent 33%, transparent 40%,rgba(220, 220, 220,0.02) 40%, rgba(220, 220, 220,0.02) 100%),linear-gradient(90deg, rgb(255,255,255),rgb(255,255,255))";
    divPrincipale.id = "fiche"

    divImage = document.createElement('div');
    divImage.style.background = "red";
    divImage.style.width = "50%";
    divImage.style.height = "80%";
    divImage.style.margin = "5% 0% 5% 1%";

    divInfo = document.createElement('div');
    divInfo.style.background = "blue";
    divInfo.style.width = "50%";
    divInfo.style.height = "80%";
    divInfo.style.margin = "5% 1% 5% 0%";
    divInfo.style.float = "right";

    divPrincipale.append(divInfo);
    divPrincipale.append(divImage);
    divPrincipale.prepend(fermer);
    parent.prepend(divPrincipale);

    console.log();

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

