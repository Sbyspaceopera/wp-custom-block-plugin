<?php

/*
    Plugin Name: Are You Paying Attention Quiz
    Description: Give your reads a multiple choice question.
    Version: 1.0
    Author: SebDev
    Author URI: https://cv-gold.vercel.app/
 */

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class AreYouPayningAttention
{
    function __construct()
    {
        add_action('init', array($this, 'adminAssets'));
    }

    function adminAssets()
    {
        register_block_type(__DIR__, array(
            'render_callback' => array($this, 'theHTML')
        ));
    }

    function theHTML($attributes)
    {
        ob_start(); ?>
        <div class="paying-attention-update-me">
            <pre style="display: none;"><?php echo wp_json_encode($attributes) ?></div>
<?php return ob_get_clean();
    }
}

$areYouPayingAttention = new AreYouPayningAttention();
