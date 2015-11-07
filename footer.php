<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "content-container" div and all content after.
 */
?>
      </div>
      <div class="footer-container">
        <p>&copy;2015<?php if ( date( 'Y' ) > 2015 ): echo( '-' . date( 'Y' ) ); endif; ?> Marek Podsiadły</p>
      </div>
    </div>	
<?php wp_footer(); ?>
</body>
</html>
