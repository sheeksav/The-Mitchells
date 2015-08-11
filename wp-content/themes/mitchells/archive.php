<?php get_header(); ?>

<div class="content-container">

	<div class="container">
	
		
	
		<div class="row">
			<div class="col-xs-12 col-sm-8">
			
				<!-- Go to www.addthis.com/dashboard to customize your tools -->
				<div class="addthis_sharing_toolbox"></div>
			
				<h1><?php single_cat_title('',true); ?></h1>
				
				
				<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post();
				?>
				
				
				<div class="entry">
					
					
					<div class="post-heading">
						
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<!--<div class="pub-date"><?php echo get_the_date(); ?>&nbsp;<?php echo get_the_time(); ?></div>-->  
						<div class="date"><?php echo get_the_date(); ?>&nbsp;&nbsp;|&nbsp;&nbsp;Published by <?php the_author_posts_link(); ?> in <?php the_category(', '); ?></div>
					
					</div> <!--/post-heading-->
					
					<?php 
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
							the_post_thumbnail('medium');
					} 
					?>
				
				
					<p><?php the_excerpt(); ?></p>
					
					<a class="btn btn-primary" class="more-link" href="<?php the_permalink(); ?>">Read More</a>
				
				</div> <!--/entry-->
				  
				
				<?php
				endwhile;
				else:
				?>
				
				  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				
				<?php
				endif;
				?>
			
			</div> <!--/col-->
			
			<div class="col-xs-12 col-md-4 category-sidebar">
			
				<h3>Categories</h3>
				<ul class="categories">
				<?php wp_list_cats(); ?>
				</ul>
				
				<h3>Archive</h3>
				<ul class="archives">
				<?php wp_get_archives('type=monthly'); ?>
				</ul>
			
			</div>
			
		</div> <!--/row-->
		
		<div class="row">
			<div class="col-xs-12 col-sm-8">
			
				<div class="navigation">
					
					<div class="alignleft"><?php next_posts_link('&laquo; Older') ?></div>
					<div class="alignright"><?php previous_posts_link('Newer &raquo;') ?></div>
					<br style="clear:both;" />
				</div>
		
			</div>
		</div>
		
	</div> <!--/container-->

</div> <!--/news-archive-->

<?php get_footer(); ?>