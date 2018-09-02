<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">
	<!-- <div class="contact-form">
	<div class="row">
		<div class="col-md-12">
			<div class="contact-form-data m-auto text-center">
				<h2>CONTACT US</h2>
				<span>
				Srinakarin Dam<br>
				123 Moo 4<br>
				Subdistrict, District Province<br>
				<br>
				Tel. 123-4567890<br>
				info@chillsunset.com<br>
				</span>
			</div>
		</div>
	</div>


	</div> -->
	<div class="footer-menu bg-info">
	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">
			<div class="col-md-12">
			<div class="footer-logo m-auto">
			<center>
				<!-- Your site title as branding in the menu -->
				<?php if ( ! has_custom_logo() ) { ?>

				<?php if ( is_front_page() && is_home() ) : ?>

					<h1 class="navbar-brand logo-text mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">Logo</a></h1>

				<?php else : ?>
				<h1 class="navbar-brand logo-text mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">Logo</a></h1>
					<!-- <a class="navbar-brand logo-text" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a> -->

				<?php endif; ?>


				<?php } else {
				the_custom_logo();
				} ?><!-- end custom logo -->
			</center>
			</div>
			<nav class="navbar navbar-expand-md navbar-dark ">
			<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav m-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'footer-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
				</nav>
			</div>
		</div>

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">
						<center>
							<p style="color:white">COPPY RIGHT &copy; 2018</p>
						</center>
							
					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

		</div><!-- container end -->
	</div>

	

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

