<?php
global $redux_builder_amp;
if (!comments_open() || $redux_builder_amp['ampforwp-disqus-comments-support']) {
  return;
} ?>

<?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if( ! is_plugin_active( 'amp-comments/amp-comments.php' ) ) { ?>
	<div class="comment-button-wrapper ampforwp-comment-button">
			<a href="<?php echo trailingslashit( get_permalink() ).'?nonamp=1'.'#commentform'  ?>" rel="nofollow"><?php ampforwp_translation( $redux_builder_amp['amp-translator-leave-a-comment-text'], 'Leave a Comment'  ); ?></a>
	</div>
<?php } ?>