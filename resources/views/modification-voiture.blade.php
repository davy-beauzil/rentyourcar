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

    @include('header')
    
    
    <div class="container mt-5">
        <div class="row d-flex flex-row align-items-center">
            <form class="d-flex flex-column col-6" action="">
                <label class="pl-3 mb-0 label-infos" for="nom">Nom de la voiture</label>
                <input class="mb-3 input-infos p-1" type="text" value="nom de la voiture pré-rempli" name="nom">
                <label class="pl-3 mb-0 label-infos" for="tarifKmSupp">Tarif du km supplémentaire</label>
                <input class="mb-3 input-infos p-1" type="text" value="tarif du km supplémentaire pré-rempli" name="tarifkmSupp">
                <label class="pl-3 mb-0 label-infos" for="nbPlaces">Nombre de places</label>
                <input class="mb-3 input-infos p-1" type="text" value="nombre de place pré-rempli" name="nbPlaces">
                <label class="pl-3 mb-0 label-infos" for="vitesseMax">Vitesse maximale</label>
                <input class="mb-3 input-infos p-1" type="text" value="vitesse maximale pré-rempli" name="vitesseMax">
                <label class="pl-3 mb-0 label-infos" for="description">Description</label>
                <textarea class="mb-3 input-infos p-1" name="description" id="textarea-desc">description pré-rempli</textarea>

                <input class="edit-button my-2 col-3 btn-success p-1" type="button" value="Modifier">
            </form>

            <div class="apercu col-6">
                <img class="image-voiture col-12" src="https://via.placeholder.com/200x100" alt="image de voiture">
            </div>
        </div>

    </div>
    

    @include('footer')

    <style>
        .input-infos{
            color: #555
        }
        #textarea-desc{
            max-height:300px;
        }
        .edit-button{
            border-radius:5px;
            border: none;
        }
    </style>

</body>
</html>