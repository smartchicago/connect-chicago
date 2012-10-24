<?php get_header(); ?>
			
			<div class="row">
				<div class="span6">
					<h2>Locations</h2>
							<div class='well'>
								<h3>
					      	Find technology resources and locations
					      </h3>
					      <div class="input-append">
					      	<input class="span4" id="search_address" placeholder="Enter an address ..." type="text" />
					      	<input id="btnSearch" class="btn btn-primary" type="button" value="Search" />
					      	<input id="findMe" class="btn btn-info" type="button" value="Find me" />
					      </div>
					      <p><br /><a href='/locations'>Browse all locations &raquo;</a></p>
					    </div>

						  <div class='well'>
					      <h3>Featured location</h3>
					      <div class='row-fluid'>
									<div class='span4'>
										<a href="#" title="Featured location">
											<img class='img-polaroid' alt='Featured location' src='http://locations.weconnectchicago.org/location/harold-washington-college-30-e-lake-street/m/image.jpg' title='Featured location'>
										</a>
									</div>
									<div class='span8'>
										<h3><a href="http://locations.weconnectchicago.org/location/harold-washington-college-30-e-lake-street">Harold Washington College</a></h3>
										<p>City Colleges of Chicago</p>
										<div class='row-fluid'>
											<div class='span5'>
												<p>
													30 E. Lake Street<br />Chicago, IL 60601
													<br />
													(312) 553-3208 
												</p>
											</div>
											<div class='span7'>
												<p>
													Hours: Varies— see details
													<br />
													160 public computers available
													<br />
													<a href="http://locations.weconnectchicago.org/location/harold-washington-college-30-e-lake-street">More details &raquo;</a>
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

				<div class="span6">
					<h2>Learn</h2>
					<P>The free courses offered through Connect Chicago and its partners can assist all Chicago residents of 
						all ages and skills with training covering topics such as:</p>

					<ul>
		        <li>Basic digital literacy</li>
		        <li>Desktop applications</li>
		        <li>Online job searching</li>
		        <li>Resume creation</li>
		        <li>Social media</li>
		        <li>Online personal financial management</li>
		       </ul>

					<p><a href='/learn'>More &raquo;</a></p>
					<!-- <ul>
						<li>Learn to create your own resume</li>
						<li>Get training on Microsoft Word and Excel</li>
						<li>Get connected to your friends and family by using social media</li>
					</ul> -->
				</div>
			</div>

			<div id="content" class="clearfix row-fluid">
				<div class="span6 clearfix">
					<h2>About Connect Chicago</h2>
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
					<h2>Recent News &amp; Events</h2>
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

					<p><a href='/news-events'>Read more &raquo;</a></p>
			
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