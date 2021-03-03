<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" with content="{{ csrf_token() }}">
    <title>RentYourCar - Gestion des voitures</title>
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
    @isset($message)
        <div style="display: none; transition: .3s;"  class="resultMessage alert {{$classMessage}}" role="alert">{{$message}}</div>
    @endisset
    <div class="row d-flex flex-row">

            <div class="left-content col-12 col-md-6">
                <form class="d-flex flex-column form-choix" action="" method="POST">
                    @csrf
                    <select name="choix" id="choix" class="form-control liste-modele my-2" onchange="selectChoix()">
                        <option value="option-to-disable">Que souhaitez vous faire ?</option>
                        <option value="create-modele">Créer un nouveau modèle de véhicule</option>
                        <option value="update-modele">Modifier un modèle de véhicule existant</option>
                        <option value="create-vehicule">Ajouter un nouveau véhicule</option>
                        <option value="update-vehicule">Modifier un véhicule existant</option>
                    </select>
                </form>
            </div>

            <div class="right-content col-12 col-md-6">
                <div class="apercu">
                    <img class="image-voiture col-12" nam alt="image de voiture" src="../../img/noimage.png" style="visibility:hidden;">
                </div>
            </div>


        </div>
    </div>

    @include('footer')

    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .image-voiture{
            width: 500px;
        }
        .reservation{
            background-color: blue;
        }

        .edit-button{
            border-radius:5px;
            border: none;
            text-align: center;
        }
        .inputModeleId, .inputVehiculeId{
            visibility: hidden;
            height: 0;
        }
    </style>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="{{ asset('js/gestion-voiture.js') }}"></script>


</body>
</html>
