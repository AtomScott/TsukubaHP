<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			<!-- </div> -->
            <!-- .row -->
		<!-- </div> -->
        <!-- .container -->
	<!-- </div> -->
    <!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h1 style="font-size:150pt">常勝</h1>
                    </div>
                    <div class="col-3" style="text-align:left">
                        <h3>蹴球部とは</h3>
                            <p>歴史</p>
                        <h3>メンバ</h3>
                            <p>2年</p>
                        <h3>アトム</h3>
                            <p>スコット</p>
                    </div>
                    <div class="col-3">
                        <h1 style="border:3px solid white">関東リーグ</h1>
                        <h1 style="border:3px solid white">JUFA</h1>
                        <h1 style="border:3px solid white">シェアトレー</h1>
                    </div>
                </div>
            </div>
            <div class="site-info">
                <a href="<?php echo esc_url( home_url( '/' )); ?>" title="<?php echo bloginfo('name') ?>" rel="generator"><?php echo bloginfo('name') ?></a>
            </div><!-- close .site-info -->
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
