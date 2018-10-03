$(document).ready(function(){

    /**
     * button create art
     */
    $('#btn_create_arts').on('click', function(e){
		titleEditor = $('#defaultTitleEditor').val();
	});

    /**
     * btn save art created
     */
	$('.btn-save-art').on('click', function(e){

	    var titre = $('#c-titre').val();
	    var contenu = $('#editor').val();

	    console.log('titre : '+titre, 'et le contenu :'+contenu);

        $.ajax({
            type:'post',
            url: 'http://localhost/AppCertif/arts/create_art_action',
            dataType: 'json',
            data:{'titre':titre, 'contenu':contenu},
            success:function(data){
                console.log(data);

            },

            error:function(){
                console.log('error');
            }

        });
    });


    /**
     *  show modal when user wanna delete one art
     */
    $('.btn_delete_art').on('click', function(){
    	var id = $(this).attr('id');
    	var titre = $(this).attr('value');


    	$('#centralModalSuccess').data('id', id).modal('show');

    	$('.modal-body .insert-title').html(titre);

        /**
         * Confirm delete action
         */
        $('#btn_t_supprimer').on('click', function(){
            var id = $('#centralModalSuccess').data('id');

            $.post({
                methode:'get',
                url: 'http://localhost/AppCertif/arts/delete_art',
                dataType: 'json',
                data:$('#form-create-arts').serialize(),
                success:function(data){
                    console.log(data);

                    $('#box_livres_'+id).fadeIn(1000).delay(100).fadeOut(1000);

                },

                error:function(){
                    console.log('error');
                }

            });

        });
    });



	$('#save_titre').on('click', function(e){
		e.preventDefault();
		save_titre_thread();
	 	var titre = $('#defaultTitleEditor').val();
	 	titre = '';
	 	var html;
	 	function save_titre_thread(titre)
	 	{
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

	 });
	

	load_save_titre_thread();

	 function load_save_titre_thread()
	 {
	 	titleEditor = $('#defaultTitleEditor').attr('value', '');

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
