<?php 

 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, intial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php
   if(function_exists('wp_body_open')) {
       wp_body_open();
   }
    ?>
<div id="page" class="site">
    <header>
     <?php get_template_part('template-parts/header/nav') ?>
    </header>
</div>