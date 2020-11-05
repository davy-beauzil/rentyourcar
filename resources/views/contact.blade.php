<!DOCTYPE html>
<html lang="fr">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
        <link rel="stylesheet" href="style.css">
        <meta charset="utf-8" />
        <script src="javascript.js"></script>
        <title>RentYourCarhubert</title>
    </head>
    <?php include 'header.inc.blade.php'; ?>
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
    <?php include 'footer.inc.blade.php'; ?>
</html>
