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
        $servername = "localhost";
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
                    <a class="nav-link" href="vehicule/'.$row["id"].'">
                        <div class="card">
                            <img src="../../img/'.$row["pathImage"].'"></img>
                            <div class="card-body">
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