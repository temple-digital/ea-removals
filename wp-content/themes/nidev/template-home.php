<?php
/* Template Name: Template Home */

get_header();



?>

<?php

if( have_rows('layouts') ):

    while ( have_rows('layouts') ) : the_row();

?>

<?php if( get_row_layout() == 'hero' ):
    $background_image = get_sub_field('background_image');
    $text = get_sub_field('text');
    $section_id = get_sub_field('id');
?>

<section class="section section--hero align--left active" <?php echo($section_id) ? 'id="' . $section_id . '"' : '' ; ?>>
    <div class="container">
        <div class="image full-bleed bg--cover" style="background-image: url('<?php echo $background_image['url']; ?>');"></div>
    </div>
</section>
<?php endif; ?>

<?php
    if( get_row_layout() == 'services' ):
        $padding = get_sub_field('padding');
        $services = get_sub_field('content');
        $section_id = get_sub_field('id');
?>
<section class="section section--services <?php echo ($padding) ? $padding : 'no-top-padding'; ?> bg--white" <?php echo($section_id) ? 'id="' . $section_id . '"' : '' ; ?>>
        <div class="container">
            <div class="col-wrapper clearfix">

            <?php foreach( $services as $service ):
                $image = $service['background_image']['sizes']['square640'];
                $title = $service['text'];
                $link = $service['link'];
                ?>
                <div class="service-item col--25">
                    <div class="image-wrapper">
                        <div class="image bg--cover" style="background-image: url('<?php echo $image; ?>');">
                        </div>
                        <div class="text">
                            <h2><?php echo $title; ?></h2>
                            <?php /* echo(!$link) ? '<a class="btn btn--primary" href="' . $link . '">Read More</a>' : ''; */?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>
<?php endif; ?>

<?php
    if( get_row_layout() == 'featured_posts' ):
        $padding = get_sub_field('padding');
        $posts = get_sub_field('posts');
        $section_id = get_sub_field('id');

        // wp_enqueue_script( 'owlcarousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '1.0', TRUE );
?>

        <section class="section section--featured-posts <?php echo ($padding) ? $padding : 'no-top-padding'; ?> bg--white" <?php echo($section_id) ? 'id="' . $section_id . '"' : '' ; ?>>
            <div class="container">
                <div class="col-wrapper clearfix">
                    <div class="owl-carousel">

                        <?php foreach( $posts as $p ):
                            $link = get_permalink( $p->ID );
                            $image = get_the_post_thumbnail_url( $p->ID, 'full-bleed');
                            $logo_type = get_field('logo_type', $p->ID);
                            $logo_svg = get_field('logo_svg', $p->ID);
                            $logo_png = get_field('logo_png', $p->ID);
                            ?>
                                <div class="portfolio-item col--33">
                                <a href="<?php echo $link ?>">
                                    <div class="image-wrapper">
                                        <div class="image bg--cover" style="background-image: url('<?php echo $image; ?>');">
                                        </div>
                                        <div class="logo">
                                            <?php
                                            if($logo_svg) :
                                                echo $logo_svg;
                                            else :
                                                echo '<img src="' . $logo_png['url'] . '" />';
                                            endif;
                                            ?>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>

<?php
    if( get_row_layout() == 'content_block' ):
        $content = get_sub_field('content');
        $css_class = get_sub_field('css_class');
        $section_id = get_sub_field('id');
?>

<section class="section section--content-block section--content-block-image" <?php echo($section_id) ? 'id="' . $section_id . '"' : '' ; ?>>
    <div class="container">
        <?php foreach ($content as $c) : 
            $background_image = $c['background_image']['sizes']['square640'];
            $text = $c['text'];
        ?>
        <div class="flex-wrapper">
            <div class="col--50">
                <div class="image bg--cover" style="background-image: url('<?php echo $background_image; ?>');" <?php echo($section_id) ? $section_id  : '' ; ?>>
                </div>
            </div>
            <div class="col--50">
                <div class="text">
                    <?php echo $text; ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<?php endif; ?>

<?php
    if( get_row_layout() == 'content_block_text' ):
        $content = get_sub_field('content');
        $css_class = get_sub_field('css_class');
        $section_id = get_sub_field('id');
?>

<section class="section section--content-block" <?php echo($section_id) ? 'id="' . $section_id . '"' : '' ; ?>>
    <div class="container">
        <?php foreach ($content as $c) : 
            $title = $c['title'];
            $text = $c['text'];
        ?>
        <div class="col-wrapper clearfix">
            <div class="col--50">
            <div class="text">
                    <h2><?php echo $title; ?></h2>
                </div>
            </div>
            <div class="col--50">
                <div class="text">
                    <?php echo $text; ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<?php endif; ?>

<?php 

if( get_row_layout() == 'recent_posts' ):
    $css_class = get_sub_field('css_class');
    $section_id = get_sub_field('id');

$args = array(
	'posts_per_page' => 4
);
$post_items = new WP_Query( $args );

?>
<section class="section section--recent-posts bg--grey" <?php echo($section_id) ? 'id="' . $section_id . '"' : '' ; ?>>
    <div class="container">
        <div class="col-wrapper clearfix">
            <div class="col--100 align--right">
                <h2>Our Blog</h2>
            </div>
        </div>

        <div class="col-wrapper clearfix">
        <?php while ( $post_items->have_posts() ) :
					$post_items->the_post();
					$title = wp_trim_words( get_the_title(), 5, '...' );
					$link = get_the_permalink();
					$image = get_the_post_thumbnail_url( NULL, 'rectangle1200');
					$col_items[] = array('image' => $image);
                ?>
                <div class="col--25">
                <?php echo($link) ? '<a class="link--block link--inherit" href="' . $link . '">' : ''; ?>
                    <div class="image-wrapper">
                        <div class="image bg--cover" style="background-image: url('<?php echo $image; ?>');">
                        </div>
                        <div class="text">
                            <h3><?php echo $title; ?></h3>
                            <?php /* echo($link) ? '<span class="btn btn--primary">Read More</span>' : ''; */?>
                        </div>
                    </div>
                    <?php echo($link) ? '</a>' : ''; ?>
                </div>
        <?php endwhile;
            wp_reset_query();
        ?>
        </div>
    </div>
</section>

<?php endif; ?>

<?php
    if( get_row_layout() == 'testimonials' ):
        $padding = get_sub_field('padding');
        $testimonials = get_sub_field('content');
        $section_id = get_sub_field('id');

       if ($testimonials && count($testimonials) > 1) {
            wp_enqueue_script( 'royalslider', get_template_directory_uri() . '/js/royalslider.min.js', array(), '1.0', TRUE );
       }

?>
<section class="section section--testimonials <?php echo ($padding) ? $padding : ''; ?> bg--grey" <?php echo($section_id) ? 'id="' . $section_id . '"' : '' ; ?>>
    <div class="container container--small">
        <div class="flex-wrapper">

            <div class="col--33">
                <img src="<?php echo bloginfo('template_url'); ?>/images/google-reviews.png" />
            </div>
            
            <div class="col--66 testimonial-slider"<?php echo ($testimonials && count($testimonials) > 1) ? ' data-js-var="' . $js_var . '"': ''; ?>>

            <?php foreach( $testimonials as $testimonial ):
                $name = $testimonial['name'];
                $quote = $testimonial['quote'];
                ?>
                <div class="testimonial">
                    <div class="text align--left">
                        <?php echo $quote; ?>
                        <h3><?php echo $name; ?></h3>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>


<!-- // END Flex Grid // -->


<?php

    endwhile;

endif;
?>


<?php
get_footer();
