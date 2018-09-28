
<script>

	load_dest();
	function load_dest(query)
	{
		var dest = $("#data_destinataire");
		var block_dest = $(".li_dest");
		var base_url = "<?= base_url(); ?>";

		var lists = $(".list-group-item");
		var a = $(lists).find('a');
		$(a).on('click', function(ev){
			ev.preventDefault();
		});
		
		$.ajax({
			type: 'GET',
			cache: 'false',
			url : '<?= base_url(); ?>Newsfeed_messages/get_users',
			data: {query:query},
			dataType: 'json',
			success: function(data){
				var html01 = '';
				var i;
				for(i = 0; i < data.length; i++){

					html01 += '<li class="list-group-item mb-1 li_dest">'+
									'<a href="#" style="display:block;">'+
										'<div class="media">'+
											'<div class="media-left">'+
												'<img src="http://localhost/AppCertif/assets/images/profil_pictures/' + data[i].profil_image + '" width="50" class="media-object">'+
											'</div>'+
											'<div class="media-body">'+
												'<span class="user">' + data[i].pseudo + '</span>'+
											'</div>'+
										'</div>'+
									'</a>'+
								'</li>';
				}
				
				var ul = $("ul.list-group");
				
				ul.append(html01);
				
			},
			error: function(){
				console.log('error');
			}
			
		});

	}

</script>
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
		<div class="col-md-3">

			<div class="row">
				<div id="_destinataire" style="width:100%;height:100%;">
					<div id="data_destinataire" data-scrollable="" tabindex="0" style="overflow-y: hidden; outline: none;text-align: center;margin:0 auto;">
						<div class="sidebar-block my-3">
							<div class="profile">
							<img src="<?= base_url();?>assets/images/profil_pictures/noimage.png" width="50" class="media-object img-circle media-photo-profil my-2">
								<h4></h4>
								<h6></h6>
							</div>
					</div>
					<div class="category">About</div>
					<div class="sidebar-block">
						<ul class="list-about">
							<li><ion-icon name="locate"></ion-icon></li>
							<li><ion-icon name="link"></ion-icon> <a href="#"></a></li>
							<li><ion-icon name="logo-twitter"></ion-icon><a href="#"></a></li>
						</ul>
					</div>
					
					<div class="sidebar-block">
						<div class="sidebar-profil-link">
						
						<a href="#" class="btn btn-primary btn-xs">Voir le profil</a>
					</div>
					
				</div>
			</div>
			
		</div>
		
    </div>

</div>
<script>
	$(document).ready(function(){

		click_user();
		function click_user(pseudo)
		{
			let lists = $('.list-group-item');
			
			var pseudo;
			var a = $(lists).find('a');

			$(a).on('click', function(ev){
				ev.preventDefault();
			});
			
			$(lists).each(function(e){
				e.preventDefault();
				$(this, document).on('click', function(event){
					
					event.preventDefault();
					
					pseudo = $(this).find('.user').text();
					
					$.get({
						type:'GET',
						url: "<?= base_url(); ?>Newsfeed_messages/get_user",
						cache: 'false',
						data: {'pseudo' : pseudo},
						dataType: 'json',
						success: function(response){
							let html02;
							let i;
							let _pseudo = $('h6');
	
							console.log(response);
	
								
							
							
						},
						error: function(){
							console.log("error");
						}
					});
				});
			});
		}

	});

</script>
