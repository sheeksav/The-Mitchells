<?php get_header(); ?>

      <div class="container text-center" style="margin-top: 7%;">


        <div class="col-xs-12 col-md-3 text-left hidden-xs">
          <a href="http://noisetrade.com/themitchells/the-mitchells/?link=download" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/TheMitchells_site_FNL_06.png" /></a>
          <div>&nbsp;</div>
          <a href="http://noisetrade.com/themitchells/the-mitchells/?link=listen" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/TheMitchells_site_FNL_13.png" /></a>
        </div>

        <div class="col-xs-12 col-md-6 text-center">
          <img class="logo-main" src="<?php bloginfo('template_url'); ?>/img/TheMitchells_site_FNL_03.png" />
	
	<div class="row" id="feature-message-row">
	<div class="col-xs-12">
	<div class="col-inner">
	<?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
	</div>
	</div>
	</div>


        </div>

        <div class="col-xs-12 col-md-3 text-right hidden-xs">
          <a href="https://noisetrade.com/themitchells/the-mitchells/?tip=1" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/TheMitchells_site_FNL_09.png" /></a>
          <div>&nbsp;</div>
          <a href="/shows/"><img src="<?php bloginfo('template_url'); ?>/img/TheMitchells_site_FNL_14.png" /></a>
        </div>

      </div> <!--/.row-->

      


    </div><!-- /.container -->
        
	    
          
<?php get_footer(); ?>

    