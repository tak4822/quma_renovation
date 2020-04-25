<?php

namespace App;

function colorTextFunc( $atts,  $content = null ) {
    extract(shortcode_atts(array( 'color'=>"gold"), $atts));
    $html = "<span class='color-text " . $color . "'>" . $content . "</span>";
    return $html;
}
add_shortcode('colorText', __NAMESPACE__ . '\\colorTextFunc');

function komidashiFunc( $atts,  $content = null ) {
    extract(shortcode_atts(array( 'color'=>"gold"), $atts));
    $html = "<span class='komidashi " . $color . "'>" . $content . "</span>";
    return $html;
}
add_shortcode('komidashi', __NAMESPACE__ . '\\komidashiFunc');
