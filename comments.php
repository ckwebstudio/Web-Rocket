<?php
/*
Web Rocket Theme Comment Templet.
*/
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
if ( post_password_required() ) {
	return;
}
?>

<?php
$web_rocket_comment_count = get_comments_number();
?>

<div id="comments"
	class="comments-area default-max-width <?php echo get_option( 'show_avatars' ) ? 'show-avatars' : ''; ?>">

	<?php
	if ( have_comments() ) :
		;
		?>
	<h2 class="comments-title">
		<?php if ( '1' === $web_rocket_comment_count ) : ?>
		<?php esc_html_e( '1 comment', 'web_rocket' ); ?>
		<?php else : ?>
		<?php
				printf(
					/* translators: %s: comment count number. */
					esc_html( _nx( '%s comment', '%s comments', $web_rocket_comment_count, 'Comments title', 'web_rocket' ) ),
					esc_html( number_format_i18n( $web_rocket_comment_count ) )
				);
				?>
		<?php endif; ?>
	</h2><!-- .comments-title -->

	<!-- comment pagination to write -->
	<ol class="comment-list">
		<?php
			$args= array(
				'avatar_size' => 40,
				'style'       => 'ol',
				'short_ping'  => true,
			);
			wp_list_comments();
			?>
	</ol><!-- .comment-list -->

	<?php if ( ! comments_open() && get_comments_number() ) : ?>
	<p class="no-comments">
		<?php esc_html_e( 'Comments are closed.', 'web_rocket' ); ?>
	</p>
	<?php endif; ?>
	<?php endif; ?>

	<!-- comment form -->
	<?php

	$fields   =  array(
		'author' => '<div class="mb-3">' . '<label for="author" class="form-label" >' . __( 'Name' ) .' <span class="required">*</span>' . '</label> ' .
					'<input id="author" name="author" class="form-control" type="text" value="' . esc_attr( $commenter['comment_author'] ). '" required= "required" ></div>',
		
		'email'  => '<div class="mb-3"><label for="email class="form-label">' . __( 'Email' ) . ' <span class="required">*</span>'.'</label> ' .
		'<input id="email" name="email" class="form-control ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '"required= "required" /></div>',

		'url'    => '<div class="mb-3"><label for="url">' . __( 'Website' ) . '</label> ' .
                '<input id="url" name="url" class="form-control"' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" /></div>',
);

	$args = array(
		'class_submit'  => 'btn btn-primary',
		'label_submit'  => _('Post Your Comment'),
		'title_reply'   => esc_html__( 'Leave a comment', 'web_rocket' ),
		'comment_field' => '<div class="form-floating mb-3">'. _x('Comment' , 'noun'). '<textarea id="comment" name="comment" class="form-control" placeholder="Leave a comment here" 
		style="height: 100px"  required="required"></textarea></div>',
		'fields'        => apply_filters('comment_form_default_fields' , $fields )
	);

	comment_form($args);
	?>

</div><!-- #comments -->