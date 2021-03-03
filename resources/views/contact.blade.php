<!DOCTYPE html>
<html lang="fr">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
        <link rel="stylesheet" href="/public/css/style.css">
        <meta charset="utf-8" />
        <script src="javascript.js"></script>
<<<<<<< HEAD
        <title>Contact</title>
=======
        <title>RentYourCarhubert</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

>>>>>>> romain
    </head>

    <!-- Afficher Header -->
    @include('header')

    <body>
        <section>
            <div class="menucontact">
                <h2>CONTACT</h2>
                <form method="post" action="/create-contact">
                    @csrf
                    <input type="text" name="nom" placeholder="Votre Nom" required>
                    <input type="text" name="prenom" placeholder="Votre Prénom" required>
                    <input type="text" name="tel" placeholder="Votre Téléphone" required>
                    <input type="email" name="email" placeholder="Votre Email" required>
                    <textarea name="message" placeholder="Votre Message" required></textarea>
                    <input type="submit" name="envoyer" value="Envoyer" class="submit-btn"required>
                    <br>
                </form>
                @if ($message = Session::get('success'))
                <div class="alert alert-success" style='margin-left:5%;'>
                    <p>{{ $message }}</p>
                </div>
             @endif
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
