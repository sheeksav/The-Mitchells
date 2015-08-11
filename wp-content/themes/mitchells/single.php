<?php get_header(); ?>


<div class="container" style="margin-top: 5%;">

      <div class="row">

        <div class="col-xs-2 text-left" style="margin-top: 7%;">

            <a href="http://noisetrade.com/themitchells/the-mitchells/?link=download" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/TheMitchells_site_FNL_06.png" /></a>
            <div>&nbsp;</div>
            <a href="http://noisetrade.com/themitchells/the-mitchells/?link=listen" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/TheMitchells_site_FNL_13.png" /></a>

        </div> <!--/.col-->

        <div class="col-xs-8">
            <div class="col-inner">

                <div class="text-center">
                    <img src="<?php bloginfo('template_url'); ?>/img/mitchells-logo-brown.png" width="220" />
                </div>

               <?php
				if ( have_posts() ) : while ( have_posts() ) : the_post();
				?>


				<div class="post-heading">

					<h1><?php the_title(); ?></h1>
					<div class="date"><?php echo get_the_date(); ?>&nbsp;&nbsp;|&nbsp;&nbsp;Posted by <?php the_author_posts_link(); ?> in <?php the_category(', '); ?></div>

				</div> <!--/post-heading-->

				<div>
				<?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail('large');
				}
				?>
				</div>



				<div>&nbsp;</div>


				<div class="content"><?php the_content(); ?></div>

				<?php
				endwhile;
				else:
				?>

				  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

				<?php
				endif;
				?>

				<div>&nbsp;</div>
				<a class="btn btn-primary" href="/blog/">Return to Blog</a>


            </div> <!--/.col-inner-->
        </div> <!--/.col-->

        <div class="col-xs-2 text-right" style="margin-top: 7%;">

          <a href="https://noisetrade.com/themitchells/the-mitchells/?tip=1" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/TheMitchells_site_FNL_09.png"  /></a>
            <div>&nbsp;</div>
          <a href="/shows/"><img src="<?php bloginfo('template_url'); ?>/img/TheMitchells_site_FNL_14.png" /></a>

        </div> <!--/.col-->

      </div> <!--/.row-->

    </div><!-- /.container -->




<?php get_footer(); ?>









