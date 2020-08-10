<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,900&display=swap" rel="stylesheet">
    <title><?= bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>

<nav>
	<?php // wp_nav_menu('main'); ?>

<div class="menu_wrapper">
    <input id="burger" type="checkbox" />
    <label for="burger">
        <span></span>
        <span></span>
        <span></span>
    </label>
    <?php wp_nav_menu(
        array(
                'theme_location' => 'main'
            )
        ); ?>
</div>
</nav>

<body>
<div class="main-wrapper">
<div class="content-grid">