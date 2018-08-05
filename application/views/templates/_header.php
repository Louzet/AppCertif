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
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark" role="navigation">
			<div class="container-fluid">
				<a class="navbar-brand" href="<?= base_url();?>">Thig</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbarContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="fa fa-home"></i> <span>Home</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="fa fa-wrench"><span>new</span></i> <span>Populaire</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="fas fa-info-circle"></i> <span>About</span>
							</a>
						</li>
						<!-- <li class="nav-item">
							<a href="#" class="nav-link">
								<i class="fa fa-magic"></i> <span>Mission</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="fa fa-paper-plane"></i> <span>Contact</span>
							</a>
						</li> -->
					</ul>
					<ul class="nav navbar-nav navbar-right">
				
					<!-- <li class="nav-item">
						<a class="nav-link nav-text" href="#">Pas encore de compte ?</a>
					</li> -->
			
						<li class="nav-item">
						
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-user"></i> Mon compte</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							
								<a class="dropdown-item" href="<?= base_url(); ?>users/connexion">Connexion</a>
								
								<div class="dropdown-divider"></div>
							
								<a class="dropdown-item" href="#">Profil</a>
								<a class="dropdown-item" href="#">Messages</a>
								<a class="dropdown-item" href="#">Notifications</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Deconnexion</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>


		<div class="container-fluid">
