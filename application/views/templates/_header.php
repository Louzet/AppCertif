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

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/templateCss/all.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/templateCss/nav.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/templateCss/footer.css">

    <!-- font awesomes -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/utilitary/fontawesome-all.min.css">

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

    

