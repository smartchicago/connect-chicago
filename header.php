<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title>
			<?php bloginfo('name'); ?> <?php wp_title(); ?>
		</title>
				
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- icons & favicons -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
				
		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

  		<link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri(); ?>/less/bootstrap.less">
  		<link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri(); ?>/less/responsive.less">
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		<!-- theme options from options panel -->
		<?php get_wpbs_theme_options(); ?>

		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/custom.css" media="all">

		<?php 

			// check wp user level
			get_currentuserinfo(); 
			// store to use later
			global $user_level; 

			// get list of post names to use in 'typeahead' plugin for search bar
			if(of_get_option('search_bar', '1')) { // only do this if we're showing the search bar in the nav

				global $post;
				$tmp_post = $post;
				$get_num_posts = 40; // go back and get this many post titles
				$args = array( 'numberposts' => $get_num_posts );
				$myposts = get_posts( $args );
				$post_num = 0;

				global $typeahead_data;
				$typeahead_data = "[";

				foreach( $myposts as $post ) :	setup_postdata($post);
					$typeahead_data .= '"' . get_the_title() . '",';
				endforeach;

				$typeahead_data = substr($typeahead_data, 0, strlen($typeahead_data) - 1);

				$typeahead_data .= "]";

				$post = $tmp_post;

			} // end if search bar is used

		?>
				
	</head>
	
	<body <?php body_class(); ?>>

		<header role="banner">
		
			<div id="inner-header" class="clearfix">

				<a href='/'>
		      <img alt='Connect Chicago' class='logo' src='<?php echo get_template_directory_uri(); ?>/images/logo.png' title='Connect Chicago'>
		    </a>
		    <div class='navbar'>
		      <div class='navbar-inner'>
		        <div class='container'>
		          <ul class='nav'>
		            <li <?php if ( is_home()) echo "class='active'" ?>>
		              <a href='/'>Home</a>
		            </li>
		            <li>
		              <a href='/locations'>Locations</a>
		            </li>
		            <li <?php if ( is_page_or_child('learn')) echo "class='active'" ?>>
		              <a href='/learn'>Learn</a>
		            </li>
		            <li <?php if ( is_category(0)) echo "class='active'" ?>>
		              <a href='/news-events'>News &amp; Events</a>
		            </li>
		            <li <?php if ( is_page_or_child('volunteer')) echo "class='active'" ?>>
		              <a href='/volunteer'>Volunteer</a>
		            </li>
		            <li <?php if ( is_page_or_child('about')) echo "class='active'" ?>>
		              <a href='/about'>About</a>
		            </li>
		          </ul>
		        </div>
		      </div>
		    </div>
			
			</div> <!-- end #inner-header -->
		
		</header> <!-- end header -->
		
		<div class="container-fluid">
