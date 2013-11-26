<?php
/**
* Plugin Name: Credly Custom Badge Assertion Shortcode
* Plugin URI: http://www.badgeos.org/
* Description: For Credly Pro members: easily create a page on your site for displaying Credly "Custom Assertion Location". Just add [credly_assertion_page] to whichver page you'd like to use. Copy that page's URL and append "?CID={id}" to the end (e.g. http://yoursite.com/assertion/?CID={id}). Paste this full URL in the "Custom Assertion Location" field in your Credly Account Settings.
* Author: Credly
* Version: 1.0.0
* Author URI: https://credly.com/
* License: GNU AGPL
*/

/*
Copyright © 2012-2013 Credly, LLC

This program is free software: you can redistribute it and/or modify it
under the terms of the GNU Affero General Public License, version 3,
as published by the Free Software Foundation.

This program is distributed in the hope that it will be useful, but
WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY
or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU Affero General
Public License for more details.

You should have received a copy of the GNU Affero General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>;.
*/

/**
 * Shortcode for rendering Credly Assertion page content.
 *
 * @since  1.0.0
 *
 * @return` string iframe displaying Credly data, or nothing.
 */
function credly_assertion_page_shortcode( $atts = array() ) {
	global $content_width;

	// Setup defaults
	$defaults = array(
		'CID'    => isset( $_GET['CID'] ) ? absint( $_GET['CID'] ) : 0,
		'width'  => isset( $content_width ) ? $content_width : 560,
		'height' => 1000,
	);

	// Parse attributes against the defaults
	$atts = shortcode_atts( $defaults, $atts );

	// If passed an ID, render the iframe, otherwise render nothing
	if ( absint( $atts['CID'] ) )
		return '<iframe class="credly-assertion" src="http://credly.com/credit/' . absint( $atts['CID'] ) . '/embed" align="top" marginwidth="0" width="' . absint( $atts['width'] ) . 'px" height="' . absint( $atts['height'] ) . 'px" scrolling="no" frameborder="no"></iframe>';
	else
		return '';

}
add_shortcode( 'credly_assertion_page', 'credly_assertion_page_shortcode' );
