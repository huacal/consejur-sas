<?php
/* 
* Register Menu
*
*
*@Packes
*@since 1.0
*
*/

function csj_menus(){
    register_nav_menus(
        
        array(
        'main-menu' => __('Menu principal encabezado', 'csj')
         )
);
}

add_action('init', 'csj_menus');