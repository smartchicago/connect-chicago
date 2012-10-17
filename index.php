<?php get_header(); ?>
			
			<div class="row-fluid">
				<div class="span6">
						<div class='well home-box'>
						<h2><a href='/locations'>Locations</a></h2>
						<p class='lead'>Find and share technology resources and locations</p>
							<h3>
				        Search near an address 
				      </h3>
				      <div class="input-append">
				      	<input class="span8" id="search_address" placeholder="Enter an address ..." type="text" />
				      	<input id="btnSearch" class="btn btn-primary" type="button" value="Search" />
				      	<input id="findMe" class="btn btn-info" type="button" value="Find me" />
				      </div>

			      <p><br /><a href='/locations'>Browse all locations &raquo;</a></p>
			      <!-- 

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
						</div> -->
					</div>
				</div>

				<div class="span6">
					<div class='well home-box'>
						<h2><a href='/learn'>Learn</a></h2>
						<p class='lead'>Sign up for online or in-person classes</p>
						<p>Connect Chicago’s free instructional courses can aid job-seekers through technology training 
						sessions, covering topics such as online job searching, resume creation, and other workforce 
						readiness skills, and more sophisticated topics like social media and online financial management.</p>
						<!-- <ul>
							<li>Learn to create your own resume</li>
							<li>Get training on Microsoft Word and Excel</li>
							<li>Get connected to your friends and family by using social media</li>
						</ul> -->
					</div>
				</div>
			</div>

			<div id="content" class="clearfix row-fluid">
				<div class="span6 clearfix">
					<h2><a href='/about'>About</a></h2>
					<p>Connect Chicago is a network of sites that spans the city and offers broadband access to Chicago’s 
						three million residents. With sites in nearly every neighborhood, Connect Chicago is reaching 
						populations with limited access to digital tools and knowledge.</p>

						<p>Connecting six partnering organizations – City Colleges of Chicago, Chicago Housing Authority, 
						Chicago Public Libraries, City of Chicago’s Department of Family Support Services, Smart Health 
						Centers and Chicago Cook Workforce Partnership – with each other, Connect Chicago has created a wide-reaching community of public computer 
						centers, offering every Chicagoan the use of more than 3,000 free computers in 175 locations, a 
						variety of free computer training courses in more than 70 venues, and more than 2,300 free WiFi 
						hotspots and free internet access sites.</p>

						<p>We welcome everyone to join the digital community by taking advantage of these free resources 
						and public computing centers. Getting connected will help you achieve your goals—benefiting you, 
						your family and your community—no matter where you are.</p>

						<p><a href='/about'>Read more &raquo;</a></p>
				</div>
				<div id="main" class="span6 clearfix" role="main">
					<h2><a href='/news-events'>News &amp; Events</a></h2>
					<?php
						query_posts('cat=1&posts_per_page=3&orderby=date&order=DESC');
						if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<div class='row-fluid featured-news'>
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