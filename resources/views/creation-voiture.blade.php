<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RentYourCar - Gestion des voitures</title>
        <link href="reservation-voiture.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>

        <!-- Afficher Header -->
        @include('header')
        
        <!-- Formulaire Création Véhicule -->
        <div class="container mt-5">
            <div class="row d-flex flex-row align-items-center div-form">
                <form class="d-flex flex-column col-lg-6 col-sm-12" action="{{ $action }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label class="pl-3 mb-0 label-infos" for="nom">Nom de la voiture</label>
                    <input required class="mb-3 input-infos p-1" type="text" name="nom">
                    <label class="pl-3 mb-0 label-infos" for="tarifKmSupplementaire">Tarif du km supplémentaire</label>
                    <input required class="mb-3 input-infos p-1" type="number" name="tarifKmSupplementaire">
                    <label class="pl-3 mb-0 label-infos" for="nbPlaces">Nombre de places</label>
                    <input required class="mb-3 input-infos p-1" type="number" name="nbPlaces">
                    <label class="pl-3 mb-0 label-infos" for="vitesseMax">Vitesse maximale</label>
                    <input required class="mb-3 input-infos p-1" type="number" name="vitesseMax">
                    <label class="pl-3 mb-0 label-infos" for="description">Description</label>
                    <textarea class="mb-3 input-infos p-1" name="description" id="textarea-desc"></textarea>
                    <input required type="file" name="photo" accept="image/*" class="input-photo" onchange="loadFile(event)">
                    <div class="apercu" style="display: none;">
                        <img class="image-voiture col-12" src="https://via.placeholder.com/500x250" alt="image de voiture">
                    </div>

                    <input required class="edit-button col-3 btn-secondary p-1" type="submit" value="{{ $button }}">
                </form>
            </div>
        </div>
        
        <!-- Afficher Footer -->
        @include('footer')

    </body>
</html>

<!-- CSS -->
<style>
    body{
        background-image: linear-gradient(339deg, rgba(47, 47, 47,0.02) 0%, rgba(47, 47, 47,0.02) 42%,transparent 42%, transparent 99%,rgba(17, 17, 17,0.02) 99%, rgba(17, 17, 17,0.02) 100%),linear-gradient(257deg, rgba(65, 65, 65,0.02) 0%, rgba(65, 65, 65,0.02) 11%,transparent 11%, transparent 92%,rgba(53, 53, 53,0.02) 92%, rgba(53, 53, 53,0.02) 100%),linear-gradient(191deg, rgba(5, 5, 5,0.02) 0%, rgba(5, 5, 5,0.02) 1%,transparent 1%, transparent 45%,rgba(19, 19, 19,0.02) 45%, rgba(19, 19, 19,0.02) 100%),linear-gradient(29deg, rgba(28, 28, 28,0.02) 0%, rgba(28, 28, 28,0.02) 33%,transparent 33%, transparent 40%,rgba(220, 220, 220,0.02) 40%, rgba(220, 220, 220,0.02) 100%),linear-gradient(90deg, rgb(255,255,255),rgb(255,255,255));
        min-height: 100vh;
        width: 100%;
    }
    .input-infos{
        color: #555
    }
    #textarea-desc{
        max-height:300px;
        min-height: 150px;
    }
    .edit-button{
        border-radius:5px;
        border: none;
    }
    .apercu{
        border: 1px solid #333;
        padding: 0;
        margin: 20px auto;
    }
    .image-voiture{
        padding: 0;
        margin: 0;
    }
</style>

    <style>
        body{
            background-image: linear-gradient(339deg, rgba(47, 47, 47,0.02) 0%, rgba(47, 47, 47,0.02) 42%,transparent 42%, transparent 99%,rgba(17, 17, 17,0.02) 99%, rgba(17, 17, 17,0.02) 100%),linear-gradient(257deg, rgba(65, 65, 65,0.02) 0%, rgba(65, 65, 65,0.02) 11%,transparent 11%, transparent 92%,rgba(53, 53, 53,0.02) 92%, rgba(53, 53, 53,0.02) 100%),linear-gradient(191deg, rgba(5, 5, 5,0.02) 0%, rgba(5, 5, 5,0.02) 1%,transparent 1%, transparent 45%,rgba(19, 19, 19,0.02) 45%, rgba(19, 19, 19,0.02) 100%),linear-gradient(29deg, rgba(28, 28, 28,0.02) 0%, rgba(28, 28, 28,0.02) 33%,transparent 33%, transparent 40%,rgba(220, 220, 220,0.02) 40%, rgba(220, 220, 220,0.02) 100%),linear-gradient(90deg, rgb(255,255,255),rgb(255,255,255));
            min-height: 100vh;
            width: 100%;
        }
        .input-infos{
            color: #555
        }
        #textarea-desc{
            max-height:300px;
            min-height: 150px;
        }
        .edit-button{
            border-radius:5px;
            border: none;
            margin: 20px 0 100px 0;
        }
        .apercu{
            border: 1px solid #333;
            padding: 0;
            margin: 20px auto;
        }
        .image-voiture{
            padding: 0;
            margin: 0;
        }
    </style>

<!-- JS -->
<script>
    var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
        var image = document.querySelector('.image-voiture');
        image.src = reader.result;
        var apercu = document.querySelector('.apercu');
        apercu.style.display = "block";
        
    };
    reader.readAsDataURL(event.target.files[0]);
};
</script>