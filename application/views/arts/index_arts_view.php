<div class="container mt-3">

	<div class="row">
		<div class="col-md-3">
			<div class="text-center my-3">
				<div class="sidebar-block">
					<div class="sidebar-profil-link">
						<a href="<?= base_url() ;?>arts/create" class="btn btn-primary btn-xs"><ion-icon name="add"></ion-icon> Créer un nouveau</a>
					</div>
				</div>
			</div>
			<h4 class="text-center mt-5">Menu</h4>
			<div class="table table-bordered">
				<ul class="list-group list-group-flush">
					<li class="list-group-item"><a href="#" style="display:block;">Continuer</a></li>
					<li class="list-group-item"><a href="#" style="display:block;">Gérer les status</a></li>
					<li class="list-group-item"><a href="#" style="display:block;"></a></li>
					<li class="list-group-item"><a href="#" style="display:block;"></a></li>
					<li class="list-group-item"><a href="#" style="display:block;"></a></li>
				</ul>
			</div>
		</div>
		<div class="col-md-9">
			<section class="section">
				<div id="box_livres">
					<div class="row">
	<!-- foreach -->	<?php foreach($list_arts as $arts): ?> <!-- foreach -->
							<div class="col-md-4">
								<div class="card card-cascade wider box_livres_<?= $arts->id; ?> my-3">
									<!-- Card image -->
									<div class="view view-cascade overlay">
										<img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/photo6.jpg" alt="Card image cap">
										<a href="#!">
											<div class="mask rgba-white-slight"></div>
										</a>
									</div>

									<!-- Card content -->
									<div class="card-body card-body-cascade text-center">

										<!-- Title -->
										<a href="#" class="link-show-art"><h4 class="card-title"><strong><?= $arts->titre; ?></strong></h4></a>
										<!-- Subtitle -->
										<h5 class="blue-text pb-2"><?= $arts->auteur; ?></h5>
										<!-- Text -->
										<p class="card-text"><?= $arts->resume; ?></p>

										<!-- Linkedin -->
										<a class="px-2 fa-lg li-ic"><i class="fas fa-linkedin"></i></a>
										<!-- Twitter -->
										<a class="px-2 fa-lg tw-ic"><i class="fab fa-twitter"></i></a>
										<!-- Dribbble -->
										<a class="px-2 fa-lg fb-ic"><i class="fas fa-facebook"></i></a>

									</div>
									<div class="card-footer text-muted success-color white-text">
										<p class="mb-0"><?= time_ago($arts->date_creation); ?></p>
									</div>
								</div>

							</div>
	<!-- endforeach -->	<?php endforeach; ?> <!-- endforeach -->
					</div>
				</div>
			</section>
		</div>
	</div>
</div>
