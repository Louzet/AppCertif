<?php
// var_dump($this->session->userdata()); ?>
<div class="container">
	<div id="page">
		<div class="row">
			<div class="col-lg-3 text-center block" id="divers">
				<!-- cadre de profil -->
				<div class="profile-card">
					<img src="assets/images/profil_pictures/Luffy.jpg" alt="user" class="profile-photo">
					<h5><a href="<?=site_url(); ?>profil" class="text-white"><?= $user[0]['nom']; ?> <?= $user[0]['prenom']; ?></a></h5>
					<a href="#" class="text-white"><ion-icon name="person-add"></ion-icon> 1,299 000 followers</a>
				</div>
				<!-- aside menu -->
				<ul class="nav-aside">
				  <li><ion-icon name="home" id="ion-home"></ion-icon><a href="newsfeed.html">Mes actus</a></li>
				  <li><ion-icon name="contact" id="ion-profil"></ion-icon><a href="newsfeed-people-nearby.html">Profil</a></li>
				  <li><ion-icon name="contacts" id="ion-amis"></ion-icon><a href="newsfeed-friends.html">Amis</a></li>
				  <li><ion-icon name="chatboxes" id="ion-message"></ion-icon><a href="newsfeed-messages.html">Messages</a></li>
				  <li><ion-icon name="aperture" id="ion-images"></ion-icon><a href="newsfeed-images.html">Images</a></li>
				  <li><ion-icon name="film" id="ion-videos"></ion-icon><a href="newsfeed-videos.html">Vidéos</a></li>
				</ul>
			</div>

			<div class="col-lg-6 text-center block " id="main-content">
				<div class="post-content">
					<div class="user-info">
						<div class="row">
							<div class="col-md-12">
								<span class="text-left float-left">
									<img src="assets/images/user-5.jpg" alt="user" class="profile-photo-md" width="40"height="40">
									<span><a href="timeline.html" class="profile-link">Alexis Clark</a> <span class="following my-1 mx-3 text-center"><a href="#">following</a></span></span>
								</span>
								<!-- Split dropleft button -->
								<div class="float-right dropleft">
									
									<a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><ion-icon name="menu" id="ion-ellipsis"></ion-icon>
									</a>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										<a class="dropdown-item" href="#"><ion-icon name="save"></ion-icon> Enregistrer</a>
										<a class="dropdown-item" href="#"><ion-icon name="close-circle"></ion-icon> Masquer</a>
										<a class="dropdown-item" href="#"><ion-icon name="flag"></ion-icon> Signaler !</a>
									</div>
									
								</div>
							</div>
						</div>
					</div>
					
					<img src="assets/images/1.jpg" alt="post-image" class="img-fluid post-image mt-3">

					<div class="row">
						<div class="col-sm-12">
							<div class="container meta-post">
								
								<span class="text-muted my-auto d-flex justify-content-around">
									<span class="published mt-3 mr-5"><ion-icon name="time" id="ion-time"></ion-icon> Publié il y a 3 mins ago</span>
									<span class="reaction mt-1 ml-5">
										<a class="btn text-green"><ion-icon name="thumbs-up" id="thumbs-up"></ion-icon></i> 13</a>
										<a class="btn text-red"><ion-icon name="thumbs-down" id="thumbs-down"></ion-icon></i> 0</a>
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

										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i>
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
			</div>
			
			<div class="col-lg-3 text-center block" id="photos-friends">
				<div class="row">
					<div class="col-md-12">
						<div><h4 class="text-center my-1 titleh4">Amis en ligne</h4></div>

						<div class="list-friends mt-3">
							<ul class=" mt-2">
								<li class="d-flex justify-content-start my-2">
									<i class="fas fa-circle icon-connect mb-2 mr-5"></i> 
									<a href="#" class="ml-5">Jim</a>
								</li>
								<li class="d-flex justify-content-start my-2">
									<i class="fas fa-circle icon-connect mb-2 mr-5"></i> 
									<a href="#" class="ml-5">Karim</a>
								</li>
								<li class="d-flex justify-content-start my-2">
									<i class="fas fa-circle icon-connect mb-2 mr-5"></i> 
									<a href="#" class="ml-5">Livia</a>
								</li>
								<li class="d-flex justify-content-start my-2">
									<i class="fas fa-circle icon-connect mb-2 mr-5"></i> 
									<a href="#" class="ml-5">Imene</a>
								</li>
								<li class="d-flex justify-content-start my-2">
									<i class="fas fa-circle icon-connect mb-2 mr-5"></i> 
									<a href="#" class="ml-5">Pierre</a>
								</li>
								<li class="d-flex justify-content-start my-2">
									<i class="fas fa-circle icon-connect mb-2 mr-5"></i> 
									<a href="#" class="ml-5">Guillaume</a>
								</li>
								<li class="d-flex justify-content-start my-2">
									<i class="fas fa-circle icon-connect mb-2 mr-5"></i> 
									<a href="#" class="ml-5">Régis</a>
								</li>
								<li class="d-flex justify-content-start my-2">
									<i class="fas fa-circle icon-connect mb-2 mr-5"></i> 
									<a href="#" class="ml-5">Sebastien</a>
								</li>
								<li class="d-flex justify-content-start my-2">
									<i class="fas fa-circle icon-connect mb-2 mr-5"></i> 
									<a href="#" class="ml-5">Sofiane</a>
								</li>
								<li class="d-flex justify-content-start my-2">
									<i class="fas fa-circle icon-connect mb-2 mr-5"></i> 
									<a href="#" class="ml-5">Nathalie</a>
								</li>
								<li class="d-flex justify-content-start my-2">
									<i class="fas fa-circle icon-connect mb-2 mr-5"></i> 
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
