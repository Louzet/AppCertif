<!DOCTYPE html>
<html>
<head>

    <title><?= $title; ?> | <?= WEBSITE_NAME; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/reset.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/nav_style.css">



</head>
<body>
<!-- Navbar -->

<!-- Top menu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand p-2 bd-highlight" href="<?= site_url("network/home/{$hash}"); ?>">THAG</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="form-inline my-2 my-lg-0 p-2  offset-sm-1 col-sm-10 col-lg-5 offset-lg-3">
                <input for="search" class="form-control col-sm-8" id="search"  type="search" placeholder="Vous cherchez quelque chose..." aria-label="Search">
                <button id="search" class="btn btn-success my-2 my-sm-0 col-sm-4" type="submit">Rechercher</button>
            </form>
            <ul class="navbar-nav navbar-right bd-hightlight mr-auto" id="navbar-right">
                <li class="nav-item active">
                    <ul class="navbar-nav navbar-right mr-auto mx-4">
                    <?php if($this->session->userdata('connect')) : ?>
                        <li class="nav-item active px-2">
                            <a class="nav-link" href="#">Populaire</a>
                        </li>
                        <li class="nav-item">
                        <li class="nav-item px-2">
                            <a class="nav-link" href="#">Messagerie</a>
                        </li>
                        <?php endif; ?>
                        <li class="nav-item dropdown my-auto" >
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php if($this->session->userdata('pseudo')) : ?>
                                    <img src="<?= base_url(); ?>assets/images/<?php if(!empty($user[0]['profil_image'])){ echo $user[0]['profil_image'];} else{ echo "noimage.jpg";} ?>" class="rounded image-fluid" alt="..." width="30" height="30">
                                    <span class="text-center">
                                    <?php echo ucfirst($this->session->userdata('pseudo')); ?>
                                    </span>
                                <?php else : ?>
                                <img src="<?= base_url(); ?>assets/images/noimage.jpg" class="rounded image-fluid" alt="..." width="30" height="30">
                                <span class="text-center">
                                    <p>Mon Compte </p>
                                </span>
                                <?php endif; ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php if(!$this->session->userdata('connect')) : ?>
                                    <a class="dropdown-item" href="<?= base_url(); ?>users/login">Connexion</a>
                                <?php endif; ?>
                                <?php if($this->session->userdata('connect')) : ?>
                                <a class="dropdown-item" href='<?= site_url("users/profil/{$hash}"); ?>'>Profil</a>
                                <a class="dropdown-item" href="#">Mes contacts</a>
                                <a class="dropdown-item" href="#">Notifications</a>
                                <a class="dropdown-item" href="#">Paramètres</a>
                                <a class="dropdown-item alert alert-danger" href="<?= base_url(); ?>users/logout">Déconnexion</a>
                                <?php endif; ?>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
            </form>
        </div>
    </nav>


    <div class="container-fluid" id="body">
