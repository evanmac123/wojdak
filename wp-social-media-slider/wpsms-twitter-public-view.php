<?php
/**
 * The view file for the public facing Twitter posts.
 *
 * This file can be overwritten by copying to a /wp-social-media-slider folder
 * inside your child theme directory.
 *
 * @since  1.1.1
 */
?>

<div class="wpsms-item wpsms-twitter">

	<?php do_action( 'wpsms-before-post', $post ); ?>

	<?php // The link to the social network account, and the post time ?>
	<div class="wpsms-meta-info wpsms-icon-twitter">
		<a class="twitter-name" href="http://www.twitter.com/<?php echo $post->username; ?>" target="_blank">Wojdak Gov Relations<div class="twitter-username">@<?php echo $post->username; ?></div></a>
	</div>

	<?php // Display the post image at the left, if one exists ?>

	<?php // Display the html of the actual tweet ?>
	<div class="wpsms-body-text">
		<?php echo $post->html; ?>
		<?php if( $post->shortened ) : ?>
			<a href="<?php echo $post->url; ?>" class="wpsms-read-more" target="_blank">
				<?php echo $post->read_more_text; ?>
			</a>
		<?php endif; ?>
	</div>
	<p class="post-time"><?php echo $post->date; ?></p>
	<?php do_action( 'wpsms-after-post', $post ); ?>

</div>
