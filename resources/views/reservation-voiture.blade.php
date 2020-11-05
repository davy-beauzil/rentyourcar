<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservez votre voiture</title>
    <link href="../css/reservation-voiture.css" rel="stylesheet">
</head>
<body>
    <!-- 

        IMPORTER LE MENU DE NAVIGATION

    -->

    
    @include('header')
    

    <div class="reservation">
    
        <form action="">

            <select name="voitures" id="voitures">
                <option value="Mustang">Mustang</option>
                <option value="Tesla">Tesla</option>
                <option value="Mustang">Mustang</option>
                <option value="Tesla">Tesla</option>
                <option value="Mustang">Mustang</option>
                <option value="Tesla">Tesla</option>
                <option value="Mustang">Mustang</option>
                <option value="Tesla">Tesla</option>
            </select>

            <input type="datetime-local">

        </form>

        <div class="apercu">
        
            <img src="https://via.placeholder.com/200x100" alt="image de voiture">

            <button id="form-button"></button>

        </div>
    
    </div>
    

    @include('footer')
    <!-- 

        IMPORTER LE FOOTER

    -->
</body>
</html>