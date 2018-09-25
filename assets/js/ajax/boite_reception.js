$(document).ready(function(){
	'use strict';

	/**
	 * Chargement de la liste d'amis dans la boite de reception message
	 */
	load_dest();
	function load_dest(query)
	{
		var dest = $("#data_destinataire");
		var block_dest = $(".li_dest");
		var base_url = "<?= base_url('profil'); ?>";
		
		$.ajax({
			type: 'get',
			url : 'http://localhost/AppCertif/Newsfeed_messages/get_users',
			data: {query:query},
			dataType: 'json',
			success: function(data){
				var html01 = '';
				var i;
				for(i = 0; i < data.length; i++){

					html01 += '<li class="list-group-item mb-1 li_dest">'+
									'<a href="#">'+
										'<div class="media">'+
											'<div class="media-left">'+
												'<img src="http://localhost/AppCertif/assets/images/profil_pictures/' + data[i].profil_image + '" width="50" class="media-object">'+
											'</div>'+
											'<div class="media-body">'+
												'<span class="user">' + data[i].pseudo + '</span>'+
											'</div>'+
										'</div>'+
									'</a>'+
								'</li>';
				}

				var ul = $("ul.list-group");
		
				ul.append(html01);

				console.log(data);
			},
			error: function(){
				console.log('error');
			}
		});

	}

		/**
		 * affichage des infos de chaque utilisateur dans la barre de droite, si on clique sur son block
		 */
		click_load_data();
		function click_load_data()
		{
			var lists = $("li.list-group-item");
			$(lists ).on('click', function(e){
				e.preventDefault();
				console.log('test');
			});
			console.log(lists);

		}
	
	


});
