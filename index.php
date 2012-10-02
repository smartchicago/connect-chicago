<?php get_header(); ?>
			
			<div class="row-fluid">
				<div class="span6">
					<div class="well">
						<h2><a href='/locations'>Locations</a></h2>
						<p class='lead'>Find free computer centers &amp; training in Chicago</p>
						
						<h3>
			        Search near an address 
			        <small>(<a id='findMe' href='#'>find me</a>)</small>
			      </h3>
			      <div class="input-append">
			      	<input class="" id="search_address" placeholder="Enter an address ..." type="text" />
			      	<input id="btnSearch" class="btn btn-primary" type="button" value="Search" />
			      </div>

			      <hr />

			      <h3>
			      	Featured location
			      	<small><a href='/locations'>Find more &raquo;</a></small>
			      </h3>
			      <div class='row-fluid'>
							<div class='span3'>
								<a href="#" title="Featured location">
									<img alt='Featured location' src='<?php echo get_template_directory_uri(); ?>/images/450x250.gif' title='Featured location'>
							</a>
							</div>
							<div class='span9'>
								<h3><a href="#">Harold Washington Library</a></h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
						incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
						exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
							</div>
						</div>
					</div>
				</div>

				<div class="span6">
					<div class="well">
						<h2><a href='/learn'>Learn</a></h2>
						<p class='lead'>Learn to use the internet and computers</p>
						<ul>
							<li>Learn to create your own resume</li>
							<li>Get training on Microsoft Word and Excel</li>
							<li>Get connected to your friends and family by using social media</li>
						</ul>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
						incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
						exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
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
					<?php
						query_posts('cat=1&posts_per_page=3&orderby=date&order=DESC');
						if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<div class='row-fluid'>
								<div class='span3'>
									<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'wpbs-featured' ); ?></a>
								</div>
								<div class='span9'>
									<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
									<p class="meta"><time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_date(); ?></time></p>
									<?php the_content( __("Read more &raquo;","bonestheme") ); ?>
								</div>
							</div>
						<?php
						endwhile;
						endif;
					?>
			
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

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/library/js/maps_widget_lib.js'></script>
<script type='text/javascript'>
      //<![CDATA[
      $(function() {
	      geocoder = new google.maps.Geocoder();

	      $('#btnSearch').click(function(){
	        MapsWidgetLib.doSearch();
	      });

	      $("#search_address").keydown(function(e){
	        var key =  e.keyCode ? e.keyCode : e.which;
	        if(key == 13) {
	          $('#btnSearch').click();
	          return false;
	        }
	      });

	      $('#findMe').click(function(){
	        MapsWidgetLib.findMe(); 
	        return false;
	      });
	    });
      //]]>
</script>
<?php get_footer(); ?>