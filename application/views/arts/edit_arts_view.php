<div class="container mt-4">
<!-- go Back action -->
<button onclick="javascript:history.go(-1);" class="btn btn-primary my-1 mx auto" style="display:inline;"><ion-icon name="arrow-back"></ion-icon>  Back</button>
	<div class="row">
		<div class="col-md-3">
			<h4 class="text-center mt-5" style="text-decoration:underline;">Description</h4>
			<!-- description -->
			<?php foreach($edit_arts as $arts) : ?><!-- foreach -->
			<div class="table">
				<ul class="nav md-pills pills-info text-center">
					<li class="nav-item"><strong>Auteur : </strong><?= ucfirst(str_replace('_', ' ', $arts->titre)); ?></li><br>
					<li class="nav-item"><strong>Titre : </strong><?= $arts->auteur; ?></li><br>
					<li class="nav-item"><strong>Crée le : </strong><?= date('d F Y', strtotime($arts->date_creation)); ?></li>
				</ul>
			</div>

			<div class="table">
				<h4 class="text-center mt-5" style="text-decoration:underline;">Paramètres</h4>
				<div class="form-group">
					<label for="exampleFormControlSelect1">Visibilité</label>
					<select class="form-control browser-default">
						<option value="1"><?= $arts->visibilite; ?></option>
						<option value="1"><?= ($arts->visibilite === 'public') ? 'prive' : 'public'; ?></option>
					</select>
				</div>
				<div class="form-group">
					<label for="exampleFormControlSelect1">Status</label>
					<select class="form-control browser-default">
						<option value="1"><?= str_replace('_', ' ',$arts->status); ?></option>
						<option value="1"><?= ($arts->status === 'en_cours') ? 'acheve' : 'en_cours'; ?></option>
					</select>
				</div>
			</div>
			<?php endforeach; ?>
		</div>



		<div class="col-md-9">
			<div class="ckeditor_thag">
				<h4>Donnez un titre à votre art</h4>
				<?= form_open('arts/create', 'data-parsley-validate id="form-create-arts"', ""); ?>
					<span class="">
					<?php foreach($edit_arts as $arts) : ?><!-- foreach -->
						<?= form_open('arts/save_title', 'data-parsley-validate', ""); ?>
							<div class="form-row">
								<div class="col-md-6 mb-3">
									<!-- Titre -->
									<input type="text" name="titre" value="<?= ucfirst(str_replace('_', ' ',$arts->titre)); ?>" id="defaultTitleEditor" class="form-control mb-2 is-invalid" placeholder="Titre de votre nouveau thread" required autofocus data-parsley-minlength="1" data-parsley-trigger="change">
								</div>
								<div class="col-md-6">
									<span class="msg_titre"></span>
								</div>	
							</div>
						<?= form_close(); ?>
					</span>

					<div id="toolbar-container"></div>
					<!-- This container will become the editable. -->
					<div id="editor">
						<p><?= ($arts->contenu) ? $arts->contenu : '' ; ?></p>
					</div>
					<?php endforeach; ?><!-- endforeach -->
					<div class="btns my-3">
						<!-- save action -->
						<button type="submit" class="btn btn-success btn_save_art_e">Enregistrer</button>
						<!-- edit action -->
						<button type="submit" class="btn btn-default btn_edit_art_e">Editer</button>
					</div>
				<?= form_open(); ?>
			</div>
		</div>
	</div>
</div>

<style>
	.ck.ck-editor__editable_inline {
    	border: 1px solid #c4c4c4;
		min-height:300px;
	}
</style>
<!-- Initialize the editor. -->
<script>
	var editor;
	DecoupledEditor
    .create( document.querySelector( '#editor' ))
	.then( editor => {
        const toolbarContainer = document.querySelector( '#toolbar-container' );

        toolbarContainer.appendChild( editor.ui.view.toolbar.element );
    } )
    .catch( error => {
        console.error( error );
    } );
</script>

