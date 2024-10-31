<?php
/*
Plugin Name: No Category Title
Version: 1.0
Description: A minimal and "ultra-light" plugin to remove "Category:" string form category title
Author: Francesco Vittori
Author URI: https://www.linkedin.com/in/francesco-v-31ba68150/ 
*/

function nct_no_category_title( $title ) {
if ( is_category() ) {
$title = single_cat_title( '', false );
}
return $title;
}
add_filter( 'get_the_archive_title', 'nct_no_category_title' );
?>
