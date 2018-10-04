<div class="container mt-4">

<!-- go Back action -->
<button onclick="javascript:history.go(-1);" class="btn btn-primary my-1 mx auto" style="display:inline;"><ion-icon name="arrow-back"></ion-icon>  Back</button>
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
            <div id="message"></div>
			<div class="ckeditor_thag">

                     <?= form_open('arts/create_art_action', 'data-parsley-validate id="form_create_arts"', ""); ?>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <h5>Titre :</h5>
                                    <!-- Titre -->
                                    <input type="text" name="c-titre" id="c-titre" class="form-control mb-2" placeholder="Titre de votre nouveau thread" required autofocus data-parsley-minlength="1" data-parsley-maxlength="6000" data-parsley-trigger="change">
                                </div>
                                <div class="col-md-6">
                                    <span class="msg_titre"></span>
                                </div>
                            </div>

                            <div id="toolbar-container"></div>
                            <!-- This container will become the editable. -->
                            <textarea id="editor" name="editor" class="form-control" required autofocus data-parsley-minlength="1" data-parsley-maxlength="6000" data-parsley-trigger="change">
                                <p>Effacez cette ligne, et Commencez à créer un thread, un roman, etc...</p>
                            </textarea>
                            <div class="btns my-3">
                                <!-- save action -->
                                <button type="submit" class="btn btn-success btn-save-art">Enregistrer</button>
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

