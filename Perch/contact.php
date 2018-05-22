<?php include('perch/runtime.php'); ?>

<?php
$contactDetails = perch_content_custom('Company Details', array(
'skip-template'=> true,
'page' => '/company_details.php'
));
?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<?php perch_layout('head'); ?>


<?php perch_layout('header'); ?>


<?php perch_layout('nav'); ?>


<main id="content" class="content" role="main"><!-- main -->
	<h2>Contact <?php echo $contactDetails[0]['company_name']; ?></h2>
    <div class="contact">
    	<div class="one">
				<ul class="vcard address">
						<li class="fn org bold"><?php echo $contactDetails[0]['company_name']; ?></li>
						<li class="street address"><?php echo $contactDetails[0]['address_line_1']; ?></li>
						<li class="locality"><?php echo $contactDetails[0]['village']; ?></li>
						<li class="locality"><?php echo $contactDetails[0]['city']; ?></li>
						<li class="locality"><?php echo $contactDetails[0]['county']; ?></li>
						<li class="postal-code"><?php echo $contactDetails[0]['postcode']; ?></li>
						<li class="tel"><a title="Phone <?php echo $contactDetails[0]['company_name']; ?>" href="tel:<?php echo $contactDetails[0]['spaceless_mobile']; ?>" aria-label="Phone <?php echo $contactDetails[0]['company_name']; ?>"><svg class="icon"><use xlink:href="../../assets/svg/regular.svg#phone"></use></svg><?php echo $contactDetails[0]['mobile']; ?></a></li>
						<li><svg class="icon"><use xlink:href="../../assets/svg/regular.svg#envelope-o"></use></svg><script>document.write('<a href="mailto:' + first + '@' + last + '">' + first + '@' + last + '<\/a>');</script></li>
				</ul>
			</div>
    	<div class="two"><?php perch_content('Contact Form'); ?></div>
    </div>
</main><!-- main -->


<?php perch_layout('footer'); ?>
