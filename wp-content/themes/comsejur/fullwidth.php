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

    <!-- Text fullWidth Page -->
    <div class="page-content page-content--single">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="box-content">
                    <div class="row">
                        <div class="col post-col">
                            <article class="post">
                                <div class="post-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus lacinia posuere sem, eu placerat purus tristique eget. Aliquam sodales iaculis gravida. Nullam facilisis hendrerit bibendum. Pellentesque urna nunc, finibus at lacinia sit amet, pulvinar at eros. Aenean quis lorem id lacus vulputate ultrices. Maecenas sed dolor vulputate lectus egestas tempus. Duis tincidunt velit augue, nec malesuada urna varius in. Curabitur mollis lorem quis velit volutpat imperdiet. Vestibulum non lacus sem. Maecenas sagittis condimentum lorem eu cursus. Maecenas at risus accumsan, tempus massa at, porttitor elit. Suspendisse non dui tincidunt, tincidunt sem non, sodales ligula. Nullam id leo non urna feugiat rhoncus. Vestibulum dapibus ut metus non laoreet.</p>

                                    <p>Donec quis aliquam lorem. Cras sollicitudin pellentesque turpis, nec dignissim turpis fermentum vitae. In hac habitasse platea dictumst. Donec dictum dui nibh, sed condimentum quam semper vitae. Cras auctor eget nunc sit amet dictum. Cras pretium augue tellus, non imperdiet dolor rhoncus efficitur. Mauris vehicula augue sit amet fringilla fringilla. Vestibulum accumsan mauris congue, suscipit felis at, auctor elit. Vivamus feugiat dui vel erat pharetra, at tincidunt nibh ornare. Maecenas ac massa vel tellus congue rutrum tristique vel purus. Mauris hendrerit consectetur ipsum nec pulvinar. Vivamus ac tortor orci. Curabitur est ligula, hendrerit id dui eget, semper scelerisque magna. Sed auctor velit quam, eu iaculis tortor blandit sed.</p>

                                    <p>Integer pretium aliquet enim quis feugiat. Phasellus ac massa suscipit, tincidunt lorem malesuada, hendrerit nulla. Donec id libero tincidunt, bibendum eros ac, vestibulum nisl. Ut dignissim eros ac est vehicula imperdiet. Aliquam erat volutpat. Fusce ornare augue metus, ac egestas purus venenatis ac. Donec ipsum est, hendrerit non quam quis, accumsan fermentum ipsum. Proin porttitor, nunc nec suscipit vulputate, nisl massa malesuada enim, eget viverra lorem risus at odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla in posuere est. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce molestie tempus velit, ut vestibulum nulla sodales in.</p>

                                    <p>Vivamus id volutpat magna, eu finibus risus. Aliquam efficitur neque et urna varius, in tempor ex dapibus. Nam pulvinar est id purus congue, ac finibus nulla pharetra. Nulla ultricies orci vel magna venenatis, ut rhoncus nisl faucibus. Ut malesuada eros a ornare malesuada. Integer turpis lacus, elementum id tristique egestas, laoreet vitae ipsum. Nunc leo est, scelerisque sit amet tincidunt ut, sagittis non nisl. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean eget ex eu tellus consectetur aliquet. Aenean ultricies eros magna, at vestibulum lectus eleifend sed.</p>

                                    <p>Ut finibus varius ex, id auctor nisi posuere egestas. Duis viverra nisl in nibh sagittis, nec elementum neque auctor. Duis cursus scelerisque purus, ac interdum lorem vulputate lacinia. Suspendisse non tincidunt enim. In ut hendrerit ipsum, vitae tristique lectus. In ut ligula id libero auctor scelerisque eget id urna. Cras vitae dignissim tellus. Morbi vulputate rutrum pharetra. Nam diam sapien, consequat in volutpat sit amet, commodo id purus. Curabitur porta et lacus a aliquam.</p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php get_footer();?>