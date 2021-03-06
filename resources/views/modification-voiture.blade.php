<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RentYourCar - Gestion des voitures</title>
    <link href="reservation-voiture.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>

    @include('header')
    
    
    <div class="container mt-5">
        <div class="row d-flex flex-row align-items-center">
            <form class="d-flex flex-column col-6 form-car" action="/modifier-un-modele" method="POST">
                @csrf
                <input type="text" name="modele-id" class="inputModeleId" value="{{ $modele->id }}">
                <label class="pl-3 mb-0 label-infos" for="nom">Nom de la voiture</label>
                <input class="mb-3 input-infos p-1" type="text" name="nom" value="{{ $modele->nom }}">
                <label class="pl-3 mb-0 label-infos" for="tarifKmSupplementaire">Tarif du km supplémentaire</label>
                <input class="mb-3 input-infos p-1" type="number" name="tarifKmSupplementaire" value="{{ $modele->tarifKmSupplementaire }}">
                <label class="pl-3 mb-0 label-infos" for="nbPlaces">Nombre de places</label>
                <input class="mb-3 input-infos p-1" type="number" name="nbPlaces" value="{{ $modele->nbPlaces }}">
                <label class="pl-3 mb-0 label-infos" for="vitesseMax">Vitesse maximale</label>
                <input class="mb-3 input-infos p-1" type="number" name="vitesseMax" value="{{ $modele->vitesseMax }}">
                <label class="pl-3 mb-0 label-infos" for="description">Description</label>
                <textarea class="mb-3 input-infos p-1" name="description" id="textarea-desc"> {{ $modele->description }}</textarea>
                <input class="edit-button my-5 col-3 btn-success p-1" type="submit" value="{{ $button }}">
            </form>

            <div class="apercu col-6">
                <img class="image-voiture col-12" src="../../img/{{$modele->pathImage}}" alt="image de voiture">
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
        .form-car{
            margin-bottom: 100px;
            display: block;
        }
        .inputModeleId{
            visibility: hidden;
            height: 0;
        }
    </style>

</body>
</html>