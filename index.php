<?php
 
/**
 * Conversion Tracking Tool
 *
 * @link              https://marvinpoo.dev
 * @since             1.0.0
 * @package           Ctt
 *
 * @wordpress-plugin
 * Plugin Name:       CTT – Conversion Tracking Tool
 * Plugin URI:        https://red-eagle-berlin.de/
 * Description:       Das Conversion Tracking Tool von RED Eagle.
 * Version:           1.0.0
 * Author:            Marvin Borisch
 * Author URI:        https://marvinpoo.dev
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ctt
 * Domain Path:       /languages
 */

/** Globale Plugin-Variablen **/
$ctt_dir = WP_PLUGIN_DIR . '/ctt';
 
/** Registrieren der Gruppen **/
function redeagle_ctt_groups() {

    register_taxonomy(
        'Zielgruppe',
        array( 'page', 'post', 'review' ),
        array(
            'label' => __( '፨ Zielgruppe' ),
            'rewrite' => array( 'slug' => 'ctt-zielgruppe' ),
            'hierarchical' => true,
            'show_in_rest' => true,
        )
    );
    register_taxonomy(
        'Leistung',
        array( 'page', 'post', 'review' ),
        array(
            'label' => __( '፨ Leistung' ),
            'rewrite' => array( 'slug' => 'ctt-leistung' ),
            'hierarchical' => true,
            'show_in_rest' => true,
        )
    );
}
add_action( 'init', 'redeagle_ctt_groups' );


/** Admin-Styles **/
// Style
add_action('admin_head', 'mdo_custom_menu');
function mdo_custom_menu() {
   echo '
   <style type="text/css">
    #Zielgruppediv .postbox-header {
        background-color: #EC1D46;
        border: 0;
    }
    #Zielgruppediv .postbox-header h2, #Zielgruppediv .handle-order-higher, #Zielgruppediv .handle-order-lower, #Zielgruppediv .handlediv .toggle-indicator {
        color: #fff;
    }
    #Leistungdiv .postbox-header {
        background-color: #EC1D46;
        border: 0;
    }
    #Leistungdiv .postbox-header h2, #Leistungdiv .handle-order-higher, #Leistungdiv .handle-order-lower, #Leistungdiv .handlediv .toggle-indicator {
        color: #fff;
    }
   </style>
   ';
 }