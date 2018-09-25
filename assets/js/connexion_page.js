$(document).ready(function(){

    /**
     *  Event sur le champ mot de passe, permettant de le voir, tant que l'on maintient le click de la souris
     */
    $("#eye-off").mousedown("click", function(){
        $("#login-password").attr("type", "text");



    });
    $("#eye-off").mouseup("click", function(){
        $("#login-password").attr("type", "password");

    });

    function mot_de_passe_perdu()
    {
        $.ajax({
            type: 'ajax',
            url : '<?= base_url(); ?>connexion/mot_de_passe_perdu',
            dataType: 'json',
            success: function(data) {
                console.log(data);
            },

            error: function(){
                alert('error');
            }

        });
    }




});
