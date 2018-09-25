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
							
							
							<?= form_open('connexion', 'data-parsley-validate id="form-connexion"', ""); ?>
								<div class="form-group">
									<?= form_label("Nom d'utilisateur (pseudo)*", 'pseudo'); ?>
									<input type="text" name="pseudo" placeholder="Nom d'utilisateur..." class="login-input form-control" id="login-pseudo" data-parsley-minlength="3" data-parsley-trigger="change" value="<?= set_value('pseudo'); ?>" autofocus required>
									<?= form_error("pseudo", "<div class='text-danger errors'>", "</div>") ?>
								</div>
								
								<div class="form-group">
								<?= form_label("Mot de passe", 'password'); ?>
									<input type="password" name="password" placeholder="Mot de passe..." class="login-input form-control" id="login-password" data-parsley-minlength="6" data-parsley-trigger="change" autocomplete="autocomplete" required>
                                    <ion-icon id="eye-off" name="eye-off" title="Maintenez cette icone pour voir votre mot de passe"></ion-icon>
									<?= form_error("password", "<div class='text-danger errors'>", "</div>") ?>
								</div>
	
								<div class="form-group form-check">
									<input type="checkbox" class="form-check-input" name="remember" id="remember">
									<?= form_label("<strong>Se souvenir de moi ?</strong>", "remember", 'class="check"'); ?>
								</div>
					
								<button type="submit" class="btn btn-primary btn-block">Thag me !</button>
							<?= form_close(); ?>
	
							<!--<a class="nav-link active my-2" href="#">Mot de passe oublié ?</a>-->

                            <!-- Button trigger modal -->


                            <!--<a href="#" class="nav-link active my-2" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Mot de passe perdu ?</a>-->
<br>
                            <!-- Button trigger modal -->
                            <a href="#" class="nav-link active my-2 link-mp" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Mot de passe oublié ?</a>

                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Mot de passe oublié</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <?= form_open('connexion/mot_de_passe_perdu'); ?>
                                                <div class="form-group">
                                                    <blockquote class="blockquote text-center">
                                                        <label for="recipient-name" class="col-form-label text-center" style="color:#000;">Veuillez entrer votre adresse email :</label>
                                                    </blockquote>
                                                    <input type="text" class="form-control" id="recipient-name" placeholder="adresse@email.fr" name="email_password_forget">
                                                </div>

                                                    <p><abbr class="initialism" title="Un lien sera renvoyé automatiquement à votre adresse email, vous permettant ainsi de le réinitialiser !"><span class="icon-help"><ion-icon id="ion-help" name="help"></ion-icon></span></abbr></p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                                    <button type="submitbutton" class="btn btn-primary">Envoyer</button>
                                            <?= form_close(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


						</div>
					</div>
				</div>
					

			</div>
		</div>
	</div>
</div>

