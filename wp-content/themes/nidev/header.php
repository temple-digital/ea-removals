<?php
$tel = get_field('tel', 'option');
$facebook = get_field('tel', 'facebook_link');
$instagram = get_field('tel', 'instagram_link');
$twitter = get_field('tel', 'twitter_link');
?>
<!DOCTYPE html>

<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="robots" content="noindex">

    <title><?php wp_title(''); ?></title>

    <link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,900i&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
    <script type="text/javascript">
        var site_url = '<?php echo bloginfo('url'); ?>';
        var theme_url = '<?php echo bloginfo('template_url'); ?>';
    </script>

</head>
<body <?php body_class(); ?>>

<!-- Site Wrapper -->
<main class="site-wrapper">

<!-- Header -->
<header class="header">
      <div class="container">
        <div class="content">

          <a class="logo" href="/">
            <img src="<?php echo bloginfo('template_url'); ?>/images/logo.png">
          </a>

          <nav class="header-nav">
            <div class="menu clearfix">
              <ul id="menu-menu-1" class="menu">
                <li class="menu-item"><a href="#overview" class="">Overview</a></li>
                <li class="menu-item"><a href="#services" class="">Services</a></li>
                <li class="menu-item"><a href="#testimonials" class="">Testimonials</a></li>
                <li class="menu-item"><a href="/contact" class="call-tracking">Contact</a></li>
              </ul>
            </div>
          </nav>

          <button class="nav-toggle">
            <span></span>
            <span></span>
            <span></span>
          </button>

        </div>
      </div>
    </header>
