<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>
<?php if ( is_front_page() && is_home() ) : ?>
	<div class="blog-content">
		<div class="blog-img">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Pic-2.jpg">
		</div>
		<div class="blog-content-data">
			<h3>Chill Sunset Resort</h3>
			<span>
			Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem 
			</span>
		</div>
		<div class="blog-content-detail">
			<span>
			Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem 
			</span>
		</div>
	</div>
	<div class="container">
		<!-- <div class="blog-room">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1>ROOMS</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Pic-3.jpg">
				</div>
			</div>
		</div>

		<div class="blog-gallery">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1>GALLERY</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gallery.png">
				</div>
			</div>
		</div> -->

		<div class="blog-experience">
			<div class="blog-experience-content">
				<h3>Chill Sunset Resort</h3>
				<span>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem 
				</span>
			</div>
			<div class="blog-experience-img">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Pic-5.png">
			</div>
			<div class="blog-experience-space">

			</div>
		</div>

		<div class="blog-experience">
			<div class="blog-experience-space">

			</div>
			<div class="blog-experience-img">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Pic-6.png">
			</div>
			<div class="blog-experience-content">
				<h3>Chill Sunset Resort</h3>
				<span>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem 
				</span>
			</div>
		</div>

	</div>
<?php else : ?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
		'</a></h2>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>

			<div class="entry-meta">
				<?php understrap_posted_on(); ?>
			</div><!-- .entry-meta -->

		<?php endif; ?>

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

		<?php
		the_excerpt();
		?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
<?php endif; ?>