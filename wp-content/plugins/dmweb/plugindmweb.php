<?php
/**
 * @package dmweb
 * @version 1.0.0
 */
/*
Plugin Name: dmplugin
Plugin URI: http://dmweb.fr
Description: Ceci est un plugin à utiliser via ShortCode faisant clacyl en TTC ou TTC en HT avec choix du taux de TAV (en JS)
Version: 1.0.0
Author URI: Tiana
*/

register_activation_hook(__FILE__,function( ){
    touch(__DIR__ , '/demo');
});
register_deactivation_hook(__FILE__,function( ){
    unlink(__DIR__ , '/demo');
});




add_action('wp_footer' ,'say_hello');
add_filter('default_content','contenu_par_defaut');
add_filter('the_content','insererApresContenu');
add_shortcode('nouveauShortcode' ,'gererShortcode');


function insererApresContenu($content){
    $content .= '<p>RINDRfgsdvf</p>';
    return $content;
}
function say_hello(){
    echo('<p> plugin dmweb</>');
}

function gererShortcode(){
    echo('<p>coucou je suis un shortcode </p>');
}

function contenu_par_defaut(){
    return "Template par defaut
    Titre 1

    Titre 2
    contenu";
}
?>