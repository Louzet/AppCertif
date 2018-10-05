<div class="container-fluid"> 

	<div class="box-get-started">
		<div class="row">
			<div class="col-md-7 text-center mt-5">
				<div class="row">
					<div class="col-md-12" style="margin-top:20%;" >
						<h2 class="site-name"><?= WEBSITE_NAME; ?></h2>
						<p class="lead text-center phrase-site-name">
							Get started ! It's absolutly free  
						</p>
					</div>
				</div>
			</div>

			<div class="col-md-5">
				<div>
					<div class="background-box-form mt-2">
						<div class="box-form my-5">
							<h3 class="text-center h4 mb-1 p-3 text-white">Connectez vous</h3>

							<!-- message flash échec de connexion  -->
							<?php if($this->session->flashdata('Connexion échouée')) : ?>
								<div class="alert alert-danger text-center" role="alert">
									<strong><?= $this->session->flashdata('Connexion échouée') ?></strong>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
							<?php endif; ?>
							
							<p class="text-center my-3">Rejoignez rapidement vos amis ! </p>

							<?= form_open('connexion', 'data-parsley-validate id="form-connexion" class="text-center border border-light p-1"', ""); ?>
								<div class="form-group col-md-10 offset-md-1">

									<input type="text" name="pseudo" placeholder="Nom d'utilisateur..." class="login-input form-control mb-4" id="login-pseudo" data-parsley-minlength="3" data-parsley-trigger="change" value="<?= get_cookie('thag_RememberPseudo', true) ;?><?= set_value('pseudo'); ?>" autofocus required>
									<?= form_error("pseudo", "<div class='text-danger errors'>", "</div>") ?>
								</div>
								
								<div class="input-group col-md-10 offset-md-1">
									<input type="password" name="password" placeholder="Mot de passe..." class="login-input form-control col-md-12 mb-4" id="login-password" data-parsley-minlength="6" data-parsley-trigger="change" value="<?= get_cookie('thag_RememberPassword', true) ;?>" autocomplete="autocomplete" required>
									<span class="input-group-prepend">
										<ion-icon id="eye-off" name="eye-off" title="Maintenez cette icone pour voir votre mot de passe"></ion-icon>
									</span>
									<?= form_error("password", "<div class='text-danger errors'>", "</div>") ?>
								</div>

								<div class="d-flex justify-content-start my-3 col-md-10 offset-md-1">
									<div>
										<!-- Remember me -->
										<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" name="defaultLoginFormRemember" id="defaultLoginFormRemember">
											<label class="custom-control-label check" for="defaultLoginFormRemember">Remember me</label>
										</div>
									</div>

								</div>

								<div class="input-group col-md-8 offset-md-2">
									<button type="submit" class="btn btn-primary btn-block my-3 p-2">Thag me !</button>
								</div>

                                <!-- Forgot password -->
                                <!-- Button trigger modal -->
                               <div class="d-flex justify-content-center col-md-10 offset-md-1 text-center my-3">
                                   <a href="#" class="link-mp text-center" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Mot de passe oublié ?</a>
                               </div>
                                <div class="col-md-10 offset-md-1 my-3">
                                    <span>Pas encore membre ? </span><a href="<?= base_url(); ?>inscription" class="link-mp text-center mb-3">Inscrivez vous</a>
                                </div>

							<?= form_close(); ?>

	
							<!-- Modal pour le mot de passe oublié -->
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

    <h3 class="text-comp text-center mt-5 p-2"><?= ucwords("Thag n'importe où");?></h3>
	<div class="box-complement my-5">
		<div class="row">
			<div class="col-md-10 offset-md-1">
                <div class="resp">
                    <p class="col-md-8 offset-md-2 text-center my-3 phrase">
                        Aenean ornare velit lacus varius enim ullamcorper proin aliquam
                        facilisis ante sed etiam magna interdum congue. Lorem ipsum dolor
                        amet nullam sed etiam veroeros.
                    </p>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex my-5">
                                <section class="col-4 col-12-medium">
                                    <a href="#" class="image image-main">
                                        <img src="<?= base_url();?>assets/images/responsive2.jpg" alt="">
                                    </a>
                                    <div class="content">
                                        <div class="inner">
                                            <header class="major my-3">
                                                <h3 class="text-center">Responsive Design</h3>
                                                <hr class="under-title">
                                            </header>
                                            <p> Nullam et orci eu lorem consequat tincidunt vivamus et sagittis magna sed nunc rhoncus condimentum sem.
                                                In efficitur ligula tate urna. Maecenas massa sed magna lacinia magna pellentesque lorem ipsum dolor.
                                                Nullam et orci eu lorem consequat tincidunt. Vivamus et sagittis tempus.
                                                <ul class="actions">
                                                    <div class="btn btn-outline-primary btn-rounded waves-effect fixed-action-btn smooth-scroll mt-3 mx-auto" style="bottom: 45px; right: 24px;">
                                                        <a href="generic.html" class="btn btn-floating btn-large red">
                                                            <ion-icon name="information-circle-outline"></ion-icon>learn more...
                                                        </a>
                                                    </div>

                                                </ul>
                                            </p>
                                        </div>
                                    </div>
                                </section>


                                <section class="col-4 col-12-medium">
                                    <a href="#" class="image-main">
                                        <img src="<?= base_url();?>assets/images/securite.jpg" alt="">
                                    </a>
                                    <div class="content">
                                        <div class="inner">
                                            <header class="major my-3">
                                                <h3 class="text-center">Sécurité</h3>
                                                <hr class="under-title">
                                            </header>
                                            <p>Nullam et orci eu lorem consequat tincidunt vivamus et sagittis magna sed nunc rhoncus condimentum sem.
                                                In efficitur ligula tate urna. Maecenas massa sed magna lacinia magna pellentesque lorem ipsum dolor.
                                                Nullam et orci eu lorem consequat tincidunt. Vivamus et sagittis tempus.
                                                <ul class="actions">
                                                    <div class="btn btn-outline-primary btn-rounded waves-effect fixed-action-btn smooth-scroll mt-3 mx-auto" style="bottom: 45px; right: 24px;">
                                                        <a href="generic.html" class="btn btn-floating btn-large red">
                                                            <ion-icon name="information-circle-outline"></ion-icon>learn more...
                                                        </a>
                                                    </div>
                                                </ul>
                                            </p>
                                        </div>
                                    </div>
                                </section>

                                <section class="col-4 col-12-medium mx-auto">
                                    <a href="#" class="image-main rounded-circle">
                                        <img src="<?= base_url();?>assets/images/expertise.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="content">
                                        <div class="inner">
                                            <header class="major my-3">
                                                <h3 class="text-center">Expertise</h3>
                                                <hr class="under-title">
                                            </header>
                                            <p>Nullam et orci eu lorem consequat tincidunt vivamus et sagittis magna sed nunc rhoncus condimentum sem.
                                                In efficitur ligula tate urna. Maecenas massa sed magna lacinia magna pellentesque lorem ipsum dolor.
                                                Nullam et orci eu lorem consequat tincidunt. Vivamus et sagittis tempus.
                                                <ul class="actions">
                                                    <div class="btn btn-outline-primary btn-rounded waves-effect fixed-action-btn smooth-scroll mt-3 mx-auto" style="bottom: 45px; right: 24px;">
                                                        <a href="generic.html" class="btn btn-floating btn-large red">
                                                            <ion-icon name="information-circle-outline"></ion-icon>learn more...
                                                        </a>
                                                    </div>
                                                </ul>
                                            </p>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <ul class="actions special">
                                <li>
                                    <a href="<?= base_url(); ?>inscription" class="button btn btn-outline-dark large">Testez immediatement</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

			</div>
		</div>
	</div>
    <footer id="footer" class="d-flex mb-4">
        <div class="inner">
            <section class="news">
                <h2 class="get-news">NewsLetter</h2>
                <form method="post" action="#" id="news-letter">
                    <div class="fields">
                        <div class="field half">
                            <input type="text" class="form-control mb-4" name="name" id="name" placeholder="Name">
                        </div>
                        <div class="field half">
                            <input type="email" class="form-control mb-4" name="email" id="email" placeholder="Email">
                        </div>
                        <div class="field">
                            <div class="textarea-wrapper">
                                <textarea name="message" class="form-control mb-4" id="message" placeholder="Message" rows="1" style="overflow: hidden; resize: none; height: 69px;"></textarea>
                            </div>
                        </div>
                    </div>
                    <ul class="actions">
                        <li><input type="submit" class="btn btn-block primary" value="Envoyer"></li>
                    </ul>
                </form>
            </section>

            <ul class="copyright text-center">
                <li>©Thag. All rights reserved</li>
                <li>Réalisé par <a href="https://github.com/Louzet/">Mickael Louzet</a></li>
                <li>Date <?= date('Y'); ?></a></li>
            </ul>
        </div>
    </footer>
</div>

