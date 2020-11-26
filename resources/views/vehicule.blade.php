<!DOCTYPE html>
<html lang="fr">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:600,900">
        <meta charset="utf-8" />
        <script src="javascript.js"></script>
        <title>RentYourCarhubert</title>
    </head>

    <!-- Afficher Header -->
    @include('header') 

    <body>
    <!-- Liste Véhicule -->
        <div class="container">
            <br>
            <h1 class="display-4 text-center">Liste des véhicules</h1>
            <br>
        </div>

        <?php
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "rentyourcar";
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($conn->connect_error) {
            die("Impossible de se connecter à la base de données : " . $conn->connect_error);
        }
        $sql = "SELECT * FROM modele";
        $result = $conn->query($sql);

        echo'<div class="container">
        <div class="row mb-5">';
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div class="col-md-3">
                    <a class="nav-link" href="ficheVehicule/'.$row["id"].'">
                        <div class="card">
                            <img src="../../img/'.$row["pathImage"].'"></img>
                            <div class="card-body text-center">
                                <h5 class="card-title">'.$row["nom"].'</h5>
                            </div>
                        </div>
                    </a>
                </div>';
            }
        } else {
         echo "0 resultat";
        }
        echo '</div> </div>';
        $conn->close();
        ?>

    </body>

    <!-- Afficher Footer -->
    @include('footer')

</html>

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
