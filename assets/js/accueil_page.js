$(document).ready(function(){


	/**
	 * Auto close des message flashdata
	 */
	window.setTimeout(function() {
		$(".alert").fadeTo(500, 0).slideUp(500, function(){
			$(this).remove(); 
		});
	}, 3000);



	var inputs = $( '#input_file' );

	Array.prototype.forEach.call( inputs, function( input )
	{
		var label	 = input.nextElementSibling,
			labelVal = label.innerHTML;

		input.addEventListener( 'change', function( e )
		{
			console.log()
			var fileName = '';
			if( this.files && this.files.length > 1 )
				fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( `{count}`, this.files.length );
			else
				fileName = e.target.value.split( '\\' ).pop();

			if( fileName )
			{
				label.querySelector( 'span' ).innerHTML = fileName;

				let img_name = $("#img_name").html();

				if( img_name.length > 0 )
				{
					$( '#ion-camera' ).css('color', '#fff');
					$( '#ion-camera' ).css('background-color', '#25a5c4');
					$( '#btn_create_post' ).css('color', '#fff');
					$( '#btn_create_post' ).css('background-color', '#007bff');
					$( '#btn_create_post' ).css('border-color', '#007bff');

				}

			}
			else{
				label.innerHTML = labelVal;
			}
		});
	});

	
	


	


});

