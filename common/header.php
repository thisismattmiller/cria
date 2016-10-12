<!DOCTYPE html>
<html lang="<?php
echo get_html_lang();
?>">
<head>
	<meta charset="utf-8">
  <?php
if ($description = option('description')):
?>
  <meta name="description" content="<?php
    echo $description;
?>" />
  <?php
endif;
?>
  
  <title><?php
echo option('site_title');
echo isset($title) ? ' | ' . strip_formatting($title) : '';
?></title>

  <?php
echo auto_discovery_link_tags();
?>
  

  <!-- Plugin Stuff -->

  <?php
fire_plugin_hook('public_head', array(
    'view' => $this
));
?>

  <!-- Stylesheets -->

  <?php
queue_css_url('https://fonts.googleapis.com/css?family=Montserrat|Open+Sans:300');
queue_css_file('foundation');
queue_css_file('app');
echo head_css();
?>

  <!-- JavaScripts -->
  <?php
queue_js_file(array('app','vendor/jquery','vendor/custom.modernizr'));
?>

  <?php
echo head_js();
?>




</head>

<?php
echo body_tag(array(
    'id' => @$bodyid,
    'class' => @$bodyclass
));
?>
    <?php
fire_plugin_hook('public_body', array(
    'view' => $this
));
?>

<header>
		  <?php
fire_plugin_hook('public_header');
?>
		</header>
		
		        <div id="primary-nav" class="contain-to-grid sticky">
		<nav class="top-bar">
		 <ul class="title-area">
		    <!-- Title Area -->
		    <li class="name">
		       <h1 id="site-title"><a href="#"><?php
echo link_to_home_page(theme_logo());
?></a></h1>
		    </li>
		    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
		    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
		  </ul>
	
				<section class="top-bar-section">
								        <!-- Left Nav Section -->
									<ul class="left">
					      
				        <?php
echo public_nav_main();
?>
		

						
										</ul>
				     


 </section>
		    </nav>



		  </div>

	<div class="row">
		
		<div class="large-12 columns">
	

			


      


