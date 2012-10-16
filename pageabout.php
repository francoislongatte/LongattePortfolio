<?php
/*
Template Name: Page about
*/
?>

<?php 
	
	
	get_header();
?>
	
	<body >
	<header>
		<div class="TopHeader">
		<h1><a href="<?php bloginfo('wpurl'); ?>"><?php  bloginfo('name'); ?><span id="logo"><?php  bloginfo('description'); ?></span></a></h1>
		<?php wp_nav_menu(array( 'container' => 'nav' )); ?>
	    <span class="clear"></span>
	</div>
		<div class="slider">
			
		</div>
	    <div class="SloganHeader">
	    	<h2>
	    		My passion, my work. The tools that makes me move forward.
	    	</h2>
	    </div>
	   <div class="buttonNav">
			<div class="next">
				<a href="#"></a>
			</div>
			<div class="previous">
			   	<a href="#"></a>
			</div>
	   </div>
	   
	</header>
	<section id="about">
	    <h1>Learn more about 
	    	<span>me</span><span id="pageAbout"><a href="">More</a></span>
	    </h1>
	    <img src="<?php echo $url ?>" alt="avatar" width="140" height="140">
	    <div id="twitter">
		    <h2>
		    	@francoislongatte
		    </h2>
		    <h3>45 minutes ago from Tower of Terror</h3>
		   
		    <p>
				Hep voilà mon premier tweet vais bientôt allez dormir :) ahah. 
				On verra par la suite ce que peut m apporter twitter ...
		    </p>
	    </div>
	     <?php 		
	    		$reqAbout =  new WP_Query(array('post_type' => 'About'));		    	
		    	 while ( $reqAbout->have_posts() ) : $reqAbout->the_post();  ?>
	    <p class="introMe">
	    		<?php echo get_the_content(); ?>
	    		<?php echo the_post_thumbnail(); ?> 
	    </p>
	    		<?php endwhile; 
		    		wp_reset_postdata();
		    		wp_reset_query();
	    		?>
	    
	    	<span class="clear"></span>
    </section>




<?php
	
	get_footer();