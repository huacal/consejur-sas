<?php get_header();?>
<!-- Banner page title -->
    <section id="pageTitle">
                <div class="overlay-pattern color-bg-dark opacity-60"></div><!-- .overlay-colored end -->
                <div class="section-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <?php if(is_category() ):?>
                                    <h1><?php _e('Categoria:',  'csj'); ?> <?php single_cat_title(); ?></h1>

                                <?php elseif( is_tag() ):?>
                                    <h1><?php _e('Etiqueta:',  'csj'); ?> <?php single_tag_title(); ?></h1>

                                <?php elseif( is_search() ):?>
                                    <h1><?php _e('Resultado de busqueda para:',  'csj'); ?> <?php the_search_query(); ?></h1>
                                
                                <?php elseif( is_day() ):?>
                                    <h1><?php _e('Archivo:',  'csj'); ?> <?php the_time( get_option('date_format') ); ?></h1>

                                <?php elseif( is_month() ):?>
                                    <h1><?php _e('Archivo:',  'csj'); ?> <?php the_time( 'F Y' ); ?></h1>

                                <?php elseif( is_year() ):?>
                                    <h1><?php _e('Archivo:',  'csj'); ?> <?php the_time( 'Y' ); ?></h1>
                                
                                <?php elseif( is_author() ):?>
                                    <h1>
                                        <?php _e('Artículos de:', 'csj'); ?> 
                                        <?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));?>
                                        <?php echo $curauth -> display_name; ?>

                                    </h1>
                                <?php elseif( is_404() ):?>
                                    <h1><?php _e('No se encontró la página', ' csj');?></h1>

                                <?php elseif( is_home() ): ?>
                                    <?php if(is_front_page() ): ?>

                                        <h1><?php _e('Blog Comsejur', 'csj');?></h1>

                                    <?php else: ?>
                                        <h1><?php wp_title(' ', true, 'right');?></h1>
                                    <?php endif;?>
                                <?php else:?>
                                    <h1><?php wp_title(' ', true, 'right');?></h1>
                                <?php endif;?>

                            </div>
                        </div>
                    </div>
                </div>
    </section>

    <section class="blog-content">
        <div class="container">
            <div class="row">
                <?php if(is_active_sidebar('main-sidebar')):?>
                <div class="col-md-9">
                <?php else: ?>
                    <div class="col-md-12">
                    <?php endif;?>
                    <div class="main-content">
                        <div class="row">
                            <?php if(have_posts() ): while( have_posts() ): the_post();?>

                            <div class="col-md-6 post-col">
                                <article id="post- <?php the_ID(); ?>" <?php post_class('post');?>>

                                    <?php if(! has_post_format('video') ): ?>

                                        <?php if( has_post_thumbnail() ): ?>
                                            <div class="post-thumbnail">
                                                <?php the_post_thumbnail('image_size_blog');?>
                                            </div>
                                        <?php endif; ?>

                                            <?php else: ?>

                                            <div class="post-thumbnail">
                                            <?php the_content();?>
                                            </div>

                                    <?php endif; ?>

                                    <div class="post-content">
                                        <h3 class="post-title"><?php the_title();?></h3>
                                        <div class="post-excerpt">
                                        <?php the_excerpt();?>
                                        </div>
                                    <a href="<?php the_permalink(); ?>" class="btn small colorful "><?php _e('VER MÁS', 'csj') ?></a>
                                </article>
                            </div>

                            <?php endwhile; else: ?>

                                 <?php get_template_part('template-parts/content', 'nopost'); ?>

                                <?php endif;?>

                        </div>

                        <!-- Nav posts galery -->
                        <?php if(get_next_posts_link() || get_previous_posts_link() ): ?>
                            <div class="row">
                                    <div class="col">
                                        <div class="post-navigation">
                                            <nav class="nav justify-content-between">
                                                <div class="before-posts-link">
                                                    <?php next_posts_link(__('<i class="fa fa-arrow-left" aria-hidden="true"></i> Artículos antiguos', 'csj'));?>
                                                </div>
                                                <div class="next-posts-link">
                                                    <?php previous_posts_link(__('Artículos recientes <i class="fa fa-arrow-right" aria-hidden="true"></i>'));?>
                                                </div>
                                            </nav>
                                        </div>
                                    </div>
                            </div>
                        <?php endif;?>

                    </div>
                </div><!-- End container general --> 
                <div class="col-md-3">
                    <?php get_sidebar();?>
                </div>     
            </div>
        </div>
    </section>
   
<?php get_footer();?>