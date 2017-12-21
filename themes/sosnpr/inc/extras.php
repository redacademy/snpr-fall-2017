<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package sosnpr_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function sosnpr_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'sosnpr_body_classes' );


function alter_journal_posts( $query ){
	if ( $query->is_home() && $query->is_main_query() ){
		$query->set('posts_per_page', 5);
	}
}

add_action( 'pre_get_posts', 'alter_journal_posts');



function remove_empty_p( $content ){
	// clean up p tags around block elements
	$content = preg_replace( array(
		'#<p>\s*<(div|aside|section|article|header|footer)#',
		'#</(div|aside|section|article|header|footer)>\s*</p>#',
		'#</(div|aside|section|article|header|footer)>\s*<br ?/?>#',
		'#<(div|aside|section|article|header|footer)(.*?)>\s*</p>#',
		'#<p>\s*</(div|aside|section|article|header|footer)#',
	), array(
		'<$1',
		'</$1>',
		'</$1>',
		'<$1$2>',
		'</$1',
	), $content );
	return preg_replace('#<p>(\s|&nbsp;)*+(<br\s*/*>)*(\s|&nbsp;)*</p>#i', '', $content);
};
	add_filter( 'the_content', 'remove_empty_p', 20, 1 );

	//Hide the editor of themes as well as plugins
	add_action('admin_init','sosnpr_remove_editor',102);

	function sosnpr_remove_editor(){
		remove_submenu_page('themes.php', 'theme-editor.php');
		remove_submenu_page('plugins.php', 'plugin-editor.php');
	}