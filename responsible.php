<?php
/*	
Plugin Name: Responsible
Plugin URI: https://github.com/cftp/responsible
Description: Viewport resizing comes to the WordPress admin bar
Version: 1.1
Author: Code For The People
Author URI: http://codeforthepeople.com
Text Domain: responsible
Domain Path: /assets/languages/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Copyright © 2013 Code for the People ltd

                _____________
               /      ____   \
         _____/       \   \   \
        /\    \        \___\   \
       /  \    \                \
      /   /    /          _______\
     /   /    /          \       /
    /   /    /            \     /
    \   \    \ _____    ___\   /
     \   \    /\    \  /       \
      \   \  /  \____\/    _____\
       \   \/        /    /    / \
        \           /____/    /___\
         \                        /
          \______________________/
          

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

*/

class responsible {

	/**
	 * responsible
	 * 
	 * @return void
	 * @author Scott Evans
	 */
	function responsible() {
		add_action( 'admin_bar_menu', array( $this, "responsible_menu" ), 100);
		add_action( 'wp_enqueue_scripts', array( $this, "responsible_css" ) );
		add_action( 'admin_enqueue_scripts', array( $this, "responsible_css" ) );
	}

	/**
	 * responsible_css
	 *
	 * Enqueue the required CSS for icons etc
	 * 
	 * @return void
	 */
	function responsible_css() {
		if ( ! is_admin_bar_showing() ) return;
		wp_enqueue_style( 'responsible', plugin_dir_url( __FILE__ ).'assets/css/responsible.css', array( 'dashicons' ), '1.0' );
	}

	/**
	 * add_root_menu
	 *
	 * Add new global menu
	 *
	 * $name String
	 * $id String
	 * $href Bool/String
	 * $priority int
	 *
	 * @return void
	 * @author Scott Evans
	 */
	function add_root_menu($name, $id, $href = FALSE) {
		
		global $wp_admin_bar;

		if ( !is_admin_bar_showing() )
			return;

		$wp_admin_bar->add_menu( array(
			'id'   => $id,
			'meta' => array(),
			'title' => $name,
			'href' => $href
		) );
	}

	/**
	 * Add new submenu where additional $meta specifies class, id, target or onclick parameters
	 *
	 * $name String
	 * $link String
	 * $root_menu String
	 * $id String
	 * $meta Array
	 *
	 * @return void
	 * @author Scott Evans
	 */
	function add_sub_menu($name, $link, $root_menu, $id, $meta = FALSE) {
		
		global $wp_admin_bar;
		
		if ( ! is_admin_bar_showing() )
			return;

		$wp_admin_bar->add_menu( array(
			'parent' => $root_menu,
			'id' => $id,
			'title' => $name,
			'href' => $link,
			'meta' => $meta
		) );
	}

	function responsible_menu() {
		$this->add_root_menu( '<a class="tablet-icon" href=" ' . $this->bookmarklet() .' "></a>', 'responsible') ;
	}

	/**
	 * bookmarklet
	 *
	 * Return bookmarklet code. Provided by http://lab.maltewassermann.com/viewport-resizer/
	 * 
	 * @return string
	 */
	function bookmarklet() {
		return apply_filters( 'responsible_bookmarklet', "javascript:void((function(d){if(self!=top||d.getElementById('toolbar')&&d.getElementById('toolbar').getAttribute('data-resizer'))return false;d.write('<!DOCTYPE HTML><html style=&quot;opacity:0;&quot;><head><meta charset=&quot;utf-8&quot;/></head><body><a data-viewport=&quot;320x480&quot; data-icon=&quot;mobile&quot;>Mobile (e.g. Apple iPhone)</a><a data-viewport=&quot;320x568&quot; data-icon=&quot;mobile&quot; data-version=&quot;5&quot;>Apple iPhone 5</a><a data-viewport=&quot;600x800&quot; data-icon=&quot;small-tablet&quot;>Small Tablet</a><a data-viewport=&quot;768x1024&quot; data-icon=&quot;tablet&quot;>Tablet (e.g. Apple iPad 2-3rd, mini)</a><a data-viewport=&quot;1280x800&quot; data-icon=&quot;notebook&quot;>Widescreen</a><a data-viewport=&quot;1920×1080&quot; data-icon=&quot;tv&quot;>HDTV 1080p</a><script src=&quot;http://lab.maltewassermann.com/viewport-resizer/resizer.min.js&quot;></script></body></html>')})(document));" );
	}
}

/**
 * responsible_init
 *
 * Boot the plugin
 *
 * @return void
 * @author Scott Evans
 */
function responsible_init() {

	load_plugin_textdomain('responsible', false, dirname( plugin_basename(__FILE__) ) . '/assets/languages/');

	global $responsible;
	$responsible = new responsible();
}
add_action( "init", "responsible_init" );
