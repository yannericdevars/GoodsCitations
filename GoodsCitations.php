<?php
/**
 * @package GoodsCitations
 */
/*
Plugin Name: GoodsCitations
Plugin URI: http://akismet.com/
Description: Les citations les meilleures proviennent d'hommes décédés ... Heureusement la relève est là
Version: 1.0
Author: yann-eric
License: GPLv2 or later
Text Domain: GoodsCitations
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
*/

// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

define( 'GOODS_CITATIONS', plugin_dir_path( __FILE__ ) );
require_once( GOODS_CITATIONS . 'GC_widget.php' );




