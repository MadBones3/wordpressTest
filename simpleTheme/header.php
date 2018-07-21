<!DOCTYPE html>
<html>
<head <?php language_attributes()?>>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<?php wp_head();?>
</head>
<body <?php body_class();?>>
	<header class="Pg_header">
		<div class="container">
			<div class="site_logo">
				<a href="<?php echo site_url(); ?>"><strong>LOREM LOGO</strong></a>
			<nav class="nav_bar float-right">
				<li><a href="<?php echo site_url('/app'); ?>">App</a></li>
			</nav>
			</div>
		</div>
	</header>

