<?php /* Template Name: Inside Page */ ?>

<?php get_header(); ?>


<div class="container" style="margin-top: 5%;">

      <div class="row">

        <div class="col-xs-2 text-left hidden-xs" style="margin-top: 7%;">

            <a href="http://noisetrade.com/themitchells/the-mitchells/?link=download" target="_blank"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/TheMitchells_site_FNL_06.png" /></a>
            <div>&nbsp;</div>
            <a href="http://noisetrade.com/themitchells/the-mitchells/?link=listen" target="_blank"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/TheMitchells_site_FNL_13.png" /></a>

        </div> <!--/.col-->

        <div class="col-xs-12 col-md-8">
            <div class="col-inner">

                <div class="text-center">
                    <img src="<?php bloginfo('template_url'); ?>/img/mitchells-logo-brown.png" width="220" />
                </div>

                <!-- <h1><?php the_title(); ?></h1> -->

				<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

				<?php endwhile; ?>


            </div> <!--/.col-inner-->
        </div> <!--/.col-->

        <div class="col-xs-2 text-right hidden-xs" style="margin-top: 7%;">

          <a href="https://noisetrade.com/themitchells/the-mitchells/?tip=1" target="_blank"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/TheMitchells_site_FNL_09.png"  /></a>
            <div>&nbsp;</div>
          <a href="/shows/"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/TheMitchells_site_FNL_14.png" /></a>

        </div> <!--/.col-->

      </div> <!--/.row-->

    </div><!-- /.container -->




<?php get_footer(); ?>