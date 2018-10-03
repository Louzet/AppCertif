<div class="container mt-3">

	<div class="row">
		<div class="col-md-3">
			<div class="text-center my-3">
				<div class="sidebar-block">
					<div class="sidebar-profil-link">
						<a href="<?= base_url() ;?>arts/create_art?id=<?= $user[0]['id']; ?>" class="btn btn-primary btn-xs" id="btn_create_arts"><ion-icon name="add"></ion-icon> Créer un nouveau</a>
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
                        <?php if($list_arts != NULL) : ?>
	<!-- foreach -->	<?php foreach($list_arts as $arts): ?> <!-- foreach -->

							<div class="col-md-4">
								<div class="card card-cascade wider ?> my-3 card-c" id="box_livres_<?= $arts->id; ?>">
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
										<a href="<?= base_url() ;?>arts/show_art?titre=<?= strtolower(str_replace(' ', '_', $arts->titre)); ?>&id=<?= $user[0]['id']; ?>" class="link-show-art"><h4 class="card-title"><strong><?= ucfirst(str_replace('_', ' ', $arts->titre)); ?></strong></h4></a>
										<!-- Subtitle -->
										<h5 class="blue-text pb-2"><?= $arts->auteur; ?></h5>
										<!-- Text -->
										<p class="card-text"><?= $arts->resume; ?></p>

										<!-- Like -->
										<a href="#" class="px-2 fa-lg li-ic"><ion-icon name="happy"></ion-icon></a>
										<!-- Dislike -->
										<a href="#" class="px-2 fa-lg tw-ic"><ion-icon name="heart-dislike"></ion-icon></a>
										

									</div>
									<div class="card-footer text-muted success-color white-text">
										<p class="mb-0 text-center"><?= time_ago($arts->date_creation); ?></p>
										<!-- Grid row -->
										<?php if($this->session->userdata('user_id') == $_GET['id']): ?>
											<div class="row">
												<ul class="nav md-pills pills-info text-center">
													<li class="nav-item col-md-3 offset-md-3"><!-- edit button -->
														<a class="btn btn-primary" href="<?= base_url(); ?>arts/edit_art?title=<?= strtolower(str_replace(' ', '_', $arts->titre)); ?>&id=<?= $user[0]['id']; ?>"><ion-icon name="create"></ion-icon></a>
													</li>
													<li class="nav-item col-md-3 offset-md-3"><!-- delete button -->
														<a class="btn btn-danger btn_delete_art" data-target="#centralModalSuccess" id='<?= $arts->id; ?>' value='<?= $arts->titre; ?>'><ion-icon name="trash" style="color:white;"></ion-icon></a>
													</li>
												</ul>
											</div>
										<?php endif; ?>
									</div>
								</div>

							</div>

	<!-- endforeach -->	<?php endforeach; ?> <!-- endforeach -->
                        <?php endif; ?>
					</div>
				</div>

                <!-- Central Modal Medium Success -->
                <div class="modal fade" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-notify modal-success" role="document">
                        <!--Content-->
                        <div class="modal-content">
                            <!--Header-->
                            <div class="modal-header text-center">
                                <p class="heading lead">Supprimer un art </p>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" class="white-text">&times;</span>
                                </button>
                            </div>

                            <!--Body-->
                            <div class="modal-body">
                                <div class="text-center">
                                    <ion-icon name="checkbox-outline" style="font-size:1.8rem;"></ion-icon>
                                    <p>Voulez vous vraiment supprimer <strong><span class="insert-title"></span></strong> ? </p>
                                </div>
                            </div>

                            <!--Footer-->

                            <div class="modal-footer justify-content-center">
                                <a type="button" id="btn_t_supprimer" class="btn btn-danger waves-effect" data-dismiss="modal">Supprimer</a>
                                <a type="button" id="btn_t_annuler" class="btn btn-default">Annuler<i class="white-text"></i></a>
                            </div>


                        </div>
                        <!--/.Content-->
                    </div>
                </div>
                <!-- Central Modal Medium Success-->

			</section>
		</div>
	</div>
</div>
