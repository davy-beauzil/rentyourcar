<!DOCTYPE html>
<html lang="fr">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
        <link rel="stylesheet" href="style.css">

        <meta charset="utf-8" />
        <script src="javascript.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
  
        <title>RentYourCarhubert</title>
    </head>

    @include('header') 
    @include('carousel') 

    <body>
        <div class="container">
        <h1 class="display-4 text-center">Membre de la team</h1>
            <div class="row text-center">

                <!-- Davy -->
                <div class="col-xl-3 col-sm-6 mb-5">
                    <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://media-exp1.licdn.com/dms/image/C5603AQE-rddVRqg1bQ/profile-displayphoto-shrink_200_200/0?e=1609977600&v=beta&t=gtCO5JkV_NlpTn4Xtj8wYDMvePPmoD3laovXTQb-RTs" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">Davy Beauzil</h5><span class="small text-uppercase text-muted">DEVELOPPEUR</span>
                    </div>
                </div>

                <!-- Océane -->
                <div class="col-xl-3 col-sm-6 mb-5">
                    <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://media-exp1.licdn.com/dms/image/C4D03AQH0e1cRxRTt4g/profile-displayphoto-shrink_200_200/0?e=1609977600&v=beta&t=aYC9bZwMDHwIYAVZHgIazoHi_R2fqIl3SLVsJbTInmE" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">Océane Bonnemain</h5><span class="small text-uppercase text-muted">DEVELOPPEUR</span>
                    </div>
                </div>

                <!-- Enzo -->
                <div class="col-xl-3 col-sm-6 mb-5">
                    <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://scontent-cdg2-1.xx.fbcdn.net/v/t31.0-8/19488808_2004395943117811_8127902543087439889_o.jpg?_nc_cat=104&ccb=2&_nc_sid=174925&_nc_ohc=GzlrJbeGcCMAX9g3m8W&_nc_ht=scontent-cdg2-1.xx&oh=533e2bb1e32f569beee75ec5f682adb6&oe=5FCAA427" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">Enzo Bregier</h5><span class="small text-uppercase text-muted">DEVELOPPEUR</span>
                    </div>
                </div>

                <!-- Romain -->
                <div class="col-xl-3 col-sm-6 mb-5">
                    <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://scontent-cdt1-1.xx.fbcdn.net/v/t1.0-1/p200x200/37960079_639251409773153_6338449947309899776_n.jpg?_nc_cat=101&ccb=2&_nc_sid=7206a8&_nc_ohc=pvbVzEBOHekAX9LAdNv&_nc_ht=scontent-cdt1-1.xx&tp=6&oh=88f0a22ba5906943b81578e8ad37495b&oe=5FC96033" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">Romain Baillou</h5><span class="small text-uppercase text-muted">DEVELOPPEUR</span>
                    </div>
                </div>
            </div>
        </div>
    </body>

    @include('footer') 

</html>
