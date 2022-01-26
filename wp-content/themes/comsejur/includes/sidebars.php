<?php
/* 
* Register palce Sidebars
*
*
*
*/


function csj_sidebars(){
    register_sidebar(array(

        'name'           =>  __( 'Sidebar lateral', 'csj'),
        'id'             => "main-sidebar",
        'description'    => '',
        'class'          => '',
        'before_widget'  => '<div id="%1$s" class="widget %2$s">',
        'after_widget'   => "</div>\n",
        'before_title'   => '<h3 class="widget-title">',
        'after_title'    => "</h3>",
        'before_sidebar' => '',
        'after_sidebar'  => '',
        
    ));

    register_sidebar(array(

        'name'           =>  __( 'Pie de Página Zona Izquierda', 'csj'),
        'id'             => "sidebar-footer-1",
        'description'    => '',
        'class'          => '',
        'before_widget'  => '<div id="%1$s" class="widget text-center %2$s">',
        'after_widget'   => "</div>\n",
        'before_title'   => '<h5 class="widget-title">',
        'after_title'    => "</h5>",
        'before_sidebar' => '',
        'after_sidebar'  => '',
        
    ));

    register_sidebar(array(

        'name'           =>  __( 'Pie de Página Zona Central', 'csj'),
        'id'             => "sidebar-footer-2",
        'description'    => '',
        'class'          => '',
        'before_widget'  => '<div id="%1$s" class="widget %2$s">',
        'after_widget'   => "</div>\n",
        'before_title'   => '<h5 class="widget-title">',
        'after_title'    => "</h5>",
        'before_sidebar' => '',
        'after_sidebar'  => '',
        
    ));

    register_sidebar(array(

        'name'           =>  __( 'Pie de Página Zona Derecha', 'csj'),
        'id'             => "sidebar-footer-3",
        'description'    => '',
        'class'          => '',
        'before_widget'  => '<div id="%1$s" class="widget %2$s">',
        'after_widget'   => "</div>\n",
        'before_title'   => '<h5 class="widget-title">',
        'after_title'    => "</h5>",
        'before_sidebar' => '',
        'after_sidebar'  => '',
        
    ));
}

add_action('widgets_init', 'csj_sidebars');