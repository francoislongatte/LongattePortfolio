<?php
/*
Template Name: Page travaux
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
	<section id="project">
	    <h1><?php echo category_description(); ?>My<span>work,</span> My<span>passion</span><span id="pagework"><a href="#">More</a></span></h1>
	    <ul id="pagework"> 
		<?php 
			$i=0;
			$the_query = new WP_Query(array('post_type' => 'works','posts_per_page' => 9, 'orderby' => 'date'));
			wp_reset_postdata();
			while ( $the_query->have_posts() ) : $the_query->the_post();
				if(($i == 1) || ($i == 4) || ($i == 7) ):
						echo '<li id=projectImpair>';?><a href="<?php the_permalink(); ?>">
						<?php else:
						echo '<li>';?><a href="<?php the_permalink(); ?>">
						<?php endif; ?>
				<?php the_post_thumbnail(); ?></a>
				<?php	echo '</li>';
				$i++;	
			endwhile;
			wp_reset_postdata();
			wp_reset_query();
		?>
		</ul>
    </section>
<?php 
	
	
	get_footer();