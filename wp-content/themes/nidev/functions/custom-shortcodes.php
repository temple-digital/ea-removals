<?php

// Contact details
function contact_shortcode() {
    ob_start();
    locate_template( 'inc/contact-details.php', true );
    return ob_get_clean();
  }
  add_shortcode('contact-details', 'contact_shortcode');

?>