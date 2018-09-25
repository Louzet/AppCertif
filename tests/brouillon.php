
html += '<ul class="list-group" id="contact-list">'+
	'<li class="list-group-item">'+
		'<div class="col-xs-12 col-sm-3">'+
			'<img src="http://api.randomuser.me/portraits/men/49.jpg" alt="Scott Stevens" class="img-responsive img-circle" />'+
		'</div>'+
		'<div class="col-xs-12 col-sm-9">'
			'<span class="name">Scott Stevens</span><br/>'+
			'<span class="glyphicon glyphicon-map-marker text-muted c-info" data-toggle="tooltip" title="5842 Hillcrest Rd"></span>'+
			'<span class="visible-xs"> <span class="text-muted">5842 Hillcrest Rd</span><br/></span>'+
			'<span class="glyphicon glyphicon-earphone text-muted c-info" data-toggle="tooltip" title="(870) 288-4149"></span>'+
			'<span class="visible-xs"> <span class="text-muted">(870) 288-4149</span><br/></span>'+
			'<span class="fa fa-comments text-muted c-info" data-toggle="tooltip" title="scott.stevens@example.com"></span>'+
			'<span class="visible-xs"> <span class="text-muted">scott.stevens@example.com</span><br/></span>'+
		'</div>'+
		'<div class="clearfix"></div>'+
	'</li>'+
'</ul>';


<!-- formulaire de profil -->

<?php echo form_open_multipart('user/profil_update'); ?>
<div class="form-row">
    <div class="col">
        <label for="nom"><h4>Nom</h4> </label>
        <input type="text" class="form-control" disabled placeholder="Nom" name="nom" id="nom" value="<?php if(isset($user_by_id->nom)){echo $user_by_id->nom;} ?>">
    </div>
    <div class="col">
        <label for="prenom"><h4>Prénom</h4></label>
        <input type="text" class="form-control" disabled placeholder="Prénom" name="prenom" id="prenom" value="<?php if(isset($user_by_id->prenom)){echo $user_by_id->prenom;} ?>">
    </div>
</div>
<div class="form-row">
    <div class="col-sm-12">
        <label for="email"><h4>Email</h4></label>
        <input type="email" class="form-control" disabled name="email" id="email" placeholder="your@email.com" title="enter your email." value="<?php if(isset($user_by_id->email)){echo strtolower($user_by_id->email);} ?>">
    </div>
</div>
<div class="form-row">
    <div class="col-sm-12">
        <label for="location"><h4>Ville</h4></label>
        <input type="text" class="form-control" disabled id="location" placeholder="Entrer votre ville" title="entrez une ville">
    </div>
</div>
<div class="form-row">
    <div class="col-sm-12">
        <label for="pays"><h4>France</h4></label>
        <input type="text" class="form-control" disabled name="pays" id="pays" placeholder="Entrez votre pays" title="entrez votre pays.">
    </div>
</div>
<div class="form-row">
    <div class="col-sm-12">
        <br>
        <button class="btn btn-md btn-success offset-lg-2 col-lg-6 col-md-12 col-sm-12" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
        <button class="btn btn-md btn-info col-lg-2 col-md-12 col-sm-6 my-2" id="btn_update_profil" type="submit"><i class="glyphicon glyphicon-repeat"></i> Modifier </button>
    </div>
</div>
</form>