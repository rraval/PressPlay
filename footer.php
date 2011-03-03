<?php // initialize Theme Options variables
	global $options;
	foreach ($options as $value){
		if (get_option( $value['id'] ) === FALSE){
			$$value['id'] = $value['std'];
		} else {
			$$value['id'] = get_option( $value['id'] );
		}
	} ?>
</div><!-- #sidebar -->

</div><!-- #wrapper -->

<div id="footer">

	<div id="footer-container">

		<ul class="footer-widget">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Left Footer') ) : ?>
			<li></li>
<?php endif; ?>
		</ul><!-- .footer-widget -->

		<ul class="footer-widget">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Middle Footer') ) : ?>
			<li></li>
<?php endif; ?>
		</ul><!-- .footer-widget -->

		<ul class="footer-widget">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Footer') ) : ?>
			<li></li>
<?php endif; ?>
		</ul><!-- .footer-widget -->

		<div id="footer-credits">
			<?php _e('Powered by', 'pressplay'); ?> <a href="http://www.wordpress.org"><?php _e('WordPress', 'pressplay'); ?></a> <?php _e('and the', 'pressplay'); ?> <a href="http://pressplaying.com"><?php _e('PressPlay Theme', 'pressplay'); ?></a>
            <div class="footer-right"><?php
                _e('Copyright &copy; ', 'pressplay');
                echo date('Y');
                echo ' ';
                if($pp_footer_copyright == "") {
                    bloginfo('name');
                } else {
                    echo $pp_footer_copyright;
                }
                wp_meta(); ?>
            </div>
		</div><!-- #footer-credits -->

<?php wp_footer(); // for plugins ?>

	</div><!-- #footer-container -->

</div><!-- #footer -->

<div class="divclear"></div>

</body>

</html>
