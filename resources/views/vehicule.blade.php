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

    @include('header') 

    <body>
    <!-- Liste -->
        <div class="container">
            <h1 class="display-4 text-center">Liste des véhicules</h1>
            <div class="row mb-5">
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://images.caradisiac.com/logos-ref/gamme/gamme--tesla-model-s/S5-gamme--tesla-model-s.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Tesla Model S</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://images.caradisiac.com/logos-ref/gamme/gamme--tesla-model-3/S5-gamme--tesla-model-3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Tesla Model 3</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://images.caradisiac.com/logos-ref/gamme/gamme--tesla-model-x/S5-gamme--tesla-model-x.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Tesla Model X</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://images.caradisiac.com/logos-ref/gamme/gamme--tesla-model-y/S5-gamme--tesla-model-y.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Tesla Model Y</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    @include('footer')
</html>
