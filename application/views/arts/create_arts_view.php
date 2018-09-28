<div class="container mt-4">
	<div class="row">
		<div class="col-md-3">
			<h4 class="text-center mt-5">Menu</h4>
			<div class="table table-bordered">
				<ul class="list-group list-group-flush">
					<li class="list-group-item"><a href="<?= base_url();?>arts" style="display:block;">Accueil</a></li>
					<li class="list-group-item"><a href="#" style="display:block;">Gérer les status</a></li>
					<li class="list-group-item"><a href="#" style="display:block;"></a></li>
					<li class="list-group-item"><a href="#" style="display:block;"></a></li>
					<li class="list-group-item"><a href="#" style="display:block;"></a></li>
				</ul>
			</div>
		</div>

		<div class="col-md-9">
			<div class="ckeditor_thag">
				<h4>Donnez un titre à votre art</h4>
				<?= form_open('arts/create', 'data-parsley-validate id="form-create-arts"', ""); ?>
					<span>
						<?= form_open('arts/save_title', 'data-parsley-validate', ""); ?>
							<div class="form-row">
								<div class="col-md-6">
									<!-- Titre -->
									<input type="text" name="titre" value="" id="defaultTitleEditor" class="form-control mb-2 is-invalid" placeholder="Titre de votre nouveau thread" required autofocus data-parsley-minlength="1" data-parsley-trigger="change">
								</div>
								<div class="col-md-6">
									<span class="msg_titre"></span>
								</div>	
							</div>
							<div class="col-md-12 mb-4" style="padding:0;">

								<!-- sauvegarde title action -->
								<button type="submit" id="save_titre" class="btn btn-success my-1 mx auto" style="display:inline;">Valider</button>

								<!-- Modifier title action -->
								<button type="submit" id="change_titre" class="btn btn-default my-1 mx auto" style="display:inline;">Modifier</button>

							</div>
						<?= form_close(); ?>
					</span>

					<div id="toolbar-container"></div>
					<!-- This container will become the editable. -->
					<div id="editor">
						<p>Effacez cette ligne, et Commencez à créer un thread, un roman, etc...</p>
					</div>
					<div class="btns my-3">
						<!-- edit action -->
						<button type="submit" class="btn btn-default">Editer</button>
						<!-- save action -->
						<button type="submit" class="btn btn-success">Enregistrer</button>
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
	let editor;
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

