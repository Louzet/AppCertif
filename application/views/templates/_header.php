<!DOCTYPE html>
<html>
<head>

    <title><?= $title; ?> | <?= WEBSITE_NAME; ?></title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- font awesomes -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

	<!-- Emoji lib css -->
	<link href="<?= base_url();?>assets/lib/emojionearea/dist/emojionearea.css" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojione/2.2.7/assets/css/emojione.min.css">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/utilitary/reset.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/utilitary/bootstrap.min.css">

    <link refl="stylesheet" href="<?= base_url(); ?>assets/css/templateCss/all.css">
    <link refl="stylesheet" href="<?= base_url(); ?>assets/css/templateCss/nav.css">
    <link refl="stylesheet" href="<?= base_url(); ?>assets/css/templateCss/footer.css">

    <?php if($title == 'Connexion') : ?>

        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/connexion_page.css">

    <?php endif; ?>

    <?php if($title == 'Inscription') : ?>

        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/inscription_page.css">

    <?php endif; ?>

    <?php if($title == 'Accueil') : ?>

        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/accueil_page.css">
		
    <?php endif; ?>

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700,900" rel="stylesheet">



</head>
<body>

    

