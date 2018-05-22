<?php
$contactDetails = perch_content_custom('Company Details', array(
'skip-template'=> true,
'page' => '/company_details.php'
));
?>

<footer><!-- footer -->
    <div class="footer_blog">
      <h5>News From <?php echo $contactDetails[0]['company_name']; ?></h5>
        <div>
        <?php perch_blog_custom(array(
        'count'      => 6,
        'sort-order' => 'DESC',
        'sort'       => 'postDateTime',
        'template'   => 'post_in_footer.html'
        )); ?>
        </div>
      </div>
      <div>
        <hr>
        <?php perch_pages_navigation(array(
        'navgroup' =>'footer-one',
        'template' =>'footer_item',
        'hide-extensions' => true,
        'levels' => 2
        )); ?>
      </div>
      <div>
        <hr>
        <ul class="vcard address">
            <li class="fn org bold"><?php echo $contactDetails[0]['company_name']; ?></li>
            <li class="street address"><?php echo $contactDetails[0]['address_line_1']; ?></li>
            <perch:if exists="address_line_2"><li class="street address"><?php echo $contactDetails[0]['address_line_2']; ?></perch:if>
            <li class="locality"><?php echo $contactDetails[0]['village']; ?></li>
            <li class="locality"><?php echo $contactDetails[0]['city']; ?></li>
            <li class="locality"><?php echo $contactDetails[0]['county']; ?></li>
            <li class="postal-code"><?php echo $contactDetails[0]['postcode']; ?></li>
            <li class="tel"><a title="Phone <?php echo $contactDetails[0]['company_name']; ?>" href="tel:<?php echo $contactDetails[0]['spaceless_phone']; ?>" aria-label="Phone <?php echo $contactDetails[0]['company_name']; ?>"><svg class="icon"><use xlink:href="../../assets/svg/regular.svg#phone"></use></svg><?php echo $contactDetails[0]['phone']; ?></a></li>
            <li><svg class="icon"><use xlink:href="../../assets/svg/regular.svg#envelope-o"></use></svg><script>document.write('<a href="mailto:' + first + '@' + last + '">' + first + '@' + last + '<\/a>');</script></li>
        </ul>
      </div>
</footer><!-- /footer -->


<section class="copyright"><!-- copyright -->
  <ul>
    <li class="vcard" itemscope itemtype="http://schema.org/Organization">Copyright <svg class="icon"><use xlink:href="../../assets/svg/regular.svg#copyright"></use></svg>
      <script>
        document.write(new Date().getFullYear())
      </script><span class="fn org" itemprop="name"><span class="tel hide">xxxx</span><span class="adr hide">xxxx</span><img class="photo hide" src="../../assets/img/xxx.jpg" width="286" height="286"
        alt="xxxx"></span> <?php echo $contactDetails[0]['company_name']; ?> - Website By <a href="xxxx" title="xxxx" aria-label="Fat Buddha Designs, Designers of this website">Fat Buddha Designs</a></li>
      </ul>
        <?php perch_pages_navigation(array(
        'navgroup' =>'copyright',
        'template' =>'footer_item',
        'hide-extensions' => true,
        'levels' => 2
        )); ?>
</section><!-- /copyright-->


<a href="#page-top" class="scrollup" aria-label="scroll to the top of this page" title="scroll to the top of this page"><svg class="icon"><use xlink:href="../../assets/svg/regular.svg#angle-up"></use></svg></a>

</div><!-- /wrapper -->
<?php  $JSversion = filemtime($_SERVER['DOCUMENT_ROOT'].'/assets/js/scripts.min.js'); ?>
<script src="/assets/js/scripts.min.<?php echo $JSversion ?>.js" defer="defer"></script>

<?php perch_content('Analytics'); ?>

<?php if(PERCH_PRODUCTION_MODE == 'PERCH_DEVELOPMENT'): ?>
<?php PerchUtil::output_debug(); ?>
<?php endif; ?>

</body>
</html>
