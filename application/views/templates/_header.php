<!DOCTYPE html>
<html>
<head>

    <title><?= isset($title) ? $title : ''; ?> | <?= WEBSITE_NAME; ?></title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->

	<script src="<?= site_url(); ?>assets/js/utility_bootstrap/jquery.min.js"></script>
    
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/utilitary/reset.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/utilitary/bootstrap.min.css">

	<!-- load material design bootstrap -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/mdb/css/bootstrap.min.css">
	<!-- load custom style material design bootstrap -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/mdb/css/style.min.css">

	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
 
	<!-- Include Editor style css -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.5/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.5/css/froala_style.min.css" rel="stylesheet" type="text/css" />

	<!-- Include CKEditor JS files. -->
    <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/decoupled-document/ckeditor.js"></script>
	

	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ckeditor/codemirror.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ckeditor/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ckeditor/froala_editor.pkgd.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ckeditor/froala_style.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ckeditor/stylethag.css">
	


    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/templateCss/all.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/templateCss/nav.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/templateCss/footer.css">

    <!-- font awesomes -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/utilitary/fontawesome-all.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- visionneuse lib css magnific popup-->
    <link href="<?= base_url();?>assets/lib/Magnific-Popup/dist/magnific-popup.css" rel="stylesheet">

    <!-- parlsey css -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/js/parsley/parsley.css">

    <?php if($title == 'Connexion') : ?>

        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/connexion_page.css">

    <?php endif; ?>

    <?php if($title == 'Inscription') : ?>

        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/inscription_page.css">

    <?php endif; ?>

    <?php if($title == 'Accueil') : ?>

        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/accueil_page.css">
		
    <?php endif; ?>

    <?php if($title == 'Boite de reception') : ?>

        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/messages/boite_reception.css">
		
    <?php endif; ?>

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700,900" rel="stylesheet">

</head>
<body>

    

