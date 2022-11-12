<?php
/**
 * The Comments template file
 *
**/
if (post_password_required())
    return;
?>
<div class="clearfix"></div>
<div id="comments" class="article-title">
    <?php if (have_comments()) : ?>
        <div class="article-title">
            <h2>
             <?php 
             printf( // WPCS: XSS OK.
                    /* translators: 1: comment count number */
                    esc_html( _nx( '%1$s Comment', '%1$s Comments;', get_comments_number(), 'comments title', 'educate' ) ),
                    number_format_i18n(get_comments_number() )       );   ?>   

            </h2>
        </div>
        <ol class="comments-box clearfix ">
        <?php wp_list_comments(array('avatar_size' => 80, 'style' => 'ol', 'short_ping' => true,)); ?>
        </ol>
        <?php  paginate_comments_links(); ?>
    <?php endif; ?>
<?php  comment_form(); ?>
</div>
