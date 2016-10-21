      <footer class="footer content-region-3 pt30 pb40">
          <div class="container">
              
            <!-- Footer 1 Widget -->
            <div class="col-lg-4">
            <?php if(is_active_sidebar('footer-1')) :  ?>
                <?php dynamic_sidebar('footer-1');  ?>
            <?php endif; ?>
            </div>
            <!-- /Footer 1 Widget -->

            <!-- Footer 2 Widget -->
            <div class="col-lg-4">
            <?php if(is_active_sidebar('footer-2')) :  ?>
                <?php dynamic_sidebar('footer-2');  ?>
            <?php endif; ?>
            </div>
            <!-- /Footer 2 Widget -->
              
            <!-- Footer 3 Widget -->
            <div class="col-lg-4">
             <?php if(is_active_sidebar('footer-3')) :  ?>
                <?php dynamic_sidebar('footer-3');  ?>
            <?php endif; ?>
            </div>
            <!-- /Footer 3 Widget -->
              
        </div>
      </footer>
      <?php wp_footer(); ?>


  </body>
</html>