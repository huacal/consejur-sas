<?php get_header(); ?>
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

        <!-- Page Single -->

        <section id="mainSingle" class="main-single">
            <div class="page-content page-content--single">

                        <?php if(have_posts() ): while(have_posts() ): the_post(); ?>
                        
                        <div class="post">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                            <h2 class="post-title"><?php the_title();?></h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 mb-4 mb-lg-0">
                                <div class="single-detail">
                                    <span>Publicado:</span>
                                    <strong class="post-date"> <?php the_time(get_option('date_format'));?> </strong> 
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 mb-4 mb-sm-0">
                                <div class="single-detail">
                                    <span>Categoría:</span>
                                    <strong class="post-category"><?php the_category(' / '); ?></strong>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 mb-4 mb-sm-0">
                                <div class="single-detail">
                                    <span>Etiquetas: </span>
                                    <strong class="post-tags"><?php the_tags('');?></strong>
                                    
                                </div>
                            </div>
                            
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="share-social">
                                    <a href="https://www.facebook.com/comsejur" target="_self"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://twitter.com/comsejur" target="_self"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.instagram.com/comsejursas/" target="_self"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <?php if( has_post_thumbnail() ): ?>
                                    <div class="post-thumbnail">
                                        <?php the_post_thumbnail('image_size_single');?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="post-content">
                                    <div class="post-excerpt">
                                        <?php the_content();?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Start Information author post -->
                        <div class="row author-info-row">
                            <div class="col-12">
                                <hr>
                            </div>
                            <div class="col col-auto">
                                <div class="author-info">
                                <?php if(get_avatar(get_the_author_meta('ID') ) ):?>
                                    <img src="<?php echo IMAGESPATH; ?>/files/avatar-default.png" alt="">
                                <?php else:?>
                                    <?php get_avatar(get_the_author_meta('ID'));?>
                                <?php endif;?>
                                    <div class="author-name">
                                        <p>Escrito por: <?php the_author_posts_link();?></p>
                                        <span><?php the_author_meta('nickname');?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="post-meta text-right">
                                    <div class="post-categories"></div>
                                    <div class="post-tags"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <hr>
                            </div>
                        </div><!-- end information author post -->

                    <?php endwhile; endif;?>
                        

                        <!-- start section comments -->
                        <div class="row">
                            <div class="col-md-12">
                                
                                   
                            <?php comments_template('', true);?>

                                
                            
                        
                        </div> <!-- End section comments -->

                        
                        
                        
                    </div>
        </div>
    </div>

    </section>

<?php get_footer();?>