<div class="container">

	<h3 class="mt-3">La liste de mes amis </h3>

	<div class="row">
		<!-- <div class="col-md-8">
			<div class="my-3">
				<button id="btn_show_add_friend" class="btn btn-primary">Ajouter un ami</button>
			</div>
		</div> -->

		<div class="col-md-4">
			<form action="">
				<div class="form-group">
				
					<div class="form-group">
						<div class="input-group mb-2">
							<input type="text" class="form-control" name="pseudo" placeholder="Recherchez un ami" required id="search_pseudo">
						</div>
					</div>
					
				
				</div>
			</form>
			<div id="msg-error-search-amis"></div>
		</div>
		
	
	</div>
	<!-- Modal
	<div id="show_add_friends" class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Ajouter un nouvel ami</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?= form_open('ami/ajouter_amis', 'class="form-control" id="form_add_friends"'); ?>
						<div class="form-group">
						
							<label for="search_pseudo" class="label-control"><strong>Entrez un pseudo</strong></label>
							<input type="text" name="search_pseudo" class="form-control" id="search_pseudo" placeholder="Rechercher">
							
						</div>
					<?= form_close(); ?>
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div> -->

	<div class="row">
		<div class="col-md-10">
			<div>
				<table class="table table-bordered">
					<thead class="thead-dark">
						<tr>
							<th class="text-center" scope="col">pseudo</th>
							<th class="text-center" scope="col">lien profil ou message</th>
							<th class="text-center" scope="col">Envoyer un message</th>
							<th class="text-center" scope="col">action</th>
						</tr>
					</thead>
					<tbody id="show_amis">
						<div class="result_search_hide">
						
						</div>
					</tbody>
				</table>
			</div>
		</div>
		<div class="col-md-2 text-center">
			suggestions...
		</div>
	</div>

</div>

<script>
$(function(){
	
	show_liste_amis();

	function show_liste_amis()
	{
		$.ajax({
			type: 'ajax',
			url : '<?= base_url(); ?>amis/liste_amis',
			dataType: 'json',
			success: function(data){
				var html = '';
				var i;
				for(i=0; i<data.length; i++){
					html += '<tr>'+

								'<td class="text-center">'+data[i].pseudo+'</td>'+
								'<td class="text-center">'+'lien vers profil'+'</td>'+
								'<td class="text-center">'+'envoyer msg'+'</td>'+
								'<td class="text-center">'+
									'<button class="btn btn-warning">Bloquer</button>'+
									'<button class="btn btn-danger">Supprimer</button>'+
								'</td>'+

							'</tr>';
				}
				$("#show_amis").html(html);
			},
			error: function(){
				alert('error');
			}

		});
	}

	// $("#btn_show_add_friend").click(function(){
	// 	$("#show_add_friends").modal('show');
	// });

	// $( ".result_search_hide" ).hide();

	$("#search_pseudo").keyup(function(){

		var search = $(this).val();

		if( search.length != ''){

			load_data(search);
		}
		else{

			load_data();
		}
	});

	load_data();

	function load_data(query){

		var html = '';
		var error = '';

		$.ajax({
			url : '<?= base_url(); ?>amis/search_amis',
			method: "POST",
			data: {query:query},
			dataType: "json",
			success: function(data){
				var i;
				for(i = 0; i < data.length; i++){

					html += '<tr>'+

							'<td class="text-center">'+data[i].pseudo+'</td>'+
							'<td class="text-center">'+'lien vers profil'+'</td>'+
							'<td class="text-center">'+'envoyer msg'+'</td>'+
							'<td class="text-center">'+
								'<button class="btn btn-warning">Bloquer</button>'+
								'<button class="btn btn-danger">Supprimer</button>'+
							'</td>'+

						'</tr>';
				}

				$("#show_amis").html(html);
				$("#msg-error-search-amis").html('');


				// $(".result_search_hide").html(data);
			},
			error: function(){

				error = '<div>'+'<p class="text-center alert alert-danger">Aucun résultat trouvé...</p>'+'</div>';

				$("#msg-error-search-amis").html(error);
				$("#show_amis").html('');
			}

		});
	}
});
</script>
