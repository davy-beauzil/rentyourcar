
<!DOCTYPE html>
<html lang="fr">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
        <link rel="stylesheet" href="/public/css/style.css">
        <meta charset="utf-8" />
        <script src="javascript.js"></script>
        <title>Liste des messages</title>
    </head>

    <!-- Afficher Header -->
    @include('header')

    <body>

        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">

                        <div class="col-sm-12"><h2><b>Liste des messages</b></h2></div>
                    </div>
                </div>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Telephone</th>
                            <th>Email</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($messages as $message)
                        <tr>
                            <td>{{$message->nom}}</td>
                            <td>{{$message->prenom}}</td>
                            <td>{{$message->tel}}</td>
                            <td>{{$message->email}}</td>
                            <td>{{$message->message}}</td>

                        </tr>
                         @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>

    </body>

    <!-- Afficher Footer -->
    @include('footer')

</html>

<!-- CSS -->
<style>
</style>





















