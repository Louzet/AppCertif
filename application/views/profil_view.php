<div id="profil">
    <div class="container" id="container">
        <div class="row">
            <div class="col-md-3 mb-5 mt-5"><!--left col-->
                <div class="text-center mt-1"></div>
                    
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
            <div class="col-md-6"><p class="text-center">Main</p></div>  
            <div class="col-md-3">
                
                <hr>
                    <!-- Rotating card -->
                <div class="card-wrapper">
                    <div id="card-1" class="card-rotating effect__click text-center h-100 w-100">

                        <!-- Front Side -->
                        <div class="face front">

                        <!-- Image
                        <div class="card-up">
                            <img  class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/photo7.jpg" alt="Image with a photo of clouds.">
                        </div> -->

                        <!-- nom et profession -->
                        <h4 class="font-weight-bold mb-3"><h4><?= ucfirst($user_by_id->pseudo); ?></h4></h4>
                        <h6 class="blue-text lead">Web developer</h6>

                        <!-- Avatar -->
                        <div class="avatar mx-auto white rounded-circle">
                            <img src="<?= base_url(); ?>assets/images/profil_pictures/<?php if(!empty($user[0]['profil_image'])){ echo $user_by_id->profil_image; } else{ echo "noimage.png";} ?>" class="avatar img-circle img-thumbnail" alt="avatar" style="cursor:pointer;width:512px;height:256px;">

                            <?php echo form_open_multipart('users/profil_image'); ?>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input file-upload center-block" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="userfile">
                                        </div><hr><br>
                                        <label class="custom-file-label text-center" for="inputGroupFile01" style="text-align: left !important;">Choose file</label>
                                    </div>
                                    <button class="btn btn-md btn-success col-sm-4 offset-sm-4 col-md-8 offset-md-2 col-lg-6 offset-lg-3" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                </div>
                            <?php form_close(); ?>
                           
                        </div>

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
                            <ul class="list-inline py-2">
                            <li class="list-inline-item"><a class="p-2 fa-lg fb-ic"><i class="fab fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a class="p-2 fa-lg tw-ic"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a class="p-2 fa-lg gplus-ic"><i class="fa fa-google-plus"></i></a></li>
                            <li class="list-inline-item"><a class="p-2 fa-lg li-ic"><i class="fa fa-linkedin"></i></a></li>
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