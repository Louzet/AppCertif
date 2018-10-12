<div id="profil">

    <div class="container" id="container">
        <div class="row">
            <div class="col-md-4 mb-5 mt-5"><!--left col-->
                <div class="text-center mt-1">
                    <section class="profil-header">
                        <div class="ProfileHeaderCard">
                            <h2 class="ProfileHeaderCard-name ProfileHeaderCard-nameLink u-textInheritColor js-nav"><?= $user_by_id->nom .' '. $user_by_id->prenom; ?></h2>

                            <p class="ProfileHeaderCard-bio u-dir" dir="ltr"><?= (isset($user_by_id->metier)) ? $user_by_id->metier : '' ;?></p>

                            <div class="ProfileHeaderCard-location ">
                                <span class="Icon Icon--geo Icon--medium" aria-hidden="true" role="presentation"></span>
                                <span class="ProfileHeaderCard-locationText u-dir" dir="ltr">
                                    <p data-place-id="405116431e8604c7"><?= (isset($user_by_id->pays)) ? $user_by_id->pays : '' ;?></p>

                                </span>
                            </div>

                            <div class="ProfileHeaderCard-url  u-hidden">
                                <span class="Icon Icon--url Icon--medium" aria-hidden="true" role="presentation"></span>
                                <span class="ProfileHeaderCard-urlText u-dir"></span>
                            </div>


                            <div class="ProfileHeaderCard-joinDate">
                                <span class="Icon Icon--calendar Icon--medium" aria-hidden="true" role="presentation"></span>
                                <span class="ProfileHeaderCard-joinDateText js-tooltip u-dir" dir="ltr" data-original-title="<?= $user_by_id->created_at;?>"><?= ($user_by_id->created_at) ? $user_by_id->created_at : '' ;?></span>
                            </div>

                            <div class="ProfileHeaderCard-birthdate ">
                                <span class="Icon Icon--balloon Icon--medium" aria-hidden="true" role="presentation"></span>
                                <span class="ProfileHeaderCard-birthdateText u-dir" dir="ltr">
                                    <span class="js-tooltip" title="Jour et mois : Les comptes auxquels vous êtes abonné qui vous suivent Année : Vous uniquement">Né le 1 avril 1991</span>
                                </span>
                            </div>


                    </section>
                    <section id="experience-section" class="pv-profile-section experience-section ember-view my-5"><!---->
                        <header class="pv-profile-section__card-header">
                            <h2 class="pv-profile-section__card-heading Sans-21px-black-85%">
                                Expériences
                            </h2>


                        </header>
            <!----></section>
                </div>
            </div><!--/col-3-->
            <div class="col-md-5"><p class="text-center">Main</p></div>
            <div class="col-md-3">

                <hr>
                    <!-- Rotating card -->
                <div class="card-wrapper">
                    <div id="card-1" class="card-rotating effect__click text-center h-100 w-100">

                        <!-- Front Side -->
                        <div class="face front">
                            <h6 class="blue-text lead"><?= ($user_by_id->metier != NULL) ? $user_by_id->metier : '' ; ?></h6>
                        <!-- Image
                        <div class="card-up">
                            <img  class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/photo7.jpg" alt="Image with a photo of clouds.">
                        </div> -->



                        <!-- Content -->
                        <div class="card-body">
                            
                            <!-- Triggering button -->
                            <!-- <a class="rotate-btn" data-card="card-1"><i class="fa fa-repeat"></i> Click here to rotate</a> -->
                        </div>
                        </div>
                        <!-- Front Side -->

                        <!-- Back Side -->
                        <div class="face back">
                        <div class="card-body">

                            <!-- Content -->
                            <h4 class="font-weight-bold">About me</h4>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime quae, dolores dicta. Blanditiis rem amet repellat, dolores nihil quae in mollitia asperiores ut rerum repellendus, voluptatum eum, officia laudantium quaerat?
                            </p>
                            <hr>
                            <!-- Social Icons -->

                            <p>Mes réseaux</p>
                            <hr>
                            <ul class="list-inline py-2">
                            <li class="list-inline-item"><a class="p-2 fa-lg fb-ic"><ion-icon name="logo-facebook"></ion-icon></a></li>
                            <li class="list-inline-item"><a class="p-2 fa-lg tw-ic"><ion-icon name="logo-twitter"></ion-icon></a></li>
                            <li class="list-inline-item"><a class="p-2 fa-lg gplus-ic"><ion-icon name="logo-googleplus"></ion-icon></a></li>
                            <li class="list-inline-item"><a class="p-2 fa-lg li-ic"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                            </ul>
                            <!-- Triggering button
                            <a class="rotate-btn" data-card="card-1"><i class="fa fa-undo"></i> Click here to rotate back</a> -->

                        </div>
                        </div>
                        <!-- Back Side -->

                    </div>
                </div>
                <!-- Rotating card -->
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