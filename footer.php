<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ouroboros
 */

?>

	</div><!-- #content -->


</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Footer -->

  <div class="page-footer">
    <div class="container">
       <div class="col-xs-12 col-sm-12 col-md-12">
       	<footer id="colophon" class="site-footer text-center" role="contentinfo">
       		<div class="site-info">
       			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'ouroboros' ) ); ?>"><?php printf( esc_html__( 'Powered by %s', 'ouroboros' ), 'WordPress' ); ?></a>
       			<span class="sep"> | </span>
       			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'ouroboros' ), 'Ouroboros', '<a href="http://robcardenas.us" rel="designer">Rob Cardenas</a>' ); ?>
       		</div><!-- .site-info -->
       	</footer><!-- #colophon -->
       </div>
     </div>
  </div>
      
      
<!-- End Footer -->

   <!-- </div> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/assets/js/script.js"></script>

</body>
</html>
