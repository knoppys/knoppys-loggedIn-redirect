<?php
/*
Plugin Name:       Knoppys LoggedIn Redirect
Plugin URI:        https://github.com/knoppys/LoggedIn Redirect
Description:       This plugin will redirect logged in users of a certain user role to a page you stipulate. I havent had a chance to add some WP Options for the user role name and the page to redirect to, but can always do this at a later date. To set these, look me up on Facebook or email me at coda@knoppys.co.uk. If you check out the readme file on github, it will show you which lines you need to edit to set these values. 
Version:           1
Author:            Knoppys Digital Limited
License:           GNU General Public License v2
License URI:       http://www.gnu.org/licenses/gpl-2.0.html
GitHub Plugin URI: https://github.com/knoppys/
GitHub Branch:     master
*/

define( 'PLUGIN_VERSION', '1' );
define( 'PLUGIN__MINIMUM_WP_VERSION', '1.0' );
define( 'PLUGIN__PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'PLUGIN__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

/***************************
*Load Native & Custom wordpress functionality plugin files. 
****************************/

//Plugin file that runs the redirect function. 
include( plugin_dir_path( __FILE__ ) . 'redirect_function.php');