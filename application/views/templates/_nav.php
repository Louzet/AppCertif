<!-- Navbar -->

<!-- Top menu -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">

    <a class="navbar-brand text-center underline" href="<?= base_url(); ?>accueil" style="font-size: 3rem; letter-spacing: 4px; color: #fff; text-shadow: 4px 4px 2px rgba(150, 150, 150, 1); "><?= WEBSITE_NAME ; ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav  bd-hightlight ml-auto ">
			<li class="nav-item active px-2">
				<a class="nav-link" href="#">Accueil</a>
			</li>

			<li class="nav-item px-2">
				<a class="nav-link" href="#">Populaire</a>
			</li>

		</ul>
        <form class="form-inline my-2 p-2  offset-sm-1 col-sm-10 col-md-3 col-lg-5 mx-auto">
            <input for="search" class="form-control col-sm-6"  type="search" placeholder="Vous cherchez quelque chose..." aria-label="Search">
            <button id="search" class="btn btn-success my-2 my-sm-0 col-sm-4" type="submit">Rechercher</button>
        </form>
        <ul class="navbar-nav navbar-right bd-hightlight ml-auto" id="navbar-right">
            <li class="nav-item active">
                <ul class="navbar-nav navbar-right mr-auto mx-4">
                    <?php if($this->session->userdata('connect')) : ?>
                    <li class="nav-item active px-2">
                        <a class="nav-link" href="#">Catégorie</a>
                    </li>

                    <li class="nav-item px-2">
                        <a class="nav-link" href="#">lj9x1hc0</a>
                    </li>

                    <li>
                        <div class="btn-group">
                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<?php 
								if ($this->session->userdata('connect')){
									echo $this->session->userdata('pseudo');
								}
								else{
									echo "Mon Compte";
								}  
								?>
									
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <button class="dropdown-item" type="button">Action</button>
                                <button class="dropdown-item" type="button">Another action</button>
                                <button class="dropdown-item" type="button">Something else here</button>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= site_url(); ?>deconnexion">Déconnexion</a>
                            </div>
                        </div>
                    </li>
                    <?php endif; ?>





<!--                    <li class="nav-item dropdown my-auto" >-->
<!---->
<!--                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">-->
<!--                            --><?php //if(!$this->session->userdata('connect')) : ?>
<!--                                <a class="dropdown-item" href="--><?//= base_url(); ?><!--connexion">Connexion</a>-->
<!--                            --><?php //endif; ?>
<!--                            --><?php //if($this->session->userdata('connect')) : ?>
<!--                                <a class="dropdown-item" href='--><?//= site_url("users/profil/{$hash}"); ?><!--'>Profil</a>-->
<!--                                <a class="dropdown-item" href="#">Mes contacts</a>-->
<!--                                <a class="dropdown-item" href="#">Notifications</a>-->
<!--                                <a class="dropdown-item" href="#">Paramètres</a>-->
<!--                                <a class="dropdown-item alert alert-danger" href="--><?//= base_url(); ?><!--deconnexion">Déconnexion</a>-->
<!--                            --><?php //endif; ?>
<!--                        </div>-->
<!--                    </li>-->
                </ul>
            </li>
        </ul>
    </div>
</nav>
<!-- set message flash  -->
<!-- message flash register success  -->
<?php if($this->session->flashdata('Enregistrement réussis')) : ?>
    <div class="alert alert-success text-center" role="alert">
        <strong><?= $this->session->flashdata('Enregistrement réussis') ?></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<!-- message flash réussite de connexion  -->
<?php if($this->session->flashdata('Connexion réussie')) : ?>
    <div class="alert alert-success text-center" role="alert">
        <strong><?= $this->session->flashdata('Connexion réussie') ?></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>
<!-- message flash Déconnexion  -->
<?php if($this->session->flashdata('Déconnexion')) : ?>
    <div class="alert alert-warning text-center" role="alert">
        <strong><?= $this->session->flashdata('Déconnexion') ?></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>
<!-- message flash Déconnexion  -->
