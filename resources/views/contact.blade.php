<!DOCTYPE html>
<html lang="fr">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
        <link rel="stylesheet" href="/public/css/style.css">
        <meta charset="utf-8" />
        <script src="javascript.js"></script>
        <title>RentYourCarhubert</title>
    </head>

    <!-- Afficher Header -->
    @include('header') 

    <body>
        <section>
            <div class="menucontact">
                <h2>CONTACT</h2>
                <form method="post" action="">
                    <input type="text" name="nom" placeholder="Votre Nom" required>
                    <input type="text" name="prenom" placeholder="Votre Prénom" required>
                    <input type="text" name="tel" placeholder="Votre Téléphone" required>
                    <input type="email" name="email" placeholder="Votre Email" required>
                    <textarea name="message" placeholder="Votre Message" required></textarea>
                    <input type="submit" name="envoyer" value="Envoyer" class="submit-btn"required>
                    <br>
                </form>
            </div>
        </section>
    </body>

    <!-- Afficher Footer -->
    @include('footer') 

</html>

<!-- CSS -->
<style>
.menucontact {
box-shadow: 0 0 10px rgba(0,0,0,0.5);
margin: 50px auto;
width: 350px;
text-align: center;
}
.menucontact h2 {
    background: #efefef;
    margin-top: 0;
    padding: 10px;
}
.menucontact input {
    display: block;
    width: 85%;
    margin: 10px auto;
    padding: 10px;
}
.menucontact textarea {
    width: 90%;
    margin: 5px auto;
    padding: 10px;
    height: 80px;
}
</style>