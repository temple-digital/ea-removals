<?php 
	$address = get_field('address', 'option');
	$telephone = get_field('telephone', 'option');
    $email = get_field('email', 'option');
    $name = get_field('name', 'option');
    $role = get_field('role', 'option');

    $facebook = get_field('facebook', 'option');
    $messenger = get_field('facebook_messenger', 'option');
?>

<div class="contact-details">
    <ul>
        <li><?php echo $name; ?></li>
        <li><?php echo $role; ?></li>
    </ul>
    
    <ul>
        <li><span>T: </span><a href="tel:<?php echo $telephone; ?>"><?php echo $telephone; ?></a></li>
        <li><span>E: </span><a href="mailto:<?php echo $email; ?>?subject=Removal enquiry from Website><?php echo $email; ?></a></li>
    </ul>

    <ul>
        <li><span>FB: </span><a href="https://<?php echo $messenger; ?>" target="_blank">Facebook Messenger</a></li>
    </ul>
</div>