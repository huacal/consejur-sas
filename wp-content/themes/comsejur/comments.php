<?php if( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename($_SERVER['SCRIPT_FILENAME']) == 'comments.php' ): ?>
    <?php die(); ?>
<?php endif; ?>
<?php if( post_password_required() ):?>
    <p><?php _e('Se necesita contaseña para visualizar este contenido', 'csj');?></p>
<?php endif; ?>

<h2 class="comment-title"><?php comments_number(__('Escribe un Comentario...', 'csj'), __('Un Comentario: ', 'csj'), __('Comentarios: <span> (%)</span>', 'csj') );?></h2>
<div class="comments-container">
    <?php wp_list_comments();?>
    
</div>
    
    <?php if (get_comment_pages_count() > 1 && get_option('page_comments') ): ?>
        
        <!-- Nav posts galery -->
        <div class="row">
                    <div class="col">
                        <div class="post-navigation">
                            <nav class="nav justify-content-between">
                                <div class="before-posts-link">
                                    <?php previous_comments_link(__('<i class="fa fa-arrow-left" aria-hidden="true"></i> Comentarios anteriores ', 'cjs')) ?>
                                </div>
                                <div class="next-posts-link">
                                <?php next_comments_link(__('Comentarios siguientes <i class="fa fa-arrow-right" aria-hidden="true"></i>', 'csj'))?>
                                </div>
                            </nav>
                        </div>
                    </div>
            </div>
    <?php endif;?>
    <div class="pb-60"></div>
    <?php comment_form();?>
</div>


