<?php 
	
	
	get_header();
?>


<body>
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
			    		I am François Longatte,  WebDesigner &amp; WebDevelopper
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
        	<aside>
        		<a id="aTop" href="#home">TOP</a>
        		<a id="aLeft" href="#home">LEFT</a>
        		<a id="aRight" href="#home">RIGHT</a>
        		<a id="aBottom" href="#bottom">BOTTOM</a>
        	</aside>
		    <section id="project">
			    <h1><?php echo category_description(); ?>Few examples of my <span>work</span><span id="pagework"><a href="#">More</a></span></h1>
			    <ul id="work">
	    		<?php 
		    		$i = 0;
	    			$the_query = new WP_Query(array('post_type' => 'works','posts_per_page' => 3, 'orderby' => 'rand'));
	    			wp_reset_postdata();
	    			while ( $the_query->have_posts() ) : $the_query->the_post();
						if($i%2 == 0):
						echo '<li>';?><a href="<?php the_permalink(); ?>">
						<?php else:
						echo '<li id=projectImpair>';?><a href="<?php the_permalink(); ?>">
						<?php endif; ?>
						<?php the_post_thumbnail(); ?></a>
							<?php $term = wp_get_post_terms($post->ID, 'techniques', array("fields" => "all",));
							
							if(count($term) > 0):		
						?>	
							<div>
				    			<h2><a href="<?php echo get_term_link($term[0]->name, 'techniques')  ?>"> <?php echo($term[0]->name) ?></a></h2>
				    			<p><?php echo($term[0]->description)?></p>
				    		</div>
							<?php
							echo '</li>';
						endif;
						$i++;	
					endwhile;
					wp_reset_postdata();
					wp_reset_query();
				?>
				</ul>
		    </section>	
		    <section id="about">
			    <h1>Learn more about 
			    	<span>me</span><span id="pageAbout"><a href="">More</a></span>
			    </h1>
			    <?php $email = get_the_author_meta('user_email');
			    	  $alt = 'Image de l\'auteur';
			    	  $size = 140;
			    	  echo get_avatar($email, $size, $defaults, $alt);
			    ?>
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