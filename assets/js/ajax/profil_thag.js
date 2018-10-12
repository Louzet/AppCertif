$(document).ready(function(){
    /**
     * changer la photo de profil en ajax et afficher un msg de confirmation de cette action
     */
    /*$('.btn-change-picture').on('click', function(e){
        e.preventDefault();
        console.log(this);

        var image = $('#inputGroupFile01').val();
        console.log(image);

        $.ajax({
            url:'http://localhost/AppCertif/parametres/do_upload',
            type:'post',
            dataType:'json',
            success:function(data){
                console.log(data);
            },
            error:function(){
                console.log('erreur');
            }
        });
    })*/

    /**
     * init function
     */
    update_profil();
    function update_profil()
    {
        var nom = $('#nom').val();
        var prenom = $('#prenom').val();
        var pseudo = $('#pseudo').val();
        var email = $('#email').val();
        var metier = $('#metier').val();
        /**
         * event listener
         */
        $('#btn-update-profil').on('click', function(e){

            e.preventDefault();

            $.ajax({
                url: 'http://localhost/AppCertif/parametres/update_profil_config',
                type: 'POST',
                data:{'nom':nom, 'prenom':prenom, 'pseudo':pseudo, 'email':email, 'metier':metier},
                dataType:'json',
                success:function(data){
                    console.log('profil mis à jour');
                },
                error:function(){
                    console.log('erreur :( ');
                }
            });
        });
    }

   
});