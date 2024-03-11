<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package azmoon
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
            <div class="row mainView mainFooter">
              <div class="col s12 m8">
                <h5 class="white-text">لوگو</h5>
                <a class="grey-text text-lighten-4" href="#">لورم ایپسوم</a>
                <a class="grey-text text-lighten-4" href="#">لورم ایپسوم</a>
                <a class="grey-text text-lighten-4" href="#">لورم ایپسوم</a>
                <a class="grey-text text-lighten-4" href="#">لورم ایپسوم</a>
                <a class="grey-text text-lighten-4" href="#">لورم ایپسوم</a>
              </div>
              <div class="col s12 m4">
                <h5 class="white-text">عضویت در خبرنامه</h5>
                <?php echo do_shortcode('[contact-form-7 id="45ce08f" title="عضویت خبرنامه"]') ?>
              </div>
            </div>
          <div class="footer-copyright mainView copyRight">
            <a  class="grey-text text-lighten-4"href="#">© 2014 Copyright Text</a>
            <a class="grey-text text-lighten-4 right" href="#!">لورم ایپسوم</a>
            <a class="grey-text text-lighten-4 right" href="#!">لورم ایپسوم</a>
            <a class="grey-text text-lighten-4 right" href="#!">لورم ایپسوم</a>
          </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/materialize/js/bin/materialize.min.js"></script>
</body>
</html>
