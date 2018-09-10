<div class="container-fluid">
	<div class="box-get-started">
		<div class="row">

			<div class="col-md-7 text-center mt-5">
				<div class="row">
					<div class="col-md-12" style="margin-top:25%;" >
						<h2 class="site-name"><?= WEBSITE_NAME; ?></h2>
						<p class="lead text-center phrase-site-name">
							Get started ! It's absolutly free  <a href="<?= site_url(); ?>inscription" class="text-shadow-white"><strong>ICI</strong></a>
						</p>
					</div>
				</div>
			</div>

			<div class="col-md-5">
				<div>
					<div class="background-box-form">
						<div class="box-form my-5">
							<h3 class="text-center mb-1">Connectez vous</h3>
	
							<!-- message flash échec de connexion  -->
							<?php if($this->session->flashdata('Connexion échouée')) : ?>
								<div class="alert alert-danger text-center" role="alert">
									<strong><?= $this->session->flashdata('Connexion échouée') ?></strong>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
							<?php endif; ?>
							
							
							<?= form_open('connexion'); ?>
								<div class="form-group">
									<?= form_label("Nom d'utilisateur (pseudo)*", 'pseudo'); ?>
									<input type="text" name="pseudo" placeholder="Nom d'utilisateur..." class="login-input form-control" id="login-pseudo" value="<?= set_value('pseudo'); ?>" autofocus>
									<?= form_error("pseudo", "<div class='text-danger errors'>", "</div>") ?>
								</div>
								
								<div class="form-group">
								<?= form_label("Mot de passe", 'password'); ?>
									<input type="password" name="password" placeholder="Mot de passe..." class="login-input form-control" id="login-password" autocomplete="autocomplete">
									<?= form_error("password", "<div class='text-danger errors'>", "</div>") ?>
								</div>
	
								<div class="form-group form-check">
									<input type="checkbox" class="form-check-input" name="remember" id="remember">
									<?= form_label("<strong>Se souvenir de moi ?</strong>", "remember"); ?>
								</div>
					
								<button type="submit" class="btn btn-primary btn-block">Thag me !</button>
							<?= form_close(); ?>
	
							<a class="nav-link active my-2" href="#">Mot de passe oublié ?</a>
						</div>
					</div>
				</div>
					

			</div>
		</div>
	</div>
</div>

