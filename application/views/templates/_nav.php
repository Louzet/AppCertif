<!-- Navbar -->

<!-- Top menu -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand p-2 bd-highlight" href="<?= base_url("users/login"); ?>">THAG</a>
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
    </div>
</nav>

