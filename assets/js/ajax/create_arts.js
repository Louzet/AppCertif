$(document).ready(function(){



	$('#save_titre').on('click', function(e){
		e.preventDefault();
		save_titre_thread();
		
		function save_titre_thread(titre)
		{
			var titre = $('#defaultTitleEditor').val();
			var html;
			console.log(titre);
			
			$.ajax({
				url : 'http://localhost/AppCertif/arts/save_title',
				dataType: 'json',
				data: { 'titre' : titre},
				method: "POST",
				success: function(data) {
					console.log(data);
					html = 	'<span class="alert alert-success ml-3" role="alert">'+		
								'Votre titre a été enregistré</span>'+
							'</span>';

					$('.msg_titre').html(html);
					$('#save_titre').attr('disabled', true);
					$('#save_titre').css('cursor', 'not-allowed');
					

					$('#defaultTitleEditor').addClass('is-valid').removeClass('is-invalid');

					window.setTimeout(function() {
						$("span.alert").fadeTo(200, 0).slideUp(200, function(){
							$(this).remove(); 
						});
					}, 3000);

				},
	
				error: function(){
					console.log("error")
				}
	
			});
		}

	})
	

	load_save_titre_thread();

	function load_save_titre_thread()
	{
		$.ajax({
			type: 'ajax',
			url : 'http://localhost/AppCertif/arts/load_title_saved',
			dataType: 'json',
			success: function(data) {

				var titleEditor = $('#defaultTitleEditor');

				/**
				 * Pn insère directement le titre dans la value du champ title
				 */

				titleEditor = $('#defaultTitleEditor').attr('value', data);

				titleEditor.css('cursor', 'not-allowed');
				titleEditor.attr('readonly', true);
				titleEditor.addClass('is-valid').removeClass('is-invalid');

				$('#save_titre').attr('disabled', true);
				$('#save_titre').css('cursor', 'not-allowed');
				
				
			},
			error: function(){
				console.log("error")
			}

		});
	}

	$('#change_titre').on('click', function(e){
		e.preventDefault();
	
		$.ajax({
			type: 'ajax',
			url : 'http://localhost/AppCertif/arts/load_title_saved',
			dataType: 'json',
			success: function(data) {

				var titleEditor = $('#defaultTitleEditor');

				/**
				 * Pn insère directement le titre dans la value du champ title
				 */

				titleEditor = $('#defaultTitleEditor').attr('value', data);

				titleEditor.css('cursor', 'text');
				titleEditor.attr('readonly', false);
				titleEditor.addClass('is-invalid').removeClass('is-valid');

				$('#save_titre').attr('disabled', false);
				$('#save_titre').css('cursor', 'pointer');
				
			},
			error: function(){
				console.log("error")
			}

		});
	
	});


});
