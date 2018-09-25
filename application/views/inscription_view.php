<div class="container">
    <div class="row">
        <div class="col-sm-10 offset-sm-1 text mt-2">

            <h1 class="text-center">Créer un compte <?= WEBSITE_NAME; ?></h1>
            
        </div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-6 offset-md-6">

			<div class="register-form">

				<?= form_open('inscription', 'data-parsley-validate id="form-inscription"', ""); ?>
					<div class="form-group">
						<?= form_label("Nom d'utilisateur (pseudo)*", 'pseudo'); ?>
						<input type="text" name="pseudo" placeholder="Nom d'utilisateur..." class="login-input form-control" id="login-pseudo" data-parsley-minlength="3" data-parsley-trigger="change" value="<?= set_value('pseudo', ''); ?>" autofocus required>
						<?= form_error("pseudo", "<div class='text-danger errors'>", "</div>") ?>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="nom">Nom :</label>
							<input type="text" class="form-control" id="nom" placeholder="nom" name="nom" value="<?= set_value('nom'); ?>" data-parsley-trigger="change" required>
							<?= form_error("nom", "<div class='text-danger errors'>", "</div>") ?>
						</div>
						<div class="form-group col-md-6">
							<label for="prenom">Prénom :</label>
							<input type="text" class="form-control" id="prenom" placeholder="Prénom" name="prenom" value="<?= set_value('prenom'); ?>" data-parsley-trigger="change" required>
							<?= form_error("prenom", "<div class='text-danger errors'>", "</div>") ?>
						</div>
					</div>
					<div class="form-group">
						<?= form_label("Votre Email :", 'Email'); ?>
							<input type="email" name="email" value="<?= set_value('email'); ?>" placeholder="xyz@email.com" class="form-control" id="login-password" data-parsley-trigger="change" autocomplete="autocomplete" required>
							
						<?= form_error("email", "<div class='text-danger errors'>", "</div>") ?>
					</div>
					
					<div class="form-group">
						<?= form_label("Mot de passe", 'password'); ?>
							<input type="password" name="password" placeholder="Mot de passe..." class="login-input form-control" id="login-password" data-parsley-minlength="6" data-parsley-trigger="change" autocomplete="autocomplete" required>
							
						<?= form_error("password", "<div class='text-danger errors'>", "</div>") ?>
					</div>

					<button type="submit" class="btn btn-primary btn-block">Thag me !</button>
				<?= form_close(); ?>
			
			</div>

		</div>
	</div>
</div>



