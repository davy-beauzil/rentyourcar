<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RentYourCar - Gestion des voitures</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    @include('header')
    
    <div class="container mt-5">
        <div class="row d-flex flex-row align-items-center">
            <form class="d-flex flex-column col-6" action="" method="POST">

                <select class="form-control liste-modele my-2" name="modeles">
                    <option class="option-to-disable-modele">Modèle de voiture ...</option>
                        @foreach($listeModeles as $modele)
                            <option value="{{$modele->pathImage}}" modele-id="{{$modele->id}}" class="modele"> {{ $modele->nom }} </option>
                        @endforeach
                </select>

                <select class="form-control liste-vehicule my-2" name="vehicules">
                    <option class="option-to-disable-vehicule">Identifiant du véhicule</option>
                        @foreach($listeVehicules as $vehicule)
                            <option vehicule-id="{{$vehicule->id}}" modele-id="{{$vehicule->modele_id}}" class="vehicule">id :  {{ $vehicule->id }} | date d'achat : {{ $vehicule->dateAchat }} </option>
                        @endforeach

                </select>

                <div class="d-flex flex-row justify-content-around">
                    <input class="edit-button my-2 col-3 btn-danger p-2" type="submit" value="Modifier">
                    <a class="edit-button my-2 col-3 btn-success p-2" href="/creation-voiture" >Créer</a>
                </div>
                
            </form>

            <div class="apercu col-6">
                <img class="image-voiture col-12" src="https://via.placeholder.com/200x100" alt="image de voiture">
            </div>
        </div>
    </div>
    @include('footer')
    <style>
        *{
            margin: 0;
            padding: 0;
        }

        .reservation{
            background-color: blue;
        }

        .edit-button{
            border-radius:5px;
            border: none;
            text-align: center;
        }
    </style>

    <script src="{{ asset('js/gestion-voiture.js') }}"></script>

</body>
</html>