<?php
/*
Plugin Name: Astra Scroll-to-Top Custom Style
Description: Overrides the Astra theme's scroll-to-top button colors and styles.
Version: 1.0
Author: Task Virtual Services
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

function astra_scroll_top_exact_css() {
    ?>
    <style type="text/css">
    /* Scroll-to-top button styling */
    #ast-scroll-top {
        background-color: #DB2B33 !important;
        /* orange */
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        line-height: 1 !important;
        padding: 0 !important;
        transition: all 0.3s ease !important;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        outline: none !important;
        /* fixes click glitter */
        border: none !important;
    }

    /* Arrow */
    #ast-scroll-top::before {
        font-size: 24px !important;
        line-height: 1 !important;
        color: #ffffff !important;
        transition: color 0.3s ease !important;
    }

    /* Hover animation */
    #ast-scroll-top:hover {
        background-color: #00000 !important;
        /* yellow */
        transform: scale(1.15);
        box-shadow: 0 6px 14px rgba(0, 0, 0, 0.25);
    }

    /* Arrow hover */
    #ast-scroll-top:hover::before {
        color: #fff !important;
    }
    </style>
    <?php
}
add_action( 'wp_head', 'astra_scroll_top_exact_css', 100 );