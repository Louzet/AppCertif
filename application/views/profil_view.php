<h2 class="text-center py-2">Profil de  <?= $user_by_id->pseudo; ?> </h2>

<hr>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-lg-3 mb-5"><!--left col-->
            <div class="text-center">
                <h4 class="lead"><?= ucfirst($this->session->userdata('pseudo')); ?></h4>
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
        <div class="offset-md-1 col-md-7 offset-lg-1 col-lg-8">
		<?php echo form_open_multipart('user/profil_update'); ?>
            <div class="form-row">
                <div class="col">
                    <label for="nom"><h4>Nom</h4> </label>
                    <input type="text" class="form-control" disabled placeholder="Nom" name="nom" id="nom" value="<?php if(isset($user_by_id->nom)){echo $user_by_id->nom;} ?>">
                </div>
                <div class="col">
                    <label for="nom"><h4>Prénom</h4></label>
                    <input type="text" class="form-control" disabled placeholder="Prénom" name="prenom" id="prenom" value="<?php if(isset($user_by_id->prenom)){echo $user_by_id->prenom;} ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-12">
                    <label for="email"><h4>Email</h4></label>
                    <input type="email" class="form-control" disabled name="email" id="email" placeholder="your@email.com" title="enter your email." value="<?php if(isset($user_by_id->email)){echo strtolower($user_by_id->email);} ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-12">
                    <label for="email"><h4>Ville</h4></label>
                    <input type="email" class="form-control" disabled id="location" placeholder="Entrer votre ville" title="entrez une ville">
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-12">
                    <label for="password"><h4>France</h4></label>
                    <input type="password" class="form-control" disabled name="pays" id="pays" placeholder="Entrez votre pays" title="entrez votre pays.">
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-12">
                    <br>
                    <button class="btn btn-md btn-success offset-lg-2 col-lg-6 col-md-12 col-sm-12" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                    <button class="btn btn-md btn-danger col-lg-2 col-md-12 col-sm-6 my-2" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                </div>
            </div>
		</form>
	</div>
	<hr>
	</div>
</div>
