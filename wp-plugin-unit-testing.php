<?php if ( ! defined( 'ABSPATH' ) ) exit;

/*
 * Plugin Name: Plugin Unit Testing
 */

function my_xor( $a, $b ){
    if( $a && $b ) return false;
    if( $a || $b ) return true;
    if( ! $a && ! $b ) return false;
}