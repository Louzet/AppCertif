<html>
	<head>
		<title></title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		
		<link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	</head>

	<body>
		<!-- Navbar -->
		
		<nav class="navbar navbar-expand-md navbar-dark bg-primary" id="navbar">
			<a class="navbar-brand" href="<?= base_url(); ?>">Website Name</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<div class="collapse navbar-collapse" id="navbarColor01">
				<ul class="navbar-nav ml-auto">
				
					<li class="nav-item active">
						<a class="nav-link" href="<?= base_url(); ?>">Accueil</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url(); ?>blog">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url(); ?>about">About</a>
					</li>
	
				</ul>
			
				<ul class="nav navbar-nav navbar-right">

					<li class="nav-item">
						<a class="nav-text" href="<?= base_url(); ?>users/register">Pas encore de compte ?</a>
					</li>

					<li class="nav-item">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
						My_Account
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

							<a class="dropdown-item" href="<?= base_url(); ?>users/login">Connexion</a>
							<div class="dropdown-divider"></div>

							<a class="dropdown-item" href="<?= base_url(); ?>users/profil">Profil</a>
							<a class="dropdown-item" href="<?= base_url(); ?>users/message">Messages</a>
							<a class="dropdown-item" href="<?= base_url(); ?>users/notifications">Notifications</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="<?= base_url(); ?>users/logout">Deconnexion</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>

		<div class="container-fluid">
