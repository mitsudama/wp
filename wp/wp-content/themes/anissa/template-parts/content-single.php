<?php
/**
 * Template part for displaying single posts.
 *
 * @package anissa
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="entry-cat">
			&mdash; <?php the_category( ', ' ) ?> &mdash;
		</div><!-- .entry-cat -->
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <div class="entry-datetop">
			<?php the_time( get_option( 'date_format' ) ); ?>
		</div><!-- .entry-datetop -->
	</header><!-- .entry-header -->
    
    <?php if ( is_single() || is_page() && has_post_thumbnail() ) : ?>
		<div class="featured-header-image">
				<?php the_post_thumbnail( 'anissa-home' ); ?>
		</div><!-- .featured-header-image -->
	<?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'anissa' ),
				'after'  => '</div>',
			) );
		?>
		<?php
$url = get_permalink();
print <<<HTMLBLOCK
<div id="fb-root" style="margin-bottom:30px;"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like" data-href="$url" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
<a href="https://twitter.com/share" class="twitter-share-button" data-via="mitsudama_jp">Tweet</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
HTMLBLOCK;
?>
	</div><!-- .entry-content -->

	<footer class="entry-footer clear">
		<?php anissa_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

