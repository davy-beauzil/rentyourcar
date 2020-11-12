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

                <select class="form-control liste-voiture my-2" name="voitures">
                    <option value="Mustang">Mustang</option>
                    <option value="Tesla">Tesla</option>
                    <option value="Mustang">Renault</option>
                    <option value="Tesla">Citroën</option>
                    <option value="Mustang">Ferreri</option>
                    <option value="Tesla">Porsches</option>
                    <option value="Mustang">Jaguar</option>
                    <option value="Tesla">Alpine</option>
                </select>

                <select class="form-control liste-voiture my-2" name="voitures">
                    <option value="Mustang">Modèle</option>
                    <option value="Tesla">Modèle</option>
                    <option value="Mustang">Modèle</option>
                    <option value="Tesla">Modèle</option>
                    <option value="Mustang">Modèle</option>
                    <option value="Tesla">Modèle</option>
                    <option value="Mustang">Modèle</option>
                    <option value="Tesla">Modèle</option>
                </select>

                <div class="d-flex flex-row justify-content-around">
                    <input class="edit-button my-2 col-3 btn-danger p-2" type="button" value="Modifier">
                    <a class="edit-button my-2 col-3 btn-success p-2" href="/creation-voiture" >Nouvelle voiture</a>
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
        }

    </style>

</body>
</html>