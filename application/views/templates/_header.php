<html>
	<head>
		<title></title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		
		

		<link rel="stylesheet" href="<?= base_url(); ?>assets/css/reset.css">
		<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?= base_url(); ?>assets/css/fontawesome-all.min.css">
	
		<link rel="stylesheet" href="<?= base_url(); ?>assets/css/main.css">

	</head>

	<body>
		<!-- Navbar -->
		
		<!-- Top menu -->
		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
			<a class="navbar-brand p-2 flex-grow-1 bd-highlight" href="<?= base_url() ; ?>">THAG</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>


			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<form class="form-inline my-2 my-lg-0 p-2 bd-hightlight col-md-8">
					<input for="search" class="form-control col-md-6" id="search"  type="search" placeholder="Vous cherchez quelque chose..." aria-label="Search">
					<button id="search" class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
				</form>	
				<ul class="navbar-nav navbar-right p-2 bd-hightlight mr-auto" id="navbar-right">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Compte
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="<?= base_url(); ?>users/connexion">Connexion</a>
						<a class="dropdown-item" href="#">Mes contacts</a>
						<a class="dropdown-item" href="#">Notifications</a>
						<a class="dropdown-item" href="#">Paramètres</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Déconnexion</a>
						</div>
					</li>
				</ul>
			</div>
			
		</nav>


		<div class="container-fluid">
