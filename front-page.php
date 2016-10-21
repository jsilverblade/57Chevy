<?php get_header();  ?>

      <div class="jumbotron">
        <div class="container">
            <h1><?php echo get_theme_mod('showcase_heading','Showcase Heading'); ?></h1>
            <p class="lead showcase"><?php echo get_theme_mod('showcase_text','The fiftysevenchevy theme is a simple theme with retro style.  It uses the BootStrap 3  framework and Font Awesome and can be customized to your liking.') ?></p>
            
            <!-- BUTTON -->
            <?php if(get_theme_mod('showcase_btn_url') != '')  : ?>
            <p><a class="btn btn-lg btn-primary" href="<?php echo get_theme_mod('showcase_btn_url'); ?>" role="button"><?php echo get_theme_mod('showcase_btn_text'); ?></a></p>
            <?php endif; ?>
            <!-- /BUTTON -->
        </div>
      </div>

      <!-- ROW MARKETING -->
      <section class="row marketing">
        <div class="container">  
            <div class="col-lg-4">
                <div class="block">
                    <i class="fa fa-<?php echo get_theme_mod('box1_icon','bar-chart'); ?> fa-3"></i>
                    <h3><?php echo get_theme_mod('box1_heading','Box 1 Heading'); ?></h3>
                    <p><?php echo get_theme_mod('box1_text','Bring to the table win-win survival strategies to ensure proactive domination.'); ?></p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="block">
                    <i class="fa fa-<?php echo get_theme_mod('box2_icon','code'); ?> fa-3"></i>
                    <h3><?php echo get_theme_mod('box2_heading','Box 2 Heading'); ?></h3>
                    <p><?php echo get_theme_mod('box2_text','Their house is a museum where people come to see ‘em. They really are a scream the Addams Family.'); ?></p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="block">
                    <i class="fa fa-<?php echo get_theme_mod('box3_icon','desktop'); ?> fa-3"></i>
                    <h3><?php echo get_theme_mod('box3_heading','Box 3 Heading'); ?></h3>
                    <p><?php echo get_theme_mod('box3_text','So join us here each week my friends you\'re sure to get a smile from seven stranded castaways here on Gilligans Isle.'); ?></p>
                </div>
            </div>
          </div>  
        </section><!-- /ROW MARKETING -->
        
        <!-- CONTENT-REGION-1 -->
        <?php if(is_active_sidebar('content-region-1')) : ?>
            <?php dynamic_sidebar('content-region-1'); ?>
        <?php endif; ?>
        <!-- /CONTENT-REGION-1 -->
   
        <!-- CONTENT-REGION-2 -->
        <?php if(is_active_sidebar('content-region-2')) : ?>
            <?php dynamic_sidebar('content-region-2'); ?>
        <?php endif; ?>
        <!-- /CONTENT-REGION-2 -->
      
<?php get_footer(); ?>

