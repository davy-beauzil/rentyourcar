<header>
	<!-- NavBar -->	
	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
		<a class="navbar-brand" href="#">RentYourCarhubert</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
		<ul class="nav navbar-nav ml-auto">
				<li><a class="nav-link" href="../accueil">Accueil</a></li>
				<li><a class="nav-link" href="../vehicule">Vehicule</a></li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="crud.php" id="navbardrop" data-toggle="dropdown">Location</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="../reservation">Reservation</a>
						<a class="dropdown-item" href="../historique">Historique</a>
					</div>
				</li>
				<li><a class="nav-link" href="../creation-voiture">CreationVehicule</a></li>
				<li><a class="nav-link" href="../contact">Contact</a></li>
				<li><button class="btn btn-danger navbar-btn" href="auth/layouts/app">Connexion</button></li>
		</ul>
	</nav>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</header>

<style>
	.navbar-dark .navbar-nav .nav-link {
		color: white;
		text-transform: uppercase;
		font-size: 14px;
		font-weight: 600;
	}
</style>
