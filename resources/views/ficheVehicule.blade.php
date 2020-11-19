<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" id="fiche">
            <div class="row">

                <div class="col-md-6 info">
                <img src="../../img/{{$numero->pathImage}}" id="imageVoiture" alt="Photo voiture" heigth="100%" width="100%">
                </div>

                <div class="col-md-1">
                </div>

                <div class="col-md-4 info">
                    <form id="form">
                        <div>

                            <label class="label" for="name">Modele : </label>
                            <label for="name">{{$numero->nom}}</label>
                            <br/><br/>
                            <label class="label" for="name">Vitesse max : </label>
                            <label for="name">{{$numero->vitesseMax}} km/h</label>
                            <br/><br/>
                            <label class="label" for="name">Tarif/km Supplémentaire : </label>
                            <label for="name">{{$numero->tarifKmSupplementaire}} km/h</label>
                            <br/><br/>
                            <label class="label" for="name">Description : </label>
                            <label for="name">{{$numero->description}}</label>
                            <br/><br/>
                            <label class="label" for="name">Sièges : </label>
                            <label for="name">{{$numero->nbPlaces}}</label>
                            <br/><br/>
                            <label for="name">Selectionner une date : </label>
                        </div>

                        <div>
                            <input id="calendrier" onchange="verifDate()" type="date" value="AAAA-MM-JJ"/> 
                        </div>

                        <br/><br/>
                        <div id="bouton">
                            <input type="submit" class="btn btn-secondary btn-lg btn-block" value="Réservez">
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</body>


<style>

body{
    background-image: radial-gradient(circle at center center, rgba(33,33,33,0),rgb(33,33,33)),repeating-linear-gradient(135deg, rgb(33,33,33) 0px, rgb(33,33,33) 1px,transparent 1px, transparent 4px),repeating-linear-gradient(45deg, rgb(56,56,56) 0px, rgb(56,56,56) 5px,transparent 5px, transparent 6px),linear-gradient(90deg, rgb(33,33,33),rgb(33,33,33));;
    height: 100vh;
    overflow: hidden;
}

#fiche{
    height:80vh;
    margin: 5% 0 5% 0;
    background-image: linear-gradient(339deg, rgba(47, 47, 47,0.02) 0%, rgba(47, 47, 47,0.02) 42%,transparent 42%, transparent 99%,rgba(17, 17, 17,0.02) 99%, rgba(17, 17, 17,0.02) 100%),linear-gradient(257deg, rgba(65, 65, 65,0.02) 0%, rgba(65, 65, 65,0.02) 11%,transparent 11%, transparent 92%,rgba(53, 53, 53,0.02) 92%, rgba(53, 53, 53,0.02) 100%),linear-gradient(191deg, rgba(5, 5, 5,0.02) 0%, rgba(5, 5, 5,0.02) 1%,transparent 1%, transparent 45%,rgba(19, 19, 19,0.02) 45%, rgba(19, 19, 19,0.02) 100%),linear-gradient(29deg, rgba(28, 28, 28,0.02) 0%, rgba(28, 28, 28,0.02) 33%,transparent 33%, transparent 40%,rgba(220, 220, 220,0.02) 40%, rgba(220, 220, 220,0.02) 100%),linear-gradient(90deg, rgb(255,255,255),rgb(255,255,255));}

.info{
    height:65vh;
    margin: 5% 2% 5% 2%;
}

#bouton{
    text-align: center;
}

.label{
    font-family: bold;
}

#form{
    margin: 20% 0 20% 0;

}

#imageVoiture{

    margin-top: 30%;
}

</style>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

function verifDate(){

    $.ajax({

        success: function () {

            //if( == "#calendrier".val()){
            //    "#bouton".prop( "disabled", true );
            //}
        },

        error: function() {
            console.log("ERREUR");
        }

    });

};
</script>

</html>