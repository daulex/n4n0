<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title(' | ', true, 'right'); bloginfo('name'); ?></title>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>