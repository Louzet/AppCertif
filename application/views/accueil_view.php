<?php
// var_dump($this->session->userdata());

?>

<button class="scroll">
	<a href="#">
		<i class="fas fa-chevron-circle-up"></i>
	</a>
</button>
<div class="container">
	<div id="page" class="mt-4">
		<div class="row">
			<div class="col-lg-3 text-center block" id="divers">
				<!-- cadre de profil -->
				<div class="profile-card">
					<img src="<?= base_url(); ?>assets/images/profil_pictures/<?= ($user_by_id->profil_image) ? $user_by_id->profil_image : "noimage.png"; ?>" alt="user" class="profile-photo">
					<h5><a href="<?=site_url(); ?>profil?<?= $user[0]['id']; ?>" class="text-white"> <?= $user_by_id->pseudo; ?></a></h5>
					<a href="#" class="text-white"><ion-icon name="person-add"></ion-icon> 1,299 000 followers</a>
				</div>
				<!-- aside menu -->
				<ul class="nav-aside">
				  <li><ion-icon name="home" id="ion-home"></ion-icon><a href="newsfeed.html">Mes actus</a></li>
				  <li><ion-icon name="contact" id="ion-profil"></ion-icon><a href="<?= site_url(); ?>profil?id=<?= $this->session->userdata['user_id']; ?>">Profil </a></li>
				  <li><ion-icon name="contacts" id="ion-amis"></ion-icon><a href="<?= site_url("amis"); ?>">Amis</a></li>
				  <li><ion-icon name="chatboxes" id="ion-message"></ion-icon><a href="<?= base_url('newsfeed_messages'); ?>">Messages</a></li>
				  <li><ion-icon name="book" id="ion-images"></ion-icon><a href="<?= base_url(); ?>arts?id=<?= $user_by_id->id; ?>">Arts</a></li>
				  
				</ul>
			</div>

			<div class="col-lg-6 text-center block" id="main-content">

			<!-- formulaire création de posts -->
			<div class="post-content mb-3">

				<?= form_open_multipart('posts/create_posts'); ?>
					<div class="form-group">
						
						<textarea class="form-control field-text-large myform" type="text" name="contenu_posts" placeholder="Thag une publication"  data-emoji-placeholder=":grimacing:"></textarea>
						<?= form_error("post-create", "<div class='text-danger errors'>", "</div>") ?>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-8">
								<input id="input_file" type="file" class="form-control file-upload input-file img_posts_style col-md-7" name="userfile" data-multiple-caption="{count} files selected" multiple>
								<label for="input_file" class="label_file pull-left"><ion-icon name="camera" id="ion-camera"></ion-icon><span id="img_name"></span></label>

							</div>
							<div class="col-md-4">
								<button type="submit" class="pull-right btn btn-outline-primary col-md-12" id="btn_create_post">Envoyer</button>
							</div>
						</div>
					</div>
				<?= form_close(); ?>


			</div>
			<!-- Listing des posts personnels && posts de nos amis -->
			<!-- on boucle sur les posts -->
			<?php foreach($posts as $post): ?>
			
				<div class="post-content mb-5">
					<div class="user-info">
						<div class="row">
							<div class="col-md-12">
								<span class="text-left float-left">
									<div class="profile-photo-md"style="display:inline;">
										<img src="<?= site_url('/assets/images/profil_pictures/'.$user_by_id->profil_image); ?>" alt="user" class="" width="40"height="40"  style="width:100%;">
									</div>
									<span><a href="timeline.html" class="profile-link"><?=$post['pseudo_users']; ?></a><span class="following my-1 mx-3 text-center"><a href="<?= base_url(); ?>amis/ajouter_amis" id="add_friends">following</a></span></span>
								</span>
								<!-- Split dropleft button -->
								<div class="float-right dropleft">
									
									<a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><ion-icon name="menu" id="ion-ellipsis"></ion-icon></a>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										<a class="dropdown-item" href="#"><ion-icon name="save"></ion-icon> Enregistrer</a>
										<a class="dropdown-item" href="#"><ion-icon name="close-circle"></ion-icon> Masquer</a>
										<a class="dropdown-item" href="#"><ion-icon name="flag"></ion-icon> Signaler !</a>
									</div>
									
								</div>
							</div>
						</div>
					</div>

					<?php  if(($post['img_posts'] !== '') && ($post['img_posts'] !== NULL) && ($post['img_posts'] !== '0' )) : ?>
						<div class="sb">
                            <a href="<?= site_url('assets/images/posts_images/'.$post['img_posts']);?>" class="popup-link">
                                <img src="<?= site_url('assets/images/posts_images/'.$post['img_posts']);?>" alt="post-image" class="img-fluid post-image mt-3" name="userfile" style="width:1343px;height: 755.023px;margin-top: 0px;margin-bottom: 0px;">
                            </a>

						</div>

					<?php endif; ?>

					<div class="row">
						<div class="col-sm-12">
							<div class="container meta-post">
								
								<span class="text-muted my-auto d-flex justify-content-around">
									<!-- la fonction time_ago() vient du helper "conv_date_helper"  -->
									<span class="published mt-3 mr-5"><ion-icon name="time" id="ion-time"></ion-icon><?= time_ago($post['published_at']) ;?></span>
									<span class="reaction mt-1 ml-5">
										<a class="btn text-green"><ion-icon name="thumbs-up" id="thumbs-up"></ion-icon></textarea><?= $post['like_posts']; ?></a>
										<a class="btn text-red"><ion-icon name="thumbs-down" id="thumbs-down"></ion-icon></i> <?= $post['dislike_posts']; ?></a>
									</span>

								</span>

							</div>
						</div>
					</div>

					<div class="post-container">
						<div class="post-detail">
							<div class="container">
								<div class="line-divider"></div>
									<div class="post-text mt-3">

										<p><?= $post['contenu'] ;?><i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i>
										</p>

									</div>
								<div class="line-divider"></div>
							</div>
							
							<div class="post-comment">
								<div class="container">
									<textarea id="emojionearea5" class="form-control"></textarea>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- endforeach -->
				<?php endforeach; ?>

			</div>
			
			
			
			
			<div class="col-lg-3 text-center block" id="photos-friends">
				<div class="row">
					<div class="col-md-12">
						<div><h4 class="text-center my-1 titleh4">Amis en ligne</h4></div>

						<div class="list-friends mt-3">
							<ul class=" mt-2">
								<li class="d-flex justify-content-start my-2">
									<ion-icon name="radio-button-on" class="icon-connect mb-2 mr-3"></ion-icon> 
									<a href="#" class="ml-5">Jim</a>
								</li>
								<li class="d-flex justify-content-start my-2">
									<ion-icon name="radio-button-on" class="icon-connect mb-2 mr-3"></ion-icon> 
									<a href="#" class="ml-5">Karim</a>
								</li>
								<li class="d-flex justify-content-start my-2">
									<ion-icon name="radio-button-on" class="icon-connect mb-2 mr-3"></ion-icon> 
									<a href="#" class="ml-5">Livia</a>
								</li>
								<li class="d-flex justify-content-start my-2">
									<ion-icon name="radio-button-on" class="icon-connect mb-2 mr-3"></ion-icon> 
									<a href="#" class="ml-5">Imene</a>
								</li>
								<li class="d-flex justify-content-start my-2">
									<ion-icon name="radio-button-on" class="icon-connect mb-2 mr-3"></ion-icon> 
									<a href="#" class="ml-5">Pierre</a>
								</li>
								<li class="d-flex justify-content-start my-2">
									<ion-icon name="radio-button-on" class="icon-connect mb-2 mr-3"></ion-icon>
									<a href="#" class="ml-5">Guillaume</a>
								</li>
								<li class="d-flex justify-content-start my-2">
									<ion-icon name="radio-button-on" class="icon-connect mb-2 mr-3"></ion-icon> 
									<a href="#" class="ml-5">Régis</a>
								</li>
								<li class="d-flex justify-content-start my-2">
									<ion-icon name="radio-button-on" class="icon-connect mb-2 mr-3"></ion-icon> 
									<a href="#" class="ml-5">Sebastien</a>
								</li>
								<li class="d-flex justify-content-start my-2">
									<ion-icon name="radio-button-on" class="icon-connect mb-2 mr-3"></ion-icon> 
									<a href="#" class="ml-5">Sofiane</a>
								</li>
								<li class="d-flex justify-content-start my-2">
									<ion-icon name="radio-button-on" class="icon-connect mb-2 mr-3"></ion-icon> 
									<a href="#" class="ml-5">Nathalie</a>
								</li>
								<li class="d-flex justify-content-start my-2">
									<ion-icon name="radio-button-on" class="icon-connect mb-2 mr-3"></ion-icon> 
									<a href="#" class="ml-5">Cathy</a>
								</li>
								
								
							</ul>
						</div>
					</div>
					<div class="col-md-12 mb-5 my-5">
						<div><h4 class="text-center my-1 titleh4">Photos</h4></div>

						<div class="row">
							<div class="col-md-4">
								<div class="brique-photo"></div>
							</div>
							<div class="col-md-4">
								<div class="brique-photo"></div>
							</div>
							<div class="col-md-4">
								<div class="brique-photo"></div>
							</div>
						
							<div class="col-md-4">
								<div class="brique-photo"></div>
							</div>
							<div class="col-md-4">
								<div class="brique-photo"></div>
							</div>
							<div class="col-md-4">
								<div class="brique-photo"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
    $(document).ready(function(){
        $('.popup-link').magnificPopup({type:'image'});
    });
</script>
