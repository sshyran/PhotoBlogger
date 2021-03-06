<?php
/**
 * The template for displaying Author bios
 *
 * @package PhotoBlogger
 * @since photoblogger 1.0
 */
?>

<div class="author-info">
	<div class="author-info-inner main-width">
		<h2 class="author-heading screen-reader-text"><?php esc_html_e( 'Published by', 'photoblogger' ); ?></h2>

		<div class="author-avatar">
			<?php
			/**
			 * Filter the author bio avatar size.
			 *
			 * @since photoblogger 1.0
			 *
			 * @param int $size The avatar height and width size in pixels.
			 */
			$author_bio_avatar_size = apply_filters( 'photoblogger_author_bio_avatar_size', 88 );

			echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
			?>
		</div><!-- .author-avatar -->

		<div class="author-description">
			<h3 class="author-title"><?php echo esc_html( get_the_author() ); ?></h3>

			<span class="author-bio">
				<?php  echo wp_kses( wpautop( get_the_author_meta( 'description' ) ), array(
					'a'		=> array( 'class' => true, 'href' => true ),
					'p'		=> array(),
					'span'	=> array( 'class' => true ), ) ); ?>
			</span><!-- .author-bio -->

			<a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
				<?php printf( esc_html__( 'View all posts by %s', 'photoblogger' ), esc_html( get_the_author() ) ); ?>
			</a><!-- .author-link -->

		</div><!-- .author-description -->
	</div><!-- .author-info-inner -->
</div><!-- .author-info -->
