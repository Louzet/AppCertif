<div class="container">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="home-tab" data-toggle="tab" href="#preferences" role="tab" aria-controls="home" aria-selected="true">Préférences</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">

        <!-- page parametres profil -->

<!--        --><?php //var_dump($user_by_id); ?>

        <div class="tab-pane fade active show" id="profile" role="tabpanel" aria-labelledby="profile-tab">

            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-8 offset-md-2">
                        <!-- nom et profession -->
                        <h4 class="font-weight-bold mb-3"><h4><?= ucfirst($user_by_id->pseudo); ?></h4></h4><br>


                        <!-- Avatar -->
                        <div class="avatar mx-auto white rounded-circle">
                            <img src="<?= base_url(); ?>assets/images/profil_pictures/<?= ($user_by_id->profil_image) ? $user_by_id->profil_image : "noimage.png"; ?>" class="avatar img-circle img-thumbnail" alt="avatar" style="cursor:pointer;width:512px;height:256px;">

                            <?php if($this->session->userdata('user_id') == $_GET['id']): ?>

                            <?= form_open_multipart('parametres/do_upload?id='.$user_by_id->id); ?>

                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input file-upload center-block" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="userfile">
                                    </div><hr><br>
                                    <label class="custom-file-label text-center" for="inputGroupFile01" style="text-align: left !important;">Choose file</label>
                                </div>

                                <button class="btn btn-md btn-success btn-change-picture col-sm-4 offset-sm-4 col-md-8 offset-md-2 col-lg-6 offset-lg-3" type="submit"><ion-icon name="cloud-done"></ion-icon> Enregistrer</button>

                            <?php form_close(); ?>



                            <?php endif; ?>
                        </div>


                    </div>



                </div>
                <div class="col-md-6">
                    <!-- Default form register -->
                    <?= form_open('parametres/update_profil', 'data-parsley-validate class="border border-light"', ""); ?>

                    <p class="h4 mb-4 text-center mt-3">Changez vos informations</p>

                    <div class="col-md-10 offset-md-1">
                        <!-- Noms -->
                        <div class="form-group mb-3">
                            <label for="FirstName"><strong>Nom</strong></label>
                            <input name="nom" type="text" value="<?= $user_by_id->nom; ?>" id="nom" class="form-control" placeholder="Noms">
                        </div>

                        <!-- Prénoms -->
                        <div class="form-group mb-3">
                            <label for="LastName"><strong>Prénom</strong></label>
                            <input name="prenom" type="text" value="<?= $user_by_id->prenom; ?>" id="prenom" class="form-control" placeholder="Prénoms">
                        </div>

                        <!-- Pseudo -->
                        <div class="form-group mb-3">
                            <label for="Pseudo"><strong>Pseudo</strong></label>
                            <input name="pseudo" type="text" value="<?= $user_by_id->pseudo; ?>" id="pseudo" class="form-control" placeholder="Pseudo">
                        </div>

                        <!-- E-mail -->
                        <div class="form-group mb-3>
                            <label for="Email"><strong>Email</strong></label>
                            <input name="email" type="text" value="<?= $user_by_id->email; ?>" id="email" class="form-control" placeholder="Email">
                        </div>

                        <!-- Metier -->
                        <div class="form-group mb-3">
                            <label for="Metier"><strong>Metier</strong></label>
                            <input name="metier" type="text" value="<?= $user_by_id->metier; ?>" id="metier" class="form-control" placeholder="Metier">
                        </div>

                    <!-- biographie -->
                        <div class="form-group md-form">
                            <label for="biographie-input"><strong>Biographie</strong></label>
                            <textarea name="bio" id="biographie-input" class="md-textarea form-control" rows="5" placeholder="Entrez votre Biographie..."></textarea>
                        </div>
                        <!-- Save data button -->
                        <button class="btn btn-success my-3 btn-block" type="submit" id="btn-update-profil"><ion-icon name="cloud-done"></ion-icon> Enregistrer</button>
                    </div>
                    <?= form_close(); ?>

                </div>
            </div>

        </div>

        <div class="tab-pane fade" id="preferences" role="tabpanel" aria-labelledby="home-tab"></div>

        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"></div>

    </div>
</div>