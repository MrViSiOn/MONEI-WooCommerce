<?php
/**
 * Functions related to MONEI core.
 *
 * @author   Manuel Rodriguez
 * @category Core
 * @package  Woocommerce_Gateway_Monei/Functions
 * @version  5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * A positive integer representing how much to charge in the smallest currency unit (e.g., 100 cents to charge 1.00 USD).
 * @param float $amount
 *
 * @return int
 */
function monei_price_format( $amount ) {
	return (int) (string) ( (float) preg_replace( '/[^0-9.]/', '', $amount ) * 100 );
}

/**
 * @param false|string $key
 * @param string $option_key
 *
 * @return false|string|array
 */
function monei_get_settings( $key = false, $option_key = 'woocommerce_monei_settings' ) {
	if ( ! $key ) {
		return get_option( $option_key );
	}

	$settings = get_option( $option_key );
	return $settings[ $key ];
}

/**
 * Check if a $monei_token is already saved into Woo Token DB.
 * @param string $monei_token
 * @param string $gateway_id
 *
 * @return bool
 */
function monei_token_exits( $monei_token, $gateway_id ) {
	$tokens = WC_Payment_Tokens::get_customer_tokens( get_current_user_id(), $gateway_id );
	foreach ( $tokens as $token ) {
		if ( $monei_token === $token->get_token() ) {
			return true;
		}
	}
	return false;
}

