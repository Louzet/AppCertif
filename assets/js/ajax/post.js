$(document).ready(function(){

    modification_post();

    function modification_post()
    {
        $(document).on('click', 'a#modif_post', function(ev){
            ev.preventDefault();

            var self = $(this);

            var p = $('#modif_champ', this).text();

            console.log(p);

        });
    }

});
	
	
