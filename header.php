<!DOCTYPE html>
<html>
<head>

	<title><?php echo wp_title('-'); ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1"/>
	<meta name="google-site-verification" content="B5PVfICz_RztOqwyQiHKCpsvsoUA1FbvTp8gmHgcPQM" />

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css?v=1.1.22">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/splide.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/vertical-timeline.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,700;0,800;0,900;1,300;1,400;1,500;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<?php echo wp_head(); ?>
</head>
<body>
	<?php get_template_part('templates/part', 'header'); ?>
	<?php  if (!is_front_page()) { get_template_part('templates/header', 'title'); } ?>
    <script data-ad-client="ca-pub-1394732508519425" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>