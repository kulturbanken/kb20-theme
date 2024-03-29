<?php get_header(); ?>
<div class="art-content-layout">
    <div class="art-content-layout-row">
        <div class="art-layout-cell art-sidebar1">
         <div class="art-layout-glare">
          <div class="art-layout-glare-image"></div>
         </div>
          <?php get_sidebar('default'); ?>
          <div class="cleared"></div>
        </div>
        <div class="art-layout-cell art-content">
			<?php get_sidebar('top'); ?>
			<?php 
				if(have_posts()) {
					
					/* Start the Loop */ 
					while (have_posts()) {
						the_post();
						get_template_part('content', 'page');
						comments_template();
					}

				} else {
				
					 theme_404_content();
					 
				} 
		    ?>
			<?php get_sidebar('bottom'); ?>
          <div class="cleared"></div>
        </div>
    </div>
</div>
<div class="cleared"></div>
<?php get_footer(); ?>