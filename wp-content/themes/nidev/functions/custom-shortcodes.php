<?php

// Button
function button_shortcode($atts) {
    extract(shortcode_atts(array(
        'link' => '#',
        'text' => 'Find out more',
        'class' => 'primary',
        'target' => '_self'
    ), $atts));

    $return = '<a class="btn btn--'.$class.'" href="'.$link.'" target="'.$target.'">'.$text.'</a>';

    return $return;
}
add_shortcode('button', 'button_shortcode');

?>