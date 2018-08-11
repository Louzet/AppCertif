<div class="top-content my-5">
	<div class="container">
		<div>
			
			<div class="row login-form mb-2">
				<div class="col-md-8 offset-md-2">
					<div class="description">
						<h2 class="text-center">THIG</h2>
					</div>
				</div>
				<div class="col-md-10 offset-md-1 col-lg-6 offset-lg-3 mb-5 my-2">
					<p class="lead text-center">CONNECTEZ VOUS</p>
					<?php echo form_open('users/login');?>
						<div class="form-group">
							<label for="login-pseudo"><strong>Nom d'utilisateur (Pseudo)</strong></label>
							<input type="text" name="pseudo" placeholder="Nom d'utilisateur..." class="form-control" id="login-pseudo">
								<?= form_error('pseudo'); ?>
						</div>
						<div class="form-group">
							<label for="login-password"><strong>Mot de passe</strong></label>
							<input type="password" name="password" placeholder="Mot de passe..." class="form-control" id="login-password">
								<?= form_error('password'); ?>
						</div>
						<button type="submit" class="btn btn-success btn-block">Thag me !</button>
					<?php echo form_close(); ?>
					
				</div>	
			</div>
			<div class="row">
				<div class="col-md-12">
					<p class="text-center">
						<a href="<?= base_url(); ?>users/register">Vous n'avez Toujours pas de compte ? </p>	
					</p>

				</div>
			</div>	
		</div>		
	</div>
</div>
