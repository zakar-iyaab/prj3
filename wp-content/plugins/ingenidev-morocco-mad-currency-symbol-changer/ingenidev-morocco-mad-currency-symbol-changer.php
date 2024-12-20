<?php

/**
 * Plugin Name: ingenidev, Morocco - MAD Currency Symbol Changer
 * Plugin URI: https://ingenidev.com/morocco-mad-currency-symbol-changer-for-woocommerce/
 * Author: ingenidev
 * Author URI: https://ingenidev.com
 * Description: By default, WooCommerce uses the currency symbol for the Moroccan Dirham (MAD) as "د.م". This ingenidev plugin changes it to "MAD".
 * Version: 1.0.1
 * Requires Plugins: woocommerce
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */
defined('ABSPATH') or die('Direct access not permitted');

add_filter('woocommerce_currency_symbol', 'ingenidev_morcsc_change_mor_currency_symbol', 10, 2);

function ingenidev_morcsc_change_mor_currency_symbol($currency_symbol, $currency)
{
    switch ($currency) {
        case 'MAD':
            $currency_symbol = 'MAD';
            break;
    }
    return $currency_symbol;
}
