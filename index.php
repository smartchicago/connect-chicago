<?php get_header(); ?>
			
			<div class="row-fluid">
				<div class="span6">
					<div class="well">
						<h2><a href='/locations'>Locations</a></h2>
						<p class='lead'><a href='/locations'>Find free computer centers &amp; training in Chicago &raquo;<a href='/locations'></p>
						<p>
							<a href='/locations'>
								<img class="img-polaroid" src="<?php echo get_template_directory_uri(); ?>/images/tech-locator-screenshot.png" />
							</a>
						</p>
					</div>
				</div>

				<div class="span6">
					<div class="well">
						<h2><a href='/learn'>Learn</a></h2>
						<p class='lead'><a href='/learn'>Learn to use the internet and computers &raquo;</a></p>
						<ul>
							<li>Learn to create your own resume</li>
							<li>Get training on Microsoft Word and Excel</li>
							<li>Get connected to your friends and family by using social media</li>
						</ul>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
						incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
						exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
						dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
						Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit 
						anim id est laborum.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
						incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
						incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
						incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
						incididunt ut labore et dolore magna aliqua. </p>
					</div>
				</div>
			</div>

			<div id="content" class="clearfix row-fluid">
				
				<div class="span6 clearfix">
					<h2><a href='/about'>About</a></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
						incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
						exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
						dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
						Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit 
						anim id est laborum. <a href='/about'>More &raquo;</a></p>
				</div>
				<div id="main" class="span6 clearfix" role="main">
					<h2><a href='/news-events'>News &amp; Events</a></h2>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						<header>
						
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'wpbs-featured' ); ?></a>
							
							<div class="page-header"><h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1></div>
							
							<p class="meta"><?php _e("Posted", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_date(); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "bonestheme"); ?> <?php the_category(', '); ?>.</p>
						
						</header> <!-- end article header -->
					
						<section class="post_content clearfix">
							<?php the_content( __("Read more &raquo;","bonestheme") ); ?>
						</section> <!-- end article section -->
						
						<footer>
			
							<p class="tags"><?php the_tags('<span class="tags-title">' . __("Tags","bonestheme") . ':</span> ', ' ', ''); ?></p>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php comments_template(); ?>
					
					<?php endwhile; ?>	
					
					<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
						
						<?php page_navi(); // use the page navi function ?>
						
					<?php } else { // if it is disabled, display regular wp prev & next links ?>
						<nav class="wp-prev-next">
							<ul class="clearfix">
								<li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "bonestheme")) ?></li>
								<li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "bonestheme")) ?></li>
							</ul>
						</nav>
					<?php } ?>		
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "bonestheme"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
			</div> <!-- end #content -->

			<hr />
			<div class='partner-logos'>
				<a href='http://www.broadbandusa.gov/'>
		      <img alt='Broadband USA' class='logo' src='<?php echo get_template_directory_uri(); ?>/images/BroadbandUSA.png' title='Broadband USA'>
		    </a>
				<a href='http://cityofchicago.org'>
		      <img alt='City of Chicago' class='logo' src='<?php echo get_template_directory_uri(); ?>/images/chicago-seal.png' title='City of Chicago'>
		    </a>
		    <a href='http://www.smartchicagocollaborative.org/'>
		      <img alt='Smart Chicago Collaborative' class='logo' src='<?php echo get_template_directory_uri(); ?>/images/SmartChicago-logo.png' title='Smart Chicago Collaborative'>
		    </a>
		  </div>

<?php get_footer(); ?>