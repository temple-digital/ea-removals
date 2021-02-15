<?php 
	$telephone = get_field('telephone', 'option');
    $email = get_field('email', 'option');
    $messenger = get_field('facebook_messenger', 'option');
?>
  
  
    <footer class="footer">
        <div class="top">
            <div class="container">
                <div class="col-wrapper clearfix">

                    <div class="col--50 align-center">
                        <nav class="footer-nav">
                            <ul class="footer-menu">
                                <h3>Quick Links</h3>
                                <li class="menu-item"><a href="#overview" class="">Overview</a></li>
                                <li class="menu-item"><a href="#services" class="">Services</a></li>
                                <li class="menu-item"><a href="#our-commitment" class="">Our Commitment</a></li>
                                <li class="menu-item"><a href="#contact">Contact</a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="col--50 align-center">
                        <h3>Get In Touch</h3>
                        <p><span>T: </span><a href="tel:<?php echo $telephone; ?>"><?php echo $telephone; ?></a></p>
                        <p><span>E: </span><a href="mailto:<?php echo $email; ?>?subject=Removal enquiry from Website""><?php echo $email; ?></a></p>
                        <p><span>FB: </span><a href="<?php echo $messenger; ?>" target="_blank">Facebook Messenger</a></p>
                        <p><a href="/privacy-policy">Privacy Policy</a></p>
                    </div>

                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <p>©<?php echo date("Y"); ?> East Antrim Removals | Site by Lewis Alexander.</p>
            </div>
        </div>
    </footer>

</main>
<!--/ End of Page Wrapper -->

<!-- Blocker -->
<div class="blocker"></div>

<?php wp_footer(); ?>

</body>
</html>
