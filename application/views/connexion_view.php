<div class="container">

<div class="row">
	<div class="col-md-6 offset-md-6">
		

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
	
				<button type="submit" class="btn btn-success btn-block">Thag me !</button>
			<?= form_close(); ?>
		</div>

	</div>
</div>

</div>
