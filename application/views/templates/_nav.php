<!-- Navbar -->

<!-- Top menu -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <a class="navbar-brand text-center underline" href="<?= site_url(); ?>" style="font-size: 3rem; letter-spacing: 4px; color: #fff; text-shadow: 4px 4px 2px rgba(150, 150, 150, 1); "><?= WEBSITE_NAME ; ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		
		<?php if($this->session->userdata('connect')) : ?>
		
			<ul class="navbar-nav bd-hightlight ml-auto">
				<li class="nav-item active px-2">
					<a class="nav-link" href="<?= site_url(); ?>">Accueil</a>
				</li>
                <li class="nav-item px-2">
					<a class="nav-link" href="<?= site_url("amis"); ?>">Amis</a>
				</li>
                <li class="nav-item px-2">
					<a class="nav-link" href="<?= base_url(); ?>arts?id=<?= $user_by_id->id; ?>">Arts</a>
				</li>
                <li class="nav-item px-2 ml-auto">
                    <a class="nav-link" href="<?= site_url(); ?>profil?id=<?= $this->session->userdata['user_id']; ?>">Profil</a>
                </li>

			</ul>
			<form class="mx-auto my-auto m-perso">
				<div class="form-group">
					<input type="text" class="form-control" name="search_people" id="search_people" placeholder="Vous recherchez quelque chose...">
					<div id="display_result" class="display_result">blablabla</div>
				</div>
				
			</form>
			<ul class="navbar-nav navbar-right bd-hightlight ml-auto" id="navbar-right">
				<li class="nav-item active">
					<ul class="navbar-nav navbar-right mr-auto">


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
									<a class="dropdown-item p-2 option-nav" href="<?= site_url(); ?>parametres">Parametres</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item p-2 option-deconnexion-nav" href="<?= site_url(); ?>deconnexion">Déconnexion</a>
								</div>
							</div>
						</li>
					</ul>
				</li>
			</ul>
		<?php endif; ?>
        <?php if(!$this->session->userdata('connect')) : ?>
            <section class="d-flex inner">
            <ul class="navbar-nav navbar-right icons d-flex">
                <li>
                    <a href="#" class="icon alt">
                        <span class="label rad-icons twitter"><ion-icon title="twitter" name="logo-twitter"></ion-icon></span>
                    </a>
                </li>
                <li>
                    <a href="#" class="icon alt">
                        <span class="label rad-icons facebook"><ion-icon title="facebook" name="logo-facebook"></ion-icon></span>
                    </a>
                </li>
                <li>
                    <a href="#" class="icon alt">
                        <span class="label rad-icons instagram"><ion-icon title="instagram" name="logo-instagram"></ion-icon></span>
                    </a>
                </li>
                <li>
                    <a href="#" class="icon alt">
                        <span class="label rad-icons github"><ion-icon title="github" name="logo-github"></ion-icon></span>
                    </a>
                </li>
            </ul>

        </section>
        <?php endif; ?>
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
	<span><?= 'Bon retour ' . $this->session->userdata('pseudo') . ', </span>'; ?>
        <strong><?= $this->session->flashdata('Connexion réussie'); ?></strong>
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
            <span class="close-cross" aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<!-- message flash email modification du mot de passe  -->
<?php if($this->session->flashdata('email envoyé')) : ?>
    <div class="alert alert-success text-center" role="alert">
        <strong><?= $this->session->flashdata('email envoyé') ?></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span class="close-cross" aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<script>

	search_data();

	function search_data(query){
		var query = $("#search_people").val();
		var html = '';
		var error = '';

		$.ajax({
			url : '<?= base_url() ?>barre_search/index',
			data: {query:query},
			method: "POST",
			dataType: "json",
			success: function(data){
				var i;
				for(i = 0; i < data.length; i++){

				html += "<div class='display-box-user'>"+
							"<a href='profil?id="+data[i].id+"'>"+
								"<img src='<?= base_url(); ?>assets/images/profil_pictures/" + data[i].profil_image + "' alt='photo-de-"+data[i].pseudo+"'  class='img-circle img-responsive' width='25'>"+
								''+ data[i].nom + ' ' + data[i].prenom + '<br>'+
								'<span>'+data[i].email+'</span>'+
							"</a>"+
						"</div>";
			
					}

				$("#display_result").html(html);

			}

		});
	}

	$("#search_people").keyup(function(){

		var query = $(this).val();

		if( query.length > 0 ){

			search_data(query);

			$(".display_result").css("display", "block");
		}
		else{

			search_data();

			$(".display_result").css("display", "none");
		}
	});

</script>
