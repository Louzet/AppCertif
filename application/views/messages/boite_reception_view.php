

<div class="container my-3" id="container">

    <div class="row">
		
		<!-- left side -->
		<div class="col-md-3 msg_received" id="_message">
			<div class="mt-3 my-3">	
				<form class="mx-auto my-auto m-perso">
					<div class="form-group">
						
						<input type="text" class="form-control" name="search_message" id="search_message" placeholder="search...">
						<div id="display_result" class="display_result">blablabla</div>
						
					</div>
				</form>
			</div>
			<hr>
			<div class="panel panel-default" tabindex="2" style="outline: none;">
				<ul class="list-group" style="overflow-y: scroll;">
					<?php foreach($all_users as $one_user) : ?> <!-- foreach -->

						<!-- <li class="list-group-item active mb-1 li_dest">
							<a href="#">
								<div class="media">
									<div class="media-left">
										<img src="<?= base_url();?>assets/images/profil_pictures/<?= (isset($one_user->profil_image)) ? $one_user->profil_image : "noimage.png"; ?>" width="50" class="media-object">
									</div>
									<div class="media-body">
										<span class="user"><?= $one_user->pseudo; ?></span>
									</div>
								</div>
							</a>
						</li> -->

					<?php endforeach; ?> <!-- endforeach -->
				</ul>
			</div>
		</div>

		<!-- main body -->
		<div class="col-md-6" id="_main">
			<div class="media-body">
				<!-- <div class="media">
					<div class="media-left">
						<a href="#">
						<img src="images/people/110/woman-5.jpg" width="60" alt="woman" class="media-object">
						</a>
					</div>
					<div class="media-body message">
						<div class="panel panel-default">
						<div class="panel-heading panel-heading-white">
							<div class="pull-right">
							<small class="text-muted">2 min ago</small>
							</div>
							<a href="#">Mary D.</a>
						</div>
						<div class="panel-body">
							Hi Bill,
							<br> Is it ok if we schedule the meeting tomorrow?

						</div>
						</div>
					</div>
				</div>
				<div class="media">
					<div class="media-body message">
						<div class="panel panel-default">
						<div class="panel-heading panel-heading-white">
							<div class="pull-right">
							<small class="text-muted">10 min ago</small>
							</div>
							<a href="#">Me</a>
						</div>
						<div class="panel-body">
							Are we still on for Today?
						</div>
						</div>
					</div>
					<div class="media-right">
						<img src="images/people/110/guy-5.jpg" width="60" alt="" class="media-object">
					</div>
				</div>
				<div class="media">
				<div class="media-left">
					<img src="images/people/110/woman-5.jpg" width="60" alt="" class="media-object">
				</div>
				<div class="media-body message">
					<div class="panel panel-default">
						<div class="panel-heading panel-heading-white">
							<div class="pull-right">
							<small class="text-muted">1 day ago</small>
							</div>
							<a href="#">Mary D.</a>
						</div>
						<div class="panel-body">
							Cool. It's settled. Tomorrow will discuss the project.
						</div>
					</div>
				</div>
				</div>
				<div class="media">
					<div class="media-body message">
						<div class="panel panel-default">
						<div class="panel-heading panel-heading-white">
							<div class="pull-right">
							<small class="text-muted">3 days ago</small>
							</div>
							<a href="#">Me</a>
						</div>
						<div class="panel-body">
							I suggest a meeting on Tuesday. What do you think?
						</div>
						</div>
					</div>
					<div class="media-right">
						<img src="images/people/110/guy-5.jpg" width="60" alt="" class="media-object">
					</div>
				</div> -->
				<div class="panel panel-default text-share send-msg">
					<div class="input-group">
						<div class="input-group-btn">
							<textarea type="text" class="form-control share-text" placeholder="Write message..."></textarea>
							<a class="btn btn-primary btn-block" href="#">
								<ion-icon name="mail"></ion-icon> Envoyer
							</a>
						</div>
						<!-- /btn-group -->
					</div>
				<!-- /input-group -->
				</div>
			</div>
		</div>

		<!-- right side -->
		<div class="col-md-3" id="_destinataire">

			<div class="row">
				<div id="data_destinataire" data-scrollable="" tabindex="0" style="overflow-y: hidden; outline: none;text-align: center;margin:0 auto;">
					<div class="sidebar-block my-3">
						<div class="profile">
						<img src="<?= base_url();?>assets/images/profil_pictures/<?= (isset($user[0]['profil_image'])) ? $user[0]['profil_image'] : 'noimage.png'; ?>" width="50" class="media-object img-circle media-photo-profil my-2">
							<h4><?= $user[0]['prenom'] . ' ' . $user[0]['nom'] ;?></h4>
							<h6><?= $user[0]['pseudo']; ?></h6>
						</div>
					</div>
				<div class="category">About</div>
				<div class="sidebar-block">
					<ul class="list-about">
						<li><ion-icon name="locate"></ion-icon> Amsterdam, NL</li>
						<li><ion-icon name="link"></ion-icon> <a href="#">www.mosaicpro.biz</a></li>
						<li><ion-icon name="logo-twitter"></ion-icon><a href="#">/mosaicprobiz</a></li>
					</ul>
				</div>
				<div class="category">Photos</div>
					<div class="sidebar-block">
						<div class="sidebar-photos">
						<!-- <ul>
							<li>
								<a href="#">
									<img src="images/place1.jpg" alt="people">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="images/place2.jpg" alt="people">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="images/place3.jpg" alt="people">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="images/food1.jpg" alt="people">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="images/food1.jpg" alt="people">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="images/place3.jpg" alt="people">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="images/place2.jpg" alt="people">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="images/place1.jpg" alt="people">
								</a>
							</li>
						</ul> -->
						<a href="#" class="btn btn-primary btn-xs">view all</a>
					</div>
				</div>
			</div>
			
		</div>
		
    </div>

</div>
<script>
	$(document).ready(function(){

		
	
		

	

		



	});

</script>
