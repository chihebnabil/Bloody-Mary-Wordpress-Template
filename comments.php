<?php
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				$comments_number = get_comments_number();
				if ( 1 === $comments_number ) {
					/* translators: %s: post title */
					printf( _x( 'One thought on &ldquo;%s&rdquo;', 'comments title', 'bloody-mary' ), get_the_title() );
				} else {
					printf(
						/* translators: 1: number of comments, 2: post title */
						_nx(
							'%1$s thought on &ldquo;%2$s&rdquo;',
							'%1$s thoughts on &ldquo;%2$s&rdquo;',
							$comments_number,
							'comments title',
							'bloody-mary'
						),
						number_format_i18n( $comments_number ),
						get_the_title()
					);
				}
			?>
		</h2>

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 42,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php the_comments_navigation(); ?>

	<?php endif; // Check for have_comments(). ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'bloody-mary' ); ?></p>
	<?php endif; ?>

	<?php
		comment_form( array(
			'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
			'title_reply_after'  => '</h2>',
			'class_submit'      => 'btn btn-primary',
			'comment_field' =>  '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'bloody-mary' ) .
    '</label><textarea id="comment" class="form-control" name="comment" cols="45" rows="8" aria-required="true">' .
    '</textarea></p>',
		'fields' =>  array(

  'author' =>
    '<p class="comment-form-author"><label for="author">' . __( 'Name', 'bloody-mary' ) . '</label> ' .
    ( $req ? '<span class="required">*</span>' : '' ) .
    '<input id="author"class="form-control"  name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
    '" size="30"/></p>',

  'email' =>
    '<p class="comment-form-email"><label for="email">' . __( 'Email', 'bloody-mary' ) . '</label> ' .
    ( $req ? '<span class="required">*</span>' : '' ) .
    '<input id="email"class="form-control"  name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
    '" size="30" /></p>',

  'url' =>
    '<p class="comment-form-url"><label for="url">' . __( 'Website', 'bloody-mary' ) . '</label>' .
    '<input id="url"class="form-control"  name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
    '" size="30" /></p>',
)

		) );
	?>

</div><!-- .comments-area -->