<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package exam
 */
?>
<footer class="exam-footer">
    <div class="exam-container exam-footer__container">
        <div class="exam-footer__first">
	        <h2 class="exam-footer__logo">
		        <?php the_custom_logo();?>
            </h2>
            <a class="exam-btn exam-footer__btn-letter" href="#">
                sign up our newsletter
            </a>
        </div>
        <div class="exam-footer__second">
            <span>© 2018 MI Talent. Designed by Tranmautritam for Mass Impressions.</span>
            <div class="exam-footer__socials">
		        <?php
		        for ( $i = 0; $i < 6; $i ++ ) {
			        $url = get_theme_mod( 'social_url_'.$i );
			        if ( $url ) {
				        ?>
                        <a class="exam-footer__socials-link" href="<?php echo $url ?>">
                            <i class="fa <?php echo get_theme_mod( 'social_label_'.$i ) ?>" aria-hidden="true"></i>
                        </a>
				        <?php
			        }
		        }
		        ?>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
