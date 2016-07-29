<?php
/**
 * Exchange Redirect User
 *
 * @link    https://github.com/retrorism/exchange-redirect-user
 * @package Exchange Redirect User
 * @version 0.1.0
 *
 * Plugin Name: Exchange Redirect User
 * Plugin URI:  https://github.com/retrorism/exchange-redirect-user
 * Description: This plugin allows you to redirect users with one-page-access to a single page.
 * Author:      Willem Prins
 * Version:     0.1.0
 * Author URI:  http://www.somtijds.nl
 **/

 function exchange_redirect_user() {
	$user = wp_get_current_user();
	$submit = 1871;
    if ( ! is_page( $submit ) && is_user_logged_in() && $user->ID == 4  ) {
        wp_redirect( get_post_permalink( $submit ) );
        exit();
    }
}
add_action( 'template_redirect', 'exchange_redirect_user' );
