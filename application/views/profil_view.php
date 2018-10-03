<div id="profil">

    <div class="container" id="container">
        <div class="row">
            <div class="col-md-4 mb-5 mt-5"><!--left col-->
                <div class="text-center mt-1"></div>



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