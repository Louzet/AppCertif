<div class="container mt-5">

	<!-- go Back action -->
	<button onclick="javascript:history.go(-1);" class="btn btn-primary my-1 mx auto" style="display:inline;"><ion-icon name="arrow-back"></ion-icon>  Back</button>

	<div class="row" style="padding:0;">
		<div class="col-md-10 offset-md-1" style="padding:0;">
			<div id="mybook">
				<div class='titre'>
					<p class='titre-thread'><?= ucfirst(str_replace('_', ' ', $show_arts[0]->titre)) ;?></p>
				</div>
				<div>
					<h6>Page 1!</h6>
					<p><?= substr($show_arts[0]->contenu, '0', '1000') ;?></p>
				</div>
				<div>
					<h6>Page 2!</h6>
					<p><?= substr($show_arts[0]->contenu, '1000', '2000') ;?></p>
				</div>
				<div>
					<h6>Page 3!</h6>
					<p><?= substr($show_arts[0]->contenu, '2000', '3000') ;?></p>
				</div>
				<div>
					<h6>Page 4!</h6>
					<p><?= substr($show_arts[0]->contenu, '3000', '4000') ;?></p>
				</div>
				<div>
					<h6>Page 5!</h6>
					<p><?= substr($show_arts[0]->contenu, '4000', '5000') ;?></p>
				</div>
				<div>
					<h6>Page 6!</h6>
					<p><?= substr($show_arts[0]->contenu, '5000', '6000') ;?></p>
				</div>
			</div>
		</div>
	</div>
</div>
