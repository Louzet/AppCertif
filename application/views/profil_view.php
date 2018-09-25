<div id="profil">
    <div class="container" id="container">
        <div class="row">

            <div class="col-md-5 col-lg-3 mb-5 mt-5"><!--left col-->
                <div class="text-center mt-1">
                    <h4 class="lead"><?= ucfirst($user_by_id->pseudo); ?></h4>
                    <img src="<?= base_url(); ?>assets/images/profil_pictures/<?php if(!empty($user[0]['profil_image'])){ echo $user_by_id->profil_image; } else{ echo "noimage.png";} ?>" class="avatar img-circle img-thumbnail" alt="avatar" width="128" height="64">
                    <h6>Change ta photo de profil </h6>
                    <?php echo form_open_multipart('users/profil_image'); ?>
                    <input type="file" class="text-center center-block file-upload" name="userfile">
                </div><hr><br>
                <button class="btn btn-md btn-success col-sm-4 offset-sm-4 col-md-8 offset-md-2 col-lg-6 offset-lg-3" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                <?php form_close(); ?>
                <ul class="list-group mt-3">
                    <li class="list-group-item text-muted text-center">Profession<i class="fa fa-dashboard fa-1x"></i></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Partages</strong></span> 125</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>
                </ul>
                <div class="panel panel-default my-3">
                    <div class="panel-heading text-center my-3">Réseaux Sociaux</div>
                    <div class="panel-body text-center">
                        <i class="fab fa-facebook fa-2x"></i>
                        <i class="fab fa-github fa-2x"></i>
                        <i class="fab fa-twitter fa-2x"></i>
                        <i class="fab fa-pinterest fa-2x"></i>
                        <i class="fab fa-google-plus fa-2x"></i>
                        <i class="fab fa-snapchat fa-2x"></i>
                    </div>
                </div>
            </div><!--/col-3-->
            <div class="col-md-7 col-lg-9">
                <h2 class="text-center py-2 mt-2">Profil de  <?= $user_by_id->pseudo; ?> </h2>
                <hr>

            </div>
            <hr>
        </div>
    </div>
</div>











<script>
    $(function(){

        $("#btn_update_profil").click(function(e){

            e.preventDefault();


            $("input[type='text'], input[type='email']").removeAttr("disabled");



        });

    });

</script>