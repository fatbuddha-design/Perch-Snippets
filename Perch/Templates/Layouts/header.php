<?php
$contactDetails = perch_content_custom('Company Details', array(
'skip-template'=> true,
'page' => '/company_details.php'
));
?>

<header role="banner">
   <div data-aos="fade" data-aos-delay="100" data-aos-offset="100" data-aos-easing="ease-in-sine" data-aos-duration="2000">
      <img src="../../assets/img/we_logo_small.png" width="70" height="70" alt="wilki engineering logo">
  </div>
  <div data-aos="fade" data-aos-delay="300" data-aos-offset="100" data-aos-easing="ease-in-sine" data-aos-duration="2000">
    <h1>W<span class="small_letter">ilki</span> E<span class="small_letter">ngineering</span></h1>
  </div>
  <div data-aos="fade" data-aos-delay="500" data-aos-offset="100" data-aos-easing="ease-in-sine" data-aos-duration="2000">
    <ul class="vcard address">
      <li class="tel"><a title="Phone <?php echo $contactDetails[0]['company_name']; ?>" href="tel:<?php echo $contactDetails[0]['spaceless_phone']; ?>" aria-label="Phone <?php echo $contactDetails[0]['company_name']; ?>"><svg class="icon"><use xlink:href="../../assets/svg/regular.svg#phone"></use></svg><?php echo $contactDetails[0]['phone']; ?></a></li>
      <li><svg class="icon"><use xlink:href="../../assets/svg/regular.svg#envelope-o"></use></svg><script>document.write('<a href="mailto:' + first + '@' + last + '">' + first + '@' + last + '<\/a>');</script></li>
    </ul>
  </div>
</header>
