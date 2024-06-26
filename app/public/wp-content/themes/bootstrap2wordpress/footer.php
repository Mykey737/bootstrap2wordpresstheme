
    <footer>

      <?php if (get_theme_mod( 'footer_calltoaction_visibility' )) { ?>

        <div class="footer-calltoaction text-center">
          <div class="container">
            <div class="row">
              <div class="col-md-8 offset-md-2 overflow-hidden">
                <p class="sub-title"><?php  echo esc_html( get_theme_mod( 'footer_sub_heading', 'Join The Course' ) ); ?></p>
                <h2><?php  echo esc_html( get_theme_mod( 'footer_calltoaction_heading', 'Bootstrap To Wordpress 2.0' ) ); ?></h2>
                <p class='fcta-desc'><?php  echo esc_html( get_theme_mod( 'footer_calltoaction_desc', 'Learn how to design and build custom, beautiful & responsive WordPress websites and themes for beginner in 2024 and beyond!' ) ); ?></p>
                <a href="<?php  echo esc_html( get_theme_mod( 'footer_cta_link', '#' ) ); ?>" class="btn btn-primary"><?php  echo esc_html( get_theme_mod( 'footer_calltoaction_button', 'Join Now ->' ) ); ?></a>
              </div>
            </div>
          </div>
        </div>

      <?php } ?>

        <div class="copyright text-center">
          <p><?php echo wp_kses_post( get_theme_mod( 'footer_copyright', 'Copyright Mike Peña Web Design' ) ); ?></p>
        </div>
    </footer>
      
    <?php wp_footer(); ?>

  </body>

</html>