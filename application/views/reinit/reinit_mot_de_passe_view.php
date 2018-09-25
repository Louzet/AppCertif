<?php
/**
 * Created by PhpStorm.
 * User: Nix
 * Date: 18/09/2018
 * Time: 15:22
 */

//  var_dump($toto);
?>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">

		<a class="navbar-brand text-center underline" href="<?= site_url(); ?>" style="font-size: 3rem; letter-spacing: 4px; color: #fff; text-shadow: 4px 4px 2px rgba(150, 150, 150, 1); "><?= WEBSITE_NAME ; ?></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

	</nav>

<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3 mt-2">
			<h2 class="mt-3">Changez votre mot de passe</h2>
			<?= form_open('', 'class="mt-4" id="form_change_password"'); ?>
			<div class="form-group">
				<div class="col-lg-10">
					<label for="inputEmail" class="control-label">Email</label>
					<input type="text" class="form-control" id="inputEmail" value="<?= $toto ;?>" name="">
				</div>
			</div>
			<div class="form-group">
				<div class="col-lg-10">
					<label for="inputPassword" class="control-label">Nouveau mot de passe</label>
					<input type="password" class="form-control" id="inputPassword" name="pass">
				</div>
			</div>
			<div class="form-group">
				<div class="col-lg-10">
					<label for="inputPassword" class="control-label">Confirmation nouveau mot de passe</label>
					<input type="password" class="form-control" id="inputPasswordconfirm" name="confirm_pass">
				</div>
			</div>
			<div class="form-group">
				<div class="col-lg-10 col-lg-offset-2">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
			<? form_close(); ?>

		</div>
	</div>
</div>

<script>

	$("#form_change_password").submit(function(event){

		// event.preventDefault();
		
	});

	validate_form();

	function validate_form(data){

		$.ajax({
			type: 'post',
			url : '<?= base_url(); ?>connexion/change_password',
			dataType: 'json',
			succes: function(data){
				console.log(data);
			},
			error: function(){
				console.log("error");
			}
		});
	}
</script>
