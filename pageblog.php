<?php
/*
Template Name: Page blog
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
	
	<section id="blog">
		    	<h1>Don't forget my <span>blog</span><span id="pageBlog"><a href="#">More</a></span></h1>		    	
		    	<ul>
		    	<?php $reqblog =  new WP_Query(array('post_type' => 'Blogs')); 
		    	 	$l = 1;
		    	 	while ( $reqblog->have_posts() ) : $reqblog->the_post(); ?>
		    	
		    		<a href="<?php the_permalink(); ?> "><li id="article-<?php echo $l; ?>">
		    			<?php echo the_post_thumbnail(); ?> 
		    			<span><?php the_date(); ?></span>
					</li></a>
					
				<?php $l++;
				endwhile; ?>
		    	</ul>
		    </section>




<?php
	
	get_footer();